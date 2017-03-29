                          
@extends('libhome')
@section('content')


<form class="form-horizontal" role="form" method="POST" action="{{ url('/detail2')}}">
	
{{ csrf_field() }}
	
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-primary">
		<div class="panel-heading"><center>Total Student</center></div>
      <div class="panel-body">Total Student</div>
    </div>
  </div>
<!--</div>-->

<!--	<div class="row">-->
  <div class="col-md-6">
    <div class="panel panel-success">
		<div class="panel-heading"><center>Total Books</center></div>
      <div class="panel-body">Total Books</div>
    </div>
  </div>
<!--</div>-->
<!--<div class="row">-->
  <div class="col-md-6">
    <div class="panel panel-info">
		<div class="panel-heading"><center>Issued Books</center></div>
      <div class="panel-body">Issued Book</div>
    </div>
  </div>
<!--</div>-->
<!--<div class="row">-->
  <div class="col-md-6">
    <div class="panel panel-danger">
		<div class="panel-heading"><center>Recived Books</center></div>
      <div class="panel-body">Recived Books</div>
    </div>
  </div>
</div>


<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		
              <label for="name" class="col-md-4 control-label">BOOK ID</label>

	      <div class="col-md-6">
			  
            <input id="name" type="text" class="form-control" name="bid" value="{{ old('name') }}">
                 
	      </div>
       
	 </div>
						
						
	<div class="form-group">
		
           <div class="col-md-6 col-md-offset-4">
               <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i> Search
               </button>
           </div>
		
     </div>

</ul>
</div>
</div>
</form>
@endsection