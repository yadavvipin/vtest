@extends('studhome2')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ISSUED BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            
                            <td>TRANSACTION ID</td>
                            
                            <td>BOOK ID</td>
                           
                            
                            
                            <td>ISSUEDBY</td>
                            
                            
                            
                        </tr>
                        
                        @foreach($issuelog as $s)
                        <tr>
                            
                            <td>{{$s->id}}</td>
                            
                           
                            <td>{{$s->bookid}}</td>
                            <td>{{$s->issuedby}}</td>
                            

                        
                            
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