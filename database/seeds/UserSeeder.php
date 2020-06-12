<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert  ( 
            [
                "username"=>"user",
                "password"=>Hash::make('user'),
                "role"=>"user"
            ]
        );
    }
}
