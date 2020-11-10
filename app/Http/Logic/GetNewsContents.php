<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class GetNewsContents{

    //Get economic newa
    public static function GetEconomicNews(){
        //Recieve data from db
        $Data = DB::select('SELECT * FROM newssubjects WHERE IsActive = ?', [1]);
        $newArr = [];
        //Loop through results
        foreach($Data as $data){
            array_push($newArr, $data->Subject);
        }
        return $newArr;
    }

    //Get news subjects
    public static function GetNewsSubjects(){
        //Recieve data from db
        $Data = DB::select('SELECT * FROM newssubjects WHERE IsActive = ?', [1]);
        $newArr = [];
        //Loop through results
        foreach($Data as $data){
            array_push($newArr, $data->Subject);
        }
        return $newArr;
    }

}