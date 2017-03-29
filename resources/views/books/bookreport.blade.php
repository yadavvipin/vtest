@extends('libhome')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Book Report </h1>



              </div>
               
            </div>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ALL ISSUED BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    	<tr>
                    		
                    		<td>ID</td>
                            
                    		
                            <td>Title</td>
                            <td>Edition</td>
							<!-- <td>Category</td> -->
                            <td>Total Qty</td>
                            <td>Issued</td>
                            <td>Available</td>

                    		
                            
                    	</tr>
                                    	
                    
            
                   @foreach($issuelog as $value)
                    	<tr>
              		
                          <td>{{$value['detail']->bookid}}</td>
                          <td>{{$value['detail']->book_title}}</td>
                          <td>{{$value['detail']->edition}}</td>
							<!-- <td>{{$value['detail']->book_category}}</td> -->
                          <td>{{$value['qty']}}</td>
                          <td>{{$value['issued']}}</td>
                          <td>{{$value['available']}}</td>
                          
                          


     
                            

                    		
                            
                    
                    	
                    		
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
</div>
@endsection