<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Studentprofile;
use Carbon\Carbon;
use App\Student;
use Illuminate\Support\Facades\Session;
use App\Book;
use Illuminate\Support\Facades\Input;
use App\Issue;
use URL;
use DB;

class IssuebookController extends Controller
{
   
    public function index(Request $request)
    {
		
      
		 return view('books.bookissue')->with('student',null)->with('book',null);
	}
   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
         
       $id = $request->studentid;
	   // $i = Student::where('stu_info_id',$id)->distinct()->get();
//        return $id;
		$bb = DB::table('stu_info as s')
        ->select('s.stu_info_id','s.stu_bloodgroup','s.stu_first_name','s.stu_middle_name','s.stu_last_name','s.stu_dob','s.stu_mobile_no','g.guardian_name','g.guardian_home_address')
        ->join('stu_guardians as g','g.guardia_stu_master_id','=','s.stu_unique_id')
        
        ->where('s.stu_info_id','like','%'.$id.'%')
        ->orWhere('s.stu_first_name','like','%'.$id.'%')
        ->orWhere('s.stu_mobile_no','like','%'.$id.'%')
        ->orWhere('s.stu_bloodgroup','like','%'.$id.'%')
        ->orderBy('s.stu_first_name')
        ->get();
		
		 
		$search = $request->bookid;
        // $b = Book::where('id','like','%'.$bid.'%')
        // 	orWhere('')
        // ->get();
		
		$b = DB::table('lb_book')
      ->select('lb_book.id', 'lb_book.book_title', 'lb_book.quantity', 'lb_book.created_at', 'lb_book.updated_at', 'lb_book.type', 'lb_book.edition', 'lb_book.place_publication', 'lb_book.year', 'lb_book.pages', 'lb_book.cost', 'lb_book.category', 'lb_book.almira_no', 'lb_book.rek_no', 'lb_book.author', 'lb_category.category','lb_type.type')
->join('lb_category','lb_category.id','=','lb_book.category')
->join('lb_type','lb_type.id','=','lb_book.type')
      ->where('lb_book.id','like','%'.$search.'%')->orWhere('lb_book.book_title','like','%'.$search.'%')->orWhere('lb_book.author','like','%'.$search.'%')->orWhere('lb_book.cost','like','%'.$search.'%')->orWhere('lb_book.year','like','%'.$search.'%')->orWhere('lb_category.category','like','%'.$search.'%')->orWhere('lb_type.type','like','%'.$search.'%')->get();

		//issue book
		// $ii = new Issue();
		// $ii->bookid = $bid;
		// $ii->studentid = $id;
		// $ii->status = false;
		// $ii->issuedby = '2';
		// $ii->save();
		
