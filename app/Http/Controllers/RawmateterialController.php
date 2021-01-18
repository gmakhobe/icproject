<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;
use App\Http\Logic\RawMaterial;

class RawmateterialController extends Controller
{

    //Rawmate view page
    public function RawmateBrandView($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();

        $GetProductsBrand = RawMaterial::GetProductBrand($name);
        //print_r($ProductSort);
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Raw Material", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "GetProductsBrand" => $GetProductsBrand];
        //print_r($GetProducts);
        //Return view injected with a ass array
        return view('user/rawmate/brand', $properties);
    }

    //Rawmate view page
    public function RawmateView()
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get Processed Raw Matewrial
        $ProceesedRawMat = RawMaterial::GetRawMats(1, 50);
        $UnproceesedRawMat = RawMaterial::GetRawMats(0, 50);
        //Product Sorting
        $ProductSort = RawMaterial::GetProductSorting();
        $GetProducts = RawMaterial::GetProducts();
        //print_r($ProductSort);
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Raw Material", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "ProceesedRawMat" => $ProceesedRawMat, "UnproceesedRawMat" => $UnproceesedRawMat, "ProductSort" => $ProductSort, "GetProducts" => $GetProducts];
        //print_r($GetProducts);
        //Return view injected with a ass array
        return view('user/rawmate/rawmate', $properties);
    }

    //Rawmate product view page
    public function RawmateProductView($name, $id)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get Product Information
        $ProceesedRawMat = RawMaterial::GetRawMatProduct($name, $id);
        if ($ProceesedRawMat) {

            //Properties to inject
            $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - Product View - Raw Material", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "ProceesedRawMat"=> $ProceesedRawMat, "ProductInfo"=> array($name, $id)];
            //print_r($ProceesedRawMat);
            //Return view injected with a ass array
            return view('user/rawmate/product-view', $properties);

        } else {

            return redirect("/user/rawmate");

        }
    }
    //Rawmate product view page
    public function RawmateSellerProfileView($name, $id)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - Seller Profile - Raw Material", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array
        return view('user/rawmate/seller-view', $properties);
    }



    public function PageInfoView(){
        //Properties to be injected
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
        return view('user/rawmate/InfoPage', $properties);
    }
    // public function PartnersView (){
    //     //Properties to be injected
    //     $UserInformation = AppSession::sessionGetUserInfo();
    //     $UserProfilePicture = AppSession::sessionGetUserProfilePicture();

    //     $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Dashboard", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
    //     return view('user/rawmate/Partners', $properties);
    // }
}

