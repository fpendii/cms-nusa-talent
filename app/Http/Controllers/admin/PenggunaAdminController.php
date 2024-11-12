<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaAdminController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Pengguna | Nusa Talent'
        ];
        return view('admin/pengguna/index',$data);
    }
}
