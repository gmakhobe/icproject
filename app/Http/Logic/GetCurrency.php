<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class GetCurrency{
    // Get Currency Quotes from the database
    public static function CURRENCY_EXCHANGE_FROM_DB(){
        $ForUSDZAR = DB::select('select * from quoteslandingpage where FromCurrencyCode = "USD" ORDER BY CreatedDate DESC LIMIT 1');
        $ForGBPZAR = DB::select('select * from quoteslandingpage where FromCurrencyCode = "GBP" ORDER BY CreatedDate DESC LIMIT 1');
        $ForEURZAR = DB::select('select * from quoteslandingpage where FromCurrencyCode = "EUR" ORDER BY CreatedDate DESC LIMIT 1');
        $ForJPYZAR = DB::select('select * from quoteslandingpage where FromCurrencyCode = "JPY" ORDER BY CreatedDate DESC LIMIT 1');

        //Get a list from the database

        $response = array(
            "USDZAR"=> $ForUSDZAR,
            "GBPUSD"=> $ForGBPZAR,
            "EURUSD"=> $ForEURZAR,
            "JPYUSD"=> $ForJPYZAR
        );

        return $response;
    }

    //Get Request
    public static function CURRENCY_EXCHANGE($fromC, $toC){  
        /*
        	[0]	->	"1. From_Currency Code": "USD",
            [1]	->	"2. From_Currency Name": "United States Dollar",
            [2]	->	"3. To_Currency Code": "JPY",
            [3]	->	"4. To_Currency Name": "Japanese Yen",
            [4]	->	"5. Exchange Rate": "106.75500000",
            [5]	->	"6. Last Refreshed": "2020-08-12 03:59:01",
            [6]	->	"7. Time Zone": "UTC",
            [7]	->	"8. Bid Price": "106.75500000",
            [8]	->	"9. Ask Price": "106.75500000"
        */
        $key = "5LP7MWIPPF82ARLN";

        $RawJsonQuote = file_get_contents("https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=$fromC&to_currency=$toC&apikey=$key");

        //Remove Property and curly braces
        $QuoteInfo = "";
        for($i = 0; $i < strlen($RawJsonQuote); $i++){
            if ($i > 43 && $i < strlen($RawJsonQuote) - 4){
                $QuoteInfo .= $RawJsonQuote[$i];
            }
        }

        //Remove replace : with =>
        $QuoteInfo = str_replace(": ", "=>", $QuoteInfo);
        //Split to string to form [Key => Value]
        $QuoteInfo = explode(',', $QuoteInfo);
        //Str
        $newStr = null;
        //Build an array
        $buldArray = array();

        for($index = 0; $index < 9; $index++){
        	$newStr = str_replace('"', "", $QuoteInfo[$index]);
        	$newStr = explode("=>", $newStr);
            $buldArray[$index] = $newStr[1];
            $newStr = null;
        }
        return $buldArray;
    }
}