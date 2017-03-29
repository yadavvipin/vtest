<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>
	
	
	
	

                           <!-- Bootstrap Core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

                           <!-- MetisMenu CSS -->
    <link href="{{url('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

                            <!-- Custom CSS -->
     <!--    <link href="dist/css/sb-admin-2.css" rel="stylesheet">-->
	 <link href="{{url('dist/css/sb-admin-2.css')}}" rel="stylesheet">
	

                            <!-- Morris Charts CSS -->
     <!--    <link href="vendor/morrisjs/morris.css" rel="stylesheet">-->
	 <link href="{{url('vendor/morrisjs/morris.css')}}" rel="stylesheet">

	

    <!-- Custom Fonts -->
<!--    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
	
	 <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">LIBRARIAN HOMEPAGE</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
							                        <li>
    <a href="{{url('/dashboard')}}"><i class="fa fa-fw fa-dashboard"></i>DASHBOARD</a></li>
       
							
<!--                            <a href="{{url('/dashboard')}}"><i class="fa fa-bar-chart-o fa-fw"></i>DASHBOARD<span class="fa arrow"></span></a>-->
<!--
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/findstud')}}">BASED ON STUDENT</a>
                                </li>
                                <li>
                                    <a href="{{url('/findbook')}}">BASED ON BOOK</a>
                                </li>
                                
                               </ul> 
-->
<!--                        </li>-->
                         <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> BOOKS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/book/new')}}">ADD BOOKS</a>
                                </li>
                                <li>
                                    <a href="{{url('/book/a')}}">MANAGE BOOKS</a>
                                </li>
                                <li>
                                    <a href="{{url('/book/search')}}">SEARCH BOOKS</a>
                                </li>
                                
                               </ul> 
                                </li>
                        <li>
                            <a href="#"><i class="fa fa-btc fa-fw"></i> BOOKS ACCOUNT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/issuebook')}}">BOOK ISSUE</a>
                                </li>
                                <!-- <li>
                                    <a href="{{url('/retbook')}}">BOOK RETURN</a>
                                </li> -->
                                <li>
                                    <a href="{{url('/retsearch')}}">BOOK RETURN</a>
                                </li>
								 <li>
                                    <a href="{{url('/booktrans')}}">BOOK TRANSECTION</a>
                                </li>
                                </ul>
                                </li>

                                <li>
                                    <a href="#1"><i class="fa fa-safari fa-fw"></i>BOOK TRACK<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="{{url('/trkbookid')}}">TRACK BY BOOK ID</a>
                                </li>

                                <li>
                                    <a href="{{url('/trkstudid')}}">TRACK BY STUDENT ID</a>
                                </li>
                           </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
    <a href="{{url('/bookreport')}}"><i class="fa fa-fw fa-dashboard"></i>BOOK REPORTS</a></li>
            
                        <li>
                            <a href="#2"><i class="fa fa-wrench fa-fw"></i> DETAILS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
<!--
                                <li>
                                    <a href="{{url('/display')}}">BOOK DETAILS</a>
                                </li>
-->
                                <li>
                                    <a href="{{url('/viewstuddetails')}}">STUDENT DETAILS</a>
                                </li>
                                
                            
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
					
					
<li>
                                    <a href="#1"><i class="fa fa-check-square fa-fw"></i>CONFIGURATION<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="{{url('/configuration/category')}}"> ADD CATEGORY</a>
                                </li>
								
								<li>
                                    <a href="{{url('/configuration/managecategory')}}"> MANAGE CATEGORY</a>
                                </li>

                                <li>
                                    <a href="{{url('/configuration/type')}}"> ADD TYPE</a>
                                </li>
								
								<li>
                                    <a href="{{url('/configuration/managetype')}}"> MANAGE TYPE</a>
                                </li>
								
								<li>
                                    <a href="{{url('/configuration/fine')}}">FINE</a>
                                </li>
<!--
								<li>
                                    <a href="{{url('/trkstudid')}}">FINE</a>
                                </li>
-->
                           </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
						 <li>
                                    <a href="#1"><i class="fa fa-safari fa-fw"></i>BILL<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                    <a href="{{url('/bill/addbill')}}">ADD BILL</a>
                                </li>

                                <li>
                                    <a href="{{url('/bill/managebill')}}">MANAGE BILL</a>
                                </li>
                           </ul>
                            <!-- /.nav-second-level -->
                        </li>
					 <li>
    <a href="{{url('/newsms')}}"><i class="fa fa-fw fa-dashboard"></i>SMS</a></li>
						
<!--
						<li>
    <a href="{{url('/fees')}}"><i class="fa fa-fw fa-dashboard"></i>FEES</a></li>
-->
						
						
					
					
<!--
					  <li>
                            <a href="#"><i class="fa fa-cc-paypal fa-fw"></i>FINE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/issuebook')}}">BOOK ISSUE</a>
                                </li>
                                <li>
                                    <a href="{{url('/retbook')}}">BOOK RETURN</a>
                                </li>
                                </ul>
                                </li>
-->
					
					</ul>     
                        
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
<!--
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>



              </div>
                
            </div>
            
-->
            
        
@yield('content')
    </div>
    
    <!-- /#wrapper -->

    <!-- jQuery -->
	<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<!--    <script src="vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
<!--    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
	<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
<!--    <script src="vendor/metisMenu/metisMenu.min.js"></script>-->
	 <script src="{{url('vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
<!--
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
-->
	 <script src="{{url('vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{url('vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{url('data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('dist/js/sb-admin-2.js')}}"></script>
	</div>
	</body>
</html>

<!--
	</nav>
	</div>
	
</body>
</html>
-->
	


