<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directorController extends Controller
{
    public function dashboard(){
        return view('director.dashboard');
    }

    public function departmentoffice(){
        return view('director.departmentoffice');
    }

    public function departmentreport(){
        return view('director.departmentreport');
    }

    public function assetinfo(){
        return view('director.assetinfo');
    }

    public function assethistory(){
        return view('director.assethistory');
    }

    public function assetassignment(){
        return view('director.assetassignment');
    }

    public function transferasset(){
        return view('director.transferasset');
    }

}
