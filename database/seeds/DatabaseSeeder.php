<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 100) as $index)
        {
              DB::table('staff')->insert([
                  'name'=>$faker->name,
                  'email'=>$faker->email,
                  'phone'=>$faker->phoneNumber
              ]);
        };
        // $this->call(UserSeeder::class);
    }
}
