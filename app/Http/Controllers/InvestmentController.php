<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;
use App\Http\Logic\InvestmentIndustries;
use App\Http\Logic\InvestmentGetCompany;

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
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Investment", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"]];
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
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"], "CompanyName"=> $name];
        //Return view injected with a ass array
        return view('user/investment/company-workspace', $properties);
    }

    //User/Investemt
    public function InvestmentView()
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Find 
        $ListOfCompanyInd = InvestmentIndustries::GetCompanyIndusties();
        $ListOfServiceInd = InvestmentIndustries::GetServiceIndusties();
        $ListOfEventInd = InvestmentIndustries::GetEventIndusties();
        $ListOfHedgeFundInd = InvestmentIndustries::GetHedgeFundIndusties();
        $ListOfStartUpIndexInd = InvestmentIndustries::GetStartUpIndexIndusties();
        $ListOfNewsChannelsInd = InvestmentIndustries::GetNewsChannelsIndusties();
        $ListOfCompanyIndustriesCompany = InvestmentGetCompany::GetCompanyIndustriesCompanies();
        //print_r($ListOfCompanyIndustriesCompany);
        //return;
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Investments", "NameAndSurname"=> $UserInformation["Name"]." ".$UserInformation["Surname"], "ProfilePicture"=> $UserProfilePicture["Base64"], "IsBase64"=> $UserProfilePicture["IsBase64"], "ListOfCompanyInd"=> $ListOfCompanyInd, "ListOfServiceInd"=> $ListOfServiceInd, "ListOfEventInd"=> $ListOfEventInd, "ListOfHedgeFundInd"=> $ListOfHedgeFundInd, "ListOfStartUpIndexInd"=> $ListOfStartUpIndexInd, "ListOfNewsChannelsInd"=> $ListOfNewsChannelsInd, "CompanyIndustriesCompanies"=> $ListOfCompanyIndustriesCompany];
        //Return view injected with a ass array
        return view('user/investment/investment', $properties);
    }

}