		 return view('books.bookissue')->with('student',$bb)->with('book',$b);
		
    }

    public function retsearch()
    {
		
      
		 return view('books.nbookreturn')->with('student',null);
	}
    public function retsearch1(Request $request)
    {
         
       $id = $request->studentid;
	   
		$bb = DB::table('stu_info as s')
        ->select('s.stu_info_id','s.stu_bloodgroup','s.stu_first_name','s.stu_middle_name','s.stu_last_name','s.stu_dob','s.stu_mobile_no','g.guardian_name','g.guardian_home_address')
        ->join('stu_guardians as g','g.guardia_stu_master_id','=','s.stu_unique_id')
        
        ->where('s.stu_info_id','like','%'.$id.'%')
        ->orWhere('s.stu_first_name','like','%'.$id.'%')
        ->orWhere('s.stu_mobile_no','like','%'.$id.'%')
        ->orWhere('s.stu_bloodgroup','like','%'.$id.'%')
        ->orderBy('s.stu_first_name')
        ->get();
		
		
		 return view('books.nbookreturn')->with('student',$bb);
		
    }

	
	 public function transection(Request $request)
    {
//		 return $request;
	 return view('books.booktrans');
      
    }
	
	public function sumit(Request $request)
    {

		$fromdate = $request->fromdate;
		$todate = $request->todate;
		
		$is = DB::table('lb_issuelog')->select('stu_info.stu_info_id','stu_info.stu_mobile_no','stu_info.stu_dob','stu_info.stu_first_name','stu_info.stu_middle_name','stu_info.stu_last_name','lb_book.id','lb_book.book_title','lb_issuelog.created_at','lb_issuelog.updated_at')
		->join('stu_info','stu_info.stu_info_id','=','lb_issuelog.studentid')
		->join('lb_book','lb_book.id','=','lb_issuelog.bookid')
			->get();
//		return $is;
		
	 return view('books.booktransectiondetail')->with('booktrans',$is);
      
    }
	
   
    public function returnbook()
    {
$t= [];
$b=[];
$id=null;
if(Input::get('sid')){
    	$id = Input::get('sid');
	 $b = DB::table('stu_info')->where('stu_info_id',$id)->get();
$t = DB::table('lb_issuelog')
	->select('lb_issuelog.*','lb_book.book_title','lb_book.category','lb_book.edition','lb_issuelog.created_at','lb_issuelog.writtenid')
	->join('lb_book','lb_book.id','=','lb_issuelog.bookid')
	->where('lb_issuelog.studentid','=',$id)
	->where('lb_issuelog.status','=',0)
	->get();
		}
       return view('books.bookreturn')->with('student',null)->with('book',null)->with('issuelog',$t)->with('users',$b)->with('id',$id);
    }


    public function returnbookupdate(Request $request)
    {
    	// return $request->all();

    		if(count($request->books)>0)
    		{
                
    			$id = $request->studentid;
			   $i = Student::where('stu_info_id',$request->sid)->distinct()->get();
		       $mobile = $i[0]->stu_mobile_no;
		       // $mobile = '8103918201';
    				// $mobile = '8103918201';
		       // return $mobile;
                $i = 0;
    				foreach($request->books as $book)
    				{
                        $sts = $request->damage[$i];
    					Issue::where('id',$book)->update(['returntime'=>Carbon::now(),'damage'=>$sts,'status'=>'1']);
                        $i++;
    				}

    				$nmber = $mobile;
					$message = "Book ID with ".implode(',',$request->books)." has been return back to college account successfully. NVM";
					$mess = urlencode($message);
    			Session::flash('message', 'Please Select atleast one book!'); 
				Session::flash('alert-class', 'alert-warning');
					$backurl = url('retsearch');
    		return view('sms')->with('backurl',$backurl)->with('message',$mess)->with('number',$nmber);
    		}
    		else{
    			Session::flash('message', $message); 
				Session::flash('alert-class', 'alert-info');
    			return redirect()->Back();
    		}
    }
    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    public function finalissue(Request $request)
    {
         // return $request;
       $id = $request->studentid;
	   $i = Student::where('stu_info_id',$id)->distinct()->get();
       $mobile = $i[0]->stu_mobile_no;
       // $mobile = '8103918201';
		
		 
		$search = $request->bookid;
		$bid = $request->bid;
        $b = Book::where('id',$bid)->get();
		
		// issue book
		$ii = new Issue();
		$ii->bookid = $bid;
		$ii->writtenid = $search;
		$ii->studentid = $id;
		$ii->status = false;
		$ii->issuedby = '2';
		$ii->save();
		
		 // return view('books.bookissue')->with('student',$bb)->with('book',$b);
		$nmber = $mobile;
		$message = "Book ID with ".$search." has been issued to your account successfully. NVM";
		$mess = urlencode($message);
		$backurl = url::previous();
		
		return view('sms')->with('backurl',$backurl)->with('message',$mess)->with('number',$nmber);
		
    }

    public function bookdamage(){
        $b = DB::table('lb_issuelog')
        ->select('lb_issuelog.*','lb_book.book_title','lb_type.type')
        ->join('lb_book','lb_book.id','=','lb_issuelog.bookid')
        ->join('lb_type','lb_type.id','=','lb_book.type')
        ->where('lb_issuelog.damage','!=','No Damage')->orderBy('lb_issuelog.bookid','asc')->get();
        return view('books.damage')->with('b',$b);
    }
}
