<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::post('/submit-inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/careers', [JobController::class, 'jobs'])->name('careers');
Route::get('/blog', [BlogController::class, 'blogs'])->name('blog');
Route::get('/blog-details/{id}', [BlogController::class, 'show'])->name('blog-details');


Route::get('/events', function () {
    return view('frontend.events');
})->name('events');


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


// New University Programs

Route::get('/international-american-university-usa', function () {
    return view('frontend.univercities.international_american_university');
})->name('international_american_university');

Route::get('/master-of-business-administration-mba-iau', function () {
    return view('frontend.univercities.iau.mba');
})->name('mba');

Route::get('/doctor-of-business-administration-dba-iau', function () {
    return view('frontend.univercities.iau.dba');
})->name('dba');

Route::get('/arden-university-uk', function () {
    return view('frontend.univercities.arden_university');
})->name('arden_university');

Route::get('/enae-business-school-spain', function () {
    return view('frontend.univercities.enae_business_school');
})->name('enae_business_school');

Route::get('/an-najah-national-university-palestine', function () {
    return view('frontend.univercities.an_najah_national_university');
})->name('an_najah_national_university');

Route::get('/supershine-university-zambia', function () {
    return view('frontend.univercities.supershine_university');
})->name('supershine_university');

Route::get('/liutebm-university-zambia', function () {
    return view('frontend.univercities.liutebm_university');
})->name('liutebm_university');

Route::get('/Diploma-in-Business-Administration', function () {
    return view('frontend.programs.diploma_BA');
})->name('diploma_BA');

Route::get('/Bachelor-of-Business-Administration', function () {
    return view('frontend.programs.bachelor_BA');
})->name('bachelor_BA');

Route::get('/Master-of-Business-Administration', function () {
    return view('frontend.programs.master_BA');
})->name('master_BA');

Route::get('/Bachelor-of-Project-Management', function () {
    return view('frontend.programs.bachelor_PM');
})->name('bachelor_PM');

Route::get('/Master-of-Construction-Management', function () {
    return view('frontend.programs.master_CM');
})->name('master_CM');

Route::get('/Master-of-Project-Management', function () {
    return view('frontend.programs.master_PM');
})->name('master_PM');




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




use App\Http\Controllers\OnlinePaymentController;

//admin dashboard

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Middleware\AdminAuth;


Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');


Route::middleware([App\Http\Middleware\AdminAuth::class])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/ProjectIndex', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/ProjectCreate', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/Projectstore', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/Project{projects}', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/{projects}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/{projects}', [ProjectController::class, 'destroy'])->name('projects.destroy');


    Route::get('/BlogIndex', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/BlogCreate', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/Blogstore', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');


    Route::get('/CareerIndex', [JobController::class, 'index'])->name('careers.index');
    Route::get('/CareerCreate', [JobController::class, 'create'])->name('careers.create');
    Route::post('/Careerstore', [JobController::class, 'store'])->name('careers.store');
    Route::get('/careers/{career}/edit', [JobController::class, 'edit'])->name('careers.edit');
    Route::put('/careers/{career}', [JobController::class, 'update'])->name('careers.update');
    Route::delete('/careers/{career}', [JobController::class, 'destroy'])->name('careers.destroy');

    Route::get('/ServiceIndex', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/ServiceCreate', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/Servicestore', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

    Route::get('/Inquiries', [InquiryController::class, 'index'])->name('inquiries.index');

    // Testimonials Management (Admin)
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    Route::get('/online-payments', [OnlinePaymentController::class, 'index'])->name('payments.index');
    Route::delete('/online-payments/{id}', [OnlinePaymentController::class, 'destroy'])->name('payments.destroy');
    Route::post('admin/payments/status/{id}', [OnlinePaymentController::class, 'updateStatus'])->name('payments.updateStatus');



});




// Show payment form
Route::get('/pay-online', [OnlinePaymentController::class, 'showForm'])
    ->name('payonline.form');

// Submit form → redirect to Cybersource
Route::post('/pay-online/submit', [OnlinePaymentController::class, 'redirectToGateway'])
    ->name('payonline.submit');

// Cybersource success
Route::match(['GET','POST'], '/pay-online/success', [OnlinePaymentController::class, 'success'])
    ->name('payonline.success')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class, 'web']);

// Cybersource fail
Route::match(['GET','POST'], '/pay-online/fail', [OnlinePaymentController::class, 'fail'])
    ->name('payonline.fail')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class, 'web']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
