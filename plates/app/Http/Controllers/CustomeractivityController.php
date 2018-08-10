<?php

namespace App\Http\Controllers;

use App\Customeractivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomeractivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
    {
        $customeractivity=Customeractivity::all();
        return view('customeractivity', compact('customeractivity'));
    }

    public function cusactivity()
    {

		$monthsum = array();
		$monthcount = array();
		$month = array();
		
		for ($x = 1; $x <= 12; $x++) {
			
			$datestart = '2018-'. $x .'-01';
			$dateend = '2018-'. $x .'-31';
			$month[$x] = 0;
		
			$month[$x] = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array($datestart, $dateend))->sum('guests');
		}
		
		$data = $month[1] .','. $month[2] .','. $month[3] .','. $month[4] .','. $month[5] .','. $month[6] .','. $month[7] .','. $month[8] .','. $month[9] .','. $month[10] .','. $month[11] .','. $month[12];
		
		
		return view('cusactivity', ['customeractivity2018' => $data]);
    }
	
    public function performancemain()
    {	

		$monthsum = array();
		$monthcount = array();
		$month = array();
		
		for ($x = 1; $x <= 12; $x++) {
			
			$datestart = '2018-'. $x .'-01';
			$dateend = '2018-'. $x .'-31';
			$month[$x] = 0;
		
			$monthsum[$x] = DB::table('plates')->select('created_at')->whereBetween('created_at', array($datestart,$dateend))->sum('inarrivalduration');
			$monthcount[$x] = DB::table('plates')->select('created_at')->whereBetween('created_at', array($datestart,$dateend))->count('inarrivalduration');
			if($monthcount != 0){
				$month[$x] = round($monthsum[$x]/$monthcount[$x]);
			}
		}
		
		$data = $month[1] .','. $month[2] .','. $month[3] .','. $month[4] .','. $month[5] .','. $month[6] .','. $month[7] .','. $month[8] .','. $month[9] .','. $month[10] .','. $month[11] .','. $month[12];
		
		return view('performancemain', ['performance2018' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
