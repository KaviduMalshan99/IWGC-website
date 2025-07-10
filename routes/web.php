<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/careers', function () {
    return view('frontend.career');
})->name('careers');

Route::get('/events', function () {
    return view('frontend.events');
})->name('events');

Route::get('/blog-details', function () {
    return view('frontend.blog-details');
})->name('blog-details');

Route::get('/study_abroad_Canada', function () {
    return view('frontend.study_canada');
})->name('study_canada');

Route::get('/study_abroad_Malaysia', function () {
    return view('frontend.study_malaysia');
})->name('study_malaysia');

Route::get('/study_abroad_Singapore', function () {
    return view('frontend.study_singapore');
})->name('study_singapore');

Route::get('/study_abroad_Uk', function () {
    return view('frontend.study_uk');
})->name('study_uk');

Route::get('/Privacy-Policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');

Route::get('/Terms-and-Conditions', function () {
    return view('frontend.Terms-and-Conditions');
})->name('Terms-and-Conditions');

Route::get('/Cookies-Policy', function () {
    return view('frontend.Cookies-Policy');
})->name('Cookies-Policy');

Route::get('/Qualifi-uk', function () {
    return view('frontend.qualifi');
})->name('qualifi');

Route::get('/avid-college-maldives', function () {
    return view('frontend.avid');
})->name('avid');

Route::get('/Bachelor-of-Business-Administration', function () {
    return view('frontend.programs.bachelor_BA');
})->name('bachelor_BA');

Route::get('/Master-of-Business-Administration', function () {
    return view('frontend.programs.master_BA');
})->name('master_BA');



Route::get('/Diploma-in-Early-childhood-Education', function () {
    return view('frontend.programs.diploma_ECE');
})->name('diploma_ECE');

Route::get('/Diploma-in-Teaching-(Primary)', function () {
    return view('frontend.programs.diploma_teaching');
})->name('diploma_teaching');

Route::get('/Bachelor-of-Early-Childhood-Education', function () {
    return view('frontend.programs.bachelor_ECE');
})->name('bachelor_ECE');

Route::get('/Bachelor-of-Teaching-(Primary)', function () {
    return view('frontend.programs.bachelor_teaching');
})->name('bachelor_teaching');

Route::get('/Master-of-Educational-Leadership-and-Management', function () {
    return view('frontend.programs.master_ELM');
})->name('master_ELM');



Route::get('/Diploma-in-Counseling', function () {
    return view('frontend.programs.diploma_counseling');
})->name('diploma_counseling');

Route::get('/Bachelor-of-Counseling', function () {
    return view('frontend.programs.bachelor_counseling');
})->name('bachelor_counseling');

Route::get('/Bachelor-of-Science-in-Psychology', function () {
    return view('frontend.programs.bachelor_psychology');
})->name('bachelor_psychology');



Route::get('/Faculty-of-Business-Management', function () {
    return view('frontend.business');
})->name('business');

Route::get('/Faculty-of-Education', function () {
    return view('frontend.education');
})->name('education');

Route::get('/Faculty-of-Humanities', function () {
    return view('frontend.humanities');
})->name('humanities');

Route::get('/Enroll', function () {
    return view('frontend.enroll');
})->name('enroll');

Route::get('/Scholarships', function () {
    return view('frontend.scholarships');
})->name('scholarships');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
