@extends('design.dde')
@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Show and Manage Book</h1>



              </div>
               
            </div>




<!--<div class="container">-->
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">ALL BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
					
						
                    	<tr>
                    		<td>Sr.No</td>
                    		<td>AUTHOR</td>
                    		<td>BOOK TITLE</td>
							<td>TYPE</td>
							<td>EDITION</td>
							<td>PLACE & PUBLICATION</td>
							<td>YEAR</td>
							<td>PAGES</td>
							<td>COST</td>
							<td>BOOK CATEGORY</td>
                            <td>QUANTITY</td>
                            <td>ALMIRA NO.</td>
                            <td>REK NO.</td>
							
                    	</tr>
                    	
                    	@foreach($book as $b)
                    	<tr>
                    		<td>{{$b->id}}</td>
                    		<td>{{$b->author}}</td>
                    		<td>{{$b->book_title}}</td>
                            <td>{{$b->type}}</td>
                            <td>{{$b->edition}}</td>
							<td>{{$b->place_publication}}</td>
							<td>{{$b->year}}</td>
							<td>{{$b->pages}}</td>
							<td>{{$b->cost}}</td>
                            <td>{{$b->book_category}}</td>
							<td>{{$b->quantity}}</td>
							<td>{{$b->almira_no}}</td>
							<td>{{$b->rek_no}}</td>
							
							
							
							
                    		
                    	</tr>
                    	@endforeach
                    </table>
                    
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                    <a class="btn btn-link" href="{{url('/book/new')}}">Back</a>
                    </div>

                    <div class="col-md-6 col-md-offset-4">
                    <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>
                    </div>
                    
                    </div>



										
					

                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</div>-->
@endsection