<?php


use App\Test;
use App\Container;
use App\TestFacade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

//Home
// Route::get('/', [HomeController::class, 'testroot'])->name('root');

Route::resource('post', HomeController::class);

// Route::get('/', function () {
//     $container = new Container();
//     $container->bind('test', function () {
//         return new Test();
//     });
//     $test = $container->resolve('test');
//     dd($test->smth());
// });

Route::get('/', function () {
    return TestFacade::execute();
});
