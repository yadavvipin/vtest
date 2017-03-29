<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sms;

use App\Student;

use App\Studentmaster;

use URL;

use App\Courses;

class SmsController extends Controller
{
    
    public function index()
    {
        return view('sms.newsms');
    }
    
	
	public function newb()
		
    {
		//for fetch category
		
		$c =courses::all();
//		return $c;
//		 return view('sms.newsms');
//		
		return view('sms.newsms')->with('courses',$c);

    }
	
	
	
	              //for sms in mobile number
	public function sendsms(Request $request)
    {
       $nmber = $request->number;
		$mess = urlencode($request->notes);
		$backurl = url::previous();
		
		return view('sms')->with('backurl',$backurl)->with('message',$mess)->with('number',$nmber);
		
//		return file_get_contents('http://mysms.springstrategies.in/API/WebSMS/Http/v1.0a/index.php?username=spring&password=123456&sender=SPRING&to='.$nmber.'&message='.$mess.'&reqid=1&format=text&unique=1');
         
    
    }
	
	
	public function sendallsms(Request $request)
    {
//		return $request;
	   $course = $request->courses;	
$mess = urlencode($request->notes);
	   $mess = urlencode($request->notes);
		
		 $student = Studentmaster::select('stu_master_id')->where('stu_master_course_id',$course)->get()->pluck('stu_master_id');
		$final = Student::select('stu_mobile_no')->whereIn('stu_info_id',$student)->get()->pluck('stu_mobile_no');
		$backurl = url::previous();
		
		return view('sms')->with('backurl',$backurl)->with('message',$mess)->with('number',$final);
    
    }
	

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
