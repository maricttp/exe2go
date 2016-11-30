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
					<img src="./local/resources/assets/img/results/img_project11.jpg">					
				<div class="project-description">
						<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_SgMART.pdf">					
							<p>Maintenance and Renewal Activities Web App for Employer Groups</p>
							<p>R&D Project</p>
						</a>	
					</div>		
			</div>
			<div class="square">
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/results/img_project2a.jpg">
				<div class="project-description">
					<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_Streams.pdf">
						<p>Patient Monitoring Mobile App for Clinicians</p>
						<p>R&D Project</p>
					</a>	
				</div>		
			</div>
			<div class="square">		
				
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/results/img_project3.jpg">
				<div class="project-description">	
					<a target="_blank" href="./local/resources/assets/pdf/Doc - Vicert Digital Health Map.pdf">						
						<p>Digital Health Map</p>
						<p>R&D Project</p>
					</a>	
				</div>		
			</div>
		</div>
		<div class="row-second">
			<div class="square">
				<div class="imag-opacity"></div>					
				<img src="./local/resources/assets/img/results/img_project4.jpg">
				<div class="project-description">
					<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_FAP.pdf">
						<p>Find a Provider App</p>
						<p>R&D Project</p>
					</a>	
				</div>		
			</div>
			<div class="square">
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/results/blog_4.jpg">
				<div class="project-description">
					<a target="_blank" href="http://blog.vicert.com/blog/devops-vicert-lessons-learned">
						<p>DevOps @ Vicert – Lessons Learned</p>
						<p>R&D Project</p>
					</a>	
				</div>		
			</div>
			<div class="square">					
				<div class="imag-opacity"></div>
				<img src="./local/resources/assets/img/results/blog_2.jpg">
				<div class="project-description">	
					<a target="_blank" href="http://blog.vicert.com/blog/how-to-integrate-multiple-wellness-devices-using-human-api">						
						<p>How to integrate multiple Wellness devices using Human APIy</p>
						<p>R&D Project</p>
					</a>	
				</div>		
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript" src="./local/resources/assets/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/home.js"></script>
	
@endsection