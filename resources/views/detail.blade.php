@extends('libhome')
@section('content')






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
                            
                        </tr>
                        
                        @foreach($details as $c)
                        <tr>
                            
                            <td>{{$c->id}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->enrollname}}</td>
                            <td>{{$c->branch}}</td>
                            <td>{{$c->email}}</td>
                            

                        
                            
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
                <div class="panel-heading">BOOK DETAILS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            
                            <td>STUDENT ID</td>
                            
                           
                            
                            
                            <td>BOOK-ID</td>
                            <td>BOOK TITLE</td>
                            <td>BOOK AUTHOR</td>
                            <td>BOOK ISBN</td>
                            
                        </tr>
                        
                        @foreach($book as $s)
                        <tr>
                            
                            <td>{{$s->studentid}}</td>
                            
                           
                            
                            <td>{{$s->bookid}}</td>
                            <td>{{$s->title}}</td>
                            <td>{{$s->author}}</td>
                            <td>{{$s->isbn}}</td>

                        
                            
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