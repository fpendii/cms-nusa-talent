<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaketHostingAdminController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Paket Hosting | Nusa Talent'
        ];
        return view('admin/paket-hosting/index',$data);
    }

    public function edit(){
        $data = [
            'title' => 'Edit Paket Hosting | Nusa Talent'
        ];
        return view('admin/paket-hosting/edit',$data);
    }
}
