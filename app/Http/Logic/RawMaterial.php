<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class RawMaterial
{

    //Get a list of product brand
    public static function GetProductBrand($name){
        //Get Date
        $Data = DB::select('SELECT * FROM `rawmateproduct` WHERE SubCategory = ?', [$name]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "ProductId" => $Data[$index]->RawMateProductId,
                "ProductName" => $Data[$index]->ProductName,
                "ProductDescription" => $Data[$index]->ProductDescription,
                "MainCategory" => $Data[$index]->MainCategory,
                "SubCategory" => $Data[$index]->SubCategory,
                "ProductImage" => $Data[$index]->ProductImage,
                "ProductPrice" => $Data[$index]->ProductPrice,
                "ProductCurrency" => $Data[$index]->ProductCurrency,
                "ProductQuantity" => $Data[$index]->ProductQuantity,
                "ProductMeasurement" => $Data[$index]->ProductMeasurement,
                "RawmateIndustryType" => $Data[$index]->RawmateIndustryType,
                "RawmateProcessType" => $Data[$index]->RawmateProcessType
            ]);
        }

        return $myArray;
    }
    //Get a list of raw mate
    public static function GetRawMatProduct($Name, $Id){
        //Get Date
        $Data = DB::select('SELECT RS.RawmateSellerId, RS.Name, RP.RawMateProductId, RP.ProductName, RP.ProductDescription, RP.ProductPrice, RP.ProductCurrency, RP.ProductImage, RP.ProductMeasurement, RP.ProductQuantity FROM rawmateseller RS INNER JOIN rawmateproduct RP ON RS.RawmateSellerId = RP.SellerId WHERE RP.ProductName = ? AND RP.RawMateProductId = ?', [$Name ,$Id]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "SellerName" => $Data[$index]->Name,
                "SellerId" => $Data[$index]->RawmateSellerId,
                "ProductName" => $Data[$index]->ProductName,
                "ProductId" => $Data[$index]->RawMateProductId,
                "ProductDescription" => $Data[$index]->ProductDescription,
                "ProductPrice" => $Data[$index]->ProductPrice,
                "ProductCurrency" => $Data[$index]->ProductCurrency,
                "ProductImage" => $Data[$index]->ProductImage,
                "ProductMeasurement" => $Data[$index]->ProductMeasurement,
                "ProductQuantity" => $Data[$index]->ProductQuantity
            ]);
        }

        return $myArray;
    }
    //Get a list of raw mate
    public static function GetRawMats($Type, $Limit){
        //Get Date
        $Data = DB::select('SELECT RS.RawmateSellerId, RS.Name, RP.RawMateProductId, RP.ProductName, RP.ProductDescription, RP.ProductPrice, RP.ProductCurrency, RP.ProductImage, RP.ProductMeasurement FROM rawmateseller RS INNER JOIN rawmateproduct RP ON RS.RawmateSellerId = RP.SellerId WHERE RP.RawmateProcessType = ? ORDER BY RP.PublishedDate DESC LIMIT ?', [$Type ,$Limit]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "SellerName" => $Data[$index]->Name,
                "SellerId" => $Data[$index]->RawmateSellerId,
                "ProductName" => $Data[$index]->ProductName,
                "ProductId" => $Data[$index]->RawMateProductId,
                "ProductDescription" => $Data[$index]->ProductDescription,
                "ProductPrice" => $Data[$index]->ProductPrice,
                "ProductCurrency" => $Data[$index]->ProductCurrency,
                "ProductImage" => $Data[$index]->ProductImage,
                "ProductMeasurement" => $Data[$index]->ProductMeasurement
            ]);
        }

        return $myArray;
    }

    //Get a list of raw mate
    public static function GetProductSorting(){
        //Get Date
        $Data = DB::select('SELECT * FROM `rawmatesort` WHERE Id <> ?;', [0]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "Category" => $Data[$index]->Category,
                "SubCategory" => $Data[$index]->SubCategory
            ]);
        }

        return $myArray;
    }

    //Get a list of raw mate
    public static function GetProducts(){
        //Get Date
        $Data = DB::select('SELECT * FROM `rawmateproduct` WHERE RawMateProductId <> ?;', [0]);
        $myArray = [];
        //Loop through
        for ($index = 0; $index < count($Data); $index++) {
            //Push to temp array
            array_push($myArray, [
                "ProductId" => $Data[$index]->RawMateProductId,
                "ProductName" => $Data[$index]->ProductName,
                "ProductDescription" => $Data[$index]->ProductDescription,
                "MainCategory" => $Data[$index]->MainCategory,
                "SubCategory" => $Data[$index]->SubCategory,
                "ProductImage" => $Data[$index]->ProductImage,
                "ProductPrice" => $Data[$index]->ProductPrice,
                "ProductCurrency" => $Data[$index]->ProductCurrency,
                "ProductQuantity" => $Data[$index]->ProductQuantity,
                "ProductMeasurement" => $Data[$index]->ProductMeasurement,
                "RawmateIndustryType" => $Data[$index]->RawmateIndustryType,
                "RawmateProcessType" => $Data[$index]->RawmateProcessType
            ]);
        }

        return $myArray;
    }
    
}