<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function showPopup()
    {
        return view('popup');
    }

}
