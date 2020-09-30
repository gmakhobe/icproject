<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;

class InvestmentController extends Controller
{
    /*
    '
        This class is not instatiable, hence we have no __costructor & __destructor
    */
    //User/Investemt/Event/{name}
    public function HedgeFund($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/investment/template', $properties);
    }

    //User/Investemt/Event/{name}
    public function Event($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/investment/template', $properties);
    }

    //User/Investemt/Service/{name}
    public function Service($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/investment/template', $properties);
    }

    //User/Investemt/Company/{name}
    public function Company($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/investment/template', $properties);
    }

    //User/Investemt
    public function InvestmentView()
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/investment/investment', $properties);
    }

}
