<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailLombaController extends Controller
{
    public function index()
    {
        return view('detail-lomba');
    }
}
