<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller {
    public function index() {

        $data = ["names" => "Márk", Tomi];
        return view("test", $data);
    }
}
