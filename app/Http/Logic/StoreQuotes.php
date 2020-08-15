<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;
use App\Http\Logic\GetCurrency;

class StoreQuotes{
    //Get contents from GetCurrency::CURRENCY_EXCHANGE_FROM_DB()
    public static function GetStoredCurrencyExchangeFromDB(){
        return GetCurrency::CURRENCY_EXCHANGE_FROM_DB();
    }
    //Store Landing Page Currency Quotes to Database
    public static function StoreLandingPageCurrencyExchange(){
        $infoCurrencyInfo = GetCurrency::CURRENCY_EXCHANGE("USD", "ZAR");
        if (sizeof($infoCurrencyInfo) == 9){
            $USDZAR = array(
                "Status" => 1,
                "FromCurrencyCode" => $infoCurrencyInfo[0],
                "FromCurrencyName" => $infoCurrencyInfo[1],
                "ToCurrencyCode" => $infoCurrencyInfo[2],
                "ToCurrencyName" => $infoCurrencyInfo[3],
                "ExchangeRate"=> $infoCurrencyInfo[4], 
                "LastRefreshed"=> $infoCurrencyInfo[5],
                "TimeZone"=> $infoCurrencyInfo[6],
                "BidRate"=> $infoCurrencyInfo[7],
                "AskRate"=>$infoCurrencyInfo[8] 
            );
        }else{
            $USDZAR = array("Status" => 0);
        }

        $infoCurrencyInfo = GetCurrency::CURRENCY_EXCHANGE("GBP", "ZAR");
        if (sizeof($infoCurrencyInfo) == 9){
            $GBPZAR = array(
                "Status" => 1,
                "FromCurrencyCode" => $infoCurrencyInfo[0],
                "FromCurrencyName" => $infoCurrencyInfo[1],
                "ToCurrencyCode" => $infoCurrencyInfo[2],
                "ToCurrencyName" => $infoCurrencyInfo[3],
                "ExchangeRate"=> $infoCurrencyInfo[4], 
                "LastRefreshed"=> $infoCurrencyInfo[5],
                "TimeZone"=> $infoCurrencyInfo[6],
                "BidRate"=> $infoCurrencyInfo[7],
                "AskRate"=>$infoCurrencyInfo[8]
            );
        }else{
            $GBPZAR = array("Status" => 0);
        }

        $infoCurrencyInfo = GetCurrency::CURRENCY_EXCHANGE("EUR", "ZAR");
        if (sizeof($infoCurrencyInfo) == 9){
            $EURZAR = array(
                "Status" => 1,
                "FromCurrencyCode" => $infoCurrencyInfo[0],
                "FromCurrencyName" => $infoCurrencyInfo[1],
                "ToCurrencyCode" => $infoCurrencyInfo[2],
                "ToCurrencyName" => $infoCurrencyInfo[3],
                "ExchangeRate"=> $infoCurrencyInfo[4], 
                "LastRefreshed"=> $infoCurrencyInfo[5],
                "TimeZone"=> $infoCurrencyInfo[6],
                "BidRate"=> $infoCurrencyInfo[7],
                "AskRate"=>$infoCurrencyInfo[8]
            );
        }else{
            $EURZAR = array("Status" => 0);
        }

        $infoCurrencyInfo = GetCurrency::CURRENCY_EXCHANGE("JPY", "ZAR");
        if (sizeof($infoCurrencyInfo) == 9){
            $JPYZAR = array(
                "Status" => 1,
                "FromCurrencyCode" => $infoCurrencyInfo[0],
                "FromCurrencyName" => $infoCurrencyInfo[1],
                "ToCurrencyCode" => $infoCurrencyInfo[2],
                "ToCurrencyName" => $infoCurrencyInfo[3],
                "ExchangeRate"=> $infoCurrencyInfo[4], 
                "LastRefreshed"=> $infoCurrencyInfo[5],
                "TimeZone"=> $infoCurrencyInfo[6],
                "BidRate"=> $infoCurrencyInfo[7],
                "AskRate"=>$infoCurrencyInfo[8]
            );
        }else{
            $JPYZAR = array("Status" => 0);
        }

        $allPairs = array(
            "USDZAR" => $USDZAR,
            "GBPZAR" => $GBPZAR,
            "EURZAR" => $EURZAR,
            "JPYZAR" => $JPYZAR
        );

        return $allPairs;
    }
}