<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Logic\AppSession;

class CreateController extends Controller
{
    //Loading Investment View
    public function CreateView(){//Properties to be injected
        //Get User Information from session
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();


        return view('user/create/create', ["Name" => $GLOBALS['AppTitle'], "Title" => "Create", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"]]);
    }
}
