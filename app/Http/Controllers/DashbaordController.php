<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Kurir;
use App\Models\Order;
use App\Models\Product;
use App\Models\Toko;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    public function index(){
        $cabang = Cabang::all()->count();
        $kurir = Kurir::all()->count();
        $toko = Toko::all()->count();
        $produk = Product::all()->count();
        if(auth()->user()->role == 'superadmin'){
            $transaksi = Order::where('status', 'done')->whereDate('created_at', Carbon::now()->format('Y-m-d'))->sum('price');
            $courir_fee = Order::where('status', 'done')->whereDate('created_at', Carbon::now()->format('Y-m-d'))->sum('courir_fee');
            $app_fee = Order::where('status', 'done')->whereDate('created_at', Carbon::now()->format('Y-m-d'))->sum('app_fee');
            $order = Order::where('status', 'done')->whereDate('created_at', Carbon::now()->format('Y-m-d'))->count();
            return view('pages.admin.home', compact('cabang', 'kurir', 'toko', 'produk', 'transaksi', 'app_fee', 'courir_fee', 'order'));
        }else{
            $transaksi = Order::where('status', 'done')->where('cabang_id', auth()->user()->cabang_id)->whereDate('created_at', Carbon::now()->format('Y-m-d'))->sum('price');
            $courir_fee = Order::where('status', 'done')->where('cabang_id', auth()->user()->cabang_id)->whereDate('created_at', Carbon::now()->format('Y-m-d'))->sum('courir_fee');
            $app_fee = Order::where('status', 'done')->where('cabang_id', auth()->user()->cabang_id)->whereDate('created_at', Carbon::now()->format('Y-m-d'))->sum('app_fee');
            $order = Order::where('status', 'done')->where('cabang_id', auth()->user()->cabang_id)->whereDate('created_at', Carbon::now()->format('Y-m-d'))->count();
            return view('pages.admin.home', compact('cabang', 'kurir', 'toko', 'produk', 'transaksi', 'app_fee', 'courir_fee', 'order'));
        }
    }
}
