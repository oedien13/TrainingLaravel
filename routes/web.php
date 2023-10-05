<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// $route = new Route();
// $route->get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return "Hellow Word, Good Evening";
});

route::get('/user', function() {
    $user = ['name' => 'Anton', 'gender' => 'male'];
    
    return $user['name'];
});

// alternative dengan controller
// $route = new Route();
// $route->get()
// Route::get('/movie', [MovieController::class, 'index']);

Route::get('/movie', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.show');

// Route::get('/movie/{movie}/comments/{comments}', [MovieController::class, 'comment']);
