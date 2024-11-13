<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CostumerAdminController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Costumer | Nusa Talent'
        ];
        return view('admin/costumer/index',$data);
    }

    public function tambah(){
        $data = [
            'title' => 'Tambah Costumer | Nusa Talent'
        ];
        return view('admin/costumer/tambah',$data);
    }
}
