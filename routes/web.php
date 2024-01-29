<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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

Route::get("/", [CatalogController::class, "getIndex"])->name("catalog");
Route::get("/show/{id}", [CatalogController::class, "getShow"]);
Route::get('/category/{category}',[CatalogController::class,'getFindItemsByCategory'])->name('getFindItems');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/addToCart/{id}", [CatalogController::class, "addToCart"]);
    Route::get("/cart", [CatalogController::class, "showCart"]);
    Route::get("/addToFav/{id}", [CatalogController::class, "addToFav"]);
    Route::get("/favorites", [CatalogController::class, "showFav"]);
    Route::get("/deleteFromCart/{id}", [CatalogController::class, "deleteItemCart"]);
    Route::get("/deleteFromFav/{id}", [CatalogController::class, "deleteItemFav"]);
    Route::get("catalog/add", [CatalogController::class, "getAdd"])->name("catalog.add");
    Route::post("catalog/addItem", [CatalogController::class, "postAdd"])->name("post.addItem");
    Route::get("/deleteItem/{id}", [CatalogController::class, "deleteItem"]);
    Route::get("/edit/{id}", [CatalogController::class, "getEdit"]);
    Route::put("/edit/{id}", [CatalogController::class, "putEdit"])->name("put.edit");
    Route::get( '/payment/checkout', [PaymentController::class, 'checkout'])->name('payment.checkout');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');


});

require __DIR__.'/auth.php';
