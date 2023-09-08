<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_departmentController extends Controller
{
    //
    public function dashboard(){
        return view('user_department.user_dashboard');
    }

    public function assetInfo(){
        return view('user_department.asset_information');
    }

    public function transferasset(){
        return view('user_department.transfer_history');
    }

    public function employeeinfo(){
        return view('user_department.employee_info');
    }

    public function assetreq(){
        return view('user_department.asset_request');
    }

    public function assetAssigment(){
        return view('user_department.assetAssigment');
    }

    public function create()
    {
        return view('user_department.transferAsset'); // next:- page name created with next.blade.php
    }

    public function assignAsset()
    {
        return view('user_department.assign_asset');
    }
}
