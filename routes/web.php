<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VisaRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisaRequestController as AdminVisaController;

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
})->name('home');

Route::get('/china-visa-request', function () {
    return view('china');
});
Route::get('/europe-visa-request', function () {
    return view('europe');
});

Route::get('/ireland-visa-request', function () {
    return view('ireland');
});

Route::get('/morocco-visa-request', function () {
    return view('morocco');
});

Route::get('/turkey-visa-request', function () {
    return view('turkey');
});

Route::get('/dubai-visa-request', function () {
    return view('dubai');
});

use App\Http\Controllers\ChinaVisaController;

Route::post('/visa/china/submit', [ChinaVisaController::class,'store'])
    ->name('visa.china.submit');

use App\Http\Controllers\EuropeVisaController;

Route::post('/visa/europe/submit', [EuropeVisaController::class,'store'])
    ->name('visa.europe.submit');

use App\Http\Controllers\IrelandVisaController;

Route::post('/visa/ireland-submit',[IrelandVisaController::class,'submit'])->name('visa.ireland.submit');


use App\Http\Controllers\MoroccoVisaController;

Route::post('/visa/morocco-submit',[MoroccoVisaController::class,'submit'])->name('visa.morocco.submit');

use App\Http\Controllers\TurkeyVisaController;

Route::post('/visa/turkey-submit',[TurkeyVisaController::class,'submit'])->name('visa.turkey.submit');


use App\Http\Controllers\DubaiVisaController;

Route::post('/visa/dubai-submit',[DubaiVisaController::class,'submit'])->name('visa.dubai.submit');

Route::get('/admin-register', [AuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin-register', [AuthController::class, 'register'])->name('admin.register.store');

Route::get('/admin-login', [AuthController::class, 'showLogin'])->name('admin.login');

Route::post('/visa-request',[VisaRequestController::class,'store'])->name('visa.request');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.login.check');

Route::post('/admin-logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/application/edit/{id}', [ChinaVisaController::class, 'edit'])->name('application.edit');
Route::post('/application/update/{id}', [ChinaVisaController::class, 'update'])->name('application.update');

Route::get('/application/thank-you', function () {
    return view('frontend.thankyou');
})->name('application.thankyou');

Route::get('/visa-request/edit/{token}',[VisaRequestController::class,'edit'])->name('visa.edit');
Route::post('/visa-request/update/{token}',[VisaRequestController::class,'update'])->name('visa.update');

// FRONTEND
Route::get('europe/application/edit/{id}', [EuropeVisaController::class, 'edit'])->name('europe.application.edit');
Route::post('europe/application/update/{id}', [EuropeVisaController::class, 'update'])->name('europe.application.update');


// frontend
Route::get('ireland/application/edit/{id}', [IrelandVisaController::class,'edit'])->name('ireland.application.edit');
Route::post('ireland/application/update/{id}', [IrelandVisaController::class,'update'])->name('ireland.application.update');


// frontend
Route::get('morocco/application/edit/{id}', [MoroccoVisaController::class,'edit'])->name('morocco.application.edit');
Route::post('morocco/application/update/{id}', [MoroccoVisaController::class,'update'])->name('morocco.application.update');


// frontend
Route::get('turkey/application/edit/{id}', [TurkeyVisaController::class,'edit'])->name('turkey.application.edit');
Route::post('turkey/application/update/{id}', [TurkeyVisaController::class,'update'])->name('turkey.application.update');


// frontend
Route::get('dubai/application/edit/{id}', [DubaiVisaController::class,'edit'])->name('dubai.application.edit');
Route::post('dubai/application/update/{id}', [DubaiVisaController::class,'update'])->name('dubai.application.update');



Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/visa-requests',[AdminVisaController::class,'index'])->name('visa.index');
    Route::delete('/visa-requests/{id}',[AdminVisaController::class,'destroy'])->name('visa.delete');

    Route::post('/application/{id}/send-correction', [ChinaVisaController::class, 'sendCorrection'])
    ->name('application.send.correction');

    // ADMIN
    Route::post('/europe/application/send-correction/{id}', [EuropeVisaController::class, 'sendCorrection'])
    ->name('europe.application.send.correction');

    // admin
    Route::post('/ireland/application/send-correction/{id}',[IrelandVisaController::class,'sendCorrection'])->name('ireland.application.send.correction');

    // admin
    Route::post('/morocco/application/send-correction/{id}',
        [MoroccoVisaController::class,'sendCorrection']
    )->name('morocco.application.send.correction');

    // admin
    Route::post('/turkey/application/send-correction/{id}',
        [TurkeyVisaController::class,'sendCorrection']
    )->name('turkey.application.send.correction');

    // admin
    Route::post('/dubai/application/send-correction/{id}',
        [DubaiVisaController::class,'sendCorrection']
    )->name('dubai.application.send.correction');

    Route::post('/visa-requests/{id}/reply',[AdminVisaController::class,'sendReply'])->name('visa.reply');
   
    Route::get('/china-visa', [ChinaVisaController::class, 'index'])->name('china.visa.index');
    Route::get('/china-visa/{id}', [ChinaVisaController::class, 'show'])->name('china.visa.show');


    Route::get('/europe-visa', [EuropeVisaController::class, 'index'])->name('europe.visa.index');
    Route::get('/europe-visa/{id}', [EuropeVisaController::class, 'show'])->name('europe.visa.show');


    Route::get('/ireland-visa', [IrelandVisaController::class, 'index'])->name('ireland.visa.index');
    Route::get('/ireland-visa/{id}', [IrelandVisaController::class, 'show'])->name('ireland.visa.show');

   

    Route::get('/morocco-visa', [MoroccoVisaController::class, 'index'])->name('morocco.visa.index');
    Route::get('/morocco-visa/{id}', [MoroccoVisaController::class, 'show'])->name('morocco.visa.show');


    Route::get('/turkey-visa', [TurkeyVisaController::class, 'index'])->name('turkey.visa.index');
    Route::get('/turkey-visa/{id}', [TurkeyVisaController::class, 'show'])->name('turkey.visa.show');

    

    Route::get('/dubai-visa', [DubaiVisaController::class, 'index'])->name('dubai.visa.index');
    Route::get('/dubai-visa/{id}', [DubaiVisaController::class, 'show'])->name('dubai.visa.show');

    Route::post('/visa-requests/bulk-mail', [AdminVisaController::class,'bulkMail'])
    ->name('visa.bulk.mail');
});
