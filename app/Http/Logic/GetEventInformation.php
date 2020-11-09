<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class GetEventInformation
{

    //Get News
    public static function GetEventNews($news){
        //Get Data
        $Data = DB::select('SELECT ins.Heading AS "Heading", ins.News AS "News", ins.ImageLink AS "ImageLink", ins.CreatedDate AS "CreatedDate", ins.AuthorName AS "AuthorName", ins.CompanyNewsId AS "NewsId" FROM events E INNER JOIN investmentnews ins ON E.EventId= ins.OrganisationId WHERE E.EventName = ? AND ins.IndustryTypeId = ?', [$news, 3]);
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
                    "NewsId"=> $data->NewsId,
                ]);
            }

            return $newArr;
        }else{
            //error
            return [];
        }
    }

    //Get Earnings
    public static function GetEventEarnings($name){
        //Get Data
        $Data = DB::select('SELECT * FROM events E INNER JOIN investmentearnings ie ON E.EventId= ie.OrganisationId WHERE E.EventName = "Durban July" AND ie.IndustryId = 3 ', [$name, 1]);
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


    //Get Reports
    public static function GetEventReports($name){
        //Get Data
        $Data = DB::select('SELECT * FROM events E INNER JOIN investmentreports ir ON E.EventId= ir.OrganisationId WHERE E.EventName = ? AND ir.IndustryTypeId = ? ', [$name, 3]);
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
    public static function GetEventPitch($name){
        //Get Data
        $Data = DB::select('SELECT * FROM events E INNER JOIN investmentpitch ip ON E.EventId= ip.OrganisationId WHERE E.EventName = ? AND ip.IndustryId = ?', [$name, 3]);

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
    public static function GetEventManagement($name){
        //Get Data
        $Data = DB::select('SELECT * FROM events E INNER JOIN investmentmanagement im ON E.EventId= im.OrganisationId WHERE E.EventName = ? AND im.IndustryTypeId = ?', [$name, 3]);
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
    public static function GetEventInformation($name){
        //Get Data
        $Data = DB::select('SELECT * FROM events E INNER JOIN eventinformation EI ON EI.OrganisationId = E.EventId INNER JOIN industries i ON i.IndustryId = E.IndustryId INNER JOIN industrytypes it ON it.IndustryTypeId = i.IndustryTypeId WHERE E.EventName = ?', [$name]);

        if ($Data){
            //On success
            return [
                "Name"=>$Data[0]->EventName,
                "Description"=>$Data[0]->NatureOfEvent,
                "Address"=>$Data[0]->Address,
                "Country"=>$Data[0]->Country,
                "Telephone"=>$Data[0]->Telephone,
                "Website"=>$Data[0]->Website,
                "IndustryName"=>$Data[0]->IndustryName,
                "History"=> $Data[0]->History,
                "Date"=> $Data[0]->ScheduledDate
            ];
        }else{
            //error
            return 0;
        }
    }
}