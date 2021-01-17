<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Logic\AppSession;

class UserController extends Controller
{

    public function Dashboard(Request $request){
        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $userInfo["Name"]." ".$userInfo["Surname"], "ProfilePicture"=> $userProfilePicture["Base64"], "IsBase64"=> $userProfilePicture["IsBase64"]];
        
        return view("user/dashboard", $properties);
    }

    public function Storeroom(Request $request){
        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();

        $resutls = DB::select("
            SELECT RP.ProductName, RP.ProductPrice, RP.ProductCurrency, RP.ProductDescription, RP.ProductQuantity, RP.ProductImage FROM rawmateseller RS 
            INNER JOIN rawmateproduct RP 
            ON RS.RawmateSellerId = RP.SellerId
            INNER JOIN users U
            ON U.UserId = RS.UserId
            WHERE U.UserId = ?
        ",
        [$userInfo["UserId"]]
        );

        //print_r($resutls);

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $userInfo["Name"]." ".$userInfo["Surname"], "ProfilePicture"=> $userProfilePicture["Base64"], "IsBase64"=> $userProfilePicture["IsBase64"], "Products"=> $resutls];
        
        return view("user/storeroom", $properties);
    }

    public function Profile(Request $request){
        
    }
}
