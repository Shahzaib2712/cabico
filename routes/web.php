<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CatController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ClientController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewArrivalsController;
use App\Http\Controllers\BestSellingController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\TopRatedController;
use App\Http\Controllers\MessageController;


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

// Frontend Controllers
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'products']);
Route::get('/categories', [CatController::class, 'categories']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);

//Contact Us
Route::get('/user-home', [ContactUsController::Class,'user']);
Route::post('/datainsert', [ContactUsController::Class,'DataInsert']);


// Backend Controllers


//Dashboard
Route::get('/dashboard',[MainController::class ,'Dashboard']);

// BackEnd Pro
Route::get('/pro',[ProController::class ,'Pro']);
Route::get('/add-pro',[ProController::class ,'AddPro']);
Route::post('/add-pro/store',[ProController::class ,'AddProStore']);
Route::get('/edit-pro/{id}',[ProController::class ,'EditPro']);
Route::post('/update-pro/{id}',[ProController::class ,'UpdatePro']);
Route::get('/delete-pro/{id}',[ProController::class ,'DeletePro']);

// BackEnd Category
Route::get('/category',[CategoryController::class ,'Category']);
Route::get('/add-category',[CategoryController::class ,'AddCategory']);
Route::post('/add-category/store',[CategoryController::class ,'AddCategoryStore']);
Route::get('/edit-category/{id}',[CategoryController::class ,'EditCategory']);
Route::post('/update-category/{id}',[CategoryController::class ,'UpdateCategory']);
Route::get('/delete-category/{id}',[CategoryController::class ,'DeleteCategory']);

//New Arrival //Product
Route::get('/newarrivals',[NewArrivalsController::class ,'NewArrivals']);
Route::get('/add-newarrivals',[NewArrivalsController::class ,'AddNewArrivals']);
Route::post('/add-newarrivals/store',[NewArrivalsController::class ,'AddNewArrivalsStore']);
Route::get('/edit-newarrivals/{id}',[NewArrivalsController::class ,'EditNewArrivals']);
Route::post('/update-newarrivals/{id}',[NewArrivalsController::class ,'UpdateNewArrivals']);
Route::get('/delete-newarrivals/{id}',[NewArrivalsController::class ,'DeleteNewArrivals']);

//Best Selling //Product
Route::get('/bestselling',[BestSellingController::class ,'BestSelling']);
Route::get('/add-bestselling',[BestSellingController::class ,'AddBestSelling']);
Route::post('/add-bestselling/store',[BestSellingController::class ,'AddBestSellingStore']);
Route::get('/edit-bestselling/{id}',[BestSellingController::class ,'EditBestSelling']);
Route::post('/update-bestselling/{id}',[BestSellingController::class ,'UpdateBestSelling']);
Route::get('/delete-bestselling/{id}',[BestSellingController::class ,'DeleteBestSelling']);

//Top Rated //Product
Route::get('/toprated',[TopRatedController::class ,'TopRated']);
Route::get('/add-toprated',[TopRatedController::class ,'AddTopRated']);
Route::post('/add-toprated/store',[TopRatedController::class ,'AddTopRatedStore']);
Route::get('/edit-toprated/{id}',[TopRatedController::class ,'EditTopRated']);
Route::post('/update-toprated/{id}',[TopRatedController::class ,'UpdateTopRated']);
Route::get('/delete-toprated/{id}',[TopRatedController::class ,'DeleteTopRated']);

//Featured //Product
Route::get('/featured',[FeaturedController::class ,'Featured']);
Route::get('/add-featured',[FeaturedController::class ,'AddFeatured']);
Route::post('/add-featured/store',[FeaturedController::class ,'AddFeaturedStore']);
Route::get('/edit-featured/{id}',[FeaturedController::class ,'EditFeatured']);
Route::post('/update-featured/{id}',[FeaturedController::class ,'UpdateFeatured']);
Route::get('/delete-featured/{id}',[FeaturedController::class ,'DeleteFeatured']);

//Messages
Route::get('/messages',[MessageController::Class, 'Messages']);
Route::get('/delete-messages/{id}',[MessageController::Class, 'DeleteMessages']);
