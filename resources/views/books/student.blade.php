@extends('libhome')
@section('content')
  
            <div class="row">
	
   <div class="col-lg-12">
	   
                    <h1 class="page-header">Student Detail</h1>
   </div>
                
</div>





<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">STUDENT DETAILS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    	<tr>
                    		<td>Stu ID</td>
							<!-- <td>Roll No.</td> -->
							
                    		<td>Name</td>
<!--							<td>MIDDLE NAME</td>-->
							<td>Father's name</td>
                    		<td>DOB</td>
                            <td>Mobile</td>
                            <td>Address</td>
                            
<!--                            <td>APPROVE</td>-->
                            

                            </tr>
                    	

                    	@foreach($details as $b)
                    	<tr>
                    		<td>{{$b->stu_info_id}}</td>
                            <!-- <td>{{$b->stu_bloodgroup}}</td> -->
							
                    		<td>{{$b->stu_first_name}} {{$b->stu_middle_name}} {{$b->stu_last_name}}</td>
                            <td>{{$b->guardian_name}}</td>
                            <td>{{$b->stu_dob}}</td>
                            <td>{{$b->stu_mobile_no}}</td>
                            <td>{{$b->guardian_home_address}}</td>

							

							<!-- <td>{{$b->stu_mobile_no}}</td> -->
                            {{--
                            @if($b->approved)
                            <td><a href="{{url('/rej',array('approved'=>'approve','id'=>$b->id))}}" class="btn btn-danger">Reject</a></td>
                            @else
<!--                            <td><a href="{{url('/rej',array('approved'=>'reject','id'=>$b->id))}}" class="btn btn-success">Approve</a></td>-->
                            @endif
             --}}

                            </tr>
                    		
                    	
                    	@endforeach
                    </table>


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
</div>
@endsection