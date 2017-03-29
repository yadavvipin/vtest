@extends('design.dde')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Add Book</h1>



              </div>
                <!-- /.col-lg-12 -->
            </div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Add New Books</div>
                <div class="panel-body">
					
					
<!--					class="form-horizontal" -->
					
                    <form role="form" method="POST" action="{{ url('/book/save') }}">
                        
                      {{ csrf_field()  }}
                      
                        <!-- <div class="form-group">
							
                            <label for="name" class="col-md-4 control-label">Bookid</label>

                            <div class="col-md-6">
								
							<input id="name" type="text" class="form-control" name="bookid" ><br>
                                
                            </div>
							
                        </div> -->

                        <div class="form-group">
							
                           <label for="book_title" class="col-md-4 control-label">Book Title</label>

                            <div class="col-md-6">
                                <input id="booktitle" type="text" class="form-control" name="book_title" ><br>

                                
                            </div>
							
                        </div>
						
						 
						
						

                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
								<select name="type" class="form-control">
								@foreach($type as $t)
									<option value="{{$t->id}}">{{$t->type}}</option>
								
								@endforeach
								</select><br>

                            </div>
							
                        </div>

                        <div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Edition</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="edition"><br>

                            </div>
							 
                        </div>
						
						
						
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Place & Publication</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="place_publication"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="year"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Pages</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="pages"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Cost</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="cost"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="author" class="col-md-4 control-label">Author</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author"><br>

                            </div>
							 
                        </div>
						
						
						
						
						<div class="form-group">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
								<select name="category" class="form-control">
								@foreach($category as $c)
									<option value="{{$c->id}}">{{$c->category}}</option>
								
								@endforeach
								</select><br>

                            </div>
							
                        </div>
						
						
<!--
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Book Category</label>

                            <div class="col-md-6">
                                <input id="bookcategory" type="text" class="form-control" name="book_category"><br>

                            </div>
							 
                        </div>
-->


                        <div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="quantity"><br>

                            </div>
							
                        </div>
						
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Almira No.</label>

                            <div class="col-md-6">
                                <input id="almira_no" type="text" class="form-control" name="almira_no"><br>

                            </div>
							
                        </div>
						
						<div class="form-group">
							
                            <label for="rekno" class="col-md-4 control-label">Rek No.</label>

                            <div class="col-md-6">
                                <input id="rekno" type="text" class="form-control" name="rek_no"><br>

                            </div>
							
                        </div>

                        <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Book
                                </button>
								
                                <a class="btn btn-link" href="{{url('/book/all')}}">View all books</a>
								
                                <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>
								
                            </div>
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
