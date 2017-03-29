@extends('design.dde')
@section('content')

<div class="row">
   <div class="col-lg-12">
        <h1 class="page-header"> BOOK DAMAGE DETAIL</h1>
   </div>
                
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
               <div class="panel-heading">Damage Report</div>
                <div class="panel-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            
                            <td>ID</td>
                            <td>ID written on Book</td>
                            <td>Book title</td>
							
							<td>Type</td>
							<td>Issue date</td>
                            <td>Return date</td>
							<td>Damage status</td>
							
                           
                            
                        </tr>
							
						@foreach($b as $is)
                    	<tr>
                    		<td>{{$is->bookid}}</td>
							<td>{{$is->writtenid}}</td>
							<td>{{$is->book_title}}</td>
                    		
							<td>{{$is->type}}</td>
							<td>{{$is->created_at}}</td>
							<td>{{$is->updated_at}}</td>
							<td>{{$is->damage}}</td>

						
					
						
				
                            </tr>
<!--					</table>-->
				
                    	
                    	@endforeach

                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>






@endsection
