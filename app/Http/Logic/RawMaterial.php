<?php

namespace App\Http\Logic;

use Illuminate\Support\Facades\DB;

class RawMaterial
{
    //Get a list of raw mate
    public static function GetRawMatProduct($Name, $Id){
        //Get Date
        $Data = DB::select('SELECT RS.RawmateSellerId, RS.Name, RP.RawMateProductId, RP.ProductName, RP.ProductDescription, RP.ProductPrice, RP.ProductCurrency, RP.ProductImage, RP.ProductMeasurement, RP.ProductQuantity FROM RawmateSeller RS INNER JOIN RawmateProduct RP ON RS.RawmateSellerId = RP.SellerId WHERE RP.ProductName = ? AND RP.RawMateProductId = ?', [$Name ,$Id]);
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
        $Data = DB::select('SELECT RS.RawmateSellerId, RS.Name, RP.RawMateProductId, RP.ProductName, RP.ProductDescription, RP.ProductPrice, RP.ProductCurrency, RP.ProductImage, RP.ProductMeasurement FROM RawmateSeller RS INNER JOIN RawmateProduct RP ON RS.RawmateSellerId = RP.SellerId WHERE RP.RawmateProcessType = ? ORDER BY RP.PublishedDate DESC LIMIT ?', [$Type ,$Limit]);
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
}