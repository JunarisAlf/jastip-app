<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Cabang;
use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $ads = Ads::where('is_active', true)->get();
        $cabang = Cabang::all();
        return view('pages.customer.home-web', ['ads' => $ads, 'cabang' => $cabang]);
    }
    public function apkIndex(){
        $ads = Ads::where('is_active', true)->get();
        $cabang = Cabang::all();
        return view('pages.customer.home', ['ads' => $ads, 'cabang' => $cabang]);
    }
    public function searchRes(Request $req){
        $query = $req->cari;
        $products = [];
        if($query == null){
            $products = Product::all();
        }else{
            $products = Product::where('name', 'like', '%' . $query . '%')->get();
        }
        $ads = Ads::where('is_active', true)->get();
        $cabang = Cabang::all();
        return view('pages.customer.search-result', ['ads' => $ads, 'cabang' => $cabang, 'products' => $products]);
    }
    public function cabangRes(Request $req){
        $query = $req->id;
        $products = [];
        if($query == null){
            $products = Product::all();
        }else{
            $products = Cabang::with('tokos.products')->find($query)->tokos->flatMap->products;
        }
        $ads = Ads::where('is_active', true)->get();
        $cabang = Cabang::all();
        return view('pages.customer.cabang-result', ['ads' => $ads, 'cabang' => $cabang, 'products' => $products]);
    }
    public function catalog(Request $req){
        $toko = Toko::with('products')->where('slug', $req->slug)->firstOrFail();
        return view('pages.customer.catalog', ['toko' => $toko]);
    }
    public function order(){
        return view('pages.customer.order');
    }
    public function confirm(){
        return view('pages.customer.confirm');
    }
}
