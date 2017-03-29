@extends('libhome')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ALL ISSUED BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    	<tr>
                    		<td>TRANSACTION ID</td>
                    		<td>BOOK ID</td>
                    		<td>STUDENT ID</td>
                            
                    		
                            <td>TOTAL QUANTITY</td>
                            
                    		
                            
                    	</tr>
                    	
                    	@foreach($issuelog as $b)
                    	<tr>
                    		<td>{{$b->id}}</td>
                    		<td>{{$b->bookid}}</td>
                    		<td>{{$b->studentid}}</td>
                            <td>{{$b->quantity}}</td>
                    
                    	
                    		
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