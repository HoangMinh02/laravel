<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    echo 'Test';
});

Route::get('test/a/b/c/d', function () {
    echo '<h1>d</h1>';
});

Route::get('product/detail/{id}/category/{categoryId?}', function ($id, $categoryId = 17) {
    echo "Produdct id: $id - Category id: $categoryId";
});

Route::get('name/{name}/yearBorn/{yearBorn?}', function ($name, $yearBorn = 0) {
    $yearBorn = date('Y');
    echo "Name: $name - YearBorn: $yearBorn";
});

Route::get('product/create', function () {
    return view('product.create');
});

Route::get('product/index', function () {
    return view('product.index');
});

Route::get('product/blade', function () {
    return view('product.scores');
});

Route::get('product/layout', function () {
    return view('product.layout');
});
