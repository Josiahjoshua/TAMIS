<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
}

    public function request(){
    return view('admin.request');
}
    public function department(){
    return view('admin.department');
}

    public function transfer(){
    return view('admin.transfer');
}
    public function directorate(){
    return view('admin.directorate');
}


    public function assets(){
    return view('admin.assets');
}
    public function assettype(){
    return view('admin.assettype');
}


    public function index(){
    return view('admin.index');
}

 public function user(){
    return view('admin.user');
}

}
