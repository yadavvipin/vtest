@extends('design.dde')
@section('content')

<div class="row">
	
   <div class="col-lg-12">
	   
                    <h1 class="page-header">View Bill</h1>
   </div>
                
</div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">VIEW BILL</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    	<tr>
                    		<td>Sr.No</td>
                    		<td>TITLE</td>
							<td>DATE</td>
							<td>AMOUNT</td>
							
                            </tr>
                    	

                    	@foreach($bill as $b)
                    	<tr>
                    		<td>{{$b->id}}</td>
                    		<td>{{$b->title}}</td>
                            <td>{{$b->date}}</td>
                            <td>{{$b->amount}}</td>
							
					
					
<!--
					<td>
					<a href="{{url('/bill/delete',$b->id)}}" class="btn btn-danger">Delete</a>
					<a href="{{url('/bill/view',$b->id)}}" class="btn btn-success">View</a>
					</td>		
-->
				
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

<!--    </div>-->

@endsection

