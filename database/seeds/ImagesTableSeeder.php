<?php

use Illuminate\Database\Seeder;
use App\Models\Image;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++) {
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
        }
    }
}
