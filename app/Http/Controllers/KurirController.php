<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index(){
        return view('pages.admin.kurir');
    }
}
