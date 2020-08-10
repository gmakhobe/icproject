<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function register($email, $password){
        //Check if $mail and $password are empty strings
        if (!$email || !$password){
            return json_encode(array("status" => 0, "message" => "All fields are required!"));
        }
        //Hash Password
        try{
            $password = Hash::make($password);
            // Insert into the database
            if (DB::insert('insert into Users(EmailAddress, Passcode) values (?, ?)', [$email, $password]))  return json_encode(array("status" => 1, "message" => "User successfully registered"));
        }catch(Exception $e){
            return json_encode(array("status" => 0, "message" => "An error occured please try again"));
        }
    }

    public function login(Request $request, $email, $password){
        //Check if $mail and $password are empty strings
        if (!$email || !$password){
            return json_encode(array("status" => 0, "message" => "All fields are required!"));
        }
        //Get user information from DB
        try{
            $results =  DB::select('select * from Users where EmailAddress = ?', [$email]);
            //Return positive response on success
            if ($results){
                $comparePassword = Hash::check($password, $results[0]->Passcode);
                if ($comparePassword){
                    $request->session()->put("user", array("User" => $results));
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
            if (DB::insert('INSERT INTO Subscribers(EmailAddress) values (?)', [$email]))  return json_encode(array("status" => 1, "message" => ""));
        }catch(Exception $e){
            return json_encode(array("status" => 0, "message" => "An error occured please try again"));
        }
    }
}
