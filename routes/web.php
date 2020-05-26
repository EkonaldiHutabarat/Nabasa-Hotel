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


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
	Route::get('/dashboard','adminController@index')->name('dashboard');
	Route::post('/kamar/createkamar','adminController@tambah');
	Route::get('/{id}/edit','adminController@edit');
	Route::post('/{id}/update','adminController@update');	
	Route::get('/{id}/delete','adminController@delete');
	Route::get('/registerAdmin','RegController@FormcreateAdmin');
	Route::post('/daftarAdmin','RegController@createAdmin');
	//ruangRapat
	Route::get('/RuangRapat','RuangRapatController@index');
	Route::post('/RuangRapat/createruangrapat','RuangRapatController@tambah');
	Route::get('/RuangRapat/{id}/hapus','RuangRapatController@test');
	// Route::get('/RuangRapat/{id}/edit','RuangRapatController@edit');
	Route::get('/RuangRapat/edit/{id}','RuangRapatController@edit');
	Route::post('/{id}/gas','RuangRapatController@gas');


	Route::post('/konfirmasi/{id}','BuatPesananController@konfirmasi');
	



	//menu restaurant
	Route::get('/Restaurant','RestaurantController@index');
	Route::post('/Restaurant/createHidangan','RestaurantController@tambah');
	Route::get('/Restaurant/{id}/hapus','RestaurantController@test');
	Route::get('/{id}/edit','RestaurantController@edit');
	Route::post('/{id}/update','RestaurantController@update');
	//daftar pemesanan kamar
	Route::get('/DaftarPesananKamar','DaftarPemesananKamar@index');
	//Daftar Pemesanan Ruang Rapat
	Route::get('DaftarPemesananRuangrapat','DaftarPemesananRuangrapatController@index');
	//Daftar Pemesanan makanan
	Route::get('DaftarPemesananMakanan','DaftarPemesananMakananController@index');

	//Bukti Pembayaran
	Route::get('BuktiTransfer','BuktiPembayaranController@index');
	Route::get('/BuktiTransfer/{id}/hapus','BuktiPembayaranController@test');


	//createkatehorikamar
	Route::get('/kategorikamar','KamarCategoryController@kategorikamar');
	Route::post('/kategorikamar/createkategori','KamarCategoryController@tambah');
	// Route::get('/{id}/delete','KamarCategoryController@delete');
	//createmenuresaturant
	Route::get('/menu','KategorimenuResController@index');
	Route::post('/menu/createmenuRes','KategorimenuResController@tambah');
	Route::get('/menu/{id}/hapus','KategorimenuResController@test');
	//create fasilitas
	Route::get('/fasilitas','fasilitasController@index');
	Route::post('/fasilitas/createfasilitas','fasilitasController@tambah');
	Route::get('/fasilitas/{id}/hapus','fasilitasController@test');

	//fasilitas Umum
	Route::get('/fasilitasumum','fasilitasUmumController@umum');
	Route::post('/fasilitasumum/createfasilitasumum','fasilitasUmumController@add');
	Route::get('/fasilitasumum/{id}/hapus','fasilitasUmumController@test');

	
});

	Route::group(['middleware'=>['auth','customer']],function(){
	Route::get('/customer','CustomerController@index')->name('customer');
	Route::get('pesanmakanan/{id}','PemesananmakananController@create');
	Route::post('/daftarpesanankamar/{ids}','BuatPesananController@buatpesanan');
	Route::get('/daftarpesanankamar','BuatPesananController@index');
	Route::get('/daftarpesanankamar/{id}/hapus','BuatPesananController@test');
	Route::post('/pembayaran','PembayaranController@add');
	Route::get('/pembayaran','PembayaranController@index');
	Route::get('/BuktiTransfer','BuktiPembayaranController@index');
	Route::post('/conference','PemesananRuangRapat@addbooking');

	

	Route::get('/', function () {return view('Interface.index');});
	Route::get('/', function () {return view('Interface.facilities');});
	Route::get('/', function () {return view('Interface.contact');});
	Route::get('/', function () {return view('Interface.conference');});
	Route::get('/', function () {return view('Interface.restaurant');});
	Route::get('/', function(){return view ('Interface.booking');});
	
});
	Route::get('/detailsRoom/{id_kategori}','PemesananKamarController@index');
	Route::get('/facilities', function () {return view('Interface.facilities');});
	Route::get('/contact', function () {return view('Interface.contact');});
	Route::get('/conference', function () {return view('Interface.conference');});
	Route::get('/restaurant', function () {return view('Interface.restaurant');});
	Route::get('/booking', function(){return view ('Interface.booking');});
	Route::post('/reg','RegController@createAdmin');
	Route::post('/registerUser','RegController@createUser');

	//ruang rapat
	Route::get('/conference','PemesananRuangRapat@index');


	//pemesanan
	Route::get('/detailsRoom/{id}','PemesananKamarController@index');
	Route::get('/displayKamar/{id}','displaykamarController@displayKamar');
	Route::get('/restaurant', 'RestaurantCustomerController@hidangan');
	Route::get('/index','IndexController@index');
	Route::get('/daftarpemesananmakanan','CustomerKamarCotroller@customermakanan');
	// Route::get('DaftarPemesananMakanan','DaftarPemesananMakananController@daftarforcustomer');
	Route::get('/daftarpemesananRuangRapat','CustomerKamarCotroller@customerRuangRapat');


	//pemesanan makanan
		Route::get('/detailmakanan','PemesananmakananController@index');


	//faslitasumum
	Route::get('/facilities', 'fasilitasUmumCustomerController@fasiUMUM');




Auth::routes();


Route::get('/register', function(){return view ('/auth/register');});

Route::post('/login','LoginController@login');
Route::post('/logout','LoginController@logout')->name('logout');






