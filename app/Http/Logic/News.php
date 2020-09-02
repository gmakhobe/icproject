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

}