<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class GetServiceInformation
{

    //Get Company Visuals
    public static function GetServiceVisuals($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentGallery ig ON ig.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ig.IndustryTypeId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Visual"=> $data->Link
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Company News
    public static function GetServiceNews($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT ins.Heading AS "Heading", ins.News AS "News", ins.ImageLink AS "ImageLink", ins.CreatedDate AS "CreatedDate", ins.AuthorName AS "AuthorName", ins.CompanyNewsId AS "CompanyNewsId" FROM Service s INNER JOIN InvestmentNews ins ON ins.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ins.IndustryTypeId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);
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

    //Get Company Report
    public static function GetServiceCalendar($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentCalendar ic ON ic.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ic.IndustryId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);
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

    //Get Company Report
    public static function GetServiceAssets($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentAssets ia ON ia.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ia.IndustryId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Name"=> $data->AssetName,
                    "Quantity"=> $data->AssetQuantity,
                    "Insured"=> ($data->AssetInsured ? "Yes": "No")
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Company Report
    public static function GetServiceIS($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentIndicatorsStrategy iis ON iis.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = iis.IndustryId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Name"=> $data->Name,
                    "Description"=> $data->Description,
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Company Report
    public static function GetServiceEarnings($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentEarnings ie ON ie.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ie.IndustryId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);
        $newArr = [];

        if ($Data){
            //On success
            foreach($Data as $data){
                array_push($newArr, [
                    "Date"=> $data->EarningsDate,
                    "Amount"=> $data->Amount,
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }


    //Get Company Report
    public static function GetServiceReports($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentReports ir ON ir.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ir.IndustryTypeId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, 1, $ServiceInd]);
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

    //Get Service Pitch
    public static function GetServicePitch($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN InvestmentPitch ip ON ip.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = ip.IndustryId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);

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

    //Get Company Information
    public static function GetServiceManagement($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service S INNER JOIN InvestmentManagement IM ON IM.OrganisationId = S.ServiceId INNER JOIN Industries I ON I.IndustryId = S.IndustryId WHERE S.ServiceName = ? AND IM.IndustryTypeId = ? AND S.ServiceType = ?', [$Symbol, 2, $ServiceInd]);
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

    //Get Company Information
    public static function GetServiceInformation($Symbol, $ServiceInd){
        //Get Data
        $Data = DB::select('SELECT * FROM Service s INNER JOIN ServiceInformation si ON si.OrganisationId = s.ServiceId INNER JOIN Industries i ON i.IndustryId = s.IndustryId INNER JOIN IndustryTypes it ON it.IndustryTypeId = i.IndustryTypeId WHERE s.ServiceName = ? AND s.ServiceType = ?', [$Symbol, $ServiceInd]);

        if ($Data){
            //On success
            return [
                "Name"=>$Data[0]->ServiceName,
                "Description"=>$Data[0]->NatureOfService,
                "Address"=>$Data[0]->Address,
                "Country"=>$Data[0]->Country,
                "Telephone"=>$Data[0]->Telephone,
                "Website"=>$Data[0]->Website,
                "IndustryName"=>$Data[0]->IndustryName
            ];
        }else{
            //error
            return 0;
        }
    }
}