<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class GetCompanyInformation
{

    //Get company Report
    public static function GetCompanyReports($Symbol){
        //Get Data
        $Data = DB::select('SELECT * FROM company c INNER JOIN investmentreports ir ON ir.OrganisationId = c.CompanyId WHERE c.CompanySymbol = ? AND IndustryTypeId = ?', [$Symbol, 1]);
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

    //Get company Visuals
    public static function GetCompanyVisuals($Symbol){
        //Get Data
        $Data = DB::select('SELECT * FROM company c INNER JOIN investmentgallery ig ON ig.OrganisationId = c.CompanyId WHERE c.CompanySymbol = ? AND ig.IndustryTypeId = ?', [$Symbol, 1]);
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

    //Get company News
    public static function GetCompanyNews($Symbol){
        //Get Data
        $Data = DB::select('SELECT * FROM company c INNER JOIN investmentnews ins ON ins.OrganisationId = c.CompanyId WHERE c.CompanySymbol = ? AND ins.IndustryTypeId =? ORDER BY ins.CreatedDate Desc LIMIT ?', [$Symbol, 1, 3]);
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

    //Get company Information
    public static function GetCompanyManagement($Symbol){
        //Get Data
        $Data = DB::select('SELECT * FROM company c INNER JOIN investmentmanagement im ON c.CompanyId = im.OrganisationId WHERE c.CompanySymbol = ? AND im.IndustryTypeId = ?', [$Symbol, 1]);
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

    //Get company Information
    public static function GetCompanyInformation($Symbol){
        //Get Data
        $Data = DB::select('SELECT * FROM company c INNER JOIN companyinformation ci ON ci.CompanyId = c.CompanyId INNER JOIN industrytypes it ON it.IndustryTypeId = c.IndustryId INNER JOIN industries i ON i.IndustryId = c.IndustryId WHERE c.CompanySymbol = ?', [$Symbol]);

        if ($Data){
            //On success
            return [
                "Name"=>$Data[0]->CompanyName,
                "Symbol"=>$Data[0]->CompanySymbol,
                "Address"=>$Data[0]->Address,
                "Country"=>$Data[0]->Country,
                "Telephone"=>$Data[0]->Telephone,
                "Symbol"=>$Data[0]->CompanySymbol,
                "Website"=>$Data[0]->Website,
                "Workers"=>$Data[0]->NumberOfEmployess,
                "IndustryName"=>$Data[0]->IndustryName,
                "NatureOfBusiness"=>$Data[0]->NatureOfBusines,
            ];
        }else{
            //error
            return 0;
        }
    }
}