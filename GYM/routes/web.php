<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\agentcontroller;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin', [admincontroller::class, 'profile'])->name('admin.dashbord');
    Route::get('/admin/Logout', [admincontroller::class, 'LogOut'])->name('admin.LogOut'); 
    Route::get('/add/Exercises', [admincontroller::class, 'addexercises'])->name('add.exercises');
    Route::post('/add/Exercises', [admincontroller::class, 'add_exercises'])->name('add_exercises');
 
});


Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/profile', [agentcontroller::class, 'profile'])->name('agent.profile');
    Route::get('/agent/Logout', [agentcontroller::class, 'LogOut'])->name('agent.LogOut'); 
    Route::get('/agent/update', [agentcontroller::class, 'updateprofile'])->name('agent.update.profile');
    Route::post('/agent/update/profile', [agentcontroller::class, 'agentupdateprofile'])->name('update.agentprofile');
    Route::get('/agent/update/password', [agentcontroller::class, 'updatepass'])->name('update.agentpassword');
    Route::post('/agent/update/pass', [agentcontroller::class, 'agentpasswordu'])->name('agentupdate.password');
    Route::get('/show/requist/course/{rid}/{uid?}', [agentcontroller::class, 'seerequist'])->name('see.requist');
    Route::post('/add/user/exercises', [agentcontroller::class, 'senttocart'])->name('add.exercises.user');
    Route::get('/see/user/cart/{uid}/{cid}', [agentcontroller::class, 'seeusercart'])->name('see.user.cart');
    Route::get('/remove/excercis/user/cart/{uid}/{eid}/{cid}/{rid}', [agentcontroller::class, 'removetocart'])->name('remove.exercises.user');
    Route::post('update/cart/user', [agentcontroller::class, 'updatecartuser'])->name('update.cart.user');
    Route::get('/accept/course/{uid}/{ccid}', [agentcontroller::class, 'done'])->name('done');
    Route::get('/json', [agentcontroller::class, 'json']);
});


Route::middleware(['auth','role:user'])->group(function(){
    Route::get('/user/profile', [usercontroller::class, 'profile'])->name('user.profile');
    Route::get('/user/Logout', [usercontroller::class, 'LogOut'])->name('user.LogOut'); 
    Route::get('/user/update', [usercontroller::class, 'updateprofile'])->name('user.update.profile');
    Route::post('/user/update/profile', [usercontroller::class, 'userupdateprofile'])->name('update.profile');
    Route::get('/user/update/password', [usercontroller::class, 'updatepass'])->name('update.password');
    Route::post('/user/update/pass', [usercontroller::class, 'userpasswordu'])->name('userupdate.password');
    Route::get('/user/requist/course', [usercontroller::class, 'requistcourse'])->name('requist.course');
    Route::post('/user/requist/send', [usercontroller::class, 'sendrequist'])->name('send.requist');


});


Route::get('/Exercises', [admincontroller::class, 'exercises'])->name('exercises');

require __DIR__.'/auth.php';
