<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\singercontroller;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('redirect',[homecontroller::class,'redirect']);
route::get('/',[homecontroller::class,'home']);
route::get('addcategory',[admincontroller::class,'category']);
route::post('addcategory',[admincontroller::class,'addcategory']);


route::get('product',[productcontroller::class,'selectproduct']);

route::post('addproduct',[productcontroller::class,'addproduct']);
route::get('showproduct',[productcontroller::class,'showproduct']);
route::get('showcategory',[productcontroller::class,'showcat']);

route::get('showcategory',[productcontroller::class,'onetoone']);
route::get('addsong',[singercontroller::class,'addsongui']);
route::post('addsong',[singercontroller::class,'addsong']);

route::get('addsinger',[singercontroller::class,'addsingerui']);
route::post('addsinger',[singercontroller::class,'addsinger']);

/* route::get('showall',[singercontroller::class,'showall']); */
route::get('search',[admincontroller::class,'search']);

route::get('/',[productcontroller::class,'showproducttouser']);
route::post('addtocart',[productcontroller::class,'addtocart']);
route::get('cart',[homecontroller::class,'cart']);

route::get('showcart',[homecontroller::class,'showcart']);
route::get('deleteall',[homecontroller::class,'deleteall']);
route::post('confirm',[homecontroller::class,'confirmorder']);
route::post('btn',[homecontroller::class,'shopbtn']);

route::get('editproduct/{id}',[productcontroller::class,'editproduct']);
route::post('updatepro/{id}',[productcontroller::class,'updateproduct']);