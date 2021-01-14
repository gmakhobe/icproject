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

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $userInfo["Name"]." ".$userInfo["Surname"], "ProfilePicture"=> $userProfilePicture["Base64"], "IsBase64"=> $userProfilePicture["IsBase64"]];
        
        return view("user/storeroom", $properties);
    }

    public function Profile(Request $request){
        
    }

    public function StockBrokers(){
        //Properties to be injected
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        
        return view("/user/stockbrokers", $properties);
    }

    public function SmallCapStock(){
        //Properties to be injected
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        
        return view("/user/smallcapstock", $properties);
    }
}
