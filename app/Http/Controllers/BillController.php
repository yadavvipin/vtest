<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\bill;

use DB;


class BillController extends Controller
{
   
    public function index()
    {
        return view('bill.addbill');
    }

    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
		
//		 return $request->image->store('images');
//        $uppath = asset("storage/".$path);
		 
		
    	$title  = $request->title;
		$date= $request->date;
		$amount= $request->amount;
	

		 //return category;
		 
    	$b =bill::create();
    	$b->title = $title;
    	$b->date = $date;
    	$b->amount = $amount;
//		$b->bill_copy = $bill_copy;
//		

    	if($b->save())
    		return redirect()->back();
    	else
    		return "Try again";

		
    }
	
	public function all()
	 
	 {
    	$b = Bill::all();
           //return $b;
    	return view('bill.managebill')->with('bill',$b);
		 
	 }
	
	
	
    
    public function show($id)
    {
       
		
		
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    DB::table('lb_bill')->where('id',"=",$id)->delete();
    
       return redirect()->back();
     

    }
}
