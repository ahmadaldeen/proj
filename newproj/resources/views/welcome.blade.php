<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Four Boxes Slideshow | Demo 1</title>
		<meta name="description" content="Four Boxes Slideshow: Recreating the background image slideshow seen on Atelier Serge Thoroval's website" />
		<meta name="keywords" content="background slideshow, boxes, background image, four panels, css, tutorial" />
		<meta name="author" content="Codrops" />


    </head>
		<!-- Font Awesome Icons -->
		{!! Html::style("show/vendor/fontawesome-free/css/all.min.css") !!}
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

		<!-- Plugin CSS -->
		{!! Html::style("show/vendor/magnific-popup/magnific-popup.css") !!}

		<!-- Theme CSS - Includes Bootstrap -->
		{!! Html::style("show/css/creative.min.css") !!}



      {!! Html::style("slider/css/normalize.css") !!}
      {!! Html::style("slider/css/demo.css") !!}
      {!! Html::style("slider/css/component.css") !!}


		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
		 {!! Html::script("slider/js/modernizr.custom.js") !!}
		 <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		 {!! Html::style("filter/css/style.css") !!}

		 <style>
		 .h { margin:150px auto 60px auto; text-align:center;}
		 </style>


<style>
#gallery {overflow: hidden;
  margin-bottom: 5%;

 }
 .hed {
	 background-color: none
 }
</style>
	</head>
	<body>

		  <!-- Navigation -->
		  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		    <div class="container">
		      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
		      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto my-2 my-lg-0">
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="#about">About</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link js-scroll-trigger" href="{{Route('show.show')}}">Parfun</a>
		          </li>
		        </ul>
		      </div>
		    </div>
		  </nav>
				<!-- /container -->
		<div class="container">

			<!-- Top Navigation -->
			<div id="boxgallery" class="boxgallery" data-effect="effect-1">

				 @foreach ($p as $ph)
				 		<div class="panel"><img src="{{url($ph->path)}}" alt="Image 1"/><header class="codrops-header hed ">
							<h1 style="color:#fff">{{$ph->imagHeader}}<span>{{$ph->imagContant}}</span></h1>
						</header></div>
			  @endforeach

			</div>
		</div>
		<!-- /container -->

    <!-- start filter -->
    <h1 class="h">Image Gallery Filter Plugin Demo</h1>
    <div id="buttons"></div>

			<!-- Portfolio Section -->
			<section id="portfolio">
				<div class="container-fluid p-0">
					<div class="row no-gutters">
			@foreach ($pr as $per)
						<div class="col-lg-4 col-sm-6 div"  data-tags="{{$per->type}}" alt="Alt 1" >

						  	<a  style="margin-top: 1%;    margin-left: 1%;"  class="portfolio-box" href="{{url('filter/' . $per->path)}}">
								<img class="img-fluid " src="{{url('filter/' . $per->path)}}" alt="">


								<div class="portfolio-box-caption p-3 img-fluid">
									<div class="project-category text-white-50">
										{{ "the name of this parum is : " . $per->name}}
									</div>
									<div class="project-name">
										{{"the price is: " .$per->price}}
									</div>
									<div class="project-category text-white-50">
										{{$per->content}}
									</div>
								</div>
							</a>
						</div>
			@endforeach
		</div>
	</div>
						</section>

	  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    {!! Html::script("filter/js/filter-tags.js") !!}

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <!-- end filter  -->
<!-- last news section -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script defer src="lastnews/owl.carousel.min.js"></script>
	{!! Html::style("lastnews/ln.css") !!}
	{!! Html::script("lastnews/owl.carousel.min.js") !!}
	<div class="demo">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-offset-3">
								  <div id="testimonial-slider" class="owl-carousel">

                    <div class="testimonial">
                        <div  class="pic">
                            <img id="pec" src="{{url('filter/' . $per->path)}}" alt="">
                        </div>
                        <h3 id="h" class="testimonial-title">	{{ "|  |  معلومة عطرية  |  |"}}</h3>
                        <small id="s" class="post"></small>
                        <p id="p" class="description">
													{{$pr[0]->content}}
                        </p>
                    </div>


  </div>
</div>
</div>
</div>
</div>

<!-- start footer -->
	{!! Html::style("footer/css/demo.css") !!}
	{!! Html::style("footer/css/footer-distributed-with-address-and-phones.css") !!}
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<footer class="footer-distributed">

		<div class="footer-left">

			<h3>Company<span>logo</span></h3>

			<p class="footer-links">
				<a href="#">Home</a>
				·
				<a href="#">Blog</a>
				·
				<a href="#">Pricing</a>
				·
				<a href="#">About</a>
				·
				<a href="#">Faq</a>
				·
				<a href="#">Contact</a>
			</p>

			<p class="footer-company-name">Company Name &copy; 2015</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>21 Revolution Street</span> Paris, France</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+1 555 123456</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@company.com">support@company.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the company</span>
				Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
			</p>

			<div class="footer-icons">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

		</div>

	</footer>
<!-- end footer -->

{!! Html::script("show/vendor/jquery/jquery.min.js") !!}

{!! Html::script("show/vendor/bootstrap/js/bootstrap.bundle.min.js") !!}

<!-- Plugin JavaScript -->
{!! Html::script("show/vendor/jquery-easing/jquery.easing.min.js") !!}

{!! Html::script("show/vendor/magnific-popup/jquery.magnific-popup.min.js") !!}

<!-- Custom scripts for this template -->
{!! Html::script("show/js/creative.min.js") !!}




    {!! Html::script("slider/js/classie.js") !!}
    {!! Html::script("slider/js/boxesFx.js") !!}

		<script>
			new BoxesFx( document.getElementById( 'boxgallery' ) );
		</script>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
		</script>
		<script>
		setInterval(function()
		{
			$.ajax({
								 type:'GET',
								 url:'/a',
								 success:function(data) {
										$("#p").html(data.msg[0].cont);

								 }
							});
		}, 3000); //10000 milliseconds = 10 seconds
		</script>
	</body>
</html>
