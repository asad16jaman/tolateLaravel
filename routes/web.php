<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Symfony\Component\Routing\Loader\Configurator\Traits\RouteTrait;


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



Route::middleware('guest')->group(function(){
   
   
    Route::get("/register",[AuthController::class,'register'])->name('register');
    Route::post("/register",[AuthController::class,'store'])->name('register.store');
    Route::get("/login",[AuthController::class,'login'])->name('login');
    Route::post("/login",[AuthController::class,'authenticate'])->name('session');
 

     // passwrrd reset link
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');
    Route::post('/forgot-password',[AuthController::class,'sendEmailForResetPassword'] )->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class,'resetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [AuthController::class,'resetPassword'])->name('password.update');

});





Route::middleware('auth')->group(function(){

  Route::get('/verifyEmail',[AuthController::class,'sndMailForEmailVarification'])->name('sendEmailForVarify');
  Route::get('/email/verify', function () {
    return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [AuthController::class,'emailVarification'])->middleware(['signed'])->name('verification.verify');
    
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    //-------------------------
    Route::get("/profile", [ProfileController::class,'index'])->name('profile');
    Route::post("/profile", [ProfileController::class,'updateProfile'])->name('profile');
    Route::get("profile/houses/", [ProfileController::class,'showHouse'])->name('profile.house');
    Route::get("profile/house/create", [ProfileController::class,'contact'])->name('profile.house.create');
    Route::post("profile/house/create", [ProfileController::class,'houseStore'])->name('profile.house.store');
    Route::get("profile/house/{id}/delete", [ProfileController::class,'deleteHouse'])->name('profile.house.delete');
    
    Route::get("/changetype", [AuthController::class,'changeUserType'])->name('home.changeType');


    //gallery...

    Route::get('/profile/{houseId}/gallery',[ProfileController::class,'createGallry'])->name('profile.gallery.create');
    Route::post('/profile/{houseId}/gallery',[ProfileController::class,'gallerystore'])->name('profile.gallery.store');

});


Route::get('/',[HomePageController::class,'index'])->name('home');
Route::get('/about',[HomePageController::class,'about'])->name('aboutUs');
Route::get('/contact',[HomePageController::class,'contact'])->name('contactUs');

Route::get('/houses/{type?}',[HouseController::class,"index"])->name('houses.index');

Route::get('/house/{id}',[HouseController::class,"getHouse"])->name('housedetail');

Route::post('/chat/{id}',[HouseController::class,"chatOfHouse"])->name('chateHouse');
Route::get('/chat/{id}/delete/{chatId}',[HouseController::class,"deleteChat"])->name('deleteChat');





