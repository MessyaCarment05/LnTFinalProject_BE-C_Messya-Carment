<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FakturController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/edit-barang/{id}', [BarangController::class, 'edit'])->name('edit');

    Route::patch('/update-barang/{id}', [BarangController::class, 'update'])->name('update');

    
    Route::delete('/delete-barang/{id}', [BarangController::class, 'delete'])->name('delete');
    
    Route::post('/store-category', [CategoryController::class, 'storeCategory']);

    
    //TODO Implementasi fungsi createCategory
    Route::get('/create-category', [CategoryController::class, 'createCategory']);
    
    //TODO kirim data category ke tampilan FE
    Route::get('/create-barang', [BarangController::class, 'createBarang']);
    
    //TODO Implementasi fungsi storeBook
    Route::post('/store-barang', [BarangController::class, 'storeBarang']);

    Route::get('/create-faktur', [FakturController::class, 'createFaktur']);

    Route::post('/store-faktur', [FakturController::class, 'storeFaktur']);
    
    //TODO Tampilin category pada view dengan relationships
    Route::get('/', [BarangController::class, 'show']);
    Route::get('/faktur', [FakturController::class, 'showFaktur']);

   

   
});

require __DIR__.'/auth.php';
