<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function addData(Request $request)
    {
        $validatedData = $request->validate([
            'section' => 'required|max:255',
        ]);

        $section = $request->input('section');
        // $section = $request->input('section');

        try {
            DB::transaction(function () use ($section) {
                DB::table('section')->insert(['section' => $section]);
            });

            return redirect()->back()->with('success', 'Section added successfully.');
        } catch (\Exception $e) {
            // Handle insertion failure, log the error, and provide user feedback
            return redirect()->back()->with('error', 'Failed to add section. Please try again.');
        }
    }

}
