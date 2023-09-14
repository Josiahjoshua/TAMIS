<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;


class StoreController extends Controller
{
    public function index(){
        return view('submit-data-form');
    }

  public  function store(Request $request)
{
    $data = $request->validate([
        'asset_no' => 'required',
        'asset_description' => 'required',
        'serial_no' => 'nullable',
        'cost' => 'nullable',
        'assettype_id' => 'nullable',
        'condition_id' => 'nullable',
        'accumulated_depreciation' => 'nullable',
        'acquisition_date' => 'nullable',
        'acquisition_type' => 'nullable',
        'gfs_code' => 'nullable',
        'gfs_description' => 'nullable',
        'remarks' => 'nullable',
    ]);
    $query =DB::table('assetregister')->insert([
        'asset_no'=>$request->input('asset_no'),
        'asset_description'=>$request->input('asset_description'),
        'serial_no'=>$request->input('serial_no'),
        'cost'=>$request->input('cost'),
        'assettype_id'=>$request->input('assettype_id'),
        'condition_id'=>$request->input('condition_id'),
        'accumulated_depriciation'=>$request->input('accumulated_depriciation'),
        'acquisition_date'=>$request->input('acquisition_date'),
        'acquisition_type'=>$request->input('acquisition_type'),
        'gfs_code'=>$request->input('gfs_code'),
        'gfs_description'=>$request->input('gfs_description'),
        'remarks'=>$request->input('remarks')
    ]);

    Asset::create($data);

    return redirect()->back()->with('success', 'Asset created successfully');
}




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
       public function registeredAsset(){
        return view('store.registeredAsset');
       }
       public function assignAsset(){
        return view('store.assignAsset');
       }



}
