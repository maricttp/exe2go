@extends('app')

<head>
	<link href="./local/resources/assets/css/expertise.css" rel="stylesheet">
</head>
@section('content')
<div class="expertise-banner">
	<img src="./local/resources/assets/img/expertise/img_hero.png" />
	<div class="title-box">
		<div class="title">expertise</div>
	</div>
</div>
<div class="contnet">
	<div class="box">
		<!-- <h2>Vicert’s Key Differentiators</h2>
		<div class="line"></div>
		<div class="first">
			<h3>Translating Business Requirements Into Tech Solutions</h3>	
			<h5>Through a deep process of analysis and design, we take the time to learn about the pain points and challenges our clients are facing in order to help them translate their business requirements into technical solutions. By speaking the language of both business and Health IT, and through leveraging our broad domain knowledge we are able to move beyond blindly writing code based on a specification and we suggest the best technical solution for specific business problems.</h5>
		</div>
		<div class="second">
			<h3>Risk Migration Trough Implementation Excellence</h3>
			<h5>We engage with small and nimble teams that have deep experience and expertise in IT and Digital Health to analyse and design solutions in an iterative and client centric manner. With 15 years in Digital Health, Vicert is able to provide a very high degree of certainty for its clients.  That is the certainty of delivering a solution on time and on budget, and with a best in class quality level.</h5>
		</div>
		<div class="second">
			<h3>Digital Health Domain Expertise & Experience</h3>	
			<h5>By helping established healthcare players build their Digital Health solutions for the past 15 years, we have learned about our customers’ pain points and the challenges the industry faces. We are often able to leverage that knowledge with both the disruptors as well as the established players in the industry to come up with innovative solutions to a variety of industry problems.</h5>
		</div> -->
		<h2>Types of Solutions we offer</h2>
		<div class="line"></div>
		<div class="text-container">
				<div class="text">
					<h3>Product<br> Development</h3>
					<h5>By partnering with your leadership team we help conceptualize, design and develop products that address your business needs not just your tech requirements.</h5>
				</div>
				<div class="text">
					<h3>Architecture<br> and Design</h3>
					<h5>We invest the time and resources upfront to understand the full scope of your requirements and architect a plan that helps you manage your technology now and into the future.</h5>
				</div>
				<div class="text">
					<h3>Technology<br> Implementation</h3>
					<h5>Through the utilization of the latest digital health technologies, we deliver solutions from inception to production and stand beside you throughout the journey. </h5>
				</div>
				<div class="text">
					<h3>System<br>	 Integration</h3>
					<h5>We bring together the disparate components of your digital infrastructure into a cohesive system and ensure that they work together seamlessly to meet your objectives. </h5>
				</div>
			</div>	
	</div>
</div>
<div class="map">
			<div class="box">
				<h2>Digital Health Map</h2>
				<div class="line"></div>
				<h5>Areas that our research, expertise and projects cover:</h5>
				<div class="payers">
					<p class="title">Payers</p>
					<div class="line-img">
						<div class="img"></div>
						<div class="line-color"></div>
				 	</div>
					<p class="text">Claims<br>Eligibility<br>Appeals</p>
					<p class="text">Plans<br>Provider Networks<br>Payments</p>
					<p class="text">Portals<br>Fraud Detection<br>HIPAA/PHI</p>
				</div>
				<div class="preventive">
					<div class="column first">
						<p class="title">Preventive<br>Health Care<p>
						<div class="line-img">
							<div class="img"></div>
							<div class="line-color"></div>
				 		</div>	
						<div class="col">
					    	<p class="text">Payers<br>Wearables<br>IoT<br>Coaching - Mental Health<br>Care Management<br>Behavioral Change</p>	
					    	<div class="line-color"></div>
				    	</div>
				</div>
				    <div class="column second">
					    <p class="title">Disease<br>Management<p>
				    	<div class="line-img">
							<div class="img"></div>
							<div class="line-color"></div>
				 		</div>
					    <p class="text">Genomics<br>Clinical (Big) Data<br>Community<br>Patient self-management<br>Gaming<br>Mobile Applications<br>Collaborative applications<br>Tracking and monitoring systems</p>
					</div>
					<div class="column third">
				    <p class="title">Health Care<br>Provisioning<p>
			    	<div class="line-img">
						<div class="img"></div>
						<div class="line-color"></div>
			 		</div>
				    <p class="text">Providers<br>Pharmacy</p>
					</div>
				</div>	
				<div class="infrastructure">
					<p class="title">Infrastructure</p>
					<div class="line-img">
						<div class="img"></div>
						<div class="line-color"></div>
				 	</div>
					<p class="text">Platform as a Service<br>Backend as a Service<br>Health Care Integration<br>Payment Infrastructure</p>
					<p class="text">Patient CRM<br>HIPAA Compliance<br>Big Data</p>
				</div>
				<div class="regulations">
					<p class="title">Regulations<br>& standards</p>
					<div class="line-img">
						<div class="img"></div>
						<div class="line-color"></div>
				 	</div>
					<p class="text">Regulations<br>Standards<br>Regulatory Bodies<br>Groups</p>
				</div>
			</div>
		</div>
		<!-- prvobitno resenje za tech -->
