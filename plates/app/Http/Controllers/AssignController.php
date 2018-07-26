<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
    {
		DB::table('assign')->delete();
		DB::table('assign')->insert(['orderid' => '1', 'plateid' => rand(10,100)]);
		$plateid = DB::table('assign')->select('plateid')->get();
		return $plateid;
    }
	
	public function assignplateid(Request $request)
    {
		
		$plateid = $request->input('plateid');
		
		
		DB::table('assign')->where('orderid', 1)->update(['plateid' => $plateid]);
		
		
		return;
    }
	
	public function setplate(Request $request)
    {
		$input = $request->input('id');
		$plateid = DB::table('assign')->select('plateid')->get();
		
		preg_match_all('!\d+!', $input, $inputid);
		$idvar = implode(' ', $inputid[0]);		
		
		DB::table('orders')->where('id', (int)$idvar)->update(['status' => substr($plateid, 13, 12) ]);
		
		return;
    }

	public function deactiveplate(Request $request)
    {
		$input = $request->input('id');
		$plateid = "999999999999";
		
		preg_match_all('!\d+!', $input, $inputid);
		$idvar = implode(' ', $inputid[0]);	
		
		DB::table('orders')->where('id', (int)$idvar)->update(['status' => $plateid ]);
		
		return;
    }
	
}
