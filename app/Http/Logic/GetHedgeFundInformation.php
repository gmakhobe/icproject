<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class GetHedgeFundInformation
{

    //Get Investors
    public static function GetHedgeFundInvestors($name){
        //Get Data
        $Data = DB::select('SELECT * FROM HedgeFunds HF INNER JOIN InvestmentInvestors II ON II.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND II.IndustryId = ?', [$name, 4]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Name"=> $data->InvestorName,
                    "Amount"=> $data->InvestedAmount,
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Company News
    public static function GetHedgeFundNews($name){
        //Get Data
        $Data = DB::select('SELECT ins.Heading AS "Heading", ins.News AS "News", ins.ImageLink AS "ImageLink", ins.CreatedDate AS "CreatedDate", ins.AuthorName AS "AuthorName", ins.CompanyNewsId AS "CompanyNewsId" FROM HedgeFunds HF INNER JOIN InvestmentNews ins ON ins.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND ins.IndustryTypeId = ?', [$name, 4]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Heading"=> $data->Heading,
                    "News"=> $data->News,
                    "Snippet"=> substr($data->News,0, 80) . "...",
                    "Author"=> $data->AuthorName,
                    "Date"=> $data->CreatedDate,
                    "Image"=> $data->ImageLink,
                    "NewsId"=> $data->CompanyNewsId,
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Calendar
    public static function GetHedgeFundCalendar($name){
        //Get Data
        $Data = DB::select('SELECT * FROM HedgeFunds HF INNER JOIN InvestmentCalendar IC ON IC.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND IC.IndustryId = ?', [$name, 4]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Date"=> $data->Date,
                    "Title"=> $data->Title,
                    "Description"=> $data->Description
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Report
    public static function GetHedgeFundReports($name){
        //Get Data
        $Data = DB::select('SELECT * FROM HedgeFunds HF INNER JOIN InvestmentReports IR ON IR.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND IR.IndustryTypeId = ?', [$name, 4]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Name"=> $data->ReportName,
                    "Link"=> $data->ReportLink,
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Pitch
    public static function GetHedgeFundPitch($name){
        //Get Data
        $Data = DB::select('SELECT * FROM HedgeFunds HF INNER JOIN InvestmentPitch IP ON IP.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND IP.IndustryId = ?', [$name, 4]);

        if ($Data){
            //On success
            return [
                "Video"=>$Data[0]->VideoLink,
                "Document"=>$Data[0]->DocumentLink
            ];
        }else{
            //error
            return 0;
        }
    }

    //Get Information
    public static function GetHedgeFundManagement($name){
        //Get Data
        $Data = DB::select('SELECT * FROM HedgeFunds HF INNER JOIN InvestmentManagement IM ON IM.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND IM.IndustryTypeId = ?', [$name, 4]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Name"=> $data->Name,
                    "Role"=> $data->Role
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Information
    public static function GetHedgeFundInformation($name){
        //Get Data
        $Data = DB::select('SELECT * FROM HedgeFunds HF INNER JOIN HedgeFundInformation HFI ON HFI.OrganisationId = HF.HedgeFundId INNER JOIN Industries I ON I.IndustryId = HF.IndustryId WHERE HF.HedgeFundName = ? AND HFI.IndustryId = ?', [$name, 4]);

        if ($Data){
            //On success
            return [
                "Name"=>$Data[0]->HedgeFundName,
                "Description"=>$Data[0]->NatureOfHedgeFund,
                "Address"=>$Data[0]->Address,
                "Country"=>$Data[0]->Country,
                "Telephone"=>$Data[0]->Telephone,
                "Website"=>$Data[0]->Website,
                "Principles"=>$Data[0]->Principles,
                "Vision"=>$Data[0]->Vision,
                "Range"=>$Data[0]->InvestmentRange,
                "IndustryName"=>$Data[0]->IndustryName
            ];
        }else{
            //error
            return 0;
        }
    }
}