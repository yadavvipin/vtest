<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Studentprofile;
use App\Book;
use App\User;
use App\Issue;
use App\Student;
use Illuminate\Mail;

use DB;

class LibrarianController extends Controller
	
{
    
	public function index()
		
    {
        return view('libhome');
    }
	
	
public function issuestud (Request $request )
	
{
     $studentid  = $request->studentid;
     $bookid  = $request->bookid;
     $libid = Auth::id();
     $result = DB::table('lb_issuelog')->where('bookid', $bookid)->where('studentid',$studentid)->where('status',false)->count();
	
     if($result==0)
	  
  {
        
      $bookid  = $request->bookid;
      $studentid  = $request->studentid;
      $libid = Auth::id();
      $status = false;
      $returntime = null;
      $b = Issue::create();
      $b->bookid = $bookid;
      $b->studentid = $studentid;
      $b->issuedby = $libid;
      $b->status = $status;
      $b->returntime = $returntime;
    	
    	if($b->save())
        
    		return redirect()->back();
		 
        else
			
    return "Try again";
        
 }
  else
	  
    return "Sorry, the book can't be issued";
  
}
	
	
   public function all()

   {
       $b = Issue::all();
       return view('books.booklog')->with('issuelog',$b);
    }


   public function both()
   
   {
       
	 $users = DB::table('lb_issuelog')->join('lb_book', 'lb_issuelog.bookid', '=', 'lb_book.bookid')->select('lb_issuelog.*', 'lb_book.quantity')->get();
	   
     return view('books.booklog')->with('issuelog',$users);

    
   }

     public function bookreport()
	 
	 {

       $res = [];
		 
        //get all books
		 
       $books = Book::all();
		 
        //get book isued
		 
       foreach ($books as $key => $value)
	   
	   {
            $bookid = $value->id;
            $issued = Issue::where('bookid',$bookid)->where('status',false)->count();
            $qty = $value->quantity;
            $available = $qty-$issued;
            // return $available;
            $res[$bookid]['detail'] = $value;
            $res[$bookid]['available'] = $available;
            $res[$bookid]['issued'] = $issued;
            $res[$bookid]['qty'] = $qty;
        }
        
        return view('books.bookreport')->with('issuelog',$res);

}

    public function dashboard()
	
	{
		
    return view('books.dashboard');
   
	}
	
	
	public function fetch(Request $request)
	
	{
		
	$id = $request->id;
		
     $b = DB::table('lb_book')
    ->where('id',$id)
    ->get();

//		return $b;
//		return view('booktrk')->with('issuelog',$b);	
		//	   
//        $t = Issue::select('id','bookid','studentid','issuedby','status') 
//			->where('bookid', '=', $id)
//            ->where('status', '=', 0)
//            ->get
			
			$t = DB::table('lb_issuelog')
				->select('lb_issuelog.studentid','stu_info.stu_first_name','stu_info.stu_middle_name','stu_info.stu_last_name','stu_info.stu_email_id')
				->join('stu_info','stu_info.stu_info_id','=','lb_issuelog.studentid')
				->where('lb_issuelog.bookid','=',$id)
				->where('lb_issuelog.status','=',0)
				->get();
        
//      return $t;
       
	    return view('booktrk')->with('issuelog',$t)->with('issue',$b);

        	
       
	    }


	
	
	
	
	
	
	
	
//    public function chk1(Request $request)
	
//	{

//       //Sets the parameters from the get request to the variables.
//		
//       $string = $request->bid;
//       if($string == NULL)
//            return redirect()->back();
//       else
//	   
//	   {
//        $t = Issue::select('id','bookid','studentid','studentname','issuedby','status') 
//			->where('bookid', '=', $string)
//            ->where('status', '=', 0)
//            ->get();
//        
//      return $t;
//       
//	    return view('booktrk')->with('issuelog',$t);
//
//        }	
//       
//	    }
//

 public function chk2(Request $request)
 
 {
	 $id = $request->sid;
	 $b = DB::table('stu_info')
    ->where('stu_info_id',$id)
    ->get();

//		return $id;
//	return view('sidtrk')->with('issuelog',$b);
	 
$t = DB::table('lb_issuelog')
	->select('lb_issuelog.id','lb_book.book_title','lb_book.category','lb_book.edition')
	->join('lb_book','lb_book.id','=','lb_issuelog.bookid')
	->where('lb_issuelog.studentid','=',$id)
	->where('lb_issuelog.status','=',0)
	->get();
        
//      return $t;
       
	    return view('sidtrk')->with('issuelog',$t)->with('users',$b);

}
	
public function update2(Request $request)

{
   $studentid  = $request->studentid;
   $bookid  = $request->bookid;

	$i = Student::where('stu_info_id',$studentid)->distinct()->get();
			 
		$bid = $request->bookid;
        $bb = Book::where('id',$bookid)->distinct()->get();

	
	
   $b= DB::table('lb_issuelog')
            ->where('bookid', '=', $bookid)
            ->where('studentid', '=', $studentid)
            ->update(['status' => 1]);

	
$bi =  DB::table('lb_issuelog')
            ->where('bookid', '=', $bookid)
            ->where('studentid', '=', $studentid)->orderBy('id','DESC')->limit(1)->get();
	$issue = $bi[0]->created_at;
	$ret = $bi[0]->updated_at;
//	return $ret;
	
           return view('books.bookreturn')->with('student',$i)->with('book',$bb)->with('issue',$issue)->with('return',$ret); 
        
        //return $b;

}




}







