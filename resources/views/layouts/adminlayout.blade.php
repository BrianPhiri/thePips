<!DOCTYPE HTML>
<html>
<head>
<title>ThePipsOnlineShoppingSolution</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery.min.js') }}"> </script>
<!-- Mainly scripts -->
<script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/screenfull.js') }}"></script>
<!-- datatable cdn -->
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" media="screen" title="no title" charset="utf-8">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>

<!----->

<!--pie-chart--->
<script src="{{ asset('js/pie-chart.js') }}" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '');
                }
            });


        });

    </script>
<!--skycons-icons-->
<script src="{{ asset('js/skycons.js') }}"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a style="background-color: #6fd954" class="navbar-brand" href="admin">thePIPS</a></h1>
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
			<form class=" navbar-left-right">
              <!-- <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search"> -->
            </form>
            <div class="clearfix"> </div>
           </div>


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
                <!-- Dynamic Display of Icons Based on the authenticated user -->
                    @if (Auth::guest())
                     <li class="dropdown at-drop"><a href="{{ URL::asset('login') }}"><i class="fa fa-btn fa-sign-in"></i> Sign In</a></li>
                    @else
                    <!-- Displays the name of the authenticated users. -->
                      <li class="dropdown at-drop">
                      <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class="at-drop name-caret"><i class="fa fa-user"></i> Admin<i class="caret"></i></span></a>
                      <ul class="dropdown-menu " role="menu">
                        <li class="dropdown at-drop"><a href="profile"><i class="fa fa-user"></i>Edit Profile</a></li>
                        <!-- <li><a href="inbox"><i class="fa fa-envelope"></i>Inbox</a></li> -->
                        <li class="dropdown at-drop"><a href="{{ url::asset('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Sign Out</a></li>
                      </ul>
                    </li>
                    @endif
                    <!-- END -->
		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">2</span></a>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">

		                	<div class="user-new">
		                	<p>New user registered</p>
		                	<span>40 seconds ago</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>

		                <li><a href="#">
		                	<div class="user-new">
		                	<p>The server is status is stable</p>
		                	<span>yesterday at 08:30am</span>
		                	</div>
		                	<div class="user-new-left">

		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>

		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>
				</ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">

     </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="{{ URL::asset('admin') }}" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>

					 <li>
                        <!-- <a href="{{ URL::asset('inbox') }}" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span> </a> -->
                    </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-th-large nav_icon"></i> <span class="nav-label">Categories</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ URL::asset('category') }}" class=" hvr-bounce-to-right"> <i class="glyphicon glyphicon-list-alt nav_icon"></i>List Categories</a></li>
                            <li><a href="{{ URL::asset('category/create') }}" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-pencil nav_icon"></i>Add Category</a></li>
                       </ul>
                    </li>
										<li>
											 <a href="#" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-th-list  nav_icon"></i> <span class="nav-label">Sub-Categories</span><span class="fa arrow"></span></a>
											 <ul class="nav nav-second-level">
													 <li><a href="{{ URL::asset('subcategory') }}" class=" hvr-bounce-to-right"> <i class="fa glyphicon glyphicon-list-alt nav_icon"></i>List Sub-Categories</a></li>
													 <li><a href="{{ URL::asset('subcategory/create') }}" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-pencil nav_icon"></i>Add A Sub-Category</a></li>
											</ul>
									 </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-th nav_icon"></i> <span class="nav-label">Products</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ URL::asset('product') }}" class=" hvr-bounce-to-right"> <i class="glyphicon glyphicon-list-alt nav_icon"></i>List Products</a></li>
                            <li><a href="{{ URL::asset('product/create') }}" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-pencil nav_icon"></i>Add Products</a></li>
                       </ul>
                    </li>

                    <li>
                        <a href="customers" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-user nav_icon"></i> <span class="nav-label">Customers</span> </a>
                    </li>

										<li>
                        <a href="orders" class=" hvr-bounce-to-right"><i class="glyphicon glyphicon-list nav_icon"></i> <span class="nav-label">Order List</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="signin" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                            <li><a href="signup" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashboard-1">
       <div class="content-main">


		@yield('content')

		<!---->
<div class="copy">
            <p> &copy; {!! date('Y-m-d') !!} E-commerce by <a href="" target="_blank">thePIPS</a> </p>
	    </div>
		</div>

		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>
	<!--//scrolling js-->
	<script src="{{ asset('js/bootstrap.min.js') }}"> </script>
	<script type="text/javascript">
	$(document).ready(function(){
	    $('#myTable').DataTable({
				searching: true,
				select: true,
				ordering: false
			});
	});
	</script>
</body>
</html>
