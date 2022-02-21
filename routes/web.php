<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;


//index
Route::get('/', HomeController::class)->name('home');
//menu index
Route::get('menu', [MenuController::class, 'index'])->name("menu.index");
//nosotros
Route::view('nosotros', 'nosotros')->name('nosotros');
//seccion contacto
Route::get('contacto',  [ContactoController::class, 'index'])->name('contacto.index');    
//formulario contacto           
Route::post('contacto',[ContactoController::class,'store'])->name('contacto.store');


//Panel
Route::group(['middleware' => 'auth','prefix' => 'panel'],function (){

    Route::get('/',[MenuController::class, 'show'])->name('panel.index');

    Route::get("/create", [MenuController::class, 'create'])->name("panel.create");
    Route::post("/store", [MenuController::class, 'store'])->name("panel.store");

    Route::get("{menu}/edit", [MenuController::class, 'edit'])->name("panel.edit");

    Route::put("{menu}/update", [MenuController::class, 'update'])->name("panel.update");

    Route::delete("{menu}/delete", [MenuController::class, 'destroy'])->name("panel.destroy");
});

require __DIR__.'/auth.php';
//crear dia de menu
//Route::get('menu/create', [MenuController::class, 'create'])->name("menu.create");
//ALTA de menu 
//Route::post('menu', [MenuController::class, 'store'])->name("menu.store");
//EDITAR menu
//Route::get('menu/{menu}/edit', [MenuController::class, 'edit'])->name("menu.edit");
//Route::put('menu/{menu}', [MenuController::class, 'update'])->name("menu.update");
//Route::delete('menu/{menu}', [MenuController::class, 'destroy'])->name("menu.destroy"); 
//Route::resource('menu', MenuController::class);


// //PANEL MENU
// Route::group(["prefix" => "panel"],function(){

//     /* A cada ruta que generemos le podemos asignar un nombre para relacionar ese nombre de ruta con la url (tambien con un método en un controlador) */
// Route::get('/', [MenuController::class, 'show'])->name('panel.index')->middleware(['auth']);

// Route::get("/create", [MenuController::class, 'create'])->name("panel.create");
// Route::post("/store", [MenuController::class, 'store'])->name("panel.store");
// Route::get("{menu}/edit", [MenuController::class, 'edit'])->name("panel.edit");

// Route::put("{menu}/update", [MenuController::class, 'update'])->name("panel.update");

// Route::delete("{menu}/delete", [MenuController::class, 'destroy'])->name("panel.destroy");


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



// });