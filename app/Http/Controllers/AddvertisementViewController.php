<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddvertisementViewController extends Controller
{
    public function index() {
        $advertisements = DB::select('SELECT name,description FROM advertisements');
        return view('advertisementlist')->with('advertisements',$advertisements);
    }
}
