<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class News{

    public static function getFrontPageNews(){
        $news = DB::select(('select * from news where DisplayIndicator = ? ORDER BY CreatedDate DESC LIMIT 3'), ['LandingPage']);

        $FrontLine = [ array(
            "Header"=> $news[0]->Heading,
            "Image"=> $news[0]->Image,
            "Article"=> $news[0]->Article,
            "Author"=> $news[0]->Author,
            "DateTime"=> $news[0]->CreatedDate
        ), array(
            "Header"=> $news[1]->Heading,
            "Image"=> $news[1]->Image,
            "Article"=> $news[1]->Article,
            "Author"=> $news[1]->Author,
            "DateTime"=> $news[1]->CreatedDate
        ), array(
            "Header"=> $news[2]->Heading,
            "Image"=> $news[2]->Image,
            "Article"=> $news[2]->Article,
            "Author"=> $news[2]->Author,
            "DateTime"=> $news[2]->CreatedDate
        )];

        return $FrontLine;
    }

    //Get News
    public static function GetNews($Topic, $Limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NC.Name AS "ChannelName", NC.NCId AS "ChannelId", N.NewsId AS "NewsId", N.Heading AS "Headline", N.News AS "News", N.Author AS "Author", N.MainBunner AS "Banner", NS.Subject AS "Subject", N.PublishedDate AS "Date" FROM news N INNER JOIN newssubjects NS ON NS.SubjectId = N.TopicId INNER JOIN newschannel NC ON NC.NCId = N.ChannelId WHERE NC.ChannelType = ? AND N.TopicId = ? ORDER BY N.PublishedDate DESC LIMIT ?', [0, $Topic, $Limit]);
        $myArray = [];

        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ChannelName"=> $Data[$index]->ChannelName,
                "ChannelId"=> $Data[$index]->ChannelId, 
                "Id" => $Data[$index]->NewsId,
                "Headline" => $Data[$index]->Headline,
                "News" => substr($Data[$index]->News, 0, 80) . "...",
                "Author" => $Data[$index]->Author,
                "Banner" => $Data[$index]->Banner,
                "Subject" => $Data[$index]->Subject,
                "Date" => $Data[$index]->Date
            ]);
        }

        return $myArray;
    }

    //Get Videos
    public static function GetVideos($Limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NC.NCId AS "ChannelId", NC.Name AS "ChannelName", NV.NVId AS "VideoId", NV.VideoTitle AS "Title", NV.VideoLink AS "Video", NV.Author AS "Author", NV.VideoBanner AS "Banner", NV.PublishedDate AS "Date", NS.Subject AS "Subject" FROM newsvideos NV INNER JOIN newssubjects NS ON NS.SubjectId = NV.TopicId INNER JOIN newschannel NC ON NC.NCId = NV.ChannelId WHERE NC.ChannelType = ? ORDER BY NV.PublishedDate DESC LIMIT ?', [1, $Limit]);
        $myArray = [];

        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ChannelName"=> $Data[$index]->ChannelName,
                "ChannelId"=> $Data[$index]->ChannelId, 
                "Id" => $Data[$index]->VideoId,
                "Title" => $Data[$index]->Title,
                "Video" => $Data[$index]->Video,
                "Author" => $Data[$index]->Author,
                "Banner" => $Data[$index]->Banner,
                "Subject" => $Data[$index]->Subject,
                "Date" => $Data[$index]->Date
            ]);
        }

        return $myArray;
    }

}