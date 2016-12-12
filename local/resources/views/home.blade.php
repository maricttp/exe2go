@extends('app')


<head>
	<link href="./local/resources/assets/css/home.css" rel="stylesheet">

</head>

@section('content')

	<div class="cover">
		<div class="cover-img">
	            <img data-u="image" src="./local/resources/assets/img/home/imgherofirst1.jpg">
	            <div class="title" style="position: absolute; top: 40%; width: 100%; text-align: center; font-size: 47px; color: #ffffff; line-height: 60px;">We build Digital Health solutions</div>
	            <div class="subtitle" style="position: absolute; top: 45%; width: 100%; text-align: center; font-size: 23px; color: #ffffff;"><!-- Translating business requirements into digital health solutions --></div>
	            
        	 	<a id="arrow-slide" href="#who"><img class="arrow" src="./local/resources/assets/img/home/arrow.png"></a>
 	        <div data-u="loading" style="position: absolute; top: 0px; left: 0px; width: 1300px; height: 520px; z-index: 1000; display: none;">
	        	<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	        </div>
	    </div> 
		
	</div>
	<div id="who" class="who-we-are">			
		<div class="box">	
			<h2>We deliver quantum leap in time to market,<br> quality and cost effectiveness</h2>
			<div class="line"></div>
			<div class="subtitle">
				<h5>We work closely with our client's IT and Business organizations during the formative stages of the projects. We deploy nimble and specialized teams who have delivered over 300 DH solutions over the past 15 years. Our deep expertise in Software Development and Digital Health allows us to analyze, design and implement the solution in an iterative and client centric approach, thus offering unparalleled value for the money to our customers.</h5>
			</div>
			<div class="text-container">
				<div class="text">
					<h3>Product Development</h3>
					<h5>Through end-to-end development, Vicert enables you to solve the challenges of health tech.</h5>
				</div>
				<div class="text">
					<h3>Architecture and Design</h3>
					<h5>Value for money is fixing mistakes before they are made.</h5>
				</div>
				<div class="text">
					<h3>Technology Implementation</h3>
					<h5>We are enabling the digital health revolution, not just managing legacy system evolution.</h5>
				</div>
				<div class="text">
					<h3>System<br> Integration</h3>
					<h5>We help plug digital health solutions into the health tech ecosystem.</h5>
				</div>
			</div>		
		</div>
	</div>
	<div class="grey-line"></div>
	<div class="clients">
    	<div class="clients-box">
	        <h2>Clients & Partners</h2>
	        <div class="line"></div>
	        <div class="desc">
	        	<h5>We build Digital Health solutions for Health Tech product companies, Payers and Providers. Having worked with the Blues, Kaiser Permanente, as well as numerous product companies serving the health IT and Digital Health market we are used to working with both established and new players who seek nimble and specialized partners who can help them solve problems quickly and effectively.</h5>
			</div>
            <div class="logos">
                <img src="./local/resources/assets/img/logo/img_healthwize.jpg" alt="">
				<img src="./local/resources/assets/img/logo/img_ahip.png" alt="">
              	<img src="./local/resources/assets/img/logo/img_blue.png" alt="">
            	<img src="./local/resources/assets/img/logo/img_kaiser.png" alt="">
              	<img src="./local/resources/assets/img/logo/img_socialWellth.png" alt="">
             	<img src="./local/resources/assets/img/logo/sage-triumph-logo-grey.png" alt="">
             	<img src="./local/resources/assets/img/logo/logo-beacon-grey.png" alt="">
         	</div>
        </div>
    </div>
	<div class="projects">
			<div class="row-first">
				<div class="rectangle mobile">
					<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_SgMART.pdf">
						<div id="button" class="button">
							<span>View Project</span>
						</div>
					</a>
					<div class="imag-opacity"></div>
					<img class="desktop" src="./local/resources/assets/img/home/img_project1a.png">
					<img class="mobile" src="./local/resources/assets/img/home/img_project11.jpg">
						<div class="project-description">
							<p>R&D Project</p>
							<p>Maintenance and Renewal Activities Web App for Employer Groups</p>
						</div>						
				</div>
				<div class="square">
					<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_Streams.pdf">
						<div id="button" class="button">
							<span>View Project</span>
						</div>
					</a>
					<div class="imag-opacity"></div>
					<img class="desktop" src="./local/resources/assets/img/home/img_project2a.jpg">
					<div class="project-description">
							<p>R&D Project</p>
							<p>Patient Monitoring Mobile App for Clinicians</p>
						</div>		
				</div>				
			</div>
			<div class="row-second">
				<div class="square">
					<a target="_blank" href="./local/resources/assets/pdf/Doc - Vicert Digital Health Map.pdf">
						<div id="button" class="button">
							<span>View Project</span>
						</div>
					</a>
					<div class="imag-opacity"></div>					
					<img src="./local/resources/assets/img/home/img_project3.jpg">
					<div class="project-description">
							<p>R&D Project</p>
							<p>Digital Health Map</p>
					</div>		
				</div>
				<div class="square">
					<a target="_blank" href="./local/resources/assets/pdf/CaseStudy_FAP.pdf">
						<div id="button" class="button">
							<span>View Project</span>
						</div>
					</a>
					<div class="imag-opacity"></div>
					<img src="./local/resources/assets/img/home/img_project4.jpg">
					<div class="project-description">
							<p>R&D Project</p>
							<p>Find a Provider App</p>
					</div>	
				</div>
				<div class="square view-all">
					<a href="{{ url('/results') }}">
						<div id="button" class="button">
							<span>View All Projects</span>
						</div>
					</a>
					<div class="imag-opacity"></div>
					<img src="./local/resources/assets/img/home/img_viewAll.jpg">
					<div class="project-description last">
							<p>View All Projects</p>
					</div>		
				</div>
			</div>
		</div>
	<div class="blog-box">
		<div class="box">	
			<h2>Stay Synced</h2>
			<div class="line"></div>
			<h5>Here is our take on news, art, ideas, technology, the web, and things we like – join the discussion and don’t forget to subscribe to the feed.</h5>	
			<div class="owl-carousel">
				<div class="item">
				  	<img src="./local/resources/assets/img/home/blog_0.jpg" alt="">
				  	<div>
			  			<p>Sep 13, 2016</p>
			  			<p><a href="http://blog.vicert.com/blog/looking-for-the-next-big-digital-health-disruptors" target="_blank">Looking for the Next Big Digital Health Disruptors</a></p>
	    				<p>Every new healthcare app or fledgling technology is like a sunny window into the future...</p>
						<!-- <a href="http://blog.vicert.com/blog/looking-for-the-next-big-digital-health-disruptors" target="_blank">Read More...</a> -->
				  	</div>
			  	</div>
				<div class="item">
				  	<img src="./local/resources/assets/img/home/blog_1.jpg" alt="">
				  	<div>
			  			<p>Aug 18, 2016</p>
			  			<p><a href="http://blog.vicert.com/blog/faulty-code-carries-consequences-in-digital-health" target="_blank">Faulty Code Carries Consequences in Digital Health</a></p>
	    				<p>Developers and coders are a hot commodity and the boom in start-ups around digital health...</p>
						<!-- <a href="http://blog.vicert.com/blog/faulty-code-carries-consequences-in-digital-health" target="_blank">Read More...</a> -->
				  	</div>
			  	</div>
			  	<div class="item">
				  	<img src="./local/resources/assets/img/home/blog_4.jpg" alt="Owl Image">
				  	<div>
			  			<p>Aug 1, 2016</p>
			  			<p><a href="http://blog.vicert.com/blog/devops-vicert-lessons-learned" target="_blank">DevOps @ Vicert – Lessons Learned</a></p>
	    				<p>Through many years spent developing various applications, using various technologies and working with different clients...</p>
						<!-- <a href="http://blog.vicert.com/blog/devops-vicert-lessons-learned" target="_blank">Read More...</a> -->
				  	</div>
			  	</div>
			  	<div class="item">
				  	<img src="./local/resources/assets/img/home/blog_2.jpg" alt="">
				  	<div>
			  			<p> Jul 21, 2016</p>
			  			<p><a href="http://blog.vicert.com/blog/how-to-integrate-multiple-wellness-devices-using-human-api" target="_blank">How to integrate multiple Wellness devices using Human API</a></p>
	    				<p>In a recent project for one of our clients, we came across a need to gather data from multiple wellness devices...</p>
						<!-- <a href="http://blog.vicert.com/blog/how-to-integrate-multiple-wellness-devices-using-human-api" target="_blank">Read More...</a> -->
				  	</div>
			  	</div>
			  	<div class="item">
				  	<img src="./local/resources/assets/img/home/blog_5.jpg" alt="Owl Image">
				  	<div>
			  			<p>May 13, 2016</p>
			  			<p><a href="http://blog.vicert.com/blog/ehr-integration-challenges-and-solutions" target="_blank">EHR Integration - Challenges and Solutions</a></p>
	    				<p>The marriage between a hospital and its electronic medical records vendor may not always be loving and open....</p>
						<!-- <a href="http://blog.vicert.com/blog/ehr-integration-challenges-and-solutions" target="_blank">Read More...</a> -->
				  	</div>
			  	</div>
			  	<div class="item">
				  	<img src="./local/resources/assets/img/home/blog_3.jpg" alt="">
				  	<div>
			  			<p>Apr 14, 2016</p>
			  			<p><a href="http://blog.vicert.com/blog/11-patient-centered-digital-health-trends-in-2016" target="_blank">11 Patient-Centered Digital Health Trends in 2016</a></p>
	    				<p>Today’s healthcare leaders are faced with challenges in managing the financial health of their organizations...</p>
						<!-- <a href="http://blog.vicert.com/blog/11-patient-centered-digital-health-trends-in-2016" target="_blank">Read More...</a> -->
				  	</div>
			  	</div>
			</div>
		</div>
	</div>    
	<script type="text/javascript" src="./local/resources/assets/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/home.js"></script>
	
@endsection
