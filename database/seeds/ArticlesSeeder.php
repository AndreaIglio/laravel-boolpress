<?php

use Faker\Generator as Faker;

use App\Articles;

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            
            $newArticle = new Articles();
            $newArticle->title = $faker->sentence();
            $newArticle->content = $faker->text();
            $newArticle->author = $faker->name();
            $newArticle->save();

        }



    }
}
