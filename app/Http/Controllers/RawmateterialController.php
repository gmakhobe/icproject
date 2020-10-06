<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;

class RawmateterialController extends Controller
{
    //Rawmate view page
    public function RawmateView(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Raw Material", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/rawmate/rawmate', $properties);
    }
}
