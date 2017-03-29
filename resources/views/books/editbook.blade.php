@extends('design.dde')
@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Book</h1>



              </div>
                <!-- /.col-lg-12 -->
            </div>


<div class="container">
	
    <div class="row">
		
        <div class="col-md-8 ">
			
            <div class="panel panel-default">
                <div class="panel-heading"> Edit Book</div>
                <div class="panel-body">
					
					
<!--					class="form-horizontal" -->
					
                    <form role="form" method="POST" action="{{ url('/book/update') }}">
                        
                      {{ csrf_field()  }}
                      
                        <div class="form-group">
							
                            <label for="name" class="col-md-4 control-label">Bookid</label>

                            <div class="col-md-6">
								
							<input id="name" type="text" class="form-control" name="bookid" value="{{$book->id}}" class = 'form-control', readonly = 'true'><br>
                                
                            </div>
							
                        </div>

                        <div class="form-group">
							
                           <label for="book_title" class="col-md-4 control-label">Book Title</label>

                            <div class="col-md-6">
                                <input id="booktitle" type="text" class="form-control" name="book_title" value="{{$book->book_title}}"><br>

                                
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
							
                            <label for="edition" class="col-md-4 control-label">Edition</label>

                            <div class="col-md-6">
                                <input id="edition" type="text" class="form-control" name="edition" value="{{$book->edition}}"><br>

                            </div>
							 
                        </div>
						
						
						
						<div class="form-group">
							
                            <label for="password" class="col-md-4 control-label">Place & Publication</label>

                            <div class="col-md-6">
                                <input id="placepublication" type="text" class="form-control" name="place_publication" value="{{$book->place_publication}}"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="year" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control" name="year"value="{{$book->year}}"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="pages" class="col-md-4 control-label">Pages</label>

                            <div class="col-md-6">
                                <input id="pages" type="text" class="form-control" name="pages" value="{{$book->pages}}"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="cost" class="col-md-4 control-label">Cost</label>

                            <div class="col-md-6">
                                <input id="cost" type="text" class="form-control" name="cost" value="{{$book->cost}}"><br>

                            </div>
							 
                        </div>
						
						<div class="form-group">
							
                            <label for="author" class="col-md-4 control-label">Author</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control" name="author" value="{{$book->author}}"><br>

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
						
						


                        <div class="form-group">
							
                            <label for="quantity" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{$book->quantity}}"><br>

                            </div>
							
                        </div>
						
						<div class="form-group">
							
                            <label for="almirano" class="col-md-4 control-label">Almira No.</label>

                            <div class="col-md-6">
                                <input id="almira_no" type="text" class="form-control" name="almira_no" value="{{$book->almira_no}}"><br>

                            </div>
							
                        </div>
						
						<div class="form-group">
							
                            <label for="rekno" class="col-md-4 control-label">Rek No.</label>

                            <div class="col-md-6">
                                <input id="rek_no" type="text" class="form-control" name="rek_no" value="{{$book->rek_no}}"><br>

                            </div>
							
                        </div>

                        <div class="form-group">
							
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Update Book
                                </button>
								
                                <a class="btn btn-link" href="{{url('/book/all')}}">View all books</a>
								
                                <a class="btn btn-link" href="{{url('/dashboard')}}">Homepage</a>
								
                            </div>
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
