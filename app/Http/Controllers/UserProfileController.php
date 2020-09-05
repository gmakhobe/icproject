<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function SaveUserPersonalInfo($name, $surname, $username){
        $results = DB::update('update users set votes = 100 where name = ?', ['John']);
    }

    public function SaveUserAddressInfo($address, $city, $country){
        
    }
}
