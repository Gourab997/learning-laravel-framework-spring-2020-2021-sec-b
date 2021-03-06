<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\ProductController;


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
    return view('home');
});
Route::get("login",[LoginController::class,'index']);
  
    Route::post("login",[LoginController::class,'verify']);


Route::group(['middleware'=>'sess'],function () {
 
Route::get("customer",[CustomerController::class,'index']);

    
Route::get("customer",[CustomerController::class,'index']);
Route::get("customer/userlist",[CustomerController::class,'userlist'])->name('customer.userlist');

Route::get("customer/create",[CustomerController::class,'create'])->name('customer.create');
Route::post("customer/create",[CustomerController::class,'store']);

Route::get("customer/edit/{id}",[CustomerController::class,'edit'])->middleware('sess')->name('customer.edit');
Route::post("customer/edit/{id}",[CustomerController::class,'update']);


Route::get("customer/delete/{id}",[CustomerController::class,'delete'])->name('customer.delete');
Route::post("customer/delete/{id}",[CustomerController::class,'destroy']);
Route::get("customer/details/{id}",[CustomerController::class,'show']);

Route::get("logout",[LogoutController::class,'index']);

Route::get("admin",[AdminController::class,'index']);
Route::post("admin", [AdminController::class,'verify']);

Route::get("sales",[SalesController::class,'index']);
Route::post("sales", [SalesController::class,'verify']);
Route::get("system/sales/physical_store",[SalesController::class,'physical_store']);
Route::get("system/sales/physical_store/sales_log",[SalesController::class,'sales_log']);
Route::get("system/sales/social_media",[SalesController::class,'social_media']);
Route::get("system/sales/ecommerce",[SalesController::class,'ecommerce']);
Route::get("pdf",[DynamicPDFController::class,'index']);
Route::get("pdf",[DynamicPDFController::class,'pdf']);
});

Route::get("system/product_management/existing_products",[ProductController::class,'existing_products']);
Route::get("system/product_management/upcoming_prroducts",[ProductController::class,'upcoming_products']);
Route::get("system/prroduct_management/add_product",[ProductController::class,'add_product']);


Route::get('/admin',[LoginController::class,'superAdminDashboard'])->name('superadmin.dashboard');
Route::get('/customer',[LoginController::class,'customerDashboard'])->name('admin.dashboard');
Route::get('/accountant',[LoginController::class,'accountantDashboard'])->name('author.dashboard');
Route::get('/salesman',[LoginController::class,'salesmanDashboard'])->name('user.salesman');
Route::get('/businesspartner',[LoginController::class,'businesspartnerDashboard'])->name('businesspartner.dashboard');
Route::get('/vendor',[LoginController::class,'vendorDashboard'])->name('vendor.dashboard');
});




  //upcoming

  Route::get('/upcoming_products/edit/{id}', [ProductController::class,'editUpcomingProduct'])->name('upcomingproduct.edit');
  Route::post('/upcoming_products/update', [ProductController::class,'updateUpcomingProduct'])->name('product.updateProducts');

  Route::get('/upcoming_products/delete/{id}', [ProductController::class,'deleteUpcomingProduct'])->name('upcomingproduct.delete');
  Route::post('/upcoming_products/deleted/{id}', [ProductController::class,'deletedUpcomingProduct'])->name('upcomingproduct.deleted');
  
  Route::get('/product/{product_id}', [ProductController::class,'DetailsUpcomingProduct'])->name('upcomingproduct.details');