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
                <div class="panel-heading">BOOK DETAIL</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>BOOK TITLE</td>
                            <td>EDITION</td>
							<td>AUTHOR</td>
							<td>PAGE</td>
                            <td>YEAR</td>
							<td>PRICE</td>
                            
                            
                        </tr>
                     
                        @foreach($issue as $t)
                        <tr>
                            
                            <td>{{$t->book_title}}</td>
                            <td>{{$t->edition}}</td>
                            <td>{{$t->author}}</td>
							<td>{{$t->pages}}</td>
							<td>{{$t->year}}</td>
							<td>{{$t->cost}}</td>

                        
                            
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
                <div class="panel-heading">Student Detail</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td> ID</td>
                            <td> NAME</td>
                            <td>CONTACT</td>
                            
                            
                        </tr>
                       @foreach($issuelog as $t)
                        <tr>
                            
                            <td>{{$t->studentid}}</td>
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








 @endsection