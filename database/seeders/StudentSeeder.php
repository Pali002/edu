<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $faker = \Faker\Factory::create();

        DB::table("students")->insert([
            "name" => $faker->name,
            "email" => $faker->email,
            "phone" => $faker->phoneNumber,
            "age" => $faker->numberBetween(25, 40),
            "gender" => $faker->randomElement([
                "férfi",
                "nő",
                "egyéb"
            ]),
            "address" => $faker->address
        ]);
    }
}
