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

		$jan = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-01-01','2018-01-31'))->sum('guests');
		$feb = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-02-01','2018-02-31'))->sum('guests');
		$mar = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-03-01','2018-03-31'))->sum('guests');
		$apr = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-04-01','2018-04-31'))->sum('guests');
		$may = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-05-01','2018-05-31'))->sum('guests');
		$jun = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-06-01','2018-06-31'))->sum('guests');
		$jul = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-07-01','2018-07-31'))->sum('guests');
		$aug = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-08-01','2018-08-31'))->sum('guests');
		$sep = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-09-01','2018-09-31'))->sum('guests');
		$oct = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-10-01','2018-10-31'))->sum('guests');
		$nov = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-11-01','2018-11-31'))->sum('guests');
		$dec = DB::table('customeractivity')->select('created_at')->whereBetween('created_at', array('2018-12-01','2018-12-31'))->sum('guests');
		
		$data = $jan .','. $feb .','. $mar .','. $apr .','. $may.','. $jun .','. $jul .','. $aug .','. $sep .','. $oct .','. $nov .','. $dec;
		
		return view('cusactivity', ['customeractivity2018' => $data]);
    }
	
    public function performancemain()
    {	

		//jan
		$jan_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-01-01','2018-01-31'))->sum('inarrivalduration');
		$jan_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-01-01','2018-01-31'))->count('inarrivalduration');
		if($jan_count != 0){$jan = $jan_sum/$jan_count;}else{$jan = 0;}
		
		//feb
		$feb_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-02-01','2018-02-31'))->sum('inarrivalduration');
		$feb_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-02-01','2018-02-31'))->count('inarrivalduration');
		if($feb_count != 0){$feb = $jan_sum/$feb_count;}else{$feb = 0;}
		
		//march
		$mar_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-03-01','2018-03-31'))->sum('inarrivalduration');
		$mar_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-03-01','2018-03-31'))->count('inarrivalduration');
		if($mar_count != 0){$mar = $mar_sum/$mar_count;}else{$mar = 0;}
		
		//april
		$apr_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-04-01','2018-04-31'))->sum('inarrivalduration');
		$apr_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-04-01','2018-04-31'))->count('inarrivalduration');
		if($apr_count != 0){$apr = $apr_sum/$apr_count;}else{$apr = 0;}
		
		//may
		$may_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-05-01','2018-05-31'))->sum('inarrivalduration');
		$may_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-05-01','2018-05-31'))->count('inarrivalduration');
		if($may_count != 0){$may = $may_sum/$may_count;}else{$may = 0;}
		
		//june
		$jun_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-06-01','2018-06-31'))->sum('inarrivalduration');
		$jun_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-06-01','2018-06-31'))->count('inarrivalduration');
		if($jun_count != 0){$jun = $jun_sum/$jun_count;}else{$jun = 0;}
		
		//july
		$jul_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-07-01','2018-07-31'))->sum('inarrivalduration');
		$jul_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-07-01','2018-07-31'))->count('inarrivalduration');
		if($jul_count != 0){$jul = $jul_sum/$jul_count;}else{$jul = 0;}
		
		//aug
		$aug_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-08-01','2018-08-31'))->sum('inarrivalduration');
		$aug_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-08-01','2018-08-31'))->count('inarrivalduration');
		if($aug_count != 0){$aug = $aug_sum/$aug_count;}else{$aug = 0;}	
	
		//sep
		$sep_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-09-01','2018-09-31'))->sum('inarrivalduration');
		$sep_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-09-01','2018-09-31'))->count('inarrivalduration');
		if(!$sep_count == 0){$sep = $sep_sum/$sep_count;}else{$sep = 0;}
		
		//oct
		$oct_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-10-01','2018-10-31'))->sum('inarrivalduration');
		$oct_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-10-01','2018-10-31'))->count('inarrivalduration');
		if($oct_count != 0){$oct = $oct_sum/$oct_count;}else{$oct = 0;}
		
		//nov
		$nov_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-11-01','2018-11-31'))->sum('inarrivalduration');
		$nov_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-11-01','2018-11-31'))->count('inarrivalduration');
		if($nov_count != 0){$nov = $nov_sum/$nov_count;}else{$nov = 0;}
		
		//dec
		$dec_sum = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-12-01','2018-12-31'))->sum('inarrivalduration');
		$dec_count = DB::table('plates')->select('created_at')->whereBetween('created_at', array('2018-12-01','2018-12-31'))->count('inarrivalduration');
		if($dec_count != 0){$dec = $dec_sum/$dec_count;}else{$dec = 0;}
		
		$data = round($jan) .','. round($feb) .','. round($mar) .','. round($apr) .','. round($may) .','. round($jun) .','. round($jul) .','. round($aug) .','. round($sep) .','. round($oct) .','. round($nov) .','. round($dec);
		
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
