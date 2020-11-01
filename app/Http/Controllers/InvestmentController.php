<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;
use App\Http\Logic\InvestmentIndustries;
use App\Http\Logic\InvestmentGetCompany;
use App\Http\Logic\GetCompanyInformation;
use App\Http\Logic\InvestmentGetService;
use App\Http\Logic\GetServiceInformation;
use App\Http\Logic\GetEventInformation;
use App\Http\Logic\GetHedgeFundInformation;

class InvestmentController extends Controller
{
    /*
    '
        This class is not instatiable, hence we have no __costructor & __destructor
    */
    //User/Investemt/NewsChannel/{name}
    public function NewsChannel($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Investment", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"]];
        //Return view injected with a ass array

        return redirect('/user/investment');
        //return view('user/investment/template', $properties);
    }
    //User/Investemt/Event/{name}
    public function Event($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"]];

        $EventInformation = GetEventInformation::GetEventInformation($name);
        if ($EventInformation) {

            $EventManagement = GetEventInformation::GetEventManagement($name);
            $EventPitch = GetEventInformation::GetEventPitch($name);
            $EventReports = GetEventInformation::GetEventReports($name);
            $EventNews = GetEventInformation::GetEventNews($name);
            $EventEarnings = GetEventInformation::GetEventEarnings($name);

            //Properties to injectGetServiceNews($Symbol)
            $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name Investment", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "EventInformation" => $EventInformation, "EventManagement" => $EventManagement, "EventPitch" => $EventPitch, "EventReports" => $EventReports, "EventNews" => $EventNews, "EventEarnings" => $EventEarnings];
            //Return view injected with a ass array
            return view('user/investment/events', $properties);
        } else {
            return redirect('/user/investment');
        }
    }
    //User/Investemt/HedgeFund/{name}
    public function HedgeFund($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"]];

        $HFInformation = GetHedgeFundInformation::GetHedgeFundInformation($name);
        if ($HFInformation) {

            $HFManagement = GetHedgeFundInformation::GetHedgeFundManagement($name);
            $HFPitch = GetHedgeFundInformation::GetHedgeFundPitch($name);
            $HFReports = GetHedgeFundInformation::GetHedgeFundReports($name);
            $HFNews = GetHedgeFundInformation::GetHedgeFundNews($name);
            $HFInvestors = GetHedgeFundInformation::GetHedgeFundInvestors($name);
            $HFCalendar = GetHedgeFundInformation::GetHedgeFundCalendar($name);

            //Properties to injectGetServiceNews($Symbol)
            $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name Investment", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "HFInformation" => $HFInformation, "HFManagement" => $HFManagement, "HFPitch" => $HFPitch, "HFReports" => $HFReports, "HFNews" => $HFNews, "HFInvestors" => $HFInvestors, "HFCalendar"=> $HFCalendar];
            //Return view injected with a ass array
            return view('user/investment/hedgefund', $properties);
        } else {
            return redirect('/user/investment');
        }
    }

    //User/Investemt/StartUpIndex/{name}
    public function StartUpIndex($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"]];

        $ServiceInformation = GetServiceInformation::GetServiceInformation($name, 1);
        if ($ServiceInformation) {

            $ServiceManagement = GetServiceInformation::GetServiceManagement($name, 1);
            $ServicePitch = GetServiceInformation::GetServicePitch($name, 1);
            $ServiceReports = GetServiceInformation::GetServiceReports($name, 1);
            $ServiceEarnings = GetServiceInformation::GetServiceEarnings($name, 1);
            $ServiceIS = GetServiceInformation::GetServiceIS($name, 1);
            $ServiceAssets = GetServiceInformation::GetServiceAssets($name, 1);
            $ServiceCalendar = GetServiceInformation::GetServiceCalendar($name, 1);
            $ServiceNews = GetServiceInformation::GetServiceNews($name, 1);
            $ServiceVisuals = GetServiceInformation::GetServiceVisuals($name, 1);

            //Properties to injectGetServiceNews($Symbol)
            $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name Investment", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "ServiceInfo" => $ServiceInformation, "ServiceManagement" => $ServiceManagement, "ServicePitch" => $ServicePitch, "ServiceReports" => $ServiceReports, "ServiceEarnings" => $ServiceEarnings, "ServiceIS" => $ServiceIS, "ServiceAssets" => $ServiceAssets, "ServiceCalendar" => $ServiceCalendar, "ServiceNews" => $ServiceNews, "ServiceVisuals" => $ServiceVisuals];
            //Return view injected with a ass array
            return view('user/investment/startupindex', $properties);
        } else {
            return redirect('/user/investment');
        }
    }

    //User/Investemt/Service/{name}
    public function Service($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();

        $ServiceInformation = GetServiceInformation::GetServiceInformation($name, 0);

        if ($ServiceInformation) {
            $ServiceManagement = GetServiceInformation::GetServiceManagement($name, 0);
            $ServicePitch = GetServiceInformation::GetServicePitch($name, 0);
            $ServiceReports = GetServiceInformation::GetServiceReports($name, 0);
            $ServiceEarnings = GetServiceInformation::GetServiceEarnings($name, 0);
            $ServiceIS = GetServiceInformation::GetServiceIS($name, 0);
            $ServiceAssets = GetServiceInformation::GetServiceAssets($name, 0);
            $ServiceCalendar = GetServiceInformation::GetServiceCalendar($name, 0);
            $ServiceNews = GetServiceInformation::GetServiceNews($name, 0);
            $ServiceVisuals = GetServiceInformation::GetServiceVisuals($name, 0);

            //Properties to injectGetServiceNews($Symbol)
            $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name Investment", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "ServiceInfo" => $ServiceInformation, "ServiceManagement" => $ServiceManagement, "ServicePitch" => $ServicePitch, "ServiceReports" => $ServiceReports, "ServiceEarnings" => $ServiceEarnings, "ServiceIS" => $ServiceIS, "ServiceAssets" => $ServiceAssets, "ServiceCalendar" => $ServiceCalendar, "ServiceNews" => $ServiceNews, "ServiceVisuals" => $ServiceVisuals];
            //Return view injected with a ass array
            return view('user/investment/service', $properties);
        } else {
            return redirect('/user/investment');
        }
    }

    //User/Investemt/Company/{name}
    public function Company($name)
    {
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        $UserProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Properties to inject

        $CompanyInformation = GetCompanyInformation::GetCompanyInformation($name);
        if ($CompanyInformation) {
            $CompanyManagement = GetCompanyInformation::GetCompanyManagement($name);
            $CompanyNews = GetCompanyInformation::GetCompanyNews($name);
            $CompanyVisuals = GetCompanyInformation::GetCompanyVisuals($name);
            $CompanyReports = GetCompanyInformation::GetCompanyReports($name);

            $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "$name Investment", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "CompanyName" => $name, "CompanySymbol" => $name, "CompanyInfo" => $CompanyInformation, "CompanyManagement" => $CompanyManagement, "CompanyNews" => $CompanyNews, "CompanyVisuals" => $CompanyVisuals, "CompanyReports" => $CompanyReports];

            //print_r($CompanyVisuals);
            return view('user/investment/company-workspace', $properties);
        } else {
            return redirect('/user/investment');
        }
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
        $ListOfCompanyIndustriesServices = InvestmentGetService::GetCompanyIndustriesServices();
        $ListOfCompanyIndustriesStartUpIndex = InvestmentGetService::GetCompanyIndustriesStartUpIndex();
        $ListOfCompanyIndustriesEvents = InvestmentGetService::GetCompanyIndustriesEvents();
        $ListOfCompanyIndustriesHedgeFund = InvestmentGetService::GetCompanyIndustriesHedgeFund();
        $ListOfCompanyIndustriesNewsChannels = InvestmentGetService::GetCompanyIndustriesNewsChannels();

        //print_r($ListOfCompanyIndustriesHedgeFund);
        //return 0;
        //Properties to inject
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Investments", "NameAndSurname" => $UserInformation["Name"] . " " . $UserInformation["Surname"], "ProfilePicture" => $UserProfilePicture["Base64"], "IsBase64" => $UserProfilePicture["IsBase64"], "ListOfCompanyInd" => $ListOfCompanyInd, "ListOfServiceInd" => $ListOfServiceInd, "ListOfEventInd" => $ListOfEventInd, "ListOfHedgeFundInd" => $ListOfHedgeFundInd, "ListOfStartUpIndexInd" => $ListOfStartUpIndexInd, "ListOfNewsChannelsInd" => $ListOfNewsChannelsInd, "CompanyIndustriesCompanies" => $ListOfCompanyIndustriesCompany, "CompanyIndustriesServices" => $ListOfCompanyIndustriesServices, "CompanyIndustriesStartUpIndex" => $ListOfCompanyIndustriesStartUpIndex, "CompanyIndustriesEvents" => $ListOfCompanyIndustriesEvents, "CompanyIndustriesHedgeFunds" => $ListOfCompanyIndustriesHedgeFund, "CompanyIndustriesNewsChannels" => $ListOfCompanyIndustriesNewsChannels];
        //Return view injected with a ass array
        return view('user/investment/investment', $properties);
    }
}
