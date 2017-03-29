
@extends('libhome')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Return Book</h1>



              </div>
                <!-- /.col-lg-12 -->
            


        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Return Books</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/retsearch') }}">
                        
                      {{ csrf_field()  }}
                      
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Student</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="studentid" placeholder="name,contact,id, enrollment..." require>
                                
                            </div>
                        </div>
                        

                        

                           <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
         
        
                        
                               <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Search
                                </button>
                                
                                <!-- <a class="btn btn-link" href="{{url('/book/all')}}">View all books</a>
                                <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a> -->
        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





<form method="get" action="{{url('retbook')}}">

        <div class="col-md-12">
            <div class="panel panel-default">
               <div class="panel-heading">STUDENT DETAILS</div>
                <div class="panel-body">
                <div class="table-responsive" style="max-height: 400px; overflow: auto;">
                        
							
							@if($student !=null)
							
                        <table class="table table-bordered">
                        <tr>
                        <td>Select</td>
                            <td>Stu ID</td>
                            <td>Roll No.</td>
                            
                            <td>Name</td>

                            <td>Father's name</td>
                            <td>DOB</td>
                            <td>Mobile</td>
                            <td>Address</td>
                            

                            </tr>
                        @foreach($student as $b)

                        
                        <tr>
                        <td><input type="radio" name="sid" required="required" value="{{$b->stu_info_id}}"></td>
                            <td>{{$b->stu_info_id}}</td>
                            <td>{{$b->stu_bloodgroup}}</td>
                            
                            <td>{{$b->stu_first_name}} {{$b->stu_middle_name}} {{$b->stu_last_name}}</td>
                            <td>{{$b->guardian_name}}</td>
                            <td>{{$b->stu_dob}}</td>
                            <td>{{$b->stu_mobile_no}}</td>
                            <td>{{$b->guardian_home_address}}</td>

                            

                            </tr>
                            
                        
                        @endforeach
                    </table>
                        
                        @endif

                    
                    </div>
                    </div>
                    </div>
                    </div>
                    


        <div class="col-md-12">
            <div class="panel panel-default">
               <div class="panel-heading"></div>
                <div class="panel-body">
                
                    <div class="col-md-6 col-md-offset-3 text-center">
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Search student</button>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    </form>

</div>



@endsection