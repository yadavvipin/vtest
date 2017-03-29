<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Studentprofile;

class StudentController extends Controller
{
    

public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('studlogin');

    }


	

	public function store(Request $request){

	
    	$name  = $request->name;
    	$enrollno  = $request->enrollno;
    	$branch  = $request->branch;

    	$email  = $request->email;
        $year  = $request->year;



    	$b = details::create();
    	$b->name = $name;
    	$b->enrollno = $enrollno;
    	$b->branch = $branch;
    	$b->email = $email;
        $b->year = $year;
    	

        if($b->save())
            return redirect()->back();
        else
            return "Try again";
    
    

    }

   
    }
