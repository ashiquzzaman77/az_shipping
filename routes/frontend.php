<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');

//Training
// Route::get('/training', [HomeController::class, 'training'])->name('training');

Route::controller(HomeController::class)->group(function () {

    //all Team
    Route::get('/team', 'allTeam')->name('all.team');

    //All Job
    Route::get('/job', 'allJob')->name('all.job');
    Route::get('/job-details/{id}', 'jobDetails')->name('view.job.details');
    Route::get('/job-apply/{id}', 'jobApply')->name('apply.job');
    Route::get('/drop/cv', 'dropCv')->name('drop.cv');
    Route::post('/job-apply/employee', 'jobApplyEmployee')->name('apply.job.post');
});

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact_us', [HomeController::class, 'contactStore'])->name('contact.store');


