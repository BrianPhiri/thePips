@extends('layouts.master')

@section('content')
<!-- NAVBAR BEGIN -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">thePips</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Sign In <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i></a></li>
        <li><a href="#">Register</a></li>
        <li><a href="#">Shop Cart <i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i></a></li>
        <li><a href="#aboutus">About Us</a></li>
        <li><a href="#category">Categories</a></li>
        <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </li> -->
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- NAVBAR END -->
<!-- PAGE HEADER -->
<div class="page-header">
  <!-- <h1>Example page header <small>Subtext for header</small></h1> -->
  <img src="images/couch/image_1.jpg" alt="Page Header Image" />
</div>
<!-- END PAGE HEADER -->
<!-- ARRIVALS SECTION -->
<h1 style="text-align: center;">New Arrivals</h1>
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/couch/image_2.jpg" alt="thePips">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>This is a new Product</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to cart <i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i></a>
          <a href="#" class="btn btn-default" role="button">Button</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/couch/image_2.jpg" alt="thePips">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>This is a new Product</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to cart <i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i></a>
          <a href="#" class="btn btn-default" role="button">Button</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/couch/image_2.jpg" alt="thePips">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>This is a new Product</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to cart <i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i></a>
          <a href="#" class="btn btn-default" role="button">Button</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="images/couch/image_2.jpg" alt="thePips">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>This is a new Product</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to cart <i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i></a>
          <a href="#" class="btn btn-default" role="button">Button</a>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- END ARRIVALS SECTION -->
<!-- CATEGORIES SECTION -->
<h1 style="text-align: center;">Categories</h1>
<div id="category" class="container col-lg-3 col-md-3 col-sm-6">
  <div style="background-color: #F5F5F4">
    <h1 style="text-align: center;">Categories</h1>

          <h4 class="panel-title">
            <a class="btn btn-info btn-block" data-toggle="collapse" href="#collapse1" style="text-align: left;">Couch</a>
          </h4>

          <ul id="collapse1" class="collapse">
            <li >One</li>
            <li >Two</li>
            <li >Three</li>
          </ul>
    <ul class="nav nav-pills nav-stacked">
      <li role="presentation"><a href="#">thePips</a></li>
    </ul>
  </div>
</div>
<div class="container col-lg-9 col-md-9 col-sm-6">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="images/desk/desk_2.jpg" alt="thePips" class="img-thumbnail">
    </div>
  </div>

</div>
<br>
<!-- END CATEGORIES SECTION -->
<!-- ABOUT US SECTION  -->
<h1 style="text-align: center; padding-top: 50px;">About Us</h1>
  <div id="aboutus" class="well well-lg" background= "#C0C0C0" >
    <div class ="row">
      
       <div class = "footercontainer">
         <div class = "footer1">
           <br>
              thePips 
            <br>
            <br>
              P.O.Box 1234, Madaraka 
            <br>
               Nairobi 
            <br>
            <br>
              Telephone Number: 0712345678 
            <br>
                
            <br>
         </div>
         
         <div class = "footer2">
           
         </div>
         
       </div>
    </div>
  </div>

@endsection()
