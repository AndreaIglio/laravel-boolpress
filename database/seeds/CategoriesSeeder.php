<?php

use Faker\Generator as Faker;

use App\Categories;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 5; $i++) { 
           
            $newCategory = new Categories();
            $newCategory->name = $faker->word();
            $newCategory->over18 = $faker->boolean();


            $newCategory->save();


        }

    }
}
