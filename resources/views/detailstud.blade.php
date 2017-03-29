@extends('libhome')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">BOOK DETAILS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            
                            
                            
                           
                            
                            
                            <td>BOOK-ID</td>
                            <td>BOOK TITLE</td>
                            <td>BOOK AUTHOR</td>
                            <td>BOOK ISBN</td>
                            
                        </tr>
                        
                        @foreach($book as $b)
                        <tr>
                            
                            
                            
                           
                            
                            <td>{{$b->bookid}}</td>
                            <td>{{$b->title}}</td>
                            <td>{{$b->author}}</td>
                            <td>{{$b->isbn}}</td>

                        
                            
                        </tr>
                        @endforeach
                        </table>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>



            <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading">STUDENT DETAILS</div>
                <div class="panel-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            
                            <td>STUDENT ID</td>
                            
                           
                            
                            
                            <td>NAME</td>
                            <td>ENROLL NO.</td>
                            <td>BRANCH</td>
                            <td>EMAIL-ID</td>
                            <td>BOOK-ID</td>
                        </tr>
                        
                        @foreach($details as $s)
                        <tr>
                            
                            <td>{{$s->id}}</td>
                            
                           
                            
                            <td>{{$s->name}}</td>
                            <td>{{$s->enrollname}}</td>
                            <td>{{$s->branch}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->bookid}}</td>

                        
                            
                        </tr>
                        @endforeach
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    @endsection