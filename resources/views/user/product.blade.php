<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="Themefisher.com">

  <title>Fit-Center</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('user/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="{{ asset('user/plugins/icofont/icofont.min.css')}} ">
  <!-- Themify Css -->
  <link rel="stylesheet" href="{{ asset('user/plugins/themify/css/themify-icons.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('user/plugins/animate-css/animate.css')}}">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="{{ asset('user/plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('user/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('user/plugins/slick-carousel/slick/slick-theme.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('user/css/style.css')}}">

</head>
<body>

<!-- Header Start --> 


<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
	  <a class="navbar-brand" href="/uindex">
	  		<h2 class="text-white text-capitalize"></i>Fit<span class="text-color">Center</span></h2>
	  </a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid" aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-view-list"></span>
	  </button>
  
	  <div class="collapse text-center navbar-collapse" id="navbarsid">
		<ul class="navbar-nav mx-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="/uindex">Home <span class="sr-only">(current)</span></a>
		  </li>
		   <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
				<ul class="dropdown-menu  text-center" aria-labelledby="dropdown03">
				  <li><a class="dropdown-item" href="/uproduct">Helth product</a></li>
				  <li><a class="dropdown-item" href="/uequipment">Gym Equipment</a></li>
				  <li><a class="dropdown-item" href="/udoctor">Doctor</a></li>
				</ul>
		  </li>
		   <li class="nav-item"><a class="nav-link" href="/upricing">Memebership</a></li>
		   <li class="nav-item"><a class="nav-link" href="/ucontact">Contact</a></li>
		   <li class="nav-item"><a class="nav-link" href="/uabout">About Us</a></li>
		   <li>
			   <form action="{{url('/search')}}" method="POST"  role="search">
			   {{ csrf_field() }}

			   <input type="text" name="q" placeholder="search product">
			   <input type="submit" name="submit" value="search">
			   </form>
		   </li>
		</ul>
		<!--<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
		  <a href="/ucart"><h3 class="text-color mb-0"><i class="ti-shopping-cart mr-2"></i>Cart</h3></a>
		</div>--> 
		<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
		  <a href="tel:9104721172"><h3 class="text-color mb-0"><i class="ti-mobile mr-2"></i>9104721172</h3></a>
		</div>
	  </div>
	</div>
</nav>


<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
          <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="/uindex" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a></li>
          </ul>
           <h1 class="text-lg text-white mt-2">Health Product</h1>
      </div>
    </div>
  </div>
</section>

<!-- Section Blog start -->
<section class="section blog bg-gray">
	<div class="container">
		<div class="row">
		@foreach($data as $value)

			<div class="col-lg-4 col-md-6">

	<article class="card border-0 rounded-0 mb-4">
		<img src="{{url('uploads/'.$value->image)}}" class="img-fluid">

		<div class="mt-3 px-4 py-3 ">
			<h4 class="mb-3 font-secondary">{{ $value->productname }}</h4>
			<div class="blog-post-meta text-capitalize mb-2">
				<span class="post-meta date-meta mr-2">
				<i class="ti-calendar mr-2"></i>{{ $value->expireydate }}</span> 

				<span class="post-meta author">expiry Date</span>
			</div>
			<p class="mb-4">{{ $value->description }}</p>
			<p class="mb-6">{{ $value->price }} RS</p>

			<a href="/checkoutform/{{$value->id}}" class="btn btn-main">Buy now</a>
		</div>
	</article>

</div>
@endforeach





		</div>

		
	</div>
</section>
<!-- Section Blog End -->


<!-- footer Start -->
<footer class="footer bg-black-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
				<h2 class="text-white mb-4">FitCenter</h2>
				<p>Step up your fitness Challange with us.</p>

				<p>We offer more than 35 group exercis, aerobic classes each week.</p>
			</div>
			

			<div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
				<div class="footer-widget recent-blog">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Our Moto</h4>
					<div>
						<p class="text-sm mt-2 text-white-50">Make life healthy.</p>
					</div>
					<div class="mt-4">
						<p class="text-sm mt-2 text-white-50">Very Professional Club and coaches</p>
					</div>

				</div>
			</div>
			<div class="col-lg-2 col-md-5 mb-5 mb-lg-0">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
					<ul class="list-unstyled footer-menu lh-40 mb-0">
					<li><a href="/uabout"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
						<li><a href="/uproducts"><i class="ti-angle-double-right mr-2"></i>products</a></li>
					

						<li><a href="/upricing"><i class="ti-angle-double-right mr-2"></i>Membership</a></li>
						<li><a href="/ucontact"><i class="ti-angle-double-right mr-2"></i>Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-5">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Home location</h4>
					<p>FitCenter, Praladnagar Road, 
					SG Highway, Ahmedabad-380051 </p>
					<span class="text-white">9104721172</span>
					<span class="text-white">nisuprajapati@gmail.com</span>
				</div>
			</div>
		</div>

		<div class="row align-items-center mt-5 px-3 bg-black mx-1">
			<div class="col-lg-4">
				<p class="text-white mt-3">FitCenter © 2019 , Project By <a href="https://themefisher.com/" class="text-color">LJ Students</a></p>
			</div>
			<div class="col-lg-6 ml-auto text-right">
				<ul class="list-inline mb-0 footer-socials">
					<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
					<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://github.com/themefisher/"><i class="ti-github"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{ asset('user/plugins/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('user/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('user/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!--  Magnific Popup-->
    <script src="{{ asset('user/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script src="{{ asset('user/plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    

    <script src="{{ asset('user/js/script.js')}}"></script>

  </body>
  </html>