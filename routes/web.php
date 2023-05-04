<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ajax;
use App\Http\Controllers\ProductC;
use App\Http\Controllers\UserC;
use App\Http\Controllers\NewsC;
use App\Http\Controllers\CategoryC;
use App\Http\Controllers\SubCategoryC;
use App\Http\Controllers\Home;
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

//together

Route::get('/SignIn',[UserC::class,'signIn']);
Route::get('/SignUp',[UserC::class,'signUp']);
Route::get('/SignOut',[UserC::class,'signOut']);
Route::post('/CheckSignUp',[UserC::class,'checkSignUp']);
Route::post('/CheckSignIn',[UserC::class,'checkSignIn']);
Route::get('/ChangePass',[UserC::class, 'changePassForm']);
Route::post('/ChangePass',[UserC::class, 'changePass']);
Route::get('/Ajax/ClockFunc',[Ajax::class, 'clockFunc']);
Route::get('/Ajax/OrderChangeState',[Ajax::class, 'orderChangeState']);

//customer

// product
Route::get('/',[ProductC::class,'getHomeProduct']);
Route::get('/ProductList/{sub_category_id}/{orderBy}',[ProductC::class, 'productList']);
Route::get('/SearchProduct',[ProductC::class, 'searchProduct']);
Route::get('/ProductDetail/{product_id}',[ProductC::class, 'productDetail']);

//news
Route::get('/NewsList/{news_sub_category_id}',[NewsC::class, 'newsList']);
Route::get('/NewsDetail/{news_id}',[NewsC::class, 'newsDetail']);

Route::get('/Order',[OrderC::class,'order']);
Route::get('/Ordering',[OrderC::class,'ordering']);
Route::get('/Review/{idproduct}/{idorder}',[ReviewC::class,'review']);
Route::get('/CustomerMessenger',[MessageC::class, 'getCustomerConversation']);

//shop

Route::get('/Ajax/ChangeStatus',[Ajax::class,'changeStatus']);

//product
Route::get('/Ajax/SubCategoryByCategory',[Ajax::class,'getSubcategoryByCategory']);
Route::get('/ProductManager',[ProductC::class,'productManager']);
Route::get('/AddProduct',[ProductC::class,'productAddForm']);
Route::post('/AddProduct',[ProductC::class, 'productAdd']);
Route::get('/EditProduct',[ProductC::class, 'productEditForm']);
Route::post('/EditProduct',[ProductC::class, 'productEdit']);

//news
Route::get('/NewsManager',[NewsC::class, 'newsManager']);
Route::get('/AddNews',[NewsC::class,'newsAddForm']);
Route::post('/AddNews',[NewsC::class, 'newsAdd']);
Route::get('/EditNews',[NewsC::class, 'newsEditForm']);
Route::post('/EditNews',[NewsC::class, 'newsEdit']);
Route::get('/News/{news_id}',[NewsC::class, 'news']);

// category
Route::get('/CategoryManager',[CategoryC::class, 'categoryManager']);
Route::get('/AddCategory',[CategoryC::class,'categoryAddForm']);
Route::post('/AddCategory',[CategoryC::class, 'categoryAdd']);
Route::get('/EditCategory',[CategoryC::class, 'categoryEditForm']);
Route::post('/EditCategory',[CategoryC::class, 'categoryEdit']);

//sub category
Route::get('/SubCategoryManager',[SubCategoryC::class, 'subCategoryManager']);
Route::get('/AddSubCategory',[SubCategoryC::class,'subCategoryAddForm']);
Route::post('/AddSubCategory',[SubCategoryC::class, 'subCategoryAdd']);
Route::get('/EditSubCategory',[SubCategoryC::class, 'subCategoryEditForm']);
Route::post('/EditSubCategory',[SubCategoryC::class, 'subCategoryEdit']);