<?php

namespace App\Repositories;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Http\Request;

class ImageRepository
{
    public function store(Request $request)
    {
        // Save image
        $path = basename($request->image->store('images'));
        // Save thumb
        $thumb = InterventionImage::make($request->image)->widen(500)->encode();
        Storage::put('thumbs/' . $path, $thumb);
        // Save in base
        $image = new Image;
        $image->description = $request->description;
        $image->title = $request->title;
        $image->url = $request->url;
        $image->category_id = $request->category_id;
        $image->adult = isset($request->adult);
        $image->name = $path;
        $image->published_at = $request->published_at;
        $request->user()->images()->save($image);
    }
    
    public function update(Request $request, Image $image)
    {
        $image->description = $request->description;
        $image->title = $request->title;
        $image->url = $request->url;
        $image->published_at = $request->published_at;

        if ($request->hasFile('image')) {
            $oldFilename =  $image->name;
           // Save image
            $path = basename($request->image->store('images'));
            // Save thumb
            $thumb = InterventionImage::make($request->image)->widen(500)->encode();
            Storage::put('thumbs/' . $path, $thumb);
            // Save in base
            $image->name = $path;
            Storage::delete(['images/' . $oldFilename, 'thumbs/' . $oldFilename]);
        }
        
        // garder le même utilisateur même si c'est l'admin
        $request->user()->images()->save($image);
    }

    public function getAllImages()
    {
        return $this->paginateAndRate(Image::latestWithUser());
    }

    public function getImagesForCategory($slug, $ajax = null)
    {
        $query = Image::latestWithUser()->whereHas('category', function($query) use($slug) {
            $query->whereSlug($slug);
        });
        if ($ajax) {
            return $this->setRating($query->limit(config('app.pagination'))->orderBy('published_at', 'DESC')->get());
        }
        return $this->paginateAndRate($query);
    }

    public function getImagesForUser($id)
    {
        $query = Image::latestWithUser()->whereHas('user', function($query) use($id) {
            $query->whereId($id);
        });
        return $this->paginateAndRate($query);
    }

    public function isNotInAlbum($image, $album)
    {
        return $image->albums()->where('albums.id', $album->id)->doesntExist();
    }

    public function getImagesForAlbum($slug)
    {
        $query = Image::latestWithUser()->whereHas('albums', function($query) use($slug) {
            $query->whereSlug($slug);
        });
        return $this->paginateAndRate($query);
    }

    public function getOrphans()
    {
        return collect(Storage::files('images'))->transform(function($item) {
            return basename($item);
        })->diff(Image::select('name')->pluck('name'));
    }

    public function destroyOrphans()
    {
        $orphans = $this->getOrphans();
        foreach($orphans as $orphan) {
            Storage::delete([
                'images/' . $orphan,
                'thumbs/' . $orphan,
            ]);
        }
    }

    public function rateImage($user, $image, $value)
    {
        $rate = $image->users()->where('users.id', $user->id)->pluck('rating')->first();
        if($rate) {
            if($rate !== $value) {
                $image->users()->updateExistingPivot($user->id, ['rating' => $value]);
            }
        } else {
            $image->users()->attach($user->id, ['rating' => $value]);
        }
        return $rate;
    }

    public function isOwner($user, $image)
    {
        return $image->user()->where('users.id', $user->id)->exists();
    }

    public function paginateAndRate($query)
    {
        $images = $query->paginate(config('app.pagination'));
        return $this->setRating($images);
    }

    public function setRating($images)
    {
        $images->transform(function($image) {
            $this->setImageRate($image);
            return $image;
        });
        return $images;
    }

    public function setImageRate($image)
    {
        $number = $image->users->count();
        $image->rate = $number ? $image->users->pluck('pivot.rating')->sum() / $number : 0;
    }
}
