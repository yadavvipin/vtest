@extends('design.dde')
@section('content')

<div class="row">
   <div class="col-lg-12">
        <h1 class="page-header"> Add Category</h1>
   </div>
                
</div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Add New Category</div>
                <div class="panel-body">
					
					
<!--					class="form-horizontal" -->
					
                 <form role="form" method="POST" action="{{ url('/configuration/savecategory') }}">
                        
                      {{ csrf_field()  }}
						
                    <div class="form-group">
							
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
								
                                <input id="category" type="text" class="form-control" name="category"><br>

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
