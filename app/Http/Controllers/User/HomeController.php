<?php

namespace App\Http\Controllers\User;
use App\City;
use App\ShopType;
use App\Ad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $types = ShopType::all();
        $cities = City::all();
        return view('welcome',compact('types','cities'));
    }

    public function city_wise($id = null){
       $shoptypes = ShopType::all();
       $city = City::find($id);
       $cities = City::all();
       $table = Ad::where('city_id',$id)->get();
       return view('citywise',compact('cities','table','shoptypes','city'));
    }
    public function type_wise($id = null){
        $shoptypes = ShopType::all();
        $ShopType = ShopType::find($id);
        $cities = City::all();
        $table = Ad::where('shop_type_id',$id)->get();
        return view('typewise',compact('cities','table','shoptypes','ShopType'));
     }
}
