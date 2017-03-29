@extends('libhome')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>



              </div>
               
            </div>



<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">STUDENT DETAIL</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>STUDENT ID</td>
                            <td>NAME</td>
                            <td>CONTACT</td>
                            
                            
                        </tr>
                        
						
						@foreach($users as $t)
                        <tr>
                            
                            <td>{{$t->stu_info_id}}</td>
							<td>{{$t->stu_first_name}} {{$t->stu_middle_name}} {{$t->stu_last_name}}</td>
							<td>{{$t->stu_email_id}}</td>

                        
                            
                        </tr>
                        @endforeach

                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">BOOK DETAIL</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td> BOOK TITLE</td>
                            <td> EDITION</td>
                            <td>BOOK_CATEGORY</td>
                            
                            
                        </tr>
                        
                        @foreach($issuelog as $t)
                        <tr>
                            
                            <td>{{$t->book_title}}</td>
                            <td>{{$t->edition}}</td>
                            <td>{{$t->category}}</td>

                            
                            

                        
                            
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>



                    @endsection