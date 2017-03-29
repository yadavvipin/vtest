@extends('design.dde')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> INDIVISUAL STUDENT SMS</h1>
                </div>
                
	
	                         <!-- /.col-lg-12 -->
</div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Send </div>
                <div class="panel-body">
					
					<!--class="form-horizontal" -->
					
                    <form role="form" method="POST" action="{{ url('/sms/send') }}">
                        
                      {{ csrf_field()  }}
                      
                        <div class="form-group">
							
                            <label for="number" class="col-md-4 control-label">Number</label>

                            <div class="col-md-6">
								
							<input id="number" type="number" class="form-control" name="number" ><br>
                                
                            </div>
							
                        </div>

                        <div class="form-group">
							
                           <label for="book_title" class="col-md-4 control-label">Massege</label>

                            <div class="col-md-6">
                                  <!--<input id="massege" type="text" class="form-control" name="massege" ><br>-->
                                  <textarea class="field" name="notes" cols="50" rows="10"></textarea><br><br>
                                
                            </div><br><br>
							
                        </div>
						
			     <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Send 
                                </button>
								

								
                            </div>
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> ALL STUDENT SMS</h1>
					
					
					<div class="maxl">
  <label class="radio"> 
      <input type="radio" name="student" value="all" checked>
      <span> All </span> 
   </label>
  <label class="radio"> 
      <input type="radio" name="student" value="individual">
      <span>Individual </span> 
  </label>
</div>

  
 </div>
                <!-- /.col-lg-12 -->
</div>



<div class="container">
	
	
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Send SMS</div>
                <div class="panel-body">
					
					<!--class="form-horizontal" -->
					
                    <form role="form" method="POST" action="{{ url('/sms/sendall') }}">
                        
                      {{ csrf_field()  }}
						
						
						<div class="form-group">
                            <label for="courses" class="col-md-4 control-label">Courses</label>
                           
                            <div class="col-md-6">
								<select name="courses" class="form-control">
								@foreach($courses as $c)
									<option value="{{$c->course_id}}">{{$c->course_name}}</option>
								
								@endforeach
								</select><br>

                            </div>
							
                        </div>
						
						
						
                      

						



						
						
						
						
                        <div class="form-group">
							
                           <label for="book_title" class="col-md-4 control-label">Massege</label>

                            <div class="col-md-6">
                                  <!--<input id="massege" type="text" class="form-control" name="massege" ><br>-->
                                  <textarea class="field" name="notes" cols="50" rows="10" required></textarea><br><br>
                                
                            </div>
							
                        </div>
						
			     <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Send 
                                </button>
								
        <!--<a class="btn btn-link" href="{{url('/book/all')}}">View all books</a>-->
								
             <!--<a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>-->
								
                            </div>
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection
