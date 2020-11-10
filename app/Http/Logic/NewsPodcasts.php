<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class NewsPodcasts
{

    //Get Top Rated Podcasts
    public static function GetIncrementViews($PodcastId, $Counter)
    {
        //Info from Database
        $Data = DB::select('UPDATE newspodcasts SET PodcastCount = (? + (SELECT PodcastCount FROM newspodcasts WHERE NewsPodcastId = ?)) WHERE NewsPodcastId = ?', [$Counter, $PodcastId, $PodcastId]);

        return $Data;
    }

    //Get Top Rated Podcasts
    public static function GetLatestPodcasts($Limit)
    {
        //Info from Database
        $Data = DB::select('SELECT NP.NewsPodcastId, NP.PodcastName, NP.PodcastDescription, NP.AudioLink, NP.PodcastCountry, NP.PodcastRating, NP.PodcastCount, NP.PodcastCreatedDate, NS.Subject, U.Username FROM newspodcasts NP INNER JOIN users U ON U.UserId = NP.UserId INNER JOIN newssubjects NS ON NS.SubjectId = NP.PodcastTopic ORDER BY NP.PodcastCreatedDate DESC LIMIT ?', [$Limit]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Id" => $Data[$index]->NewsPodcastId,
                "Name" => $Data[$index]->PodcastName,
                "Description" => $Data[$index]->PodcastDescription,
                "Link" => $Data[$index]->AudioLink,
                "Country" => $Data[$index]->PodcastCountry,
                "Rating" => $Data[$index]->PodcastRating,
                "Count" => $Data[$index]->PodcastCount,
                "Date" => $Data[$index]->PodcastCreatedDate,
                "Subject" => $Data[$index]->Subject,
                "Username" => $Data[$index]->Username
            ]);
        }

        return $myArray;
    }

    //Get Top Rated Podcasts
    public static function GetTopRatedPodcasts($Limit)
    {
        //Info from Database
        $Data = DB::select('SELECT NP.NewsPodcastId, NP.PodcastName, NP.PodcastDescription, NP.AudioLink, NP.PodcastCountry, NP.PodcastRating, NP.PodcastCount, NP.PodcastCreatedDate, NS.Subject, U.Username FROM newspodcasts NP INNER JOIN users U ON U.UserId = NP.UserId INNER JOIN newssubjects NS ON NS.SubjectId = NP.PodcastTopic ORDER BY NP.PodcastRating DESC LIMIT ?', [$Limit]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Id" => $Data[$index]->NewsPodcastId,
                "Name" => $Data[$index]->PodcastName,
                "Description" => $Data[$index]->PodcastDescription,
                "Link" => $Data[$index]->AudioLink,
                "Country" => $Data[$index]->PodcastCountry,
                "Rating" => $Data[$index]->PodcastRating,
                "Count" => $Data[$index]->PodcastCount,
                "Date" => $Data[$index]->PodcastCreatedDate,
                "Subject" => $Data[$index]->Subject,
                "Username" => $Data[$index]->Username
            ]);
        }

        return $myArray;
    }
    //Get Top Podcasts
    public static function GetTopPodcasts($Limit)
    {
        //Info from Database
        $Data = DB::select('SELECT NP.NewsPodcastId, NP.PodcastName, NP.PodcastDescription, NP.AudioLink, NP.PodcastCountry, NP.PodcastRating, NP.PodcastCount, NP.PodcastCreatedDate, NS.Subject, U.Username FROM newspodcasts NP INNER JOIN users U ON U.UserId = NP.UserId INNER JOIN newssubjects NS ON NS.SubjectId = NP.PodcastTopic ORDER BY NP.PodcastCount DESC LIMIT ?', [$Limit]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Id" => $Data[$index]->NewsPodcastId,
                "Name" => $Data[$index]->PodcastName,
                "Description" => $Data[$index]->PodcastDescription,
                "Link" => $Data[$index]->AudioLink,
                "Country" => $Data[$index]->PodcastCountry,
                "Rating" => $Data[$index]->PodcastRating,
                "Count" => $Data[$index]->PodcastCount,
                "Date" => $Data[$index]->PodcastCreatedDate,
                "Subject" => $Data[$index]->Subject,
                "Username" => $Data[$index]->Username
            ]);
        }

        return $myArray;
    }
}
