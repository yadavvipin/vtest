<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\type;

use DB;

class TypeController extends Controller
{
   
    public function index()
    {
        return view('configuration.type');
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
        $type  = $request->type;
    	
		$b = Type::create();
    	$b->type = $type;
    	
//		 return $request;


    	if($b->save())
    		return redirect()->back();
    	else
    		return "Try again";
    }
	
	public function all()
	 
	 {
    	$b = Type::all();
//           return $b;
    	return view('configuration.managetype')->with('type',$b);
		 
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
        {
//        Book::destroy($id);
    $b = Type::find($id);
    DB::table('lb_type')->where('id',"=",$id)->delete();
    if($b->save())
		
       return redirect()->back();
     else
       return "Try again";
    }
    }
}
