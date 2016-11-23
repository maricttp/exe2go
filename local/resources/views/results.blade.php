@extends('app')
<head>
	<link href="./local/resources/assets/css/results.css" rel="stylesheet">
</head>

@section('content')
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 520px; overflow: hidden; visibility: hidden; display:none;">
	    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 520px; overflow: hidden;">
	        <div data-p="225.00" style="display: none;"></div>
	   </div>
</div>
	<div class="project" >
		<div class="row-second">
			<div class="square">
				<div class="imag-opacity"></div>					
				<img src="./local/resources/assets/img/test/1.jpg">
				<div class="project-description">
						<p>Lorem ipsum dolor</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
					</div>		
			</div>
			<div class="square">
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/test/2.jpg">
				<div class="project-description">
						<p>Lorem ipsum dolor</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
					</div>		
			</div>
			<div class="square">		
				
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/test/3.jpg">
				<div class="project-description">							
					<p>Lorem ipsum dolor</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
				</div>		
			</div>
		</div>
		<div class="row-second">
			<div class="square">
				<div class="imag-opacity"></div>					
				<img src="./local/resources/assets/img/test/1.jpg">
				<div class="project-description">
						<p>Lorem ipsum dolor</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
					</div>		
			</div>
			<div class="square">
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/test/2.jpg">
				<div class="project-description">
						<p>Lorem ipsum dolor</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
					</div>		
			</div>
			<div class="square">					
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/test/3.jpg">
				<div class="project-description">							
					<p>Lorem ipsum dolor</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
				</div>		
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript" src="./local/resources/assets/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/home.js"></script>
	
@endsection