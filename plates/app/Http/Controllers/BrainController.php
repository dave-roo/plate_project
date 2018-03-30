<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrainController extends Controller {

	public function registeranoffer()
	{
		$locale = session('language');
		app()->setLocale($locale);

		return view('registeroffer.registeranoffer');
	}
	
	public function registeranofferdetails(Request $request)
	{
		$locale = session('language');
		app()->setLocale($locale);
		
		return view('registeroffer.registeranofferdetails');
	}
	
	public function setlang(Request $request, $lang)
	{
		session(['lang' => $lang]);
		return Redirect::back();
	}

   
}