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

Route::get('/','homeController@index');

//category wise product
Route::get('/product-by-category/{category_id}','homeController@showProductByCategory');
Route::get('/product-by-manufacture/{manufacture_id}','homeController@showProductByManufacture');
Route::get('/view-product/{product_id}','homeController@productView');


//Back-end 
Route::get('/admin','adminController@dashboard');
Route::get('/dashboard','adminController@dashboard');
Route::get('/manage-order','adminController@manage_order');
Route::get('/view-order/{order_id}','adminController@view_order');
Route::get('/show-msg/{id}','adminController@show_msg');



//category related
Route::get('/add-category','categoryController@index');
Route::post('/save-category','categoryController@save_category');
Route::get('/all-category','categoryController@show_category');
Route::get('/unactive-category/{category_id}','categoryController@unactive_category');
Route::get('/active-category/{category_id}','categoryController@active_category');
Route::get('/edit-category/{category_id}','categoryController@edit_category');
Route::post('/update-category/{category_id}','categoryController@update_category');
Route::get('/delete-category/{category_id}','categoryController@delete_category');


//Manufacture related route
Route::get('/add-manufacture','manufactureController@index');
Route::post('/save-manufacture','manufactureController@save_manufacture');
Route::get('/all-manufacture','manufactureController@all_manufacture');
Route::get('/unactive-manufacture/{manufacture_id}','manufactureController@unactive_manufacture');
Route::get('/active-manufacture/{manufacture_id}','manufactureController@active_manufacture');
Route::get('/edit-manufacture/{manufacture_id}','manufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','manufactureController@update_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','manufactureController@delete_manufacture');


//Products related route
Route::get('/add-product','productController@add_product');
Route::post('/save-product','productController@save_product');
Route::get('/all-product','productController@all_product');
Route::get('/unactive-product/{product_id}','productController@unactive_product');
Route::get('/active-product/{product_id}','productController@active_product');
Route::get('/edit-product/{product_id}','productController@edit_product');
Route::post('/update-product/{product_id}','productController@update_product');
Route::get('/delete-product/{product_id}','productController@delete_product');


//Shopping page related
Route::get('/shop-grid','shoppingController@shop_grid');



//cart related route
Route::post('/add-to-cart','cartController@add_to_cart');
Route::get('/show-cart','cartController@show_cart');
Route::post('/update-cart','cartController@update_cart');
Route::get('/delete-cart/{rowId}','cartController@delete_cart');



//chekout related route
Route::get('/login-check','checkoutController@login_check');
Route::post('/customer-registration','checkoutController@registration');
Route::get('/checkout','checkoutController@check_out');
Route::post('/save-shipping','checkoutController@save_shipping');
Route::get('/payment','checkoutController@payment');
Route::post('/customer-login','checkoutController@customer_login');
Route::get('/customer-logout','checkoutController@customer_logout');
Route::post('/order-place','checkoutController@order_place');


//others
Route::get('/contact-page','otherController@contact_page');
Route::post('/send-msg','otherController@send_msg');
Route::post('/add-to-wishlist','otherController@wishlist_cart');
Route::get('/wishlist-page','otherController@wishlist_page');
Route::get('/about-page','otherController@about_page');



//Blog related route
Route::get('/blog','blogController@blog_page');
Route::post('/news','blogController@save_news');
Route::post('/upload','blogController@store');


Route::get('/blog-page','blogController@load_page');
Route::get('/blog-detail/{id}','blogController@detail_page');



