                          
@extends('libhome')
@section('content')


<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>



              </div>
                <!-- /.col-lg-12 -->
            </div>


<!--class="form-horizontal"-->
<form  role="form" method="POST" action="{{ url('/detail2')}}">
	
{{ csrf_field() }}
	
<div class="row">

<div class="col-md-3 col-md-offset-2">
    <div class="panel panel-primary">
    <div class="panel-heading"><center>Total Titles</center></div>
    <div class="panel-body"><center><b>{{$book}}</b></center></div>
    
    </div>
  </div>

  <!--  <div class="row">-->
  <div class="col-md-3">
    <div class="panel panel-success">
    <div class="panel-heading"><center>Total Books</center></div>
    <div class="panel-body"><center><b>{{$total}}</b></center></div>
    </div>
  </div>
<!--</div>-->


  <div class="col-md-3">
    <div class="panel panel-primary">
		<div class="panel-heading"><center>Total Student</center></div>
		<div class="panel-body"><center><b>{{$user}}</b></center></div>
		
    </div>
  </div>
<!--</div>-->


<!--<div class="row">-->
  <div class="col-md-4 col-md-offset-2">
    <div class="panel panel-info">
		<div class="panel-heading"><center>Issued Books</center></div>
		<div class="panel-body"><center><b>{{$all}}</b></center></div>
    </div>
  </div>
<!--</div>-->
<!--<div class="row">-->
  <div class="col-md-4">
    <div class="panel panel-danger">
		<div class="panel-heading"><center>Books to be returned</center></div>
		<div class="panel-body"><center><b>{{$issue}}</b></center></div>
    </div>
  </div>
</div>


<!--
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
-->
</form>
@endsection