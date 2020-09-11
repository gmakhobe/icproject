<?php

namespace App\Http\Controllers;

use App\Http\Logic\AppSession;

class UserProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();

        $InfoToInject = array(
            'Name'=> $UserInfomation->Name,
            'Surname'=> $UserInfomation->Surname,
            'EmailAddress'=> $UserInfomation->EmailAddress,
            'Username'=> $UserInfomation->Username,
            'Address'=> $UserInfomation->Address,
            'City'=> $UserInfomation->City,
            'Country'=> $UserInfomation->Country
        );
        //Properties to be injected
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $userInfo["Name"]." ".$userInfo["Surname"], "ProfilePicture"=> $userProfilePicture["Base64"], "IsBase64"=> $userProfilePicture["IsBase64"]];
        //print_r($InfoToInject);
        return view("user/profile", $properties);
    }
}
