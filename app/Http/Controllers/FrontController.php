<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Cabang;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $ads = Ads::where('is_active', true)->get();
        $cabang = Cabang::all();
        return view('pages.customer.home', ['ads' => $ads, 'cabang' => $cabang]);
    }
    public function searchRes(){
        $ads = Ads::where('is_active', true)->get();
        $cabang = Cabang::all();
        return view('pages.customer.search-result', ['ads' => $ads, 'cabang' => $cabang]);
    }
    public function catalog(){
        return view('pages.customer.catalog');
    }
    public function order(){
        return view('pages.customer.order');
    }
    public function confirm(){
        return view('pages.customer.confirm');
    }
}
