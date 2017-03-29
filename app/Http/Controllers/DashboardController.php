<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Book;

use App\Issue;
use DB;

//use App\Book;

class DashboardController extends Controller
{
    
    public function index()
		
    {
		
		$b = DB::table('stu_info')->count();
		$b1 = Book::count();
        $tobooks = Book::sum('quantity');
		$b2 = Issue::count();
		$b3 = Issue::where('status',false)->count();
	
		return view('books.dashboard')->with('user',$b)->with('book',$b1)->with('all',$b2)->with('issue',$b3)->with('total',$tobooks);
		

    }
	
	
	
	
	
	
//	public function allstudent()
//
//    {
//        $b = User::all();
//        //  return $b;
//		return view('books.student')->with('details',$b);
//    }
//	
//	public function allbook()
//	 
//	 {
//    	$b = Book::all();
//
//    	return view('books.all')->with('book',$b);
//     }

    
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
