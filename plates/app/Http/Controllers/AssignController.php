<?php

namespace App\Http\Controllers;

use App\Customeractivity;
use App\Order;
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
	
    public function orderlist()
    {
        $orderlist = Order::all();
        return view('orderlist', compact('orderlist'));
    }
	
    public function gettableinfo()
    {
		$platestatus = 0;
		$status = array();
		$i = 0;
		
		for ($x = 1; $x <= 6; $x++) {
			$status[$x] = 0;

			$plateid = DB::table('tablearea')->where('id', $x)->where('status', 1)->first();
			
			if ($plateid) {
				if($plateid->status == 1) {
					$status[$x] = 1;
				}
				else{
					$status[$x] = 0;
				}			
			}
		}
		
		//item number
		for ($x = 7; $x <= 12; $x++) {
			$status[$x] = 0;

			$itemid = DB::table('tablearea')->where('id', $x-6)->first();
			
			if ($itemid) {
				$status[$x] = $itemid->itemid;
			}
		}
		
        return $status;
    }
	
    public function getorderlist()
    {
		$orderlist = DB::table('orders')->get();
		
        return $orderlist;
    }
	
}