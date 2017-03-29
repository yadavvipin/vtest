<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\User;
use App\Book;
use App\Issue;
use DB;

class StudentController extends Controller
	
{
    
   public function __construct()
    {
        $this->middleware('auth');
    }
	

    public function index()
    {
        return view('studhome2');
    }
	
	
	public function reg()
    {
        return view('studregister');
    }
	

    public function prof()
    {
        return view('studprofile');
    }


    public function store(Request $request)
	
	{

        $name  = $request->name;
        $enrollname  = $request->enrollname;
        $branch  = $request->branch;

        $email  = $request->email;
        $year  = $request->year;

        $b = Studentprofile::create();
        $b->name = $name;
        $b->enrollname = $enrollname;
        $b->branch = $branch;
        $b->email = $email;
        $b->year = $year;
        
        if($b->save())
            return redirect()->back();
        else
            return "Try again";


        $to      = $email; // Send email to our user
        $subject = 'Signup | Verification'; // Give the email a subject 
        $message = 'Thanks for signing up!
         Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.'; // Our message above including the link
                     
        mail($to, $subject, $message); // Send our email
   
	
	}

	
	public function all()

    {
		
		
        $b = User::all();
        //  return $b;
		return view('books.student')->with('details',$b);
    }
	
	public function allstudent()

    {
		
		$bb = DB::table('stu_info as s')
        ->select('s.stu_info_id','s.stu_bloodgroup','s.stu_first_name','s.stu_middle_name','s.stu_last_name','s.stu_dob','s.stu_mobile_no','g.guardian_name','g.guardian_home_address')
        ->join('stu_guardians as g','g.guardia_stu_master_id','=','s.stu_unique_id')
        ->orderBy('s.stu_first_name')
        ->get();
        // $b = Student::all();
        //  return $b;
		return view('books.student')->with('details',$bb);
    }
	
	
	
	
	
	
	
public function update2($approved,$id){
        
        $b = Studentprofile::find($id);
        if($approved=='approve'){
            $b->approved = false;
        }
        else{
            $b->approved = true;
        }
        if($b->save())
            return redirect()->back();
        else
            return "Try again";

}
	
	
public function showbook(Request $request)

{

    $string = $request->sid;
    if($string == NULL)
    return redirect()->back();

     else
	 
	 {
         
	$s = Issue::select('id','bookid','issuedby') 
         ->where('studentid', '=', $string)
         ->where('status', '=', 0)
         ->get();
        
         return view('showbook')->with('issuelog',$s);
    }
}

public function detail(Request $request) 

{
   
	 $string = $request->sid; 
     $r = DB::table('book');
     $s = Issue::select('bookid')
		 ->where('studentid',$string)
         ->where('status',0)
         ->join('book', 'book.bookid', '=', 'issuelog.bookid')
         ->select('book.*', 'issuelog.studentid')
         ->get();
	
     $c = DB::table('details')            
         ->where('id', $string)
         ->get();

return view('detail')->with('book',$s)->with('details',$c);


}
	

public function detail2(Request $request)

{

     $string = $request->bid;
     $r = DB::table('details');
     $s = Issue::select('studentid')

            ->where('bookid',$string)
            ->where('status',0)


            ->join('details', 'details.id', '=', 'issuelog.studentid')
            
            ->select('details.*', 'issuelog.bookid')
            ->get();
        


        $b = DB::table('book')            
            ->where('bookid', $string)
            ->get();
            
return view('detailstud')->with('details',$s)->with('book',$b);








}


    
}




    