<!-- <div class="white-box">
	<div class="box">
		<h2>Technology</h2>
		<div class="line"></div>
	</div>
	<div class="technology-img" >
		<p class="num">01</p>
		<h3>Analysis and Design</h3>
		<h5>We work closely with our client's IT and Business organization during the formative stages of the projects. We deploy nimble and specialized teams with deep experience and expertise in IT and Digital Health to analyse and design the solution in an iterative and client centric approach. By untangling knotty questions early on, we can create clear and actionable requirements that  the same team will implement quickly and accurately.</h5>
	</div>
</div>

<div class="gray-box">
	<div class="app">
		<div class="develop-img" >
			<div class="text-box"> 
				<p class="num">02</p>
				<h3>App Development</h3>
				<h5>We work closely with our client's IT and Business organization during the formative stages of the projects. We deploy nimble and specialized teams with deep experience and expertise in IT and Digital Health to analyse and design the solution in an iterative and client centric approach. By untangling knotty questions early on, we can create clear and actionable requirements that  the same team will implement quickly and accurately.</h5>
			</div>
		</div>
	</div>
	<div class="app-img">
		<div class="img"></div>
	</div>
</div>

<div class="white-box second">
	<div class="delivery-img" >
		<p class="num">03</p>
		<h3>Continuous Integration & Delivery</h3>
		<h5>Through the years spent developing various applications, using different technologies, and working with different clients, we have tried diverse development methodologies and techniques in search for the most optimal development process. With the knowledge that the definition of the optimal could mean different things in different situations, depending on the size and type of the projects, client’s preferences or domain restrictions. 
			<br/><br/> Whatever the process is selected, we strongly believe that enforcing good practices and code reviews from the start, and going with building, testing and releasing the code more frequently, leads to a faster development in the long run, results in a reliable product, and ensures easier maintenance of the completed solution.</h5>
	</div>
</div>

<div class="gray-box">
	<div class="dep-img">
		<div class="img"></div>
	</div>
	<div class="deploy">
		<div class="develop-img" >
			<p class="num">04</p>
			<h3>Deployment</h3>
			<h5>From traditional to cloud, we are able to help our clients put the finished solution in use.</h5>
		</div>
	</div>
</div>

<div class="analytics-box">
	<div class="analytics">
		<div class="analytics-img" >
			<div class="text-box">
				<p class="num">05</p>
				<h3>Analytics</h3>
				<h5>There is always a need to understand and continually improve the online experience that your customers have. We are helping our clients to collect the right data, to process and understand it, and finally to improve the solution/app/product making informed decisions.</h5>
			</div>
		</div>
	</div>
	<div class="ana-img">
		<div class="img"></div>
	</div>
