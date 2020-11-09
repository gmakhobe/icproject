<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class TVNewsChannel
{

    //Get NewsChannels
    public static function GetChannels($ChannelType)
    {

        //Info from Database
        $Data = DB::select('SELECT * FROM `NewsChannel` WHERE ChannelType = ? LIMIT 20', [$ChannelType, 20]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Name" => $Data[$index]->Name,
                "Logo" => $Data[$index]->LogoLink,
                "Date" => $Data[$index]->CreatedDate,
                "Id" => $Data[$index]->NCId
            ]);
        }

        return $myArray;
    }

    //Get Channel Information
    public static function GetChannelInformation($name, $id, $type)
    {

        //Info from Database
        $Data = DB::select('SELECT * FROM `NewsChannel` WHERE `Name` = ? AND `NCId` = ? AND ChannelType = ? LIMIT 20', [$name, $id, $type]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Name" => $Data[$index]->Name,
                "Description" => $Data[$index]->Description,
                "Banner" => $Data[$index]->BackgroundBunner,
                "Logo" => $Data[$index]->LogoLink,
                "Date" => $Data[$index]->CreatedDate,
                "Id" => $Data[$index]->NCId
            ]);
        }

        return $myArray;
    }

    //Get Channel News
    public static function GetChannelTVNews($Topic, $Channel, $Limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NV.VideoTitle AS "Title", NV.VideoLink AS "Video", NV.VideoDescription AS "Description", NV.Author AS "Author", NV.VideoBanner AS "Banner", NV.PublishedDate AS "Date", NV.NVId AS "VideoId", NS.Subject AS "Subject" FROM NewsVideos NV INNER JOIN NewsSubjects NS ON NS.SubjectId = NV.TopicId INNER JOIN NewsChannel NC ON NC.NCId = NV.ChannelId WHERE NC.ChannelType = ? AND NV.TopicId = ? AND NV.ChannelId = ? ORDER BY NV.PublishedDate DESC LIMIT ?', [1, $Topic, $Channel, $Limit]);
        $myArray = [];

        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "Id" => $Data[$index]->VideoId,
                "Title" => $Data[$index]->Title,
                "Description" => $Data[$index]->Description,
                "Banner" => $Data[$index]->Banner,
                "Video" => $Data[$index]->Video,
                "Author" => $Data[$index]->Author,
                "Subject" => $Data[$index]->Subject,
                "Date" => $Data[$index]->Date
            ]);
        }

        return $myArray;
    }
    //Get news contents
    public static function GetChannelTVNewsContent($name, $id, $limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NV.Views AS "Views", NV.NVId AS "Id", NV.VideoTitle AS "Title", NV.VideoLink AS "Video", NV.VideoDescription AS "Description", NV.Author AS "Author", NV.VideoBanner AS "Banner", NV.PublishedDate AS "Date", NS.Subject AS "Subject", NC.NCId AS "ChannelId", NC.Name AS "ChannelName" FROM NewsVideos NV INNER JOIN NewsSubjects NS ON NS.SubjectId = NV.TopicId INNER JOIN NewsChannel NC ON NC.NCId = NV.ChannelId WHERE NV.VideoTitle = ? AND NV.NVId = ? LIMIT ?', [$name, $id, $limit]);
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {

            //Push to array
            array_push($myArray, [
                "ChannelName" => $Data[0]->ChannelName,
                "ChannelId" => $Data[0]->ChannelId,
                "Subject" => $Data[0]->Subject,
                "Date" => $Data[0]->Date,
                "Banner" => $Data[0]->Banner,
                "Author" => $Data[0]->Author,
                "Description" => $Data[0]->Description,
                "Video" => $Data[0]->Video,
                "Title" => $Data[0]->Title,
                "Id" => $Data[0]->Id,
                "Views" =>  $Data[0]->Views
            ]);
        }

        return $myArray;
    }
    //Get news comments
    public static function GetChannelTVNewsComments($name, $videoId, $commentind)
    {

        //Info from Database
        $Data = DB::select('SELECT NCS.Comment AS "Comment", NCS.CommentDate AS "Date", U.ProfilePicture AS "Image", U.Name AS "Name", U.Surname AS "Surname" FROM NewsVideos NV INNER JOIN NewsSubjects NS ON NS.SubjectId = NV.TopicId INNER JOIN NewsChannel NC ON NC.NCId = NV.ChannelId INNER JOIN NewsComments NCS ON NCS.NewsId = NV.NVId INNER JOIN users U ON U.UserId = NCS.UserId WHERE NV.VideoTitle = ? AND NV.NVId = ? AND NCS.CommentInd = ?', [$name, $videoId, $commentind]);
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {

            //Push to array
            array_push($myArray, [
                "Comment" => $Data[0]->Comment,
                "Date" => $Data[0]->Date,
                "Image" => (!$Data[0]->Image? "/images/user-icon.svg" : $Data[0]->Image),
                "Name" => $Data[0]->Name . " " . $Data[0]->Surname
            ]);
        }

        return $myArray;
    }

    /*//Get news channel search
    public static function GetChannelSearch($search, $type)
    {

        //Info from Database
        $Data = DB::select('SELECT * FROM NewsChannel WHERE `Name` LIKE ? AND ChannelType = ?', ["%$search%", $type]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Name" => $Data[$index]->Name,
                "Logo" => $Data[$index]->LogoLink,
                "Date" => $Data[$index]->CreatedDate,
                "Id" => $Data[$index]->NCId
            ]);
        }

        return $myArray;
    }*/
}
