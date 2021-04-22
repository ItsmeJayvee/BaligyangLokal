<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', 'IndexController@showAllCategories');

Route::get('/login', 'AuthController@showLogin');
Route::get('/createAccount', 'AuthController@showRegister');
Route::get('/logout', 'AuthController@logoutUser');

Route::get('/mensapparel', 'CategoriesController@showAllMensApparel');
Route::get('/womensapparel', 'CategoriesController@showAllWomensApparel');
Route::get('/kitchen', 'CategoriesController@showAllKitchen');
Route::get('/electronics', 'CategoriesController@showAllElectronics');
Route::get('/toddlers', 'CategoriesController@showAllToddlers');
Route::get('/mensshoes', 'CategoriesController@showAllMensShoes');
Route::get('/womensshoes', 'CategoriesController@showAllWomensShoes');

Route::get('/user/dashboard', 'UserController@showUserDashboard');
Route::get('/user/order', 'UserController@showUserOrder');
Route::get('/user/accountSettings', 'UserController@showUserAccount');

Route::get('/lokaladm1ndashb04rd', 'AdminController@showAdminDashboard');
Route::get('/lokalr1d3rd4shb04rd', 'AdminController@showRiderDashboard');
Route::get('/lokals3ll3rd4shb04rd', 'AdminController@showSellerDashboard');

Route::get('/lokalr1d3rdash', 'RiderController@showDashBoard');
Route::get('/lokalriderdel1v3ries', 'RiderController@showDeliveries');
Route::get('/lokalriders3tt1ngs', 'RiderController@showSettings');

Route::get('/lokals3llerd4sh', 'SellerController@showSellerDashboard');
Route::get('/lokalsell3r1tems', 'SellerController@showSellerItems');
Route::get('/lokalsell3r1tems/add1t3ms', 'SellerController@showAddItems');
Route::get('/lokals3ller0rd3rs', 'SellerController@showSellerOrders');
Route::get('/lokalsell3rp4ym3nts', 'SellerController@showSellerPayments');

Route::post('/authenticate/lokaluser', 'AuthController@authenticateUser');
Route::post('/authenticate/lokalseller', 'AuthController@authenticateSeller');
Route::post('/authenticate/lokalrider', 'AuthController@authenticateRider');
Route::post('/authenticate/lokaladm1n1strat0r', 'AuthController@authenticateAdmin');
Route::post('/register', 'AuthController@registerUser');