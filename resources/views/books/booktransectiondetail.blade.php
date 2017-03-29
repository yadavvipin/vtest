@extends('design.dde')
@section('content')

<div class="row">
   <div class="col-lg-12">
        <h1 class="page-header"> BOOK TRANSECTION DETAIL</h1>
   </div>
                
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
               <div class="panel-heading">BOOK TRANSECTION</div>
                <div class="panel-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            
                            <td>STUDENT ID</td>
                            <td>STUDENT NAME</td>
<!--                            <td>ENROLLMENT NO.</td>-->
							<td>CONTACT</td>
							<td>DOB</td>
							<td>BOOK ID</td>
                            <td>BOOK NAME</td>
							<td>ISSUE DATE</td>
							<td>RETURNING DATE</td>
                           
                            
                        </tr>
							
						@foreach($booktrans as $is)
                    	<tr>
                    		<td>{{$is->stu_info_id}}</td>
							<td>{{$is->stu_first_name}} {{$is->stu_middle_name}} {{$is->stu_last_name}}</td>
							<td>{{$is->stu_mobile_no}}</td>
                    		<td>{{$is->stu_dob}}</td>
							<td>{{$is->id}}</td>
							<td>{{$is->book_title}}</td>
							<td>{{$is->created_at}}</td>
							<td>{{$is->updated_at}}</td>

						
					
						
				
                            </tr>
<!--					</table>-->
				
                    	
                    	@endforeach

                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>






@endsection
