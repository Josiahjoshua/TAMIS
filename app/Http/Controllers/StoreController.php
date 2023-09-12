<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function storeDashboard(){
        return view('store.dashboard');
        }

    public function RegisterAsset(){
         return view('store.registerAsset');
        }

    public function gamisRegister(){
        return view('store.gamisRegister');
       }
     public function assetInformation(){
        return view('store.assetInformation');
       }
       public function assetDisposition(){
        return view('store.assetDisposition');
       }
}
