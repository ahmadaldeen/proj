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

      {!! Html::style("css/normalize.css") !!}
      {!! Html::style("css/demo.css") !!}
      {!! Html::style("css/component.css") !!}
      {!! Html::style("web/vendor/bootstrap/css/bootstrap.min.css") !!}
      {!! Html::style("web/vendor/bootstrap/css/bootstrap.min.css") !!}


		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,600' rel='stylesheet' type='text/css'>
		 {!! Html::script("js/modernizr.custom.js") !!}

	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/InlineAnchorStyles/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19242"><span>Back to the Codrops Article</span></a></span>
			</div>
			<div id="boxgallery" class="boxgallery" data-effect="effect-1">
				<div class="panel"><img src="img/1.jpg" alt="Image 1"/></div>
				<div class="panel"><img src="img/2.jpg" alt="Image 2"/></div>
				<div class="panel"><img src="img/3.jpg" alt="Image 3"/></div>
				<div class="panel"><img src="img/4.jpg" alt="Image 4"/></div>
			</div>
			<header class="codrops-header">
				<h1>Four Boxes Slideshow <span>Recreating the background image slideshow seen on <a href="http://www.atelier-serge-thoraval.com/en/">Atelier Serge Thoroval's website</a></span></h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html">Serge Thoroval</a>
					<a href="index2.html">Lateral</a>
					<a href="index3.html">Fall</a>
				</nav>
			</header>
		</div><!-- /container -->
    {!! Html::script("js/classie.js") !!}
    {!! Html::script("js/boxesFx.js") !!}

		<script>
			new BoxesFx( document.getElementById( 'boxgallery' ) );
		</script>
	</body>
</html>
