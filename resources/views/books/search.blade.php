@extends('libhome')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Book Search</h1>



              </div>
               
            </div>


<div class="container">
    <div class="row">
        
        <form method="post" action="{{url('book/search')}}">

        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-md-2 static input-lg">Search</div>
            <div class="col-md-6">
                <input type="search" name="search" class="form-control input-lg" placeholder="Type name, id, author, page..." required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-lg">Search</button>
            </div>
        </form>
        
    </div>
</div>
@endsection