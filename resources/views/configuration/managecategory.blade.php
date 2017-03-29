@extends('design.dde')
@section('content')

<div class="row">
	
   <div class="col-lg-12">
	   
                    <h1 class="page-header">Manage Category</h1>
   </div>
                
</div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">MANAGE CATEGORY</div>
                <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    	<tr>
                    		<td>Sr.No</td>
                    		<td>CATEGORY</td>
							<td>MANAGE</td>
                            </tr>
                    	

                    	@foreach($category as $c)
                    	<tr>
                    		<td>{{$c->id}}</td>
                    		<td>{{$c->category}}</td>
                    		
					
					<td>
					<a href="{{url('/configuration/deletecategory',$c->id)}}" class="btn btn-danger">Delete</a>
<!--					<a href="{{url('/edit',$c->id)}}" class="btn btn-success">Edit</a>-->
					</td>		
				
                            </tr>
<!--					</table>-->
				
                    	
                    	@endforeach
                    </table>

</div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                    <a class="btn btn-link" href="{{url('/libhome')}}">Homepage</a>
                    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

<!--    </div>-->

@endsection

