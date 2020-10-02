<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Logic\StoreQuotes;
use App\Http\Logic\Validator;
use App\Http\Logic\AppSession;
use App\Mail\Registration;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{   
    /*
        Not Active
    public function getNews(){
        return json_encode(News::getFrontPageNews());
    }
    */

    public function activate($code){
        $User = DB::select('select * from users where ActivationHash = ?', [$code]);

        if (isset($User[0]->UserId)){
            DB::update('update users set AccountActive = ?, ActivationHash = ? where ActivationHash = ?', ['Yes',"$code-Used", $code]);
            return view('landing', ["Title" => "IC Application", "ActivationVal"=> 1]);
        }else{
            return redirect('/');
        }
    }

    public function register($email, $password, $name, $surname){
        //Check if $mail and $password are empty strings
        if (!$email || !$password || !$name || !$surname){
            return json_encode(array("status" => 0, "message" => "All fields are required!"));
        }
        //Make username
        $username = Validator::getUsername($email);
        //Hash Password
        try{
            $password = Hash::make($password);

            //Activation Hash
            $activationHash = rand(99999999, 999999999);

            // Insert into the database
            DB::insert('insert into users(Name, Surname, EmailAddress, Passcode, ActivationHash, Username) values (?, ?, ?, ?, ?, ?)', [$name, $surname, $email, $password, $activationHash, $username]);  

            $mailArg = array("Name"=> $name, "Surname"=> $surname, "ActivatioHash"=> $activationHash);
            //Send email to client
            Mail::to($email)
                ->send(new Registration($mailArg));

            return json_encode(array("status" => 1, "message" => "User successfully registered"));
        }catch(Exception $e){
            return json_encode(array("status" => 0, "message" => "An error occured please try again"));
        }
    }

    public function login($email, $password){
        //Check if $mail and $password are empty strings
        if (!$email || !$password){
            return json_encode(array("status" => 0, "message" => "All fields are required!"));
        };
        //Get user information from DB
        try{
            $results =  DB::select('SELECT * FROM users WHERE EmailAddress = ? OR Username = ?', [$email, $email]);
            if (isset($results[0]->AccountActive) && $results[0]->AccountActive == "No"){
                return json_encode(array("status" => 0, "message" => "You need to activate your email address beofre logging in!"));
            }
            //Return positive response on success
            if ($results){

                $comparePassword = Hash::check($password, $results[0]->Passcode);
                if ($comparePassword){
                    AppSession::sessionSet($results);
                    
                    return json_encode(array("status" => 1, "message" => "Login success!"));
                }
                return json_encode(array("status" => 0, "message" => "Email or Password is incorrect!"));
            }
            return json_encode(array("status" => 0, "message" => "Email or Password is incorrect!"));
        }catch(Exception $e){
            return json_encode(array("status" => 0, "message" => "Email or Password Incorrect!"));
        }
    }

    public function subscribe(Request $request, $email){
        //Check if $mail is empty strings
        if (!$email){
            return json_encode(array("status" => 0, "message" => "Email is requred to subscribe."));
        }
        //Insert info into the DB
        try{
            if (DB::insert('INSERT INTO Subscribers(EmailAddress) values (?)', [$email]))  return json_encode(array("status" => 1, "message" => "Subscribe Alert", "Thanks for subscribing, you will receive our news updates and alerts regarding our products."));
        }catch(Exception $e){
            return json_encode(array("status" => 0, "message" => "An error occured please try again later!"));
        }
    }

    public function exchangeRate(){
        
        try {
            $results = DB::select("select * from quoteslandingpage ORDER BY CreatedDate DESC LIMIT 1");

            if (isset($results)){
                $CreatedDateFromDB = strtotime($results[0]->CreatedDate);
                $mathsSubtractDate = date("YmdHi") - date("YmdHi", $CreatedDateFromDB);
            }else{
                $mathsSubtractDate = 50000;
            }
            
            if (!isset($results) || $mathsSubtractDate > 50){
                //Get Quotes from API
                $Quotes = StoreQuotes::StoreLandingPageCurrencyExchange();

                if (!$Quotes["USDZAR"]["Status"] || !$Quotes["GBPZAR"]["Status"] || !$Quotes["EURZAR"]["Status"] || !$Quotes["JPYZAR"]["Status"]){
                    
                    //Run this block

                }else{
                    //Execute on success
                    //USDZAR
                    DB::insert('insert into quoteslandingpage (ProviderName, FromCurrencyCode, FromCurrencyName, ToCurrencyCode, ToCurrencyName, ExchangeRate, BidRate, AskRate, TimeZone, LastRefreshed, CreatedDate) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['www.alphavantage.co', $Quotes["USDZAR"]["FromCurrencyCode"], $Quotes["USDZAR"]["FromCurrencyName"], $Quotes["USDZAR"]["ToCurrencyCode"], $Quotes["USDZAR"]["ToCurrencyName"], $Quotes["USDZAR"]["ExchangeRate"], $Quotes["USDZAR"]["BidRate"], $Quotes["USDZAR"]["AskRate"], $Quotes["USDZAR"]["TimeZone"], $Quotes["USDZAR"]["LastRefreshed"], date("Y-m-d H:i:s")]);
                    //GBPZAR
                    DB::insert('insert into quoteslandingpage (ProviderName, FromCurrencyCode, FromCurrencyName, ToCurrencyCode, ToCurrencyName, ExchangeRate, BidRate, AskRate, TimeZone, LastRefreshed, CreatedDate) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['www.alphavantage.co', $Quotes["GBPZAR"]["FromCurrencyCode"], $Quotes["GBPZAR"]["FromCurrencyName"], $Quotes["GBPZAR"]["ToCurrencyCode"], $Quotes["GBPZAR"]["ToCurrencyName"], $Quotes["GBPZAR"]["ExchangeRate"], $Quotes["GBPZAR"]["BidRate"], $Quotes["GBPZAR"]["AskRate"], $Quotes["GBPZAR"]["TimeZone"], $Quotes["GBPZAR"]["LastRefreshed"], date("Y-m-d H:i:s")]);
                    //EURZAR
                    DB::insert('insert into quoteslandingpage (ProviderName, FromCurrencyCode, FromCurrencyName, ToCurrencyCode, ToCurrencyName, ExchangeRate, BidRate, AskRate, TimeZone, LastRefreshed, CreatedDate) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['www.alphavantage.co', $Quotes["EURZAR"]["FromCurrencyCode"], $Quotes["EURZAR"]["FromCurrencyName"], $Quotes["EURZAR"]["ToCurrencyCode"], $Quotes["EURZAR"]["ToCurrencyName"], $Quotes["EURZAR"]["ExchangeRate"], $Quotes["EURZAR"]["BidRate"], $Quotes["EURZAR"]["AskRate"], $Quotes["EURZAR"]["TimeZone"], $Quotes["EURZAR"]["LastRefreshed"], date("Y-m-d H:i:s")]);
                    //JPYZAR
                    DB::insert('insert into quoteslandingpage (ProviderName, FromCurrencyCode, FromCurrencyName, ToCurrencyCode, ToCurrencyName, ExchangeRate, BidRate, AskRate, TimeZone, LastRefreshed, CreatedDate) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', ['www.alphavantage.co', $Quotes["JPYZAR"]["FromCurrencyCode"], $Quotes["JPYZAR"]["FromCurrencyName"], $Quotes["JPYZAR"]["ToCurrencyCode"], $Quotes["JPYZAR"]["ToCurrencyName"], $Quotes["JPYZAR"]["ExchangeRate"], $Quotes["JPYZAR"]["BidRate"], $Quotes["JPYZAR"]["AskRate"], $Quotes["JPYZAR"]["TimeZone"], $Quotes["JPYZAR"]["LastRefreshed"], date("Y-m-d H:i:s")]);

                }
            }

            $response = StoreQuotes::GetStoredCurrencyExchangeFromDB();
            return json_encode(array("status" => 1, "message" => json_encode($response)));
        }
        catch (Exception $e) {
            return json_encode(array("status" => 0, "message" => 1));
        }
        catch (InvalidArgumentException $e) {
            return json_encode(array("status" => 0, "message" => 2));
        }       
    }

    //Contact us form 
    public function contactus($name, $email, $comments){

        try{

            $mailArg = array("Name"=> $name, "Email"=> $email, "Comments"=> $comments);
            //Send email to client
            Mail::to($email)
                ->send(new ContactUs($mailArg));
            
            return json_encode(array("status" => 1, "message" => "Sent"));

        }catch(Exception $e){
            return json_encode(array("status" => 0, "message" => $e));
        }

    }
}