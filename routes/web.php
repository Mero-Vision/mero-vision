<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\TechnologyStackController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('about',[AboutController::class,'index']);
Route::get('technology-stack', [TechnologyStackController::class, 'index']);

Route::get('our-team', [OurTeamController::class, 'index']);

Route::get('packages/web-packages', [PackagesController::class, 'webIndex']);

Route::get('packages/mobile-packages', [PackagesController::class, 'mobileIndex']);
Route::get('packages/web-application-packages', [PackagesController::class, 'webApplicationIndex']);


Route::get('privacy-policy', [PrivacyPolicyController::class, 'index']);

Route::get('terms-and-condition', [TermsAndConditionController::class, 'index']);