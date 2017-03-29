@extends('design.dde')
@section('content')

<div class="row">
   <div class="col-lg-12">
        <h1 class="page-header"> Add Bill</h1>
   </div>
                
</div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Add New Bill</div>
                <div class="panel-body">
					
					
<!--					class="form-horizontal" -->
					
                 <form role="form" method="POST" action="{{ url('/bill/save') }}" enctype="multipart/form-data">
                        
                      {{ csrf_field()  }}
						
                  <div class="form-group">
							
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
								
							<input id="title" type="title" class="form-control" name="title" ><br>
                                
                            </div>
							
                        </div>

                        <div class="form-group">
							
                           <label for="date" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" ><br>

                                
                            </div>
							
                        </div>
						
						 
						
						

                        <div class="form-group">
                            <label for="amount" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" ><br>

                                
                            </div>
							
                        </div>

<!--
                        <div class="form-group">
							
                            <label for="image" class="col-md-4 control-label">Bill Copy</label>

                            <div class="col-md-6">
                                <input id="billcopy" type="file" class="form-control" name="image"><br>

                            </div>
							 
                        </div>
-->
					 
					 <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Bill
                                </button>
								
<!--                                <a class="btn btn-link" href="{{url('/bill/all')}}">View all books</a>-->
								
<!--                                <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>-->
								
                            </div>
							
                        </div>
				  </form>
					
					
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
