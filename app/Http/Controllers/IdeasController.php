<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;

class IdeasController extends Controller
{
    public function IndexView(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Ideas", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/ideas/ideas', $properties);
    }

    public function StrategiesIndicatorsView(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Ideas", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/ideas/strategies-indicators', $properties);
    }
}
