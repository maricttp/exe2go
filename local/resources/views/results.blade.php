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
				<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_SgMART.pdf">
					<img src="./local/resources/assets/img/results/img_project11.jpg">	
					<span class="imag-opacity">
						<div class="project-description">
							<p>Maintenance and Renewal Activities Web App for Employer Groups</p>
							<p>R&D Project</p>
						</div>	
					</span>
				</a>
			</div>
			<div class="square">
				<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_Streams.pdf">
					<img src="./local/resources/assets/img/results/img_project2a.jpg">
					<span class="imag-opacity">				
						<div class="project-description">
								<p>Patient Monitoring Mobile App for Clinicians</p>
								<p>R&D Project</p>
						</div>
					</span>	
				</a>
			</div>
			<div class="square">		
				<a target="_blank" href="./local/resources/assets/pdf/Doc - Vicert Digital Health Map.pdf">					
					<img src="./local/resources/assets/img/results/img_project3.jpg">
					<span class="imag-opacity">
						<div class="project-description">	
							<p>Digital Health Map</p>
							<p>R&D Project</p>
						</div>
					</span>
				</a>
			</div>
		</div>
		<div class="row-second">
			<div class="square">
				<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_FAP.pdf">
					<img src="./local/resources/assets/img/results/img_project4.jpg">
					<span class="imag-opacity">		
						<div class="project-description">
							<p>Find a Provider App</p>
							<p>R&D Project</p>
						</div>
					</span>	
				</a>
			</div>
			<div class="square">
				<a target="_blank" href="http://blog.vicert.com/blog/devops-vicert-lessons-learned">
					<img src="./local/resources/assets/img/results/blog_4.jpg">					
					<span class="imag-opacity">
						<div class="project-description">
							<p>DevOps @ Vicert – Lessons Learned</p>
							<p>R&D Project</p>
						</div>
					</span>
				</a>
			</div>
			<div class="square">	
				<a target="_blank" href="http://blog.vicert.com/blog/how-to-integrate-multiple-wellness-devices-using-human-api">	
					<img src="./local/resources/assets/img/results/blog_2.jpg">
					<span class="imag-opacity">
						<div class="project-description">	
							<p>How to integrate multiple Wellness devices using Human APIy</p>
							<p>R&D Project</p>
						</div>
					</span>	
				</a>
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript" src="./local/resources/assets/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/home.js"></script>
	
@endsection