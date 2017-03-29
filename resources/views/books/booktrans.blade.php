@extends('design.dde')
@section('content')

<div class="row">
   <div class="col-lg-12">
        <h1 class="page-header"> BOOK TRANSECTION</h1>
   </div>
                
</div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Book Transection</div>
                <div class="panel-body">
					
					
<!--					class="form-horizontal" -->
					
                 <form role="form" method="POST" action="{{ url('/booktransectiondetail') }}">
                        
                      {{ csrf_field()  }}
						
                  <div class="form-group">
							
                            <label for="fromdate" class="col-md-4 control-label">From Date</label>

                            <div class="col-md-6">
								
							<input id="fromdate" type="date" class="form-control" name="fromdate" ><br>
                                
                            </div>
							
                        </div>

                        <div class="form-group">
							
                           <label for="todate" class="col-md-4 control-label">To Date</label>

                            <div class="col-md-6">
                                <input id="todate" type="date" class="form-control" name="todate" ><br>

                                
                            </div>
							
                        </div>
						
						  <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Submit
                                </button>
								

								
<!--                                <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>-->
								
                            </div>
							
                        </div>
				  </form>
					
					
					
					
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
               <div class="panel-heading">BOOK TRANSECTION</div>
                <div class="panel-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            
                            <td>STUDENT ID</td>
                            <td>STUDENT NAME</td>
                            <td>ENROLLMENT NO.</td>
							<td>CONTACT</td>
							<td>DOB</td>
							<td>BOOK ID</td>
                            <td>BOOK NAME</td>
							<td>ISSUE DATE</td>
							<td>RETURNING DATE</td>
                           
                            
                        </tr>
							
							
						

							

                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
-->






@endsection