</div> -->
<!-- kraj prvobitnog resenja za  tech-->
<div class="white-box-title">
	<div class="box">
			<h2>Technology</h2>
			<div class="line"></div>
	</div>
</div>
<div class="white-box">	
	<div class="technology-img" >
		<img src="./local/resources/assets/img/expertise/img_01.png">
		<h3>Digital Health Domain Expertise and Experience</h3>
		<h5>We have built more than 300 solutions for established healthcare players over the past 15 years and have learned about our customers’ pain points and the challenges the industry faces fusing it with strong technical, architecture and implementation capabilities.</h5>
	</div>
</div>

<div class="gray-box">
		<div class="develop-img" >
				<img src="./local/resources/assets/img/expertise/img_02.png">
				<h3>Translating Business Requirements Into Tech Solutions</h3>
				<h5>We speak the language of both Healthcare and Tech and leverage our broad domain experience early in the process to analyze customer problems, understand business objectives and design a technology solution that meets the vision for each business. By doing this, we fix problems before they are made.</h5>
		</div>	
</div>

<div class="white-box second">
	<div class="technology-img" >
		<img src="./local/resources/assets/img/expertise/img_03.png">		
		<h3>Quick Turnaround on Health Tech Projects</h3>
		<h5>Our sweet spot is small to medium sized Health Tech projects. We are able to deliver initial products in 2 to 3 months. Other service providers in our space are not able to do that - small ones don’t have the expertise and big ones require huge budgets.</h5>
	</div>
</div>

<div class="gray-box">	
		<div class="develop-img">
			<img src="./local/resources/assets/img/expertise/img_04.png">
			<h3>Implementation Excellence</h3>
			<h5>Our small and nimble teams that have deep experience and expertise in IT and Digital Health to analyse and design solutions in an iterative and client centric manner. For $100K of services delivered we have 0 P1 production defects and 3 defects in customer QA.</h5>
		</div>
</div>

<div class="white-box">
		<div class="technology-img" >
			<img src="./local/resources/assets/img/expertise/img_05.png">
			<h3>Cost Savings</h3>
			<h5>Our unique position in the marketplace, team structure and organisation allows us to provide DH solutions for 30 to 50% less than the competition and in doing so offer unparalleled value for the money to our customers.</h5>
		</div>
</div>
	

<!-- <div class="product-develop">
	<div class="product-dev-box">
		<h2>Product<br> Development</h2>
		<h5>Through end-to-end development, Vicert enables you to solve the challenges of healthtech</h5>
		<div class="logo-box">
			<img src="./local/resources/assets/img/expertise/logotipi_1.png"/>
		</div>		
	</div>	
		<div class="diagram-box">
			<div class="solutioning">
				<div class="circle-box">
					<div class="solutioning-circle">
						<img src="./local/resources/assets/img/expertise/solution_icon.png"/>
					</div>
					<div class="title">
						<h3>Solutioning</h3>
					</div>
				</div>					
			</div>
			<div class="screen-icon">
				<div class="img">
					<img src="./local/resources/assets/img/expertise/prod_dev_icon.png"/>
				</div>	
			</div>
			<div class="deploy">
				<div class="circle-box">
					<div class="deploy-circle">
						<img src="./local/resources/assets/img/expertise/deploy-icon.png"/>
					</div>
					<div class="title">
						<h3>Deploy<br> to prod</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="lines">
			<div class="vertical-line"></div>
			<div class="long-line"></div>
		</div>
		<div class="diagram-container">
			<div class="column architecture">
				<div class="circle">
					<img src="./local/resources/assets/img/expertise/architecutre_design_icon.png"/>				
				</div>
				<div class="logo">
					<div class="grey-dash"></div>
					<img src="./local/resources/assets/img/expertise/architecture_logos.png"/>
					<div class="grey-dash"></div>				
				</div>
				<h3>Architecture<br> & Design</h3>
				<div class="text">
					<h5>Value for money is fixing mistakes before they are made</h5>
				</div>	
			</div>
			<div class="column tech">
				<div class="circle">
					<img src="./local/resources/assets/img/expertise/tech_implement_icon.png"/>	
				</div>
				<div class="logo">
					<div class="grey-dash"></div>				
					<img src="./local/resources/assets/img/expertise/tech_info_logos.png"/>
					<div class="grey-dash"></div>
				</div>
				<h3>Technical<br> implementation</h3>
				<div class="text">
					<h5>We are enabling the digital health revolution, not just managing legacy system evolution</h5>
				</div>	
			</div>
			<div class="column system">
				<div class="circle">
					<img src="./local/resources/assets/img/expertise/sys_integration_icon.png">				
				</div>
				<div class="logo">
					<div class="grey-dash"></div>
					<img src="./local/resources/assets/img/expertise/sys_integration_logos.png">
					<div class="grey-dash"></div>
				</div>
				<h3>System<br> integration</h3>
				<div class="text">
					<h5>We help plug digital health solutions into the healthtech ecosystem</h5>
				</div>	
			</div>
		</div>		
