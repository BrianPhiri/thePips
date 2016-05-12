<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="home"><img src="images/thePIPS_LOGO.png" alt=""/ style="width: 100px; height: 100px;"></a>
		 </div>
		 <div class="header_right">
			 <div class="cart box_1">
				<a href="/cart">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
				<div class="clearfix"> </div>
			 </div>
		 </div>
		  <div class="clearfix"></div>
	 </div>
</div>
<!--cart-->

<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="home">Home</a></li>
       <!--  -->
       @foreach($subsub as $cat)
       <li class="grid"><a class="color2" href="#">{{ $cat->category->name}}</a>
        <div class="megapanel">
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>...</h4>
                <ul>
                  <li><a href="products">{{ $cat->name}}</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col2"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
          </div>
            </div>
        </li>
       @endforeach
  		</ul>
  		<div class="search">
    		<form>
      		<input type="text" value="" placeholder="Search...">
      		<input type="submit" value="">
    		</form>
  	  </div>
  			 <div class="clearfix"></div>
  		 </div>
  	  </div>
</div>
