@extends('app')


<head>
	<link href="./local/resources/assets/css/home.css" rel="stylesheet">

</head>

@section('content')
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 520px; overflow: hidden; visibility: hidden;">
	    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
	        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	        <!-- <div style="position:absolute;display:block;background:url('./local/resources/assets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div> -->
	    </div>
	    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 520px; overflow: hidden;">
	        <div data-p="225.00" style="display: none;">
	            <img data-u="image" src="./local/resources/assets/img/home/imgherofirst.jpg" />
	            <div style="position: absolute; top: 25%; left: 30px; left: 50%; width: 440px; height: 60px;margin-left:-220px;font-size: 40px; color: #ffffff; line-height: 60px;">We Analyze, Design and</div>
	            <div style="position: absolute; top: 35%; left: 50%; width: 630px; height: 50px;margin-left:-306px; font-size: 40px; color: #ffffff;">Implement Digital Health Solutions</div>
	            <div style="position: absolute; top: 45%; left: 50%; width: 590px; height: 30px;margin-left:-273px; font-size: 20px; color: #ffffff;">Translating business requirements into digital health solutions</div>
        	 	<a href=""><div id="button" class="button"><span>Learn More</span></div></a>
 	        </div>
	    <!--     <div data-p="225.00" style="display: none;">
	            <img data-u="image" src="./local/resources/assets/img/home/1.jpg" />
	        </div>
	        <div data-p="225.00" style="display: none;">
	            <img data-u="image" src="./local/resources/assets/img/home/2.jpg" />
	        </div> -->
	    </div>
	    <!-- Bullet Navigator 
	    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
	        <div data-u="prototype" style="width:16px;height:16px;"></div>
	    </div>-->
	    <!-- Arrow Navigator -->
	    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
	    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
	    <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
	</div>
	<div class="who-we-are">			
		<div class="box">	
			<h2>Who We Are</h2>
			<div class="line"></div>
			<div class="text">
				<h3>We work exclusively in<br> Digital Health</h3>
				<h5>We have 15 years exclusively in the industry, we were digital health before it was called digital health. We don’t develop our engineers in healthcare so we can sell them into the finance sector. People join Vicert because they want to take part in the sweeping changes facing the healthcare industry today. HIPAA obamacare, meaningful use, we speak your language.</h5>
			</div>
			<div class="text">
				<h3>We work with Disruptors and the Establishment</h3>
				<h5>We work with newcomers who need our help building their tech solutions that allow them to meet their business goals.We also work with established players who seek nimble and specialized partners who can help them deliver value quickly and effectively (big partners can not help them with that).</h5>
			</div>
			<div class="text">
				<h3>We Cross Pollinate<br>__</h3>
				<h5>By helping established healthcare players build their DH solution we learn about the pain points and challenges they have. We are often able to leverage that knowledge with the newcomers as they rarely understand and can see what is over the hill for them. On the other hand, we learn how newcomers solve their challenges and can bring that experience back to the established players who would not think and act in that way.</h5>
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
							<p>Case Study</p>
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
					<img class="mobile" src="./local/resources/assets/img/home/img_project2.jpg">
					<div class="project-description">
							<p>Case Study</p>
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
							<p>Case Study</p>
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
							<p>Case Study</p>
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
    <div class="clients">
    	<div class="clients-box">
	        <h2>Clients</h2>
	        <div class="line"></div>
	        <div class="desc">
	        	<h5>Having worked with the Blues, Kaiser Permanente, as well as numerous product companies serving the health IT and Digital Health market we are used to working with both established and new players who seek nimble and specialized partners who can help them solve problems quickly and effectively.</h5>
			</div>
            <div class="logos">
                <img src="./local/resources/assets/img/logo/img_healthwize.jpg" alt="">
             	<img src="./local/resources/assets/img/logo/img_blue.png" alt="">
              	<img src="./local/resources/assets/img/logo/img_socialWellth.png" alt="">
				<img src="./local/resources/assets/img/logo/img_ahip.png" alt="">
            	<img src="./local/resources/assets/img/logo/img_kaiser.png" alt="">
             	<img src="./local/resources/assets/img/logo/img_healthNet.png" alt="">
             	<img src="./local/resources/assets/img/logo/sage-triumph-logo-grey.png" alt="">
             	<img src="./local/resources/assets/img/logo/logo-beacon-grey.png" alt="">
         	</div>
        </div>
    </div>




	<script type="text/javascript" src="./local/resources/assets/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/home.js"></script>
	
@endsection
