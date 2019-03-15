<?php

namespace App\Models;

use App\Events\NameSaving;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $dispatchesEvents = [
        'saving' => NameSaving::class,
    ];

    /**
     * Get the images.
     */
    public function images()
    {
        return $this->hasMany (Image::class);
    }

    protected $fillable = [
        'name', 'slug',
    ];
}
