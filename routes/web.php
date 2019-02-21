<?php



Route::get('/', function () {
    return view('auth.register');
});


Route::get('/shym', function () {
    return view('index');
});

Route::get('/tasbulak', function () {
    return view('third');
});

Route::get('tasks', 'TasksController@index')->name('tasks.index');
Route::get('tasks/create', 'TasksController@create')->name('tasks.create');
Route::post('tasks/store', 'TasksController@store')->name('tasks.store');

Route::get('tasks/{id}/edit','TasksController@edit')->name('tasks.edit');

Route::put('tasks/{id}/update', 'TasksController@update')->name('tasks.update');

Route::get('/main', 'TasksController@show')->name('main');
Route::get('/main/sort', 'TasksController@sort');

Route::delete('tasks/{id}/destroy', 'TasksController@destroy')->name('tasks.destroy');

Route::get('deals', 'DealsController@index')->name('deals.index');

Route::get('deals/create', 'DealsController@create')->name('deals.create');

Route::post('deals/store', 'DealsController@store')->name('deals.store');

Route::get('deals/{id}/edit','DealsController@edit')->name('deals.edit');

Route::put('deals/{id}/update', 'DealsController@update')->name('deals.update');

Route::get('deals/{id}/show', 'DealsController@show')->name('deals.show');

Route::delete('deals/{id}/destroy', 'DealsController@destroy')->name('deals.destroy');

Route::get('index', 'Show_prod@index')->name('index');
Route::get('main/{id_deals}','TasksController@inpage')->name('indexes.product-page');


Route::group(['middleware' => 'guest'], function(){
 // Route::get('/registration/register', function(){		return view('auth.register'); });
   Route::get('/registration/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   	Route::post('/registration/register', 'Auth\RegisterController@register');
   	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
   	Route::post('/login', 'Auth\LoginController@login');
	});
	

Route::group(['middleware' => 'auth'], function(){
	Route::get('/logout', function(){
		\Auth::logout();
		return redirect(route('login'));
	})->name('logout');

	//Route::get('/user/account', 'TasksController@show');
	Route::get('/user/account', 'AccountController@index')->name('account');
	//comments
	Route::post('/comments/add', 'CommentsController@addComment')->name('comments.add');

	//admin
	Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function(){
	Route::get('/', 'Admin\AccountController@index')->name('admin');
    
	Route::get('/categories', 'Admin\CategoriesController@index')->name('categories');
    Route::get('/categories/add', 'Admin\CategoriesController@addCategory')->name('categories.add');
    Route::get('/categories/edit/{id}', 'Admin\CategoriesController@editCategory')
                ->where('id', '\d+')
                ->name('categories.edit');
    Route::delete('/categories/delete', 'Admin\CategoriesController@deleteCategory')->name('categories.delete');    
    
    Route::get('/products', 'Admin\ProductsController@index')->name('products');
    Route::get('/products/add', 'Admin\ProductsController@showform')->name('products.add');
    Route::post('/products/add', 'Admin\ProductsController@addRequestProduct');
    Route::get('/products/edit/{id}', 'Admin\ProductsController@editProduct')
    			->where('id', '\d+')
    			->name('products.edit');

    Route::delete('/products/delete', 'Admin\ProductsController@deleteProduct')->name('products.delete');	
    Route::get('/createimage', 'Admin\ProductsController@addProduct');

Route::post('/addimage', 'Admin\ProductsController@addImage');	
Route::get('/users', 'Admin\UsersController@index')->name('users');
	});


});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/products/addpic', 'Admin\ProductsController@storePicture');