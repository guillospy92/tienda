<?php
//inyecion de dependencia para los productos para utilizarlos en cartController
Route::bind('product',function($slug){

    return App\Product::where('slug',$slug)->first();

});

Route::get('auth', function(){
    return OAuth::authorize('facebook');
});

Route::get('login', 'AdminController@indexfacebook');

Route::resource('mail','mailController');

//pagina de inicio por lado del frontend
Route::get('/',['as'=>'home','uses'=>'StoreController@index']);
//detalle de un producto en especifico
Route::get('product/{slug}',[ 'as'=>'detalle','uses'=>'StoreController@product']);
//ver una categoria en detalle
Route::get('categoria/{id}',['as'=>'category','uses'=>'StoreController@ver']);
//peticiones para el carrito de compra ver el carrito de compra
Route::get('cart/show',['as'=>'carrito','uses'=>'CartController@show']);
//peticones para agregar un producto al carrito de compra
Route::get('cart/add/{product}',['as'=>'cart-add','uses'=>'CartController@add']);
//peticiones para eliminar un producto del carrito de compra
Route::get('cart/delete/{product}',['as'=>'cart-delete','uses'=>'CartController@delete']);
//peticion para vaciar el carrito de compra
Route::get('cart/eliminar-todo',['as'=>'cart-eliminar','uses'=>'CartController@deleteall']);
//peticoion para actualizar el carrito de compra
Route::get('cart/update/{product}/{quantity}',['as'=>'cart-update','uses'=>'CartController@update']);
//ruta para ver la vista del detalle del producto
Route::get('orden/detalle',[
    'as'=>'orden-detalle',
    'middleware'=>'auth',
    'uses'=>'CartController@detalle'
]);
//ruta para login a usuarios
Route::get('auth/login', [
    'as' => 'login-get',
    'uses' => 'Auth\AuthController@getLogin'
]);
//ruta para login a usuarios
Route::post('auth/login', [
    'as' => 'login-post',
    'uses' => 'Auth\AuthController@postLogin'
]);
//ruta para finalizar una session
Route::get('auth/logout', [
    'as' => 'logout',
    'uses' => 'Auth\AuthController@getLogout'
]);

// ruta para registrar un usuario
Route::get('auth/register', [
    'as' => 'register-get',
    'uses' => 'Auth\AuthController@getRegister'
]);

// ruta para registrar un usuario
Route::post('auth/register', [
    'as' => 'register-post',
    'uses' => 'Auth\AuthController@postRegister'
]);
//ruta para ejecutart la logica de la api de paypal
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

//rutas para el lado del administrador

Route::group([ 'middleware' => ['auth']], function() {
//ruta para obtener las categorias en tipo json
    Route::get('categorias', 'AdminController@obtener');
//mostrar las categorias los productos los usuarios y las ordenes
    Route::get('admin/category', 'AdminController@index');
//ruta para crear una categoria
    Route::post('admin/create', 'AdminController@store');
//ruta para editar una categoria
    Route::get('admin/{id}/edit', 'AdminController@edit');
//ruta para acutualizar una categoria
    Route::put('admin/category/update/{id}', 'AdminController@update');
//ruta para eliminar una categoria
    Route::delete('admin/category/delete/{id}', 'AdminController@delete');

//ruta para eliminar un producto
    Route::delete('admin/producto/delete/{id}', ['as' => 'deleteproducto', 'uses' => 'AdminController@productodelete']);
//ruta de tipo json para obetenr los productos
    Route::get('productos-json', 'AdminController@obtenerproductos');
//ruta para crear un nuevo producto
    Route::post('storeproducto', ['uses' => 'AdminController@storeproducto', 'as' => 'storeproducto']);
//ruta para editar un producto
    Route::get('admin/product/{id}/edit', ['as' => 'producactualizar', 'uses' => 'AdminController@editproduct']);
//ruta para actualizar un producto
    Route::put('admin/product/update/{id}', ['uses' => 'AdminController@updateproduct', 'as' => 'actualizarproducto']);
//eliminar un usuario
    Route::delete('admin/usuario/eliminar/{id}', ['uses' => 'AdminController@elimarusuario', 'as' => 'delete-user']);
//agregar un usuario
    Route::post('storeuser', ['uses' => 'AdminController@storeuser', 'as' => 'storeuser']);
//editar un usuario
    Route::get('admin/user/{id}/edit', ['as' => 'actualizaruser', 'uses' => 'AdminController@edituser']);
//actualizar un usuario
    Route::put('admin/user/update/{id}', ['uses' => 'AdminController@updateuser', 'as' => 'actualizarusuario']);
//eliminar una orden
    Route::delete('admin/orden/eliminar/{id}', ['uses' => 'AdminController@elimarorden', 'as' => 'delete-orden']);

    Route::post('ordenes', ['uses' => 'AdminController@ordenget', 'as' => 'ordenget']);

});





