</div>
<div class="responsive">
	<div class="product-develop-mobile">
		<div class="diagram-box">
			<div class="vertical-line"></div>
				<div class="solutioning">
					<div class="circle-box">
						<div class="solutioning-circle">
							<img src="./local/resources/assets/img/expertise/solution_icon.png">
						</div>
						<div class="title">
							<h3>Solutioning</h3>
						</div>
					</div>					
				</div>
				<div class="screen-icon">
					<div class="arrow-left"></div>
					<div class="arrow"></div>
					<div class="arrow-right"></div>
					<div class="img">
						<img src="./local/resources/assets/img/expertise/prod_dev_icon.png">
					</div>	
					<div class="product-dev-box">
						<h3>Product<br> Development</h3>
						<h5>Through end-to-end development,<br> Vicert enables you to solve the<br> challenges of healthtech</h5>			
					</div>	
				</div>
				<div class="column architecture">
					<div class="arrow-left"></div>
					<div class="arrow"></div>
					<div class="arrow-right"></div>					
					<div class="circle">
						<img src="./local/resources/assets/img/expertise/architecutre_design_icon.png">				
					</div>				
					<h3>Architecture<br> & Design</h3>
					<div class="text">
						<h5>Value for money is fixing mistakes<br> before they are made</h5>
					</div>	
				</div>
				<div class="column tech">
					<div class="arrow-left"></div>
					<div class="arrow"></div>
					<div class="arrow-right"></div>					
					<div class="circle">
						<img src="./local/resources/assets/img/expertise/tech_implement_icon.png">	
					</div>				
					<h3>Technical<br> implementation</h3>
					<div class="text">
						<h5>We are enabling the digital health<br> revolution, not just managing legacy<br> system evolution</h5>
					</div>	
				</div>
				<div class="column system">
					<div class="arrow-left"></div>
					<div class="arrow"></div>
					<div class="arrow-right"></div>					
					<div class="circle">
						<img src="./local/resources/assets/img/expertise/sys_integration_icon.png">				
					</div>					
					<h3>System<br> integration</h3>
					<div class="text">
						<h5>We help plug digital health solutions into<br> the healthtech ecosystem</h5>
					</div>	
				</div>
				<div class="deploy">
					<div class="circle-box">
						<div class="deploy-circle">
							<img src="./local/resources/assets/img/expertise/deploy-icon.png">
						</div>
						<div class="title">
							<h3>Deploy<br> to prod</h3>
						</div>
					</div>
				</div>
			</div>
	</div>
</div> -->
<!-- <div class="logo-gallery">
<div class="row">
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-android.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-angularjs.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-dotnet.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-hibernate.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-ibm.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-nodejs.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-oracle.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-php.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-redis.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-ror.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-salesforce.png" alt="">
    </div>
    <div class="logo-gallery-item">
        <img src="./local/resources/assets/img/logos/tech-spring.png" alt="">
    </div>
</div>
</div> -->
	<script type="text/javascript" src="./local/resources/assets/js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="./local/resources/assets/js/expertise.js"></script>
@endsection
