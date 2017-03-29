@extends('design.dde')
@section('content')

<div class="row">
	
   <div class="col-lg-12">
	   
                    <h1 class="page-header">Manage Books <button onclick="window.print()"><i class="fa fa-print"></i></button></h1>
   </div>
                
</div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">MANAGE BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    	<tr>
                    		<td>Sr.No</td>
                    		
                    		<td>BOOK TITLE</td>
							<td>AUTHOR</td>
							<td>TYPE</td>
							<td>EDITION</td>
							<td>PLACE & PUBLICATION</td>
							<td>YEAR</td>
							<td>PAGES</td>
							<td>COST</td>
							<td>CATEGORY</td>
                            <td>QUANTITY</td>
							<td>ALMIRA NO.</td>
                            <td>REK NO.</td>
							<td>MANAGE</td>
                            </tr>
                    	

                    	@foreach($book as $b)
                    	<tr>
                    		<td>{{$b->id}}</td>
                    		
                    		<td>{{$b->book_title}}</td>
							<td>{{$b->author}}</td>
                            <td>{{$b->type}}</td>
                            <td>{{$b->edition}}</td>
							<td>{{$b->place_publication}}</td>
							<td>{{$b->year}}</td>
							<td>{{$b->pages}}</td>
							<td>{{$b->cost}}</td>
                            <td>{{$b->category}}</td>
							<td>{{$b->quantity}}</td>
							<td>{{$b->almira_no}}</td>
							<td>{{$b->rek_no}}</td>
					
					
					<td>
					<a href="{{url('/tdelete',$b->id)}}" class="btn btn-danger">Delete</a>
					<a href="{{url('book/edit',$b->id)}}" class="btn btn-success">Edit</a>
					</td>		
				
                            </tr>
<!--					</table>-->
				
                    	
                    	@endforeach
                    </table>

</div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                    <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>
                    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

