<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class BookSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){

        
        DB::table("books")->insert([
        "title"=>$faker->name, 
        "author"=>$faker->name,
        "price"=>25000,
        "release_year"=>$faker->numberBetween(2000,2020)
        ]);
    }
}
}