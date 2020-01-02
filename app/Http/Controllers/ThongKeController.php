<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NguoiChoi;
use Charts;
class ThongKeController extends Controller
{
    //

    public function thongke()
    {
        //$orderYear =  NguoiChoi::where(DB::raw("(DATE_FORMAT(created_at,'%M'))"),date('M'))->get();
        //dd($orderYear);
        //return view('thong-ke.thong-ke', compact('orderYear'));

        $users = DB::table("nguoi_choi")->select("*")->where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),"2019")->get();
        //dd($users);
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(false)
			      ->groupByMonth(date('2019'), true);

		$pie  =	 Charts::create('pie', 'highcharts')
				    ->title('My nice chart')
				    ->labels(['First', 'Second', 'Third'])
				    ->values([5,10,20])
				    ->dimensions(1000,500)
				    ->responsive(false);
		//dd($chart);
        return view('thong-ke.thong-ke',compact('chart','pie'));
    }
}
