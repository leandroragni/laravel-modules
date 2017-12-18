<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{
    public function index()
    {
        $tracking = DB::select('select * from tracking');
        
        return view('tracking.index');
    }
}
