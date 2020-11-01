<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class NewsChannel
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
    public static function GetChannelNews($Topic, $Channel, $Limit)
    {

        //Info from Database
        $Data = DB::select('SELECT N.NewsId AS "NewsId", N.Heading AS "Headline", N.News AS "News", N.Author AS "Author", N.MainBunner AS "Banner", NS.Subject AS "Subject", N.PublishedDate AS "Date" FROM News N INNER JOIN NewsSubjects NS ON NS.SubjectId = N.TopicId INNER JOIN NewsChannel NC ON NC.NCId = N.ChannelId WHERE NC.ChannelType = ? AND N.TopicId = ? AND N.ChannelId = ? ORDER BY N.PublishedDate DESC LIMIT ?', [0, $Topic, $Channel, $Limit]);
        $myArray = [];

        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
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
    //Get news contents
    public static function GetChannelNewsContent($heading, $id, $limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NC.Name AS "ChannelName", NC.NCId, N.NewsId AS "NewsId", N.Heading AS "Headline", N.News AS "News", N.Author AS "Author", N.MainBunner AS "Banner", NS.Subject AS "Subject", N.PublishedDate AS "Date" FROM News N INNER JOIN NewsSubjects NS ON NS.SubjectId = N.TopicId INNER JOIN NewsChannel NC ON NC.NCId = N.ChannelId WHERE N.Heading = ? AND N.NewsId = ? LIMIT ?', [$heading, $id, $limit]);
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {

            //Push to array
            array_push($myArray, [
                "ChannelName" => $Data[0]->ChannelName,
                "ChannelId" => $Data[0]->NCId,
                "NewsId" => $Data[0]->NewsId,
                "Headline" => $Data[0]->Headline,
                "News" => $Data[0]->News,
                "Author" => $Data[0]->Author,
                "Banner" => $Data[0]->Banner,
                "Subject" => $Data[0]->Subject,
                "Date" => $Data[0]->Date
            ]);
        }

        return $myArray;
    }
    //Get news comments
    public static function GetChannelNewsComments($heading, $id, $commentind)
    {

        //Info from Database
        $Data = DB::select('SELECT NCS.Comment AS "Comment", NCS.CommentDate AS "Date", U.ProfilePicture AS "Image", U.Name AS "Name", U.Surname AS "Surname" FROM News N INNER JOIN NewsSubjects NS ON NS.SubjectId = N.TopicId INNER JOIN NewsChannel NC ON NC.NCId = N.ChannelId INNER JOIN NewsComments NCS ON NCS.NewsId = N.NewsId INNER JOIN users U ON U.UserId = NCS.UserId WHERE N.Heading = ? AND N.NewsId = ? AND NCS.CommentInd = ?', [$heading, $id, $commentind]);
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

    //Get news channel search
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
    }
}
