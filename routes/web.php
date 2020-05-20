<?php


// Route::get('/', function () {
    // return view('welcome');
// });


// Front Home

Route::get('/',[
	'uses' => 'FrontController@index',
	'as' => '/'
]);

Route::get('/category/products/{id}/{name}',[
	'uses' => 'FrontController@category',
	'as' => 'category'
]);

Route::get('/product-details/{id}/{pro}',[
	'uses' => 'FrontController@DetailsProduct',
	'as' => 'productDetails'
]);


Route::get('/blog',[
	'uses' => 'FrontController@blog',
	'as' => 'blog'
]);

Route::get('/blogSingle',[
	'uses' => 'FrontController@blogSingle',
	'as' => 'blogSingle'
]);

Route::get('/contact',[
	'uses' => 'FrontController@contact',
	'as' => 'contact'
]);

//Route::get('/cart',[
	//'uses' => 'FrontController@cart',
	//'as' => 'cart'
//]);


// Cart

Route::post('/cart/add',[
	'uses' => 'CartController@AddtoCart',
	'as' => 'addCart'
]);

Route::get('/cart/show',[
	'uses' => 'CartController@ShowCart',
	'as' => 'cartShow'
]);

Route::get('/cart/delete/{id}',[
	'uses' => 'CartController@DeleteCart',
	'as' => 'cartItemDelete'
]);

Route::post('/cart/update',[
	'uses' => 'CartController@UpdateCart',
	'as' => 'updateCart'
]);

// Checkout
Route::get('/checkout',[
	'uses' => 'CheckoutController@index',
	'as' => 'checkout'
]);

Route::post('/customer/sign-up',[
		'uses' => 'CheckoutController@Addcustomer',
		'as' => 'newCustomer'
]);
Route::get('/checkout/shipping',[
	'uses' => 'CheckoutController@shippingFrom',
	'as' => 'shipping'
]);

Route::Post('/shipping/save',[
	'uses' => 'CheckoutController@SaveShipping',
	'as' => 'shippingsave'
]);

Route::get('/checkout/payment',[
	'uses' => 'CheckoutController@Payment',
	'as' => 'checkoutpayment'
]);

Route::post('/checkout/order',[
	'uses' => 'CheckoutController@NewOrder',
	'as' => 'newOrder'
]);

Route::post('/checkout/customer-Login',[
	'uses' => 'CheckoutController@CustomerLoginCheck',
	'as' => 'customerLogin'
]);

Route::post('/checkout/customer-Logout',[
	'uses' => 'CheckoutController@CustomerLogout',
	'as' => 'custLogout'
]);




// Auth
Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/home',[
	'uses' => 'HomeController@index',
	'as' => 'home'
]);

Route::get('/category/add',[
	'uses' => 'CategoryController@index',
	'as' => 'addCategory'
]);

Route::post('/category/save',[
	'uses' => 'CategoryController@saveCate',
	'as' => 'newCategory'
]);

Route::get('/category/manage',[
	'uses' => 'CategoryController@manageCate',
	'as' => 'manageCategory'
]);

Route::get('/category/unpublish/{id}',[
	'uses' => 'CategoryController@publishCat',
	'as'=>'unpublishCat'
]);

Route::get('/category/publish/{id}',[
	'uses' => 'CategoryController@unpublishCat',
	'as'=>'publishCat'
]);

Route::get('/category/edit/{id}',[
	'uses' => 'CategoryController@editCategory',
	'as'=>'editCat'
]);

Route::post('/category/update',[
	'uses' => 'CategoryController@updateCategory',
	'as'=>'updateCategory'
]);

Route::get('/category/delete/{id}',[
	'uses' => 'CategoryController@deleteCate',
	'as'=>'deleteCat'
]);

Route::get('/brand/add',[
	'uses' => 'BrandController@index',
	'as'=>'addBrand'
]);

Route::post('/brand/save',[
	'uses'=>'BrandController@saveBrand',
	'as'=>'newBrand'
]);

Route::get('/brand/manage',[
	'uses' => 'BrandController@managebrand',
	'as' => 'brandManage'
]);

Route::get('/brand/unpublish/{id}',[
	'uses'=>'BrandController@unpublishMethod',
	'as'=>'unpublish'
]);

Route::get('brand/publish/{id}',[

	'uses'=>'BrandController@publishMethod',
	'as'=>'publish'
]);

Route::get('/brand/edit/{id}',[
	'uses' => 'BrandController@editBrand',
	'as'=>'editBrand'
]);

Route::post('/brand/update',[
	'uses' => 'BrandController@updateBrand',
	'as'=>'updateBrand'
]);

Route::get('/brand/delete/{id}',[
	'uses'=> 'BrandController@deleteBrand',
	'as'=>'deleteBrand'
]);

/*Product*/
Route::get('/product/add',[
	'uses' => 'ProductController@index',
	'as' => 'addPro'
]);

Route::post('/product/save',[
	'uses' => 'ProductController@saveProduct',
	'as'=>'newProduct'
]);

Route::get('/product/manage',[
	'uses' => 'ProductController@manageProduct',
	'as' =>'managePro'
]);

Route::get('/product/edit/{id}',[
	'uses' => 'ProductController@editPoduct',
	'as' => 'editPro'
]);

Route::post('/product/update',[
	'uses' => 'ProductController@updateProduct',
	'as' => 'updatePro'
 ]);

Route::get('/product/delete/{id}',[
	'uses' => 'ProductController@deleteProduct',
	'as' => 'deletePr'
]);

// Manage order
Route::get('/order/manage',[
	'uses' => 'OrderController@OrderManage',
	'as' => 'manageOrder'
]);

Route::get('/order/view/{id}',[
	'uses' => 'OrderController@ViewDetailsOrder',
	'as' => 'viewOrderDetails'
]);

Route::get('/order/invoice/{id}',[
	'uses' => 'OrderController@ViewInvoice',
	'as' => 'invoice'
]);

Route::get('/order/printinvoice/{id}',[
	'uses' => 'OrderController@InvoicePrint',
	'as' => 'printInvoice'
]);
