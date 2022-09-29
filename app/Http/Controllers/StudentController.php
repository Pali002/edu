<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentData;

class StudentController extends Controller{
    
    public function newStudent() {
        return view("new_student");
    }

    public function submitStudent(StoreStudentData $request) {

        $request->validated();
        print_r($request->all());
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