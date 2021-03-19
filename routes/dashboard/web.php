<?php 
use App\Http\Controllers\dashboard\dashboardController;
// use App\Http\Controllers\dashboard\UserController;

Route::group(	['prefix' => LaravelLocalization::setLocale(),],
	function(){
		Route::prefix('dashboard')->name('dashboard.')->group(function(){
			Route::get('/index',[dashboardController::class,'index'])->name('index');
			Route::resource('users' , UserController::class)->except(['show']);
	});//End of dahsboard routes
});
