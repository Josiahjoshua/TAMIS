<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
        return view('user_department.transferAsset');
    }

    public function transferHistory(){
        return view('user_department.transferHistory');
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
         //retrival data from database of condition
         $data =array(
            'list'=>DB::table('condition')->get(),
            'info'=>DB::table('asset_type')->get(),
            'build'=>DB::table('building')->get()
        );
        return view('user_department.assign_asset', $data);
    }

    //receive from form of assignAsset
    public function assign_assetReceive(Request $request){
        return $request->input();
    }

    //retive the condition

    // public function condition(){

    // }

    public function tempTransfer()
    {
        return view('user_department.tempTransfer');
    }

    public function office()
    {
        return view('user_department.office');
    }

    public function request()
    {
        return view('user_department.request');
    }

    public function addoffice()
    {
        return view('user_department.addoffice');
    }


    public function pending()
    {
        return view('user_department.pending');
    }
}
