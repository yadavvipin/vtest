                          
@extends('libhome')
@section('content')
    <div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Track Student</h1>
                </div>
               
            </div>
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif


        <form class="form-horizontal" role="form" method="GET" >

            
            
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="row">
                        <div class="col-md-4">
                            <label for="name" class="col-md-6 control-label">STUDENT ID</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="sid" value="{{ $id or '' }}">
                             </div>
                        </div>
                        <div class="col-md-4">    
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>
           </form>



            @if(count($users)>0)
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">STUDENT DETAIL</div>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>STUDENT ID</td>
                                        <td>NAME</td>
                                        <td>CONTACT</td>
                                        
                                        
                                    </tr>
                                    
                                    
                                    @foreach($users as $t)
                                    <tr>
                                        
                                        <td>{{$t->stu_info_id}}</td>
                                        <td>{{$t->stu_first_name}} {{$t->stu_middle_name}} {{$t->stu_last_name}}</td>
                                        <td>{{$t->stu_email_id}}</td>

                                    
                                        
                                    </tr>
                                    @endforeach

                                </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
            @endif
            

            @if(count($issuelog)>0)
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">BOOK DETAIL</div>
                            <div class="panel-body">
                            <div class="table-responsive">
                               <form method="POST" >
                                <table class="table table-bordered">
                                    <tr>
                                    <td> ID written on book</td>
                                        <td> BOOK TITLE</td>
                                        <td> EDITION</td>
                                        <!-- <td>BOOK_CATEGORY</td> -->
                                        <td>Issue date</td>
                                        <td>Damage</td>
                                        <td>Return</td>                                            
                                        
                                    </tr>
                                    
                                    {{csrf_field()}}
                                    <input type="hidden" name='user_id' value="{{$id}}">
                                    @foreach($issuelog as $t)
                                    <tr>
                                        <td>{{$t->writtenid}}</td>
                                        <td>{{$t->book_title}}</td>
                                        <td>{{$t->edition}}</td>
                                        <!-- <td>{{$t->category}}</td> -->
                                        <td>{{$t->created_at}}</td>
                                        <td>
                                            <select name="damage[]">
                                                <option>No Damage</option>
                                                <option>Partial Damage</option>
                                                <option>Full Damage</option>
                                                <!-- <option>Lost</option> -->
                                            </select>
                                        </td>
                                        <td><input type="checkbox" name="books[]" value="{{$t->id}}"></td>    
                                    </tr>
                                    @endforeach
                                    
                                </table>
                                <input type="submit" class="btn btn-primary" value="Return">
                                </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>


                                
            @endif

@endsection