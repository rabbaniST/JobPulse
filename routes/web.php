<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\FaqPageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Forntend\HomeController;
use App\Http\Controllers\Forntend\PostController;
use App\Http\Controllers\Admin\BlogPageController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Forntend\TermsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\JobCategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Forntend\ForntFaqController;
use App\Http\Controllers\Admin\HomePageSettingController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Forntend\ForntJobCategoryController;
use App\Http\Controllers\Forntend\PrivacyPageController;

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('terms-of-use', [TermsController::class, 'index'])->name('terms');
Route::get('privacy-policy', [PrivacyPageController::class, 'index'])->name('privacy');
Route::get('/job-categories',[ForntJobCategoryController::class, 'categories'])->name('job_categories');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('post/{slug}', [PostController::class, 'detail'])->name('post');
Route::get('faq', [ForntFaqController::class, 'index'])->name('faq');


// Admin Group routes
Route::middleware(['admin:admin'])->group(function () {


    Route::get('/admin/blog-page', [BlogPageController::class, 'index'])->name('admin_blog_page');
    Route::post('/admin/blog-page/update', [BlogPageController::class, 'update'])->name('admin_blog_page_update');

    Route::get('/admin/faq-page', [FaqPageController::class, 'index'])->name('admin_faq_page');
    Route::post('/admin/faq-page/update', [FaqPageController::class, 'update'])->name('admin_faq_page_update');

    Route::get('/admin/term-page', [TermController::class, 'index'])->name('admin_term_page');
    Route::post('/admin/term-page/update', [TermController::class, 'update'])->name('admin_term_page_update');

    Route::get('/admin/privacy-page', [PrivacyPolicyController::class, 'index'])->name('admin_privacy_policy');
    Route::post('/admin/privacy-page/update', [PrivacyPolicyController::class, 'update'])->name('admin_privacy_policy_update');

    // Admin Dashboard Route and middleware
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/admin/edit-profile', [ProfileController::class, 'index'])->name('admin_profile');
    Route::post('/admin/profile-submit', [ProfileController::class, 'profileSubmit'])->name('admin_profile_submit');
    Route::get('/admin/home-page', [HomePageSettingController::class, 'index'])->name('home_page_setting');
    Route::post('/admin/home-page/update', [HomePageSettingController::class, 'update'])->name('home_page_update');

    // job category routes
    Route::get('/admin/job-category', [JobCategoryController::class, 'index'])->name('admin_job_category');
    Route::get('/admin/job-category/create', [JobCategoryController::class, 'create'])->name('admin_job_category_create');
    Route::post('/admin/job-category/store', [JobCategoryController::class, 'store'])->name('admin_job_category_store');
    Route::get('/admin/job-category/edit/{id}', [JobCategoryController::class, 'edit'])->name('admin_job_category_edit');
    Route::post('/admin/job-category/update/{id}', [JobCategoryController::class, 'update'])->name('admin_job_category_update');
    Route::get('/admin/job-category/delete/{id}', [JobCategoryController::class, 'delete'])->name('admin_job_category_delete');

    // Why Choose Section routes
    Route::get('/admin/why-choose', [WhyChooseController::class, 'index'])->name('admin_why_choose');
    Route::get('/admin/why-choose/create', [WhyChooseController::class, 'create'])->name('admin_why_choose_create');
    Route::post('/admin/why-choose/store', [WhyChooseController::class, 'store'])->name('admin_why_choose_store');
    Route::get('/admin/why-choose/edit/{id}', [WhyChooseController::class, 'edit'])->name('admin_why_choose_edit');
    Route::post('/admin/why-choose/update/{id}', [WhyChooseController::class, 'update'])->name('admin_why_choose_update');
    Route::get('/admin/why-choose/delete/{id}', [WhyChooseController::class, 'delete'])->name('admin_why_choose_delete');

    // Tesimonial Section Routes
    Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name('admin_testimonial');
    Route::get('/admin/testimonial/create', [TestimonialController::class, 'create'])->name('admin_testimonial_create');
    Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->name('admin_testimonial_store');
    Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('admin_testimonial_edit');
    Route::post('/admin/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('admin_testimonial_update');
    Route::get('/admin/testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('admin_testimonial_delete');

    // Blog Section Routes
    Route::get('/admin/blog-post', [BlogPostController::class, 'index'])->name('admin_blog_post');
    Route::get('/admin/blog-post/create', [BlogPostController::class, 'create'])->name('admin_blog_post_create');
    Route::post('/admin/blog-post/store', [BlogPostController::class, 'store'])->name('admin_blog_post_store');
    Route::get('/admin/blog-post/edit/{id}', [BlogPostController::class, 'edit'])->name('admin_blog_post_edit');
    Route::post('/admin/blog-post/update/{id}', [BlogPostController::class, 'update'])->name('admin_blog_post_update');
    Route::get('/admin/blog-post/delete/{id}', [BlogPostController::class, 'delete'])->name('admin_blog_post_delete');

    // Faq routes
    Route::get('/admin/faq/view', [FaqController::class, 'index'])->name('admin_faq');
    Route::get('/admin/faq/create', [FaqController::class, 'create'])->name('admin_faq_create');
    Route::post('/admin/faq/store', [FaqController::class, 'store'])->name('admin_faq_store');
    Route::get('/admin/faq/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
    Route::post('/admin/faq/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
    Route::get('/admin/faq/delete/{id}', [FaqController::class, 'delete'])->name('admin_faq_delete');
});

// Admin Login Routes
Route::get('/admin/login', [LoginController::class, 'login'])->name('admin_login');
Route::get('/admin/forget-password', [LoginController::class, 'forgetPassword'])->name('admin_foget_password');
Route::post('/admin/forget-password', [LoginController::class, 'forgetPasswordSubmit'])->name('admin_foget_password_submit');

Route::post('/admin/login-submit', [LoginController::class, 'loginSubmit'])->name('admin_login_submit');

Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin_logout');

Route::get('/admin/reset-password/{token}/{email}', [LoginController::class, 'resetPassword'])->name('reset_password');

Route::post('/admin/reset-password-submit', [LoginController::class, 'resetPasswordSubmit'])->name('admin_reset_password_submit');
