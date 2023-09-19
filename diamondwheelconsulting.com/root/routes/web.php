<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\serviceController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/userindex', [homeController::class,'index'])->name('userindex');

Route::get('/home', [homeController::class,'redirect'])->name('home');

route::get('/aboutCom', [homeController::class,'aboutcom'])->name('aboutCom');
route::get('/aboutTeam', [homeController::class,'abouteam'])->name('aboutTeam');
route::get('/aboutVis', [homeController::class,'aboutvis'])->name('aboutVis');
route::get('/aboutMis', [homeController::class,'mission'])->name('aboutMis');
route::get('/aboutValues', [homeController::class,'values'])->name('aboutValues');
route::get('/Contact', [homeController::class,'contact'])->name('Contact');
route::get('/News', [homeController::class,'news'])->name('News');
route::get('/boardD', [homeController::class,'boardofD'])->name('boardD');



// Services Routes
route::get('/Service', [homeController::class,'service'])->name('Service');
route::get('/medicalservices', [serviceController::class,'medservices'])->name('medicalservices');
route::get('/businessadvisory', [serviceController::class,'busiad'])->name('businessadvisory');
route::get('/clinicalaudit', [serviceController::class,'aud'])->name('clinicalaudit');
route::get('/corporatehealth', [serviceController::class,'cophealth'])->name('corporatehealth');
route::get('/copmedical', [serviceController::class,'copmed'])->name('copmedical');
route::get('/medbills', [serviceController::class,'medbil'])->name('medbills');
route::get('/emreferrals', [serviceController::class,'medreferrals'])->name('emreferrals');
route::get('/employeewellness', [serviceController::class,'wellness'])->name('employeewellness');
route::get('/healthfacility', [serviceController::class,'hfacility'])->name('healthfacility');
route::get('/underC', [serviceController::class,'underconst'])->name('underC');
route::get('/impactAna', [serviceController::class,'analysis'])->name('impactAna');
route::get('/actuarial', [serviceController::class,'actservice'])->name('actuarial');
route::get('/busiadvisory', [serviceController::class,'advisory'])->name('busiadvisory');




route::get('/details', [homeController::class,'newsdetails'])->name('details');
route::get('/details1', [homeController::class,'portdetails1'])->name('details1');
route::get('/details2', [homeController::class,'portdetails2'])->name('details2');
route::get('/details3', [homeController::class,'portdetails3'])->name('details3');
route::get('/richardboateng', [homeController::class,'richard'])->name('richardboateng');
route::get('/samuelquarshie', [homeController::class,'samuel'])->name('samuelquarshie');
route::get('/advisoryboard', [homeController::class,'boardAdv'])->name('advisoryboard');
route::get('/adobea', [homeController::class,'dobea'])->name('adobea');
route::get('/oddoye', [homeController::class,'rodney'])->name('oddoye');
route::get('/takyi', [homeController::class,'sammy'])->name('takyi');
route::get('/lebene', [homeController::class,'martina'])->name('lebene');

route::get('/add_news', [adminController::class,'uploadnews'])->name('add_news');
route::get('/edit_news', [adminController::class,'editNews'])->name('edit_news');
route::post('/edit_news', [adminController::class,'updateTrend']);
route::get('/add_docs', [contactController::class,'docs'])->name('add_docs');

route::post('/upload_trends', [adminController::class,'trendupload'])->name('upload_trends');
route::post('/upload_docs', [adminController::class,'docs_upload'])->name('upload_docs');

Route::post('/sendMail', [contactController::class, 'storeContactForm'])->name('sendMail');


route::get('/delete_trends/{id}', [adminController::class,'deletetrend'])->name('delete_trends/{id}');
route::get('/delete_docs/{id}', [adminController::class,'deletedocs'])->name('delete_docs/{id}');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
});
