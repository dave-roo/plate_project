<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {
   public function index(){
		$lang = session('lang');
		App::setLocale($lang);
		return view('home');
   }
}