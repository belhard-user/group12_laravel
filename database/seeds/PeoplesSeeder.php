<?php

use Illuminate\Database\Seeder;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \DB::table('peoples')->truncate();

        $data = [];

        for($i = 0; $i < 100; $i++){
            array_push($data, [
                'name' => $faker->name,
                'created_at' => $faker->dateTimeBetween(),
                'updated_at' => $faker->dateTimeBetween('-10 years'),
            ]);
        }
        
        \DB::table('peoples')->insert($data);
    }
}
