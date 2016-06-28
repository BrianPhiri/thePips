<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="{{url('about')}}">Who We Are</a></li>
					 <li><a href="{{url('contact')}}">Contact Us</a></li>
					<!--  <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Carrers</a></li> -->
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 @foreach($subsub as $cat)
				 <ul>
				 @foreach($cat->category as $sub)
					 <li><a href="{{url('products/category')}}/{{$sub->id}}">> {{$sub->name}}</a></li>
					 @endforeach
				 </ul>
				 @endforeach
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
 </div>
<div class="footer">
	 <div class="container">
		 <div class="store">
			 <ul>
			 </ul>
		 </div>
		 <div class="copywrite">
			 <p>Copyright © 2016 thePips <a href="/">thePips</a></p>
		 </div>
		 </div>
	 </div>
