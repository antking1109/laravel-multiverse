<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('admin');
    }
    public function index()
    {
    	$countImage = DB::table('images')->count();
    	return view('dashboard')->with('count', $countImage);
    }
}
