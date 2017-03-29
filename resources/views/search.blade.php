@extends('studhome2')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ALL BOOKS</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            
                            <td>BOOKID</td>
                            <td>TITLE</td>
                            <td>AUTHOR</td>
                            <td>ISBN</td>
                            
                            
                        </tr>
                        
                        @foreach($book as $result)
                        <tr>
                            
                            <td>{{$result->bookid}}</td>
                            <td>{{$result->title}}</td>
                            <td>{{$result->author}}</td>
                            <td>{{$result->isbn}}</td>
                        
                            
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