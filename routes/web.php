<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/test/{id}", [ Test::class, "index"]);
// Route::get("/test/{id?}", [ Test::class, "index"]);
// Route::get("/test/{id}/{name}", [ Test::class, "index"]);
// Route::get("/test/{id}/{name?}", [ Test::class, "index"]);

// Route::get("/test/{id}/{name}", function($id, $name) {
    
//     echo "<h3>Id: </h3>".$id;
//     echo "<h3>Name: </h3>".$name;
// })->where(["id" => "[0-9]+", "name" => "[a-zA-Z]+"]);

// Route::get("/test/{name}", function($name) {

//     return view("test", ["name" => $name]);
// });

Route::get("teszt", [Test::class, "index"]);

// Route::get("/about", function() {

//     $name = "Rio";
//     $email = "Riogonzalo@meal.hu";

//     return view("about", compact("name", "email"));
// });

// Route::get('/master', function () {
//     return view('master.master');
// });

// Route::get("/about", [ServiceController::class, "index"]);
// Route::get("/about-admin", function() {

//     return view("admin.about_admin", ["names"
//     => ["Béla", "Reni", "Ildi", "Karcsi"]]);
// });

// Route::get("/products", function() {
//     return view("templates.products");
// });


Route::get("/uj-diak", [StudentController::class, "newStudent"]);

Route::post("/submit-student", [StudentController::class, "submitStudent"]);