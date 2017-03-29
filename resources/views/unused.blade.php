@extends('libhome')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">UNUSED BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            
                            <td>SR NO</td>
                            <td>BOOK ID</td>
                           
                            
                            <td>TITLE</td>
                            <td>AUTHOR NAME</td>
                            <td>ISBN</td>
                            <td>QUANTITY</td>
                            
                            
                        </tr>
                        
                        @foreach($book as $t)
                        <tr>
                            
                            <td>{{$t->id}}</td>
                            <td>{{$t->bookid}}</td>
                           
                            <td>{{$t->title}}</td>
                            <td>{{$t->author}}</td>
                            <td>{{$t->isbn}}</td>
                            <td>{{$t->quantity}}</td>

                        
                            
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