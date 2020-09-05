<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexLogout extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Forget multiple keys...
        $request->session()->forget(['userInfo', 'userProfileURL']);
        $request->session()->flush();
        //Redirect to /
        return redirect('/');
    }
}
