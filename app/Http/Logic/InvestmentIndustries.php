<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class InvestmentIndustries{
    //Get Company Industies
    public static function GetCompanyIndusties(){

        //Info from Database
        $Data = DB::select('SELECT Industryname FROM Industries WHERE IndustryTypeId = ?', [1]);
        $myArray = [];
        //Loop through
        foreach ($Data as $data){
            array_push($myArray, ["Name"=> $data->Industryname]);
        }
        return $myArray;

    }
    //Get Services Industies
    public static function GetServiceIndusties(){

        //Info from Database
        $Data = DB::select('SELECT Industryname FROM Industries WHERE IndustryTypeId = ?', [2]);
        $myArray = [];
        //Loop through
        foreach ($Data as $data){
            array_push($myArray, ["Name"=> $data->Industryname]);
        }
        return $myArray;

    }

    //Get Events Industies
    public static function GetEventIndusties(){

        //Info from Database
        $Data = DB::select('SELECT Industryname FROM Industries WHERE IndustryTypeId = ?', [3]);
        $myArray = [];
        //Loop through
        foreach ($Data as $data){
            array_push($myArray, ["Name"=> $data->Industryname]);
        }
        return $myArray;

    }

    //Get Events Industies
    public static function GetHedgeFundIndusties(){

        //Info from Database
        $Data = DB::select('SELECT Industryname FROM Industries WHERE IndustryTypeId = ?', [4]);
        $myArray = [];
        //Loop through
        foreach ($Data as $data){
            array_push($myArray, ["Name"=> $data->Industryname]);
        }
        return $myArray;

    }

    //Get StartUpIndex Industies
    public static function GetStartUpIndexIndusties(){

        //Info from Database
        $Data = DB::select('SELECT Industryname FROM Industries WHERE IndustryTypeId = ?', [5]);
        $myArray = [];
        //Loop through
        foreach ($Data as $data){
            array_push($myArray, ["Name"=> $data->Industryname]);
        }
        return $myArray;

    }

    //Get StartUpIndex Industies
    public static function GetNewsChannelsIndusties(){

        //Info from Database
        $Data = DB::select('SELECT Industryname FROM Industries WHERE IndustryTypeId = ?', [6]);
        $myArray = [];
        //Loop through
        foreach ($Data as $data){
            array_push($myArray, ["Name"=> $data->Industryname]);
        }
        return $myArray;

    }
}
