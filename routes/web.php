<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditProfileController;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LoginController::class, 'index']);
Route::get('/dashboard', [LoginController::class, 'indexdashboard'])->name('dashboard');
Route::get('/admindashboard', [LoginController::class, 'indexadmindashboard'])->name('admindashboard');
Route::post('/afterlogin', [LoginController::class, 'login']);
Route::post('logout1', [LoginController::class, 'logout1'])->name('logout1');
Route::get('/keuangan', [LoginController::class, 'indexkeuangan']); 
Route::get('/infobendahara', [LoginController::class, 'indexbendahara']); 
Route::get('/infobendaharaadmin', [LoginController::class, 'indexbendaharaadmin']); 
Route::get('/keuanganadmin', [LoginController::class, 'indexkeuanganadmin']); 
Route::get('/useradmin', [LoginController::class, 'indexuseradmin']); 
Route::get('/pembayaranadmin', [LoginController::class, 'indexpembayaranadmin']); 
Route::get('/pembayaran', [LoginController::class, 'indexpembayaran']); 
Route::get('/editprofile', [LoginController::class, 'indexedit'])->name('editprofile');
Route::post('/afteredit', [LoginController::class, 'editPassword']);
Route::put('/update-user/{npm}', [LoginController::class, 'updaterow'])->name('update-user');
Route::delete('/delete-user/{npm}', [LoginController::class, 'deleteUser'])->name('delete-user');
Route::post('/add-user', [LoginController::class, 'addUser'])->name('add-user');
// Route::get('/keuangan', function () {
//     return view('keuangan');
// });
// // Route::get('/admindashboard', function () {
// //     return view('admindashboard');
// // })->name('admindashboard');
// Route::get('/infobendahara', function () {
//     return view('infobendahara');
// });
// // Route::get('/dashboard', function () {
// //     return view('dashboard');
// // })->name('dashboard');
// Route::get('/pembayaranadmin', function () {
//     return view('pembayaranadmin');
// });
// Route::get('/keuanganadmin', function () {
//     return view('keuanganadmin');
// });
// Route::get('/infobendaharaadmin', function () {
//     return view('infobendaharaadmin');
// });
// Route::get('/useradmin', function () {
//     return view('useradmin');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// useless routes
// Just to demo sidebar dropdown links active states.
// Route::get('/buttons/text', function () {
//     return view('buttons-showcase.text');
// })->middleware(['auth'])->name('buttons.text');

// Route::get('/buttons/icon', function () {
//     return view('buttons-showcase.icon');
// })->middleware(['auth'])->name('buttons.icon');

// Route::get('/buttons/text-icon', function () {
//     return view('buttons-showcase.text-icon');
// })->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
