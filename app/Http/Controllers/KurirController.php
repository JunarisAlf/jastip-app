<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index(){
        return view('pages.admin.kurir');
    }
    public function cekSaldoPage(Request $req){
        $wa_number = $req->wa;
        if($wa_number != null){
            $kurir = Kurir::where('wa_number', $wa_number)->firstOrFail();
            return view('pages.courir.cek-saldo', ['kurir' => $kurir]);
        }else{
            return view('pages.courir.cek-saldo-form');
        }
    }
}
