<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\category;

use DB;

class ConfigurationController extends Controller
{
   
    public function index()
    {
        
       return view('configuration.category');
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
		
        
		$category  = $request->category;
    	
		$b = Category::create();
    	$b->category = $category;
    	
		


    	if($b->save())
    		return redirect()->back();
    	else
    		return "Try again";
		
    }
	
	public function all()
	 
	 {
    	$b = Category::all();
//           return $b;
    	return view('configuration.managecategory')->with('category',$b);
		 
	 }
	
	
	public function a()
	 
     {
        $b = Category::all();

        return view('configuration.managecategory')->with('category',$b);
     }
 


    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $id = $request->id;

        $category = Category::find($id);
        return $category;
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
//        Book::destroy($id);
    $b = Category::find($id);
    DB::table('lb_category')->where('id',"=",$id)->delete();
    if($b->save())
		
       return redirect()->back();
     else
       return "Try again";
    }
}
