<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\PropertyController;

use App\Models\RoleRoute;

// function getRoleName($routeName)
// {
//     $routesData = RoleRoute::where('route_name', $routeName)->get();
//     $result = [];
//     foreach ($routesData as $routeData) {
//         array_push($result, $routeData->role_name);
//     }
//     return $result;
// }
// =================social login==================
Route::get('/user/login', [SocialLoginController::class, 'userLogin'])->name('user.login');
Route::get('/auth/redirect', [SocialLoginController::class, 'authRedirect'])->name('auth.redirect');
Route::get('/auth/callback', [SocialLoginController::class, 'authCallback'])->name('auth.callback');
// ===================-end social login==============


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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/page', [HomeController::class, 'pages'])->name('page');
Route::get('/blog', [HomeController::class, 'blogs'])->name('blog');
Route::get('/blog/details', [HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/academia/global', [HomeController::class, 'academiaGlobal'])->name('academia.global');
Route::get('/academia', [HomeController::class, 'academia'])->name('academia');
Route::get('/studying/abroad', [HomeController::class, 'studyingAbroad'])->name('studying.abroad');
Route::get('/comprehensive/counselling', [HomeController::class, 'comprehensiveCounselling'])->name('comprehensive.counselling');
Route::get('/student/visa', [HomeController::class, 'studentVisa'])->name('student.visa');
Route::get('/application/process', [HomeController::class, 'applicationProcess'])->name('application.process');
Route::get('/program/selection', [HomeController::class, 'programSelection'])->name('program.selection');
Route::get('/scholarship/application', [HomeController::class, 'scholarshipApplication'])->name('scholarship.application');
Route::get('/departure/counselling', [HomeController::class, 'departureCounselling'])->name('departure.counselling');
Route::get('/visit/visa', [HomeController::class, 'visitVisa'])->name('visit.visa');
Route::get('/immigration', [HomeController::class, 'Immigration'])->name('immigration');
Route::get('/student/visa/extension', [HomeController::class, 'visaExtension'])->name('student.visa.extension');
Route::get('/united/state', [HomeController::class, 'unitedState'])->name('united.state');
Route::get('/study/australia', [HomeController::class, 'studyAustralia'])->name('study.australia');
Route::get('/canada', [HomeController::class, 'Canada'])->name('canada');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/property/{id}', [HomeController::class, 'Property'])->name('user.property');
Route::get('/privacy/{id}', [HomeController::class, 'privacy'])->name('user.privacy');
Route::get('/ielts', [HomeController::class, 'ielts'])->name('ielts');
Route::get('/pte', [HomeController::class, 'pte'])->name('pte');
Route::get('/provider', [HomeController::class, 'Provider'])->name('provider');
Route::get('/australia', [HomeController::class, 'australia'])->name('australia');
Route::get('/united/kingdom', [HomeController::class, 'nitedKingdom'])->name('united.kingdom');
Route::get('/top/courses', [HomeController::class, 'topCourses'])->name('top.courses');
Route::get('/top/courses/details/{id}', [HomeController::class, 'topCoursesDetails'])->name('top.courses.details');
Route::get('/uk', [HomeController::class, 'uk'])->name('uk');

Route::get('/error', function () {
    return view('errors.404');
});
Route::get('/privacy-policy', [PrivacyController::class, 'page_view'])->name('privacy.view');
Route::get('/terms-and-condition', [PrivacyController::class, 'condition_page_view'])->name('condition.view');
Route::prefix('profile')->group(function () {
    Route::get('/', [HomeController::class, 'profileView'])->name('profile.view');
});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::middleware(['roles'])->group(function () {
            Route::group(['prefix' => 'role', 'as' => 'role.'], function(){
                Route::get('/add', [RoleController::class, 'index'])->name('add');
                Route::post('/new', [RoleController::class, 'create'])->name('new');
                Route::get('/manage', [RoleController::class, 'manage'])->name('manage');
                Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('delete');
            });

            Route::prefix('user')->group(function () {
                Route::get('/add', [UserController::class, 'index'])->name('user.add');
                Route::post('/new', [UserController::class, 'create'])->name('user.new');
                Route::get('/manage', [UserController::class, 'manage'])->name('user.manage');
                Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
                Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
                Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
            });
            Route::prefix('slider')->group(function () {
                Route::get('/add', [SliderController::class, 'index'])->name('slider.add');
                Route::post('/new', [SliderController::class, 'create'])->name('slider.new');
                Route::get('/manage', [SliderController::class, 'manage'])->name('slider.manage');
                Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
                Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
                Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
            });
            Route::prefix('category')->group(function () {
                Route::get('/add', [CategoryController::class, 'index'])->name('category.add');
                Route::post('/new', [CategoryController::class, 'create'])->name('category.new');
                Route::get('/manage', [CategoryController::class, 'manage'])->name('category.manage');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
                Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
            });
            Route::prefix('privacyy')->group(function () {
                Route::get('/add', [PrivacyController::class, 'index'])->name('privacyy.add');
                Route::post('/new', [PrivacyController::class, 'create'])->name('privacyy.new');
                Route::get('/manage', [PrivacyController::class, 'manage'])->name('privacyy.manage');
                Route::get('/edit/{id}', [PrivacyController::class, 'edit'])->name('privacyy.edit');
                Route::post('/update/{id}', [PrivacyController::class, 'update'])->name('privacyy.update');
                Route::post('/delete/{id}', [PrivacyController::class, 'delete'])->name('privacyy.delete');
            });
            Route::prefix('propertyy')->group(function () {
                Route::get('/add', [PropertyController::class, 'index'])->name('propertyy.add');
                Route::post('/new', [PropertyController::class, 'create'])->name('propertyy.new');
                Route::get('/manage', [PropertyController::class, 'manage'])->name('propertyy.manage');
                Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('propertyy.edit');
                Route::post('/update/{id}', [PropertyController::class, 'update'])->name('propertyy.update');
                Route::post('/delete/{id}', [PropertyController::class, 'delete'])->name('propertyy.delete');
            });
        });
    });

