<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class NewsBlog
{
    //Get news channel search
    public static function GetNewsBlogSearch($search)
    {

        //Info from Database
        $Data = DB::select('SELECT Us.ProfilePicture AS "ProfileLink", Us.Username AS "Username", Us.UserId AS "UserId", NB.NewsBlogId, NB.Country, NB.CreatedDate FROM NewsBlogs NB INNER JOIN users Us ON Us.UserId = NB.UserId WHERE Us.UserId IN (SELECT UserId FROM users WHERE Username LIKE ? OR Name LIKE ? OR Surname LIKE ?) ', ["%$search%", "%$search%", "%$search%"]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "ProfileLink" => ($Data[$index]->ProfileLink ? $Data[$index]->ProfileLink : "/images/user-icon.svg" ),
                "Username" => $Data[$index]->Username,
                "Date" => $Data[$index]->CreatedDate,
                "Id" => $Data[$index]->UserId
            ]);
        }

        return $myArray;
    }
    
    //Get news comments
    public static function GetNewsBlogComments($name, $Id, $commentind)
    {

        //Info from Database
        $Data = DB::select('SELECT NCS.Comment AS "Comment", NCS.CommentDate AS "Date", U.ProfilePicture AS "Image", U.Name AS "Name", U.Surname AS "Surname" FROM NewsBlogPost NBP INNER JOIN NewsBlogs NB ON NB.NewsBlogId = NBP.NewsBlogPostId INNER JOIN NewsComments NCS ON NCS.NewsId = NBP.NewsBlogPostId INNER JOIN users U ON U.UserId = NCS.UserId WHERE NBP.Heading = ? AND NBP.NewsBlogPostId = ? AND NCS.CommentInd = ?', [$name, $Id, $commentind]);
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
    //Get A Blog Post
    public static function GetNewsBlogPost($heading, $id){
        //Get Data from table
        $Data = DB::select('SELECT U.ProfilePicture AS "ProfileLink", U.Username AS "Username", U.UserId AS "UserId", NBP.Heading, NBP.SubHeading, NBP.Post, NBP.ImageLink, NBP.TimeSpan, NBP.NewsBlogId, NBP.NewsBlogPostId, NBP.CreatedDate FROM NewsBlogs NS INNER JOIN NewsBlogPost NBP ON NS.NewsBlogId = NBP.NewsBlogId INNER JOIN users U ON U.UserId = NS.UserId WHERE NBP.Heading = ? AND NBP.NewsBlogPostId = ?', [$heading, $id]);
        //Empty arr
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ProfileLink" => ($Data[$index]->ProfileLink ? $Data[$index]->ProfileLink : "/images/user-icon.svg" ),
                "Username" => $Data[$index]->Username,
                "UserId" => $Data[$index]->UserId,
                "Heading" => $Data[$index]->Heading,
                "SubHeading" => $Data[$index]->SubHeading,
                "Image" => $Data[$index]->ImageLink,
                "TimeSpan" => $Data[$index]->TimeSpan,
                "BlogId" => $Data[$index]->NewsBlogId,
                "NewsBlogId" => $Data[$index]->NewsBlogPostId,
                "Date" => $Data[$index]->CreatedDate,
                "Post" => $Data[$index]->Post
            ]);
        }

        return $myArray;
    }

    //Get List of Author All Blog Posts
    public static function GetAuthorInfo($UserId, $UserName){
        //Get Data from table
        $Data = DB::select('SELECT Us.ProfilePicture AS "ProfileLink", Us.Username AS "Username", Us.UserId AS "UserId", NB.Description, NB.Country FROM NewsBlogs NB INNER JOIN users Us ON Us.UserId = NB.UserId WHERE Us.UserId = ? AND Us.Username = ? LIMIT ?', [$UserId, $UserName, 1]);
        //Empty arr
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ProfileLink" => ($Data[$index]->ProfileLink ? $Data[$index]->ProfileLink : "/images/user-icon.svg" ),
                "Username" => $Data[$index]->Username,
                "UserId" => $Data[$index]->UserId,
                "Description" => $Data[$index]->Description,
                "Country" => $Data[$index]->Country
            ]);
        }

        return $myArray;
    }
    //Get List of Author All Blog Posts
    public static function GetAuthorAllNewsBlogs($UserId, $UserName){
        //Get Data from table
        $Data = DB::select('SELECT Us.ProfilePicture AS "ProfileLink", Us.Username AS "Username", Us.UserId AS "UserId", NBP.Heading, NBP.SubHeading, NBP.Post, NBP.ImageLink, NBP.TimeSpan, NBP.NewsBlogId, NBP.NewsBlogPostId, NBP.CreatedDate FROM NewsBlogPost NBP INNER JOIN NewsBlogs NB ON NBP.NewsBlogId = NB.NewsBlogId INNER JOIN users Us ON Us.UserId = NB.UserId WHERE Us.UserId = ? AND Us.Username = ? ORDER BY NB.CreatedDate DESC', [$UserId, $UserName]);
        //Empty arr
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ProfileLink" => ($Data[$index]->ProfileLink ? $Data[$index]->ProfileLink : "/images/user-icon.svg" ),
                "Username" => $Data[$index]->Username,
                "UserId" => $Data[$index]->UserId,
                "Heading" => $Data[$index]->Heading,
                "SubHeading" => $Data[$index]->SubHeading,
                "Image" => $Data[$index]->ImageLink,
                "TimeSpan" => $Data[$index]->TimeSpan,
                "BlogId" => $Data[$index]->NewsBlogId,
                "NewsBlogId" => $Data[$index]->NewsBlogPostId,
                "Date" => $Data[$index]->CreatedDate
            ]);
        }

        return $myArray;
    }
    //Get List of Latests Blogs
    public static function GetLatestNewsBlogs($limit){
        //Get Data from table
        $Data = DB::select('SELECT U.Username, U.ProfilePicture, U.UserId, NB.CreatedDate, NB.NewsBlogId FROM NewsBlogs NB INNER JOIN users U ON U.UserId = NB.UserId ORDER BY NB.CreatedDate DESC LIMIT ?', [$limit]);
        //Empty arr
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ProfileLink" => ($Data[$index]->ProfilePicture ? $Data[$index]->ProfilePicture : "/images/user-icon.svg" ),
                "Username" => $Data[$index]->Username,
                "UserId" => $Data[$index]->UserId,
                "NewsBlogId" => $Data[$index]->NewsBlogId,
                "Date" => $Data[$index]->CreatedDate
            ]);
        }

        return $myArray;
    }
    //Get List of Latests Blog Posts
    public static function GetLatestNewsBlogPosts($limit){
        //Get Data from table
        $Data = DB::select('SELECT U.ProfilePicture AS "ProfileLink", U.Username AS "Username", U.UserId AS "UserId", NBP.Heading, NBP.SubHeading, NBP.Post, NBP.ImageLink, NBP.TimeSpan, NBP.NewsBlogId, NBP.NewsBlogPostId, NBP.CreatedDate FROM NewsBlogs NS INNER JOIN NewsBlogPost NBP ON NS.NewsBlogId = NBP.NewsBlogId INNER JOIN users U ON U.UserId = NS.UserId ORDER BY NBP.CreatedDate DESC LIMIT ?', [$limit]);
        //Empty arr
        $myArray = [];

        for ($index = 0; $index < count($Data); $index++) {
            //Push to array
            array_push($myArray, [
                "ProfileLink" => ($Data[$index]->ProfileLink ? $Data[$index]->ProfileLink : "/images/user-icon.svg" ),
                "Username" => $Data[$index]->Username,
                "UserId" => $Data[$index]->UserId,
                "Heading" => $Data[$index]->Heading,
                "SubHeading" => $Data[$index]->SubHeading,
                "Image" => $Data[$index]->ImageLink,
                "TimeSpan" => $Data[$index]->TimeSpan,
                "BlogId" => $Data[$index]->NewsBlogId,
                "NewsBlogId" => $Data[$index]->NewsBlogPostId,
                "Date" => $Data[$index]->CreatedDate
            ]);
        }

        return $myArray;
    }
}