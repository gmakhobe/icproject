<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class InvestmentGetCompany{
    //Get company Industies
    public static function GetCompanyIndustriesCompanies(){

        //Info from Database
        $Data = DB::select('SELECT IT.IndustryTypeName AS "Type", I.IndustryName AS "Industry", I.IndustryId AS "IndustryId", C.CompanyName AS "Company", C.CompanyId AS "CompanyId", C.CompanySymbol AS "CompanySymbol" FROM industrytypes IT INNER JOIN industries I ON IT.IndustryTypeId = I.IndustryTypeId INNER JOIN company C ON C.IndustryId = I.IndustryId WHERE IT.IndustryTypeName = ? AND C.IsActive = ?', ["Company", 1]);
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
                 "Company"=> $Data[$index]->Company,
                 "CompanyId"=> $Data[$index]->CompanyId,
                 "Symbol"=> $Data[$index]->CompanySymbol
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
                    "Company"=> $Data[$index]->Company,
                    "CompanyId"=> $Data[$index]->CompanyId,
                    "Symbol"=> $Data[$index]->CompanySymbol
                   ]);
                $tempCount++;
            }
        }

        return $myArray;
    }
    
}
