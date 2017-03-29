                          
@extends('studhome2')
@section('content')





<form class="form-horizontal" role="form" method="POST" action="{{ url('/showbook')}}">
{{ csrf_field() }}
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">



<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">STUDENT ID</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="sid" value="{{ old('name') }}">
                                </div>
                                </div>

                                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Search
                                </button>
                            </div>
                        </div>






 

                        
                        </ul>
                        </div>
                        </div>
                        </form>
                        @endsection