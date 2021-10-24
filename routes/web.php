<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index']);


Route::get('/about', function () {
    return view('about', 
    [
        "title" => "About"
    ]);
});

// Route::get('/posts', function () {
//     return view('posts', [
        
//     ]);

//     Route::get('posts/{slug}', function ($slug) {

        
//         return view('post', [


            
//             "title" => "single Post",
//             "post" => Post::find($slug)
//         ]);
//     });
// });

Route::get('/portfolio/{slug}', function ($slug) {
    return view('events', [
        "title" => "Tempat Wisata",
        "post" => Post::find($slug)
    ]);
});
