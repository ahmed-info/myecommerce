<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
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

///         link      controll                functionNname   rouuteName
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'mydashboard'])->name('mydashboard');

//category opertion crud
Route::get('/dashboard/category/index', [DashboardController::class, 'categryindex'])->name('categry.index');
Route::get('/dashboard/category/create', [DashboardController::class, 'categrycreate'])->name('categry.create');
Route::post('/dashboard/category/insert', [DashboardController::class, 'categoryinsert'])->name('category.insert');
Route::get('dashbard/category/edit/{id}', [DashboardController::class, 'edit'])->name('category.edit');
Route::put('dashbard/category/update/{id}', [DashboardController::class, 'update'])->name('category.update');
Route::delete('dashbard/category/delete/{id}', [DashboardController::class, 'remove'])->name('category.remove');

//category opertion crud
Route::get('/dashboard/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/dashboard/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/dashboard/product/insert', [ProductController::class, 'insert'])->name('product.insert');
Route::get('dashbard/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('dashbard/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('dashbard/product/delete/{id}', [ProductController::class, 'remove'])->name('product.remove');
