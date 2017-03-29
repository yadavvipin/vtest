<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\Type;
use App\Category;
use DB;

class BookController extends Controller
	
{
    
    public function __construct()
    {
		
       $this->middleware('auth');
		
    }

    public function newb()
		
    {
		// for fetch type
		
         $t = Type::all();
		
        //return $t;
    	//return view('books.new');
		
		//for fetch category
		
		$c =Category::all();
        //return $c;
		
		return view('books.new')->with('type',$t)->with('category',$c);

    }

     
    public function store(Request $request)
	 
	 {
     	$author  = $request->author;
    	$book_title  = $request->book_title;
		$type= $request->type;
		$edition = $request->edition;
		$place_publication = $request->place_publication;
		$year = $request->year;
		$pages = $request->pages;
		$cost = $request->cost;
		$author = $request->author;
		$category = $request->category;
		$quantity  = $request->quantity; 
		$almira_no = $request->almira_no;
		$rek_no = $request->rek_no;

//		 return $category;
		 
		
    	$b = book::create();
    	$b->author = $author;
    	$b->book_title = $book_title;
    	$b->type = $type;
		$b->edition = $edition;
		$b->place_publication = $place_publication;
		$b->year = $year;
		$b->pages = $pages;
		$b->cost = $cost;
		$b->author = $author;
		$b->category = $category; 
	    $b->quantity = $quantity;
		$b->almira_no = $almira_no;
		$b->rek_no = $rek_no;

    	if($b->save())
    		return redirect()->back();
    	else
    		return "Try again";

    	
    }
	
	
     public function all()
	 
	 {
    	$b = Book::all();
        //return $b;
    	return view('books.all')->with('book',$b);
		 
	 }

     public function a()
	 
     {
        // $b = Book::all();
      $b = DB::table('lb_book')
      ->select('lb_book.id', 'lb_book.book_title', 'lb_book.quantity', 'lb_book.created_at', 'lb_book.updated_at', 'lb_book.type', 'lb_book.edition', 'lb_book.place_publication', 'lb_book.year', 'lb_book.pages', 'lb_book.cost', 'lb_book.category', 'lb_book.almira_no', 'lb_book.rek_no', 'lb_book.author', 'lb_category.category','lb_type.type')
->join('lb_category','lb_category.id','=','lb_book.category')
->join('lb_type','lb_type.id','=','lb_book.type')
      ->get();

        return view('books.manage')->with('book',$b);
     }

    
	public function destroy($id)
		
    {
		
    //Book::destroy($id);
    $b = Book::find($id);
    DB::table('lb_book')->where('id',"=",$id)->delete();
    if($b->save())
		
       return redirect()->back();
     else
       return "Try again";

     }
	
	
	public function edit(Request $request)
    {
		  $t = Type::all();
		$c =Category::all();
        $id = $request->id;
        $book = Book::find($id);
        //return $book;         //show all detail of book by id
        return view('books.editbook')->with('type',$t)->with('category',$c)->with('book',$book);
    }

	
	
	  
	
    
    public function update(Request $request)

    {
           $response = [];

        $book = Book::find($request->bookid);
//		$bookid = $request->bookid;
        $book->author = $request->author;
        $book->book_title = $request->book_title;
		$book->quantity = $request->quantity;
        $book->type = $request->type;
		$book->edition = $request->edition;		
		$book->place_publication = $request->place_publication;
        $book->year = $request->year;
		$book->pages = $request->pages;
		$book->cost= $request->cost;
		$book->category = $request->category;
		$book->almira_no = $request->almira_no;
		$book->rek_no = $request->rek_no;
//        $book->status = $request->status;

	
        if($book->save()){
            $response["status"] = true;
        }
        else{
            $response["status"] = false;
        }
//		 return $a;
//        return $response;
		 return redirect()->action('BookController@a');

    }
	
	
	
	
	
	
	

    public function chk(Request $request) 
	
	{

      // Sets the parameters from the get request to the variables.
      $string=$request->condition;
      if($string == NULL)
      return redirect()->back();

      else
	  {
            
        $result = Book::select('bookid','title','author','isbn') 
            ->where('title', 'like', '%' .$string. '%')
            ->orWhere('author', 'like', '%' . $string. '%')
            //->orWhere('id' == $string)
            ->get();
        
        return view('search')->with('book',$result);
     }
}

     public function both1() 
	 
	 {   
     $t = DB::table('lb_book')
        ->join('issuelog', function ($join) {
            $join->on('book.bookid', '=', 'issuelog.bookid')
                 ->where('issuelog.status', '=', true);
        })
        ->get();
        return view('unused')->with('book',$t);

     }

     public function search(){
      return view('books.search');
     }

     public function searchResult(Request $request){
      $search = $request->search;
      $b = DB::table('lb_book')
      ->select('lb_book.id', 'lb_book.book_title', 'lb_book.quantity', 'lb_book.created_at', 'lb_book.updated_at', 'lb_book.type', 'lb_book.edition', 'lb_book.place_publication', 'lb_book.year', 'lb_book.pages', 'lb_book.cost', 'lb_book.category', 'lb_book.almira_no', 'lb_book.rek_no', 'lb_book.author', 'lb_category.category','lb_type.type')
->join('lb_category','lb_category.id','=','lb_book.category')
->join('lb_type','lb_type.id','=','lb_book.type')
      ->where('lb_book.id','like','%'.$search.'%')->orWhere('lb_book.book_title','like','%'.$search.'%')->orWhere('lb_book.author','like','%'.$search.'%')->orWhere('lb_book.cost','like','%'.$search.'%')->orWhere('lb_book.year','like','%'.$search.'%')->orWhere('lb_category.category','like','%'.$search.'%')->orWhere('lb_type.type','like','%'.$search.'%')->get();
      // $b = Book::where('id','like','%'.$search.'%')->orWhere('book_title','like','%'.$search.'%')->orWhere('author','like','%'.$search.'%')->orWhere('cost','like','%'.$search.'%')->orWhere('year','like','%'.$search.'%')->get();

        
      return view('books.searchresult')->with('book',$b)->with('search',$search);
     }
}








    









    
    

