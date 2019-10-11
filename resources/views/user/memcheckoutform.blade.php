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
	  <a class="navbar-brand" href="/home/">
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
			 <li class="nav-item"><a class="nav-link" href="/ufitnesstips">Fitness Tips</a></li>
		   <li class="nav-item"><a class="nav-link" href="/upricing">Memebership</a></li>
       <li class="nav-item"><a class="nav-link" href="/ublog-single">Blog</a></li>
		   <li class="nav-item"><a class="nav-link" href="/ucontact">Contact</a></li>
		   <li class="nav-item"><a class="nav-link" href="/uabout">About Us</a></li>
		</ul>

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
          
           <h5 class="text-lg text-white mt-2">Enter your delivery details below</h5>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form section">
    <div class="container">
       
    
         <div class="row justify-content-center pb-5">
            <div class="col-lg-9 text-center">
            @foreach($data as $value)
                    <form method="POST" action="{{url('membership',['p_id'=>$value->p_id])}}" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <h4 class="mb-3 font-secondary">{{ $value->name }}</h4>
                    <p class="mb-3">{{ $value->price }} RS</p>
                    <div class="form-row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="phone" type="number" class="form-control" placeholder="Enter phone number" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="apartment" type="text" class="form-control" placeholder="enter house number and apartment" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                     <select  name="city" id="cityname" type="text" class="form-control"  placeholder="select your city re" required>
                                               
        
                                            <option value="Ahmedabad" type=>Ahmedabad</option>
        
                                             </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input name="area"  list='area' type="text" class="form-control" placeholder="enter your area" required>
            
                                            <datalist id='area'>
                                                       
                                                <option>Ankur</option>
                                                <option></option>Shashtrinagr</option>
                                                <option>Naranpura</option>
                                                <option>Ghatlodiya</option>
                                                <option>Shivranjani</option>
                                                <option value="Memnagar">Memnagar</option>
                                                <option value="Sarkhej">Sarkhej</option>
                                                <option value="Nehrunagr">Nehrunagr</option>
                                                <option value="Commerce Six ROAD">Commerce Six ROAD</option>
            
                                                <option value="Other">Other</option>
            
                                            </datalist>       
            
                                                </div>
                                    </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="landmark" type="text" class="form-control" placeholder="Enter Landamrk" required>
                            </div>
                        </div>

                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input name="pincode" type="number" class="form-control" placeholder="Enter pincode" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="form-group">
                                <input  name="disease" list="p" type="text" class="form-control" placeholder="select if you have any disease" required>
                                          
                                               <datalist id='p'>

                                       <option>Heart Disease</option>
                                       <option>Diabetes</option>
                                       <option>Back Pain</option>
                                       <option>Asthama</option>
                                       <option>Arthritis</option>
                                       <option>None</option>

                                       
                                               </datalist>
                                        </div>
                               </div>

                               <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input name="age" type="text" class="form-control" placeholder="Enter Age" required>
                                    </div>
                                </div>

                           </div>

                           
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <h5>Note: Please select none if you dont have any disease</h5>

                            <div class="text-center">
                                <button class="btn btn-main mt-3 " type="submit">Regsiter Membership</button>
                            </div>
                        </div>
                    </div>
                   
                </form>
                @endforeach

            </div>
        </div>
    </div>


    <div class="google-map position-relative mt-5">
        <div id="map"></div>
    </div>


    <div class="container mt--170">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
                    <i class="ti-mobile mb-3 text-lg text-color"></i>
                    <span>Call us</span>
                    <p class="lead text-black mb-0 mt-3">9104721172</p>
                    <p class="lead">9:00 am - 17:00 pm</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
                    <i class="ti-email mb-3 text-lg text-color"></i>
                    <span>Email at</span>
                    <p class="lead text-black mt-3 mb-0">nisurajapati6974@gmail.com</p>
                    <p class="lead text-black ">fitcenter28619@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card rounded-0 border-0 shadow-sm text-center py-5 px-4 contact-info">
                    <i class="ti-home mb-3 text-lg text-color"></i>
                    <span>Location</span>
                    <p class="lead text-black mt-3">FitCenter,Praladnagar Road,SG Hig,Ahmedabad-51</p>
                </div>
            </div>
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
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Recents Posts</h4>
					<div>
						<a href="/ublog-single"class="text-white">A great Start to a healthy life.</a>
						<p class="text-sm mt-2 text-white-50">30 february 2019</p>
					</div>
					<div class="mt-4">
						<a href="/ublog-single"class="text-white">Very Professional Club and coaches.</a>
						<p class="text-sm mt-2 text-white-50">30 february 2019</p>
					</div>

				</div>
			</div>
			<div class="col-lg-2 col-md-5 mb-5 mb-lg-0">
				<div class="footer-widget">
					<h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
					<ul class="list-unstyled footer-menu lh-40 mb-0">
						<li><a href="/uabout"><i class="ti-angle-double-right mr-2"></i>About Us</a></li>
						<li><a href="/uservice"><i class="ti-angle-double-right mr-2"></i>Services</a></li>
						<li><a href="/upricing"><i class="ti-angle-double-right mr-2"></i>Membership</a></li>
						<li><a href="/ucourse"><i class="ti-angle-double-right mr-2"></i>Courses</a></li>
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