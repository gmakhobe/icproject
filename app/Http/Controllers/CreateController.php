<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    //Loading Investment View
    public function Index(){
        return view('user/create', ["Title" => $GLOBALS['AppTitle'], "Name" => "Create"]);
    }
}
