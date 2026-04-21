<?php

use App\Http\Controllers\Admin\BulkEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\SmtpAccountController;
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

use App\Http\Controllers\PaymentController;

// Route::get('/payment/checkout/{id}', [PaymentController::class, 'checkout'])->name('payment.checkout');
Route::get('/payment/checkout/{id}/{type}', [PaymentController::class, 'checkout'])
    ->name('payment.checkout');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

Route::post('/stripe/webhook', [PaymentController::class, 'webhook']);


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/terms-and-conditions', function () {
    return view('termsandconditions');
})->name('termsandconditions');


Route::get('/privacy-policy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::get('/disclaimer', function () {
    return view('desclaimer');
})->name('disclaimer');

Route::get('/service-agreement', function () {
    return view('serviceagreement');
})->name('serviceagreement');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

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

Route::get('/seo-optimization', function () {
    return view('seo-schema');
});

use App\Http\Controllers\ChinaVisaController;
use App\Http\Controllers\CommonController;

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
use Illuminate\Support\Facades\Mail;

Route::post('/visa/dubai-submit',[DubaiVisaController::class,'submit'])->name('visa.dubai.submit');

// Route::get('/admin-register', [AuthController::class, 'showRegister'])->name('admin.register');
// Route::post('/admin-register', [AuthController::class, 'register'])->name('admin.register.store');

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


        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/test-mail', function () {
            Mail::to('infoharry99@gmail.com')
                    ->send(new \App\Mail\BulkMail());
                return 'Mail sent';
            });
        Route::post(
            '/bulk-emails/test-mail',
            [App\Http\Controllers\Admin\BulkEmailController::class, 'sendTestMail']
        )->name('bulk-emails.test-mail');
    
        
        Route::post(
            '/bulk-emails/{id}/toggle-block',
            [BulkEmailController::class, 'toggleBlock']
        )->name('bulk-emails.toggle-block');
    
        Route::get('/email-template', [EmailTemplateController::class, 'edit'])
            ->name('email-template.edit');
        
        Route::post('/email-template', [EmailTemplateController::class, 'update'])
            ->name('email-template.update');
        
        Route::post(
            '/bulk-emails/reset-all',
            [BulkEmailController::class, 'resetAll']
        )->name('bulk-emails.reset-all');
    
        Route::post(
            '/bulk-emails/{id}/reset',
            [BulkEmailController::class, 'resetStatus']
        )->name('bulk-emails.reset');
    
        // Bulk Email Management
        Route::get('bulk-emails', [BulkEmailController::class, 'indexs'])
            ->name('admin.bulk-emails.index');
        Route::get('bulk-emails', [BulkEmailController::class, 'index'])
            ->name('bulk-emails.index');
    
        Route::post('/bulk-emails', [BulkEmailController::class, 'store'])
            ->name('bulk-emails.store');
    
        // SMTP Management
        Route::get('n/smtp', [SmtpAccountController::class, 'index'])
            ->name('smtp.index');
    
        Route::post('/smtp', [SmtpAccountController::class, 'store'])
            ->name('smtp.store');
    



    Route::get('/visa-requests',[AdminVisaController::class,'index'])->name('visa.index');
    Route::delete('/visa-requests/{id}',[AdminVisaController::class,'destroy'])->name('visa.delete');

    Route::get('/all-requests',[CommonController::class,'index'])->name('visa.show.all');

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
    Route::get('/china-visa/show/{id}', [ChinaVisaController::class, 'show2'])->name('china.visa.show2');



    Route::get('/europe-visa', [EuropeVisaController::class, 'index'])->name('europe.visa.index');
    Route::get('/europe-visa/{id}', [EuropeVisaController::class, 'show'])->name('europe.visa.show');
    Route::get('/europe-visa/show/{id}', [EuropeVisaController::class, 'show2'])->name('europe.visa.show2');


    Route::get('/ireland-visa', [IrelandVisaController::class, 'index'])->name('ireland.visa.index');
    Route::get('/ireland-visa/{id}', [IrelandVisaController::class, 'show'])->name('ireland.visa.show');
    Route::get('/ireland-visa/show/{id}', [IrelandVisaController::class, 'show2'])->name('ireland.visa.show2');

   

    Route::get('/morocco-visa', [MoroccoVisaController::class, 'index'])->name('morocco.visa.index');
    Route::get('/morocco-visa/{id}', [MoroccoVisaController::class, 'show'])->name('morocco.visa.show');
    Route::get('/morocco-visa/show/{id}', [MoroccoVisaController::class, 'show2'])->name('morocco.visa.show2');


    Route::get('/turkey-visa', [TurkeyVisaController::class, 'index'])->name('turkey.visa.index');
    Route::get('/turkey-visa/{id}', [TurkeyVisaController::class, 'show'])->name('turkey.visa.show');
    Route::get('/turkey-visa/show/{id}', [TurkeyVisaController::class, 'show2'])->name('turkey.visa.show2');

    

    Route::get('/dubai-visa', [DubaiVisaController::class, 'index'])->name('dubai.visa.index');
    Route::get('/dubai-visa/{id}', [DubaiVisaController::class, 'show'])->name('dubai.visa.show');
    Route::get('/dubai-visa/show/{id}', [DubaiVisaController::class, 'show2'])->name('dubai.visa.show2');


    Route::post('/visa-requests/bulk-mail', [AdminVisaController::class,'bulkMail'])
    ->name('visa.bulk.mail');
});
