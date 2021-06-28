<?php


namespace App\Helpers;


class Date
{
    public static function getListDayInMonth(){
        $arrayDay=[];
        $month= date('m');
        $year=date('y');
        for( $day=1; $day<=31;$day++){
            $time=mktime(12,0,0, $month, $day, $year);
            if(date('m', $time)==$month&& date('d', $time)%3==0){
                $arrayDay[]=date('d-m', $time);
            }

        }
        return $arrayDay;
    }
}
