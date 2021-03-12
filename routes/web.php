<?php
use App\City;
use App\ShopType;
use App\Ad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','User\HomeController@home');
Route::get('city-wise/advertisement/{id}/{slug}','User\HomeController@city_wise');
Route::get('type-wise/advertisement/{id}/{slug}','User\HomeController@type_wise');
Route::group(['middleware' => 'auth'],function(){

    //user
    Route::get('user-dashboard',function(){
        $table = Ad::where('user_id',Auth::user()->id)->get();
        return view('profile',compact('table'));
    });

    Route::get('user/upload-post-page','User\AdController@upload_page');
    Route::post('user/upload-post','User\AdController@store_ad');
    Route::get('user/delete-post/{id}','User\AdController@del_ad');


    // admin
        Route::get('/admin', function () {
            $cities = City::all();
            $types = ShopType::all();
            return view('admin.dashboard',compact('cities','types'));
        });

        Route::post('city-create','Admin\CityController@store');
        Route::post('city-update','Admin\CityController@edit');
        Route::get('city-delete/{id}','Admin\CityController@del');


        Route::post('shoptype-create','Admin\ShopTypeController@store');
        Route::post('shoptype-update','Admin\ShopTypeController@edit');
        Route::get('shoptype-delete/{id}','Admin\ShopTypeController@del');
});


Route::get('/city-wise-addvertisement', function () {
    return view('citywise');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
