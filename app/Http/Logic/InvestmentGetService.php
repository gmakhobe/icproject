<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class InvestmentGetService{

    //Get service NewsChannels
    public static function GetCompanyIndustriesNewsChannels(){

        //Info from Database
        $Data = DB::select('SELECT IT.IndustryTypeName AS "Type", I.IndustryName AS "Industry", I.IndustryId AS "IndustryId", NC.NewsChannelName AS "NewsChannel", NC.NewsChannelId AS "NewsChannelId" FROM industrytypes IT INNER JOIN industries I ON I.IndustryTypeId = IT.IndustryTypeId INNER JOIN newschannels NC ON NC.IndustryId = I.IndustryId WHERE I.IndustryTypeId = ? AND NC.IsActive = ?', [6, 1]);
        $myArray = [];
        $temp = [];
        $tempCount = 1;
        //Loop through
        for ($index = 0; $index < count($Data); $index++){
            if ($tempCount == $Data[$index]->IndustryId){
                //Push to temp array
                array_push($temp, [ 
                 "Type"=> $Data[$index]->Type,
                 "Industry"=> $Data[$index]->Industry,
                 "IndustryId"=> $Data[$index]->IndustryId,
                 "NewsChannel"=> $Data[$index]->NewsChannel,
                 "NewsChannelId"=> $Data[$index]->NewsChannelId
                ]);
            }else{
                //Push to the original array
                array_push($myArray, $temp);
                $temp = null;
                $temp = [];
                //Push to temp array
                array_push($temp, [ 
                    "Type"=> $Data[$index]->Type,
                    "Industry"=> $Data[$index]->Industry,
                    "IndustryId"=> $Data[$index]->IndustryId,
                    "NewsChannel"=> $Data[$index]->NewsChannel,
                    "NewsChannelId"=> $Data[$index]->NewsChannelId
                   ]);
                $tempCount++;
            }
        }

        return $myArray;
    }
    
    //Get service hedge fund
    public static function GetCompanyIndustriesHedgeFund(){

        //Info from Database
        $Data = DB::select('SELECT IT.IndustryTypeName AS "Type", I.IndustryName AS "Industry", I.IndustryId AS "IndustryId", HF.HedgeFundName AS "HedgeFund", HF.HedgeFundId AS "HedgeFundId" FROM industrytypes IT INNER JOIN industries I ON I.IndustryTypeId = IT.IndustryTypeId INNER JOIN hedgefunds HF ON HF.IndustryId = I.IndustryId WHERE I.IndustryTypeId = ? AND HF.IsActive = ?', [4, 1]);
        $myArray = [];
        $temp = [];
        $tempCount = 1;
        //Loop through
        for ($index = 0; $index < count($Data); $index++){
            if ($tempCount == $Data[$index]->IndustryId){
                //Push to temp array
                array_push($temp, [ 
                 "Type"=> $Data[$index]->Type,
                 "Industry"=> $Data[$index]->Industry,
                 "IndustryId"=> $Data[$index]->IndustryId,
                 "HedgeFund"=> $Data[$index]->HedgeFund,
                 "HedgeFundId"=> $Data[$index]->HedgeFundId
                ]);
            }else{
                //Push to the original array
                array_push($myArray, $temp);
                $temp = null;
                $temp = [];
                //Push to temp array
                array_push($temp, [ 
                    "Type"=> $Data[$index]->Type,
                    "Industry"=> $Data[$index]->Industry,
                    "IndustryId"=> $Data[$index]->IndustryId,
                    "HedgeFund"=> $Data[$index]->HedgeFund,
                    "HedgeFundId"=> $Data[$index]->HedgeFundId
                   ]);
                $tempCount++;
            }
        }

        return $myArray;
    }

    //Get service Events
    public static function GetCompanyIndustriesEvents(){

        //Info from Database
        $Data = DB::select('SELECT IT.IndustryTypeName AS "Type", I.IndustryName AS "Industry", I.IndustryId AS "IndustryId", E.EventName AS "Event", E.EventId AS "EventId" FROM industrytypes IT INNER JOIN industries I ON I.IndustryTypeId = IT.IndustryTypeId INNER JOIN events E ON E.IndustryId = I.IndustryId WHERE I.IndustryTypeId = ? AND E.IsActive = ?', [3, 1]);
        $myArray = [];
        $temp = [];
        $tempCount = 1;
        //Loop through
        for ($index = 0; $index < count($Data); $index++){
            if ($tempCount == $Data[$index]->IndustryId){
                //Push to temp array
                array_push($temp, [ 
                 "Type"=> $Data[$index]->Type,
                 "Industry"=> $Data[$index]->Industry,
                 "IndustryId"=> $Data[$index]->IndustryId,
                 "Event"=> $Data[$index]->Event,
                 "EventId"=> $Data[$index]->EventId
                ]);
            }else{
                //Push to the original array
                array_push($myArray, $temp);
                $temp = null;
                $temp = [];
                //Push to temp array
                array_push($temp, [ 
                    "Type"=> $Data[$index]->Type,
                 "Industry"=> $Data[$index]->Industry,
                 "IndustryId"=> $Data[$index]->IndustryId,
                 "Event"=> $Data[$index]->Event,
                 "EventId"=> $Data[$index]->EventId
                   ]);
                $tempCount++;
            }
        }

        return $myArray;
    }
    
    //Get service Industies
    public static function GetCompanyIndustriesStartUpIndex(){

        //Info from Database
        $Data = DB::select('SELECT IT.IndustryTypeName AS "Type", I.IndustryName AS "Industry", I.IndustryId AS "IndustryId", S.ServiceName AS "Service", S.ServiceId AS "ServiceId" FROM industrytypes IT INNER JOIN industries I ON I.IndustryTypeId = IT.IndustryTypeId INNER JOIN service S ON S.IndustryId = I.IndustryId WHERE I.IndustryTypeId = ? AND S.IsActive = ?', [5, 1]);
        $myArray = [];
        $temp = [];
        $tempCount = 1;
        //Loop through
        for ($index = 0; $index < count($Data); $index++){
            if ($tempCount == $Data[$index]->IndustryId){
                //Push to temp array
                array_push($temp, [ 
                 "Type"=> $Data[$index]->Type,
                 "Industry"=> $Data[$index]->Industry,
                 "IndustryId"=> $Data[$index]->IndustryId,
                 "Service"=> $Data[$index]->Service,
                 "ServiceId"=> $Data[$index]->ServiceId
                ]);
            }else{
                //Push to the original array
                array_push($myArray, $temp);
                $temp = null;
                $temp = [];
                //Push to temp array
                array_push($temp, [ 
                    "Type"=> $Data[$index]->Type,
                    "Industry"=> $Data[$index]->Industry,
                    "IndustryId"=> $Data[$index]->IndustryId,
                    "Service"=> $Data[$index]->Service,
                    "ServiceId"=> $Data[$index]->ServiceId
                   ]);
                $tempCount++;
            }
        }

        return $myArray;
    }

    //Get Company Industies
    public static function GetCompanyIndustriesServices(){

        //Info from Database
        $Data = DB::select('SELECT IT.IndustryTypeName AS "Type", I.IndustryName AS "Industry", I.IndustryId AS "IndustryId", S.ServiceName AS "Service", S.ServiceId AS "ServiceId" FROM industrytypes IT INNER JOIN industries I ON I.IndustryTypeId = IT.IndustryTypeId INNER JOIN service S ON S.IndustryId = I.IndustryId WHERE I.IndustryTypeId = ? AND S.IsActive = ?', [2, 1]);
        $myArray = [];
        $temp = [];
        $tempCount = 1;
        //Loop through
        for ($index = 0; $index < count($Data); $index++){
            if ($tempCount == $Data[$index]->IndustryId){
                //Push to temp array
                array_push($temp, [ 
                 "Type"=> $Data[$index]->Type,
                 "Industry"=> $Data[$index]->Industry,
                 "IndustryId"=> $Data[$index]->IndustryId,
                 "Service"=> $Data[$index]->Service,
                 "ServiceId"=> $Data[$index]->ServiceId
                ]);
            }else{
                //Push to the original array
                array_push($myArray, $temp);
                $temp = null;
                $temp = [];
                //Push to temp array
                array_push($temp, [ 
                    "Type"=> $Data[$index]->Type,
                    "Industry"=> $Data[$index]->Industry,
                    "IndustryId"=> $Data[$index]->IndustryId,
                    "Service"=> $Data[$index]->Service,
                    "ServiceId"=> $Data[$index]->ServiceId
                   ]);
                $tempCount++;
            }
        }

        return $myArray;
    }
    
}
