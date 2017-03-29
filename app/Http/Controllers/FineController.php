<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\fine;

class FineController extends Controller
{
    
    public function index()
    {
		$b = fine::all();
        return view('configuration.fine')->with('data',$b);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        fine::where('f1','days')->update(['f2'=>$request->days]);
		fine::where('f1','fine')->update(['f2'=>$request->fine]);
		return redirect()->back();
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
