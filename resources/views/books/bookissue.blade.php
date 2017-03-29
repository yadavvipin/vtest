
@extends('libhome')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Issue Book</h1>



              </div>
                <!-- /.col-lg-12 -->
            


        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Issue Books</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/issuebook') }}">
                        
                      {{ csrf_field()  }}
                      
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Student</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="studentid" placeholder="name,contact,id, enrollment..." require>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Book</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="bookid" placeholder="title,author,year,category,type..." require>
                                
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





<form method="post" action="{{url('bookfinal')}}">

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
                        <td><input type="radio" name="studentid" required="required" value="{{$b->stu_info_id}}"></td>
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
               <div class="panel-heading">BOOK DETAILS</div>
                <div class="panel-body">
                <div class="table-responsive" style="max-height: 400px; overflow: auto;">
                        
							@if($book!=null)
                            <table class="table table-bordered">
                        <tr>
                        <td>Select</td>
                            <td>Sr.No</td>
                            
                            <td>BOOK TITLE</td>
                            <td>AUTHOR</td>
                            <td>TYPE</td>
                            <td>EDITION</td>
                            <td>PLACE & PUBLICATION</td>
                            <td>YEAR</td>
                            
                            
                            <td>CATEGORY</td>
                            
                            <td>ALMIRA NO.</td>
                            <td>REK NO.</td>
                            <td>MANAGE</td>
                            </tr>
                        
							@foreach($book as $b)
                        

                        
                        <tr>
                        <td><input type="radio" name="bid" required="required" value="{{$b->id}}"></td>
                            <td>{{$b->id}}</td>
                            
                            <td>{{$b->book_title}}</td>
                            <td>{{$b->author}}</td>
                            <td>{{$b->type}}</td>
                            <td>{{$b->edition}}</td>
                            <td>{{$b->place_publication}}</td>
                            <td>{{$b->year}}</td>
                            
                            
                            <td>{{$b->category}}</td>
                            
                            <td>{{$b->almira_no}}</td>
                            <td>{{$b->rek_no}}</td>
                    
                    
                           
                
                            </tr>
                
                        
                        @endforeach
                    </table>
							

							
							<?php
							$number = $student[0]->stu_mobile_no;
                            
//							$number = "8103953796";
							$d = date('l,j F Y');
							echo $d;
							$message = "Book ".$b->book_title."(".$b->id.") has been issued to you successfully on ".$d;
							echo '<!--script src="http://mysms.springstrategies.in/API/WebSMS/Http/v1.0a/index.php?username=spring&password=123456&sender=SPRING&to='.$number.'&message='.$message.'&reqid=1&format=text&unique=1"></script-->';
							?>
							
                        
							@endif
                        

                    
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="form-group">
                            <label>Enter ID writtenon book</label>
                            <input type="text" name="bookid"required class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Issue Book</button>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                    </form>

</div>



@endsection