<?php

namespace App\Http\Controllers;

use App\Helpers\Date;
use App\Order;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class AdminStatisticalController extends Controller
{
    public function index(){
        $orders=Order::select(DB::raw('count(*) as count'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))->pluck('count');
        $months=Order::select(DB::raw('Month(created_at) as month'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))->pluck('month');
        $orderBefore=Order::select(DB::raw('count(*) as count'))
            ->whereYear('created_at', date('Y')-1)
            ->groupBy(DB::raw('Month(created_at)'))->pluck('count');
        $monthBefore=Order::select(DB::raw('Month(created_at) as month'))
            ->whereYear('created_at', date('Y')-1)
            ->groupBy(DB::raw('Month(created_at)'))->pluck('month');
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0);
        $dataBefore=array(0,0,0,0,0,0,0,0,0,0,0,0);
        $sum=0;
        $sumBefore=0;
        foreach ($months as $key =>$month){
            $datas[$month-1]=$orders[$key];
            $sum+=$orders[$key];
        }
        $datas=json_encode($datas);
        foreach ($monthBefore as $key =>$item){
            $dataBefore[$item-1]=$orderBefore[$key];
            $sumBefore+=$orderBefore[$key];
        }
        $dataBefore=json_encode($dataBefore);
        if($sumBefore>0)
            $percent= (($sum-$sumBefore)*100/$sumBefore). ' %';
        else $percent= ($sum-$sumBefore).' lần';
        $money = \DB::table('orderView')
            ->select('phi')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->groupBy(DB::raw('Dayofweek(created_at)'))->pluck('phi');
        $week = \DB::table('orderView')
            ->select(DB::raw('Dayofweek(created_at) as day'))
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->groupBy(DB::raw('Dayofweek(created_at)'))->pluck('day');
        $moneyBefore = \DB::table('orderView')
            ->select('phi',DB::raw('Dayofweek(created_at)'))
            ->whereBetween('created_at', [Carbon::now()->subWeek(1)->startOfWeek(), Carbon::now()->subWeek(1)->endOfWeek()])
            ->groupBy(DB::raw('Dayofweek(created_at)'))->pluck('phi');
        $weekBefore = \DB::table('orderView')
            ->select(DB::raw('Dayofweek(created_at) as day'))
            ->whereBetween('created_at', [Carbon::now()->subWeek(1)->startOfWeek(), Carbon::now()->subWeek(1)->endOfWeek(-1)])
            ->groupBy(DB::raw('Dayofweek(created_at)'))->pluck('day');

        $fee=array(0,0,0,0,0,0,0);
        $feeBefore=array(0,0,0,0,0,0,0);
        $sumFee=0;
        $sumFeeBefore=0;
        foreach ($week as $key =>$item){
            $fee[$item-1]=$money[$key];
            $sumFee+=$money[$key];
        }

        $fee=json_encode($fee);
        foreach ($weekBefore as $key =>$item){
            $feeBefore[$item-1]=$moneyBefore[$key];
            $sumFeeBefore+=$moneyBefore[$key];
        }
        $feeBefore=json_encode($feeBefore);
        if($sumFeeBefore>0)$percentFee= (($sumFee-$sumFeeBefore)*100/$sumFeeBefore).' %';
        else $percentFee=($sumFee-$sumFeeBefore);
        return view('admin.statistical.index', compact('datas','dataBefore','percent','sum',
        'fee','feeBefore','sumFee','percentFee'));
    }
}
