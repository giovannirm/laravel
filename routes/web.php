<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');

Route::resource('productos', ProductController::class)->parameters(['productos' => 'product'])->names('products');

/* Es forma de definir la ruta solo se usará para mostrar contenido estático */
Route::view('nosotros', 'we')->name('we');

Route::get('contactanos', [ContactController::class, 'index'])->name('contact.index');

Route::post('contactanos', [ContactController::class, 'store'])->name('contact.store');

/* Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('products', [ProductController::class, 'store'])->name('products.store');

Route::get('products/{product}/edit',[ProductController::class, 'edit'])->name('products.edit');

Laravel recomienda que cuando queramos actualizar no usemos el método post sino el put
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

Laravel recomienda que cuando queramos eliminar no usemos el 
método post sino el delete, con la finalidad de evitar conflictos
 al usar una url
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); */

/* Con el ? indicamos que categoria sea opcional
para ello debemos inicializar esa variable */
/* Route::get('products/{product}/{category?}', function ($product, $category = null) {
    if ($category)
        return "Bienvenido al producto $producto, de la categoría $categoria";
    else
        return "Bienvenido al producto $producto";
}); */
