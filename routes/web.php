<?php

//use App\Models\Post;
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
Route::get('/home',function(){return view('\section\home');});
Route::get('/costum',function(){return view('\section\costum');});
Route::get('/detailproduct',function(){return view('\section\detailproduct');});
Route::get('/shop',function(){
    return view('\section\shop');
    
}

);
Route::get('/', function () {
    
    $shoes= [
        [
            "thumbnail1"=>"asset('build\assets\images\a1.svg')",
            "bigShoe1"=>"asset('build\assets\images\dsaddas.png')"
        ],
        [
            "thumbnail2"=>"asset('build\assets\images\a1.svg')",
            "bigShoe2"=>"asset('build\assets\images\b2.png')"
        ],
        [
            "thumbnail3"=>"asset('build\assets\images\a1.svg')",
            "bigShoe3"=>"asset('build\assets\images\b3.png')"
        ]
    ];
    return view('\section\layout\main',[
        "title"=>"\section\layout\main",
        "\section\layout\main"=>$shoes
    ]);
});
