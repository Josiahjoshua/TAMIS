<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assetdata;

use Illuminate\Support\Facades\DB; 
 // Import the Assetdata model
 
 class estateController extends Controller
 {

    public function getNow(Request $request, $assetName)
    {
        // Step 1: Fetch assettype_id based on $assetName
        $assetType = DB::table('asset_type')
            ->select('assettype_id')
            ->where('assettype_name', $assetName)
            ->first(); // Assuming there is only one match, use ->get() for multiple matches
    
        if (!$assetType) {
            // Handle the case where $assetName doesn't exist in the asset_type table
            // You can return an error response or handle it as needed
            return response()->json(['error' => 'Asset type not found'], 404);
        }
    
        $assettypeId = $assetType->assettype_id;
    
        // Step 2: Fetch data from the "asset" table with specified columns and matching assettype_id
        $assets = DB::table('asset')
            ->select('asset_id', 'asset_description', 'condition_id', 'cost', 'assettype_id')
            ->where('assettype_id', $assettypeId)
            ->get();
    
        // Now, $assets contains the desired data from the "asset" table
        // You can return it as a JSON response or use it as needed

        
        return view('estate.assetviews.testingsirikwaway')->with(['assets' => $assets, 'assetName' => $assetName]);
        
    }
    


    public function requestedasset()
    {
        // Fetch data from the 'asset_type' table
        $assetTypes = DB::table('asset_type')
            ->select('assettype_id', 'assettype_name')
            ->get();
    
        // Fetch data from the 'request' table as before
        $requestData = DB::table('request')
            ->select('request_id', 'request_description', 'department_id', 'asset_id', 'assettype_id', 'status')
            ->get();
    
        // Pass both sets of data to the view
        return view('estate.estaterequests', compact('assetTypes', 'requestData'));
    }
   

    public function listofdepartment(){
        return view('estate.departmentview');
    }
 }
 