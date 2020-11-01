<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class NewsArticles
{
    //Get Articles Latest Articles non main
    public static function GetArticlesView($limit, $displayind){
        $Data = DB::select('SELECT * FROM NewsArticles NA INNER JOIN NewsChannel NC ON NC.NCId = NA.ChannelId INNER JOIN NewsSubjects NS ON NS.SubjectId = NA.TopicId WHERE NA.DisplayInd = ? ORDER BY NA.PublishedDate DESC LIMIT ?', [$displayind, $limit]);
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {

            //Push to array
            array_push($myArray, [
                "ChannelName" => $Data[$index]->Name,
                "ChannelId" => $Data[$index]->NCId,
                "NewsId" => $Data[$index]->ArticleId,
                "Headline" => $Data[$index]->Heading,
                "News" => substr($Data[$index]->Article, 0, 80),
                "Author" => $Data[$index]->Author,
                "Banner" => $Data[$index]->Banner,
                "Subject" => $Data[$index]->Subject,
                "Date" => $Data[$index]->PublishedDate
            ]);
        }

        return $myArray;
    }
    //Get Article Contents
    public static function GetChannelArtcleContent($heading, $id, $limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NC.Name AS "ChannelName", NC.NCId AS "ChannelId", NA.ArticleId AS "ArticleId", NA.Heading AS "Headline", NA.Article AS "Article", NA.Author AS "Author", NA.Banner AS "Banner", NS.Subject AS "Subject", NA.PublishedDate AS "Date" FROM NewsArticles NA INNER JOIN NewsSubjects NS ON NS.SubjectId = NA.TopicId INNER JOIN NewsChannel NC ON NC.NCId = NA.ChannelId WHERE NA.Heading = ? AND NA.ArticleId = ? LIMIT ?', [$heading, $id, $limit]);
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {

            //Push to array
            array_push($myArray, [
                "ChannelName" => $Data[0]->ChannelName,
                "ChannelId" => $Data[0]->ChannelId,
                "NewsId" => $Data[0]->ArticleId,
                "Headline" => $Data[0]->Headline,
                "News" => $Data[0]->Article,
                "Author" => $Data[0]->Author,
                "Banner" => $Data[0]->Banner,
                "Subject" => $Data[0]->Subject,
                "Date" => $Data[0]->Date
            ]);
        }

        return $myArray;
    }

    //Get news contents
    public static function GetChannelNewsArticleContent($id, $limit)
    {

        //Info from Database
        $Data = DB::select('SELECT NC.Name AS "ChannelName", NC.NCId AS "ChannelId", NA.ArticleId AS "Id", NA.Heading AS "Heading", NA.Article AS "Article", NA.Author AS "Author", NA.Banner AS "Banner", NA.PublishedDate AS "Date", NS.Subject AS "Subject" FROM NewsArticles NA INNER JOIN NewsChannel NC ON NC.NCId = NA.ChannelId INNER JOIN NewsSubjects NS ON NS.SubjectId = NA.TopicId WHERE NA.ChannelId = ? ORDER BY NA.PublishedDate DESC LIMIT ?', [$id, $limit]);
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {

            //Push to array
            array_push($myArray, [
                "ChannelName" => $Data[$index]->ChannelName,
                "ChannelId" => $Data[$index]->ChannelId,
                "Id" => $Data[$index]->Id,
                "Headline" => $Data[$index]->Heading,
                "News" => substr($Data[$index]->Article, 0, 80),
                "Author" => $Data[$index]->Author,
                "Banner" => $Data[$index]->Banner,
                "Subject" => $Data[$index]->Subject,
                "Date" => $Data[$index]->Date
            ]);
        }

        return $myArray;
    }
}