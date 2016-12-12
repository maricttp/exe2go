<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Healthcare Application Development | Vicert</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel='shortcut icon' href='./local/resources/assets/img/favicon.ico' type='image/x-icon'/ >
	<link rel="stylesheet" href="./local/resources/assets/css/app.css" />
	<link rel="stylesheet" type="text/css" href="./local/resources/assets/css/header.css" />
	<link rel="stylesheet" type="text/css" href="./local/resources/assets/css/footer.css" />
	<link rel="stylesheet" type="text/css" href="./local/resources/assets/css/owl.carousel.css" />
 	<script type="text/javascript" src="./local/resources/assets/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/site.js"></script>
</head>
<body>
	<header class="transperent">
		<div class="box">
			<div class="logo-img">
				<!-- @if ($active == "careers") -->
							<!-- 	@else
					<img src="./local/resources/assets/img/imglogowhite.png" />
				@endif -->
				<a href="{{url('/')}}">
			 		<img src="./local/resources/assets/img/imglogoblack.png" />
		 		</a>
			</div>
			<nav>
				<ul>
					<li <?= (($active == "home") ? ' class="active-link"' : '') ?>><a href="{{ url('/') }}">Home</a></li>					
					<li <?= (($active == "expertise") ? ' class="active-link"' : '') ?>><a href="{{ url('/expertise') }}">Expertise</a></li>
					<li <?= (($active == "results") ? ' class="active-link"' : '') ?>><a href="{{ url('/results') }}">Results</a></li>
					<li <?= (($active == "about") ? ' class="active-link"' : '') ?>><a href="{{ url('/about') }}">About</a></li>
					<li <?= (($active == "careers") ? ' class="active-link"' : '') ?>><a href="{{ url('/careers') }}">Careers</a></li>
					<li><a href="http://blog.vicert.com/blog" target="_blank">Insight</a></li>
				</ul>
			</nav>
			<div class="header-button">
				<span>
					<i id="prva" class="bar"></i>
					<i class="bar"></i>
					<i id="druga" class="bar"></i>
				</span>
			</div>
		</div>	
		<!-- <div class="grey-line"></div> -->
	</header>

	@yield('content')

  	<footer>
  		<div class="img">  			
			<div class="title">Interested in creating with us?</div>
				<!-- <a href="">
					<div id="button" class="button">
						<span href="">Contact Us</span>
					</div> -->
				</a>
				<div class="icons">
					<div class="blue">
						<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>	
					<div class="blue">
						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>		
					<div class="blue">	
						<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>	
				</div>
				<div class="bottom">					
					<div class="address">						
						<p class="text">1355 Market Street, Suite 488<br>San Francisco, CA 94103, USA</p>
						<p class="number">+1.415.495.7700</p>
					</div>
					<div class="address logo">						
						<p class="logo"><img src="./local/resources/assets/img/logoimg.png">Copyright &#169;2016</p>
					</div>							
				</div>
			</div>
		</footer>
  
	<!-- Scripts 

	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
</body>
</html>

