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


        DB::table("students")->insert([
            "name" =>"Boli",
            "phone" => "064043629",
            "age" => 21
        ]);
    }
}
