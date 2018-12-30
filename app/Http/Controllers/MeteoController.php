<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;	

class MeteoController extends Controller
{
	public function index()
	{
		$orders = DB::table('forecast')->where('month', '=', 1)->get();

		return view('main', ['orders'=>$orders]);
	}

	public function select(Request $req)
	{
		$month = $req->get('month');
		$orders = DB::table('forecast')->where('month', '=', $month)->get();

		return view('main', ['orders'=>$orders]);
	}
}
