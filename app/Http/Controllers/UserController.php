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

    public function Profile(Request $request){
        //Getting user information from session class
        $UserInfomation = $request->session()->get('user');
        $UserInfomation = $UserInfomation["User"][0];

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
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "UserInfo"=> $InfoToInject];
        //print_r($InfoToInject);
        return view("user/profile", $properties);
    }
}
