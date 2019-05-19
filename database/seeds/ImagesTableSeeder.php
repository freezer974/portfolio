<?php

use Carbon\Carbon;
use Faker\Factory as Faker;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        $lists = [];

        Storage::delete(Storage::files('images'));
        $this->command->info('Suppression des images dans le dossier <fg=red>images</>');

        Storage::delete(Storage::files('thumbs'));
        $this->command->info('Suppression des images dans le dossier <fg=red>thumbs</>');

        
        for ($i = 0; $i < 20; $i++) {
            $image = new Image;
            $image->category_id = $faker->numberBetween($min = 1, $max = 3);
            $image->user_id = $faker->numberBetween($min = 1, $max = 3);
            $image->name = $faker->image('public/images',400,300, null, false);
            $image->title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $image->url = $faker->url;
            $image->description = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $image->adult = $faker->numberBetween($min = 0, $max = 1);
            $image->clicks = $faker->randomDigit;
            $image->save();
            $count = count($lists)+1;
            $this->command->info('Creation de l\'image : <fg=white>'. $image->name . '</> <fg=yellow>(' . $count . '/20)</>');
            array_push($lists, $image->name);
        }

        foreach($lists as $list)
        {
            if (\File::copy('public/images/'.$list , 'public/thumbs/'.$list)) {
                $this->command->info('Copie de l\'image : <fg=white>'. $image->name . '</>');
            }
        }
    }
}
