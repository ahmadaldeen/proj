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
      {!! Html::style("slider/css/normalize.css") !!}
      {!! Html::style("slider/css/demo.css") !!}
      {!! Html::style("slider/css/component.css") !!}
      {!! Html::style("slider/css/bootstrap/css/bootstrap.min.css") !!}


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
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/InlineAnchorStyles/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19242"><span>Back to the Codrops Article</span></a></span>
			</div>
			<div id="boxgallery" class="boxgallery" data-effect="effect-1">
				<div class="panel"><img src="slider/img/1.jpg" alt="Image 1"/></div>
				<div class="panel"><img src="slider/img/2.jpg" alt="Image 2"/></div>
				<div class="panel"><img src="slider/img/3.jpg" alt="Image 3"/></div>
				<div class="panel"><img src="slider/img/4.jpg" alt="Image 4"/></div>
			</div>
			<header class="codrops-header hed">
				<h1 style="color:#fff">Four Boxes Slideshow <span>Recreating the background image slideshow seen on <a href="http://www.atelier-serge-thoraval.com/en/">Atelier Serge Thoroval's website</a></span></h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html">Serge Thoroval</a>
					<a href="index2.html">Lateral</a>
					<a href="index3.html">Fall</a>
				</nav>
			</header>
		</div><!-- /container -->

    <!-- start filter -->


    <h1 class="h">Image Gallery Filter Plugin Demo</h1>

        <div id="buttons"></div>

        <div id="gallery" class = "g">

          <img src="https://picsum.photos/600/450?image=776" data-tags="Blog" alt="Alt 1" />


          <img src="https://picsum.photos/600/450?image=777" data-tags="Health & Beauty" alt="Alt 2" />


            <img src="https://picsum.photos/600/450?image=755" data-tags="Business" alt="Alt 3" />


            <img src="https://picsum.photos/600/450?image=778" data-tags="Blog,Health & Beauty" alt="Alt 4" />


            <img src="https://picsum.photos/600/450?image=764" data-tags="Business" alt="Alt 5" />

            <img src="https://picsum.photos/600/450?image=526" data-tags="Blog,Shop" alt="Alt 6" />

            <img src="https://picsum.photos/600/450?image=668" data-tags="Blog,Megazine" alt="Alt 7" />

            <img src="https://picsum.photos/600/450?image=660" data-tags="Blog" alt="Alt 8" />

            <img src="https://picsum.photos/600/450?image=659" data-tags="Blog,Portfolio" alt="Alt 9" />

            <img src="https://picsum.photos/600/450?image=513" data-tags="Business" alt="Alt 10" />

            <img src="https://picsum.photos/600/450?image=535" data-tags="Shop" alt="Alt 11" />

            <img src="https://picsum.photos/600/450?image=531" data-tags="Shop,Blog" alt="Alt 12" />


        </div>

	  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    {!! Html::script("filter/js/filter-tags.js") !!}
    {!! Html::script("filter/js/filter.js") !!}
		{!! Html::script("filter/js/filter.min.js") !!}
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


    {!! Html::script("slider/js/classie.js") !!}
    {!! Html::script("slider/js/boxesFx.js") !!}

		<script>
			new BoxesFx( document.getElementById( 'boxgallery' ) );
		</script>
	</body>
</html>
