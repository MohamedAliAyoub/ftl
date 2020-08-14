<?php

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


Route::get('client/login', 'AuthController@login');
Route::get('client/register', 'AuthController@register');
Route::post('client/login', 'AuthController@login_post')->name('client.login');
Route::post('client/register', 'AuthController@clientRegister')->name('client.register');



Route::middleware('client')->group(function () {

    Route::get('/client/path', function(){
        return auth()->guard('client_web')->user()->name;  
      });

    Route::get('client/logout','AuthController@logout')->name('client.logout');

    Route::get('/AddToCart/{product}', 'Dashboard\ProductController@AddToCart')->name('cart.add');
  Route::get('/shopping-cart', 'Dashboard\ProductController@showCart')->name('cart.show');

  Route::delete('product/{product}', 'Dashboard\ProductController@remove')->name('product.remove');

  Route::put('product/{product}', 'Dashboard\ProductController@updateShop')->name('product.updateShop');

});


Route::get('/', 'Frontend\MainController@index')->name('index');
Route::get('marketpalce', 'Frontend\MainController@indexMarket');
Route::get('Category', 'Frontend\MainController@indexCategory')->name('frontend.category');
Route::get('category/{id}', 'Frontend\MainController@indexSubCategory')->name('frontend.subCategories');











// });
 Auth::routes();


 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/AdvancedRegister', function(){
    return view('auth.AdvancedRegister');
 });

  Route::get('/chooseLogin', function(){
  return view('auth.chooseLogin');
 });


    

 //category routes
            Route::resource('categories', 'Dashboard\CategoryController')->except(['show']);

    //category routes
            Route::resource('sub_categories', 'Dashboard\CategorySubController')->except(['show']);
           Route::get('GetSubCategory/{category}', 'Dashboard\CategoryController@GetSubCategory')->name('category.sub');
           Route::get('Getproducts/{product}', 'Dashboard\ProductController@GetSubCategoryProduct')->name('sub.product');
   //product routes
            Route::resource('products', 'Dashboard\ProductController');


    //client routes
            Route::resource('clients', 'Dashboard\ClientController')->except(['show']);
            Route::resource('clients.orders', 'Dashboard\Client\OrderController')->except(['show']);

            //order routes
            Route::resource('orders', 'Dashboard\OrderController');
            Route::get('/orders/{order}/products', 'Dashboard\OrderController@products')->name('orders.products');

// tender
            Route::get('/step1/start', 'Dashboard\TenderController@step1');
            Route::get('/tender/index', 'Dashboard\TenderController@index');
            Route::post('/step2', 'Dashboard\TenderController@step2');
            Route::post('/step3', 'Dashboard\TenderController@step3');
            Route::get('/view/{Tender}', 'Dashboard\TenderController@view')->name('view');

// end of tender
     
            Route::get('about', 'Frontend\MainController@about')->name('about');
            Route::get('lcl', 'Frontend\MainController@lcl')->name('lcl');
            Route::get('fcl', 'Frontend\MainController@fcl')->name('fcl');
            Route::get('bulk', 'Frontend\MainController@bulk')->name('bulk');
            Route::get('contact', 'Frontend\MainController@contact')->name('contact');
        
            
            Route::get('find_quote','Frontend\RequestController@find_quote')->name('find_quote');
            Route::get('find_quote1','Dashboard\SubController@find_quote')->name('find_quote1');
            Route::get('request','Frontend\RequestController@request')->name('request');
            Route::get('request/lcl','Frontend\RequestController@requestLcl')->name('requestLcl');
            Route::get('request/fcl','Frontend\RequestController@requestFcl')->name('requestFcl');
            Route::get('request/bulk','Frontend\RequestController@requestBulk')->name('requestBulk');
            Route::get('request/quote','Frontend\RequestController@quote')->name('request.quote');
            Route::get('request/request_quote','Frontend\RequestController@request_quote')->name('request.request_quote');
            Route::post('request_quote/store','Frontend\RequestController@store')->name('request_quote.store');
            Route::post('request_quote/store/lcl','Frontend\RequestController@storeLcl')->name('request_quote.storeLcl');
            Route::post('request_quote/store/fcl','Frontend\RequestController@storeFcl')->name('request_quote.storeFcl');
            Route::post('request_quote/store/bulk','Frontend\RequestController@storeBulk')->name('request_quote.storeBulk');
          Route::get('tutorials','Frontend\MainController@tutorials')->name('tutorials');
          Route::get('booking','Frontend\MainController@booking')->name('booking');
          Route::get('booking_result','Frontend\MainController@booking_result')->name('booking_result');
          Route::get('tracking_map','Frontend\MainController@tracking_map')->name('tracking_map');
          Route::get('tracking','Frontend\MainController@tracking')->name('tracking');


          Route::get('reference','Frontend\ReferenceController@reference')->name('reference');
          Route::get('references_fright','Frontend\ReferenceController@references_fright')->name('references_fright');
          Route::get('references_imo','Frontend\ReferenceController@references_imo')->name('references_imo');
          Route::get('references_quality','Frontend\ReferenceController@references_quality')->name('references_quality');
          Route::get('references_services','Frontend\ReferenceController@references_services')->name('references_services');
            

            // mina routes
      Route::get('/import_excel', 'Dashboard\ImportExcelController@index');
      Route::post('/import_excel/import', 'Dashboard\ImportExcelController@import');
      Route::get('/quotes/like/request', 'Dashboard\SubController@find_quote')->name('quotes.like.request');
      Route::post('requests/storing', 'Frontend\RequestController@storing')->name('storing');
      Route::post('booking', 'Dashboard\SubController@booking')->name('booking');

      Route::get('/allShippment', 'Dashboard\SubController@allShippment')->name('allShippment');


          // end of mina


  


Route::middleware('sub')->group(function () {


      Route::get('company/create', 'Dashboard\CompanyController@create')->name('company.create');
      Route::get('company/{company}', 'Dashboard\CompanyController@edit')->name('company.edit');
      Route::post('company', 'Dashboard\CompanyController@store')->name('company.store');
      Route::post('company/{company}', 'Dashboard\CompanyController@update')->name('company.update');
      Route::post('user/{user}', 'Dashboard\CompanyController@updateUser')->name('user.update');
      Route::get('account', 'Dashboard\SubController@account')->name('account');
      Route::get('/sub/offers', 'Dashboard\SubController@index');
      Route::get('/sub/requests', 'Dashboard\SubController@request')->name('sub.requests');
      Route::get('/sub/compare', 'Dashboard\SubController@compare')->name('sub.compare');
      Route::get('/sub/myRequests', 'Dashboard\SubController@myRequests');
      Route::get('/sub/sub_offers', 'Dashboard\SubController@sub_offers');
      Route::get('/sub/edit/{id}', 'Dashboard\SubController@edit')->name('sub.edit');
      Route::get('/sub/create', 'Dashboard\SubController@create')->name('sub.create');
      Route::get('/sub_lcl/create', 'Dashboard\SubController@create')->name('sub.create.lcl');
      Route::post('/sub/store', 'Dashboard\SubController@store')->name('sub.store');
      Route::post('/sub/update/{id}', 'Dashboard\SubController@update')->name('sub.update');
      Route::post('/sub/requests/delete/{id}', 'Dashboard\SubController@delete')->name('sub.request.delete');

      });


