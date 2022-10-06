<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentData;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller{
    
    public function newStudent() {
        return view("new_student");
    }

    public function submitStudent(StoreStudentData $request) {

        $request->validated();
        print_r($request->all());
    }

    // public function listStudent() {
    //     $students = DB::table("students")->where("id", 4)->select(
    //         "name", "email as levél"
    //     )->get();

    //     echo "<pre>";
    //     print_r($students);
    // }

    // public function listStudent() {
    //     $students = DB::table("students")->select(
    //         "name as Név", "email as Levél"
    //     )->find(5);

    //     echo "<pre>";
    //     print_r($students);
    // }

    // public function listStudent() {
    //     $students = DB::table("students")->where("email", "like", "%example.com")->get();

    //     echo "<pre>";
    //     print_r($students);
    // }

    // public function listStudent() {
    //     $students = DB::table("students")->where("id", ">=", 5)->get();

    //     echo "<pre>";
    //     print_r($students);
    // }

    //SELECT * FROM students WHERE id = 4 AND name = "valaki" 

    // public function listStudent() {
    //     $students = DB::table("students")->where("id", 1)->where("name", "Cali Heller")->get();

    //     echo "<pre>";
    //     print_r($students);
    // }

    // public function listStudent() {
    //     $students = DB::table("students")->where("id", 1)
    //     ->where( function($query) {
        
    //         $query->where("name", "Cali Heller")->orwhere("email", "reinger.yvette@example.com");
    //     })->get();

    //     echo "<pre>";
    //     print_r($students);
    // }

        public function listStudent() {
        $students = DB::table("students")->whereBetween("id", [2, 8])->get();

        echo "<pre>";
        print_r($students);
    }

    // public function completStudent() {
    //     $students = DB::table("students")
    //         ->join("courses", "students.id", "=", "courses.studentId")->get();
    //      echo "<pre>";
    //     print_r($students);
    // }

    // public function completStudent() {
    //     $students = DB::table("students")
    //         ->select("students.name as Név", "courses.course as Képzés")
    //         ->join("courses", "students.id", "=", "courses.studentId")->get();
    //     echo "<pre>";
    //     print_r($students);
    // }

    public function completStudent() {
        $students = DB::table("students")
            ->select("students.name as Név", "courses.course as Képzés")
            ->leftjoin("courses", "students.id", "=", "courses.studentId")->get();
        echo "<pre>";
        print_r($students);
    }
}

        // $request->validate([
        //     "name" => "required|min:4|max:20",
        //     "email" => "required",
        //     "phone" => "required|digits_between:9,11"
        // ],[
        //     "name.required" => "Név kitöltés kötelező!",
        //     "email.required" => "Email kitöltés kötelező!",
        //     "phone.required" => "Telefon kitöltés kötelező!",
        // ]);