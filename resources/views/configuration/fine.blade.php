@extends('design.dde')
@section('content')

<div class="row">
   <div class="col-lg-12">
        <h1 class="page-header"> Fine</h1>
   </div>
                
</div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Fine</div>
                <div class="panel-body">
					
					
<!--					class="form-horizontal" -->
					
                 <form role="form" method="POST" action="{{ url('/configuration/savefine') }}">
                        
                      {{ csrf_field()  }}
						
                    <div class="form-group">
							
                            <label for="fine" class="col-md-4 control-label">Max days</label>

                            <div class="col-md-6">
								
                                <input id="fine" type="text" value="{{$data[0]->f2}}" class="form-control" name="days"><br>

                            </div>
							 
                      </div>
					 
					 
					 <div class="form-group">
							
                            <label for="days" class="col-md-4 control-label">per day fine</label>

                            <div class="col-md-6">
								
                                <input id="days" type="text" class="form-control" value="{{$data[1]->f2}}" name="fine"><br>

                            </div>
							 
                      </div>
					 
					 
					 
					 
					 <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Category
                                </button>
								
                                <a class="btn btn-link" href="{{url('/book/all')}}">View all books</a>
								

								
                            </div>
							
                        </div>
						
				  </form>
					
					
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
