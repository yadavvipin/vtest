<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
        


     public function index()
    {
        $a = Auth::user()->role;
        // return $a;
        if($a==1)
            return redirect()->action('LibrarianController@index');
        elseif($a==2) 
                    return redirect()->action('StudentController@index');
                
    }
}