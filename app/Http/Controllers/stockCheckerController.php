<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stockCheckerController extends Controller
{
    //
    public function stockCheckerDashboard(){
        return view('stock_checker.dashboard');
    }

    public function assetsTransferHistory(){
        return view('stock_checker.assethistory');
    }

    public function assetsType(){
        return view('stock_checker.assethistory');
    }

    public function assetInfo(){
        return view('stock_checker.assetinfo');
    }

    public function department(){
        return view('stock_checker.department');
    }

    public function assetDisposal(){
        return view('stock_checker.assetdisposal');
    }

    public function report(){
        return view('stock_checker.report');
    }

    public function userProfile(){
        
        return view('stock_checker.user');
    }


}
