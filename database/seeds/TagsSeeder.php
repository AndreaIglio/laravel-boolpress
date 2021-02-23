<?php

use Faker\Generator as Faker;


use Illuminate\Database\Seeder;

use App\Tags;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

            $newTag = new Tags();
            $newTag->shares = $faker->randomNumber(6, false);
            $newTag->views = $faker->randomNumber(6, false);
            $newTag->arguments = $faker->word();

            $newTag->save();
        }

    }
}
