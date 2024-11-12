<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Beranda | Nusa Talent'
        ];
        return view('admin/beranda/index',$data);
    }
}
