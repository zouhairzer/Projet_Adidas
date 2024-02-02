<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/adidass',[CategoryController::class, 'index']);

Route::get('/category',[CategoryController::class, 'category']);

Route::get('/inputCategory',[CategoryController::class, 'ajouter']);

Route::post('/ajouter/category',[CategoryController::class, 'ajouter_categories']);

Route::get('/updateCategory/{id}',[CategoryController::class, 'fetch_categories']);

Route::post('/update/category',[CategoryController::class, 'update_categories']);

Route::get('/deleteCategory/{id}',[CategoryController::class, 'delete_categories']);

//////////////////// Products /////////////////

Route::get('/products',[ProductsController::class, 'product']);  

Route::get('/inputProduct',[ProductsController::class, 'ajouter']);

Route::post('/ajouter/product',[ProductsController::class, 'ajouter_Product']);