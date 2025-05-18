<!DOCTYPE html>
<html class="no-js" lang="<?php print_r($this->language)?>">
<head>
   <meta charset="utf-8">
	<title>OK-dev</title>
   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="/public/css/base.css">  
   <link rel="stylesheet" href="/public/css/main.css">
   <link rel="stylesheet" href="/public/css/vendor.css">     
   <link rel="stylesheet" href="/public/css/animate.css">     

   <!-- scripts
   ================================================== -->   
	<script src="/public/js/modernizr.js"></script>
	<script src="/public/js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="/public/images/favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
           <ul class="language-switcher">
               <li <?php if($this->language === "ru") {echo 'class="current_lang"';}?>>
                   <a href="?lang=ru" title="Русский">RU</a>
               </li>
               <span class="divider">|</span>
                <li <?php if($this->language === "en") {echo 'class="current_lang"';}?>>
                    <a href="?lang=en" title="English">EN</a>
                </li>
                <span class="divider">|</span>
                <li <?php if($this->language === "et") {echo 'class="current_lang"';}?>>
                    <a href="?lang=et" title="Eesti">ET</a> 
                </li>
            </ul>
               <a class="menu-toggle" href="#"><span>Menu</span></a>
	   		<div class="logo">
                   <a href="">OK-dev</a>
            </div>		      
                <nav id="main-nav-wrap">
                    
                    <ul class="main-navigation">
                        <li class="current"><a class="smoothscroll"  href="#intro" title=""><?php print_r($this->translations['nav_home']);?></a></li>
						<li><a class="smoothscroll"  href="#about" title=""><?php print_r($this->translations['nav_about']);?></a></li>
						<li><a class="smoothscroll"  href="#resume" title=""><?php print_r($this->translations['nav_resume']);?></a></li>
						<li><a class="smoothscroll"  href="#portfolio" title=""><?php print_r($this->translations['nav_portfolio']);?></a></li>				
						<li><a class="smoothscroll"  href="#contact" title=""><?php print_r($this->translations['nav_contact']);?></a></li>	
					</ul>
				</nav>    		
        </div>	      
   		
   	</div>	
   </header>

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">
   			<div class="col-twelve">

	   			<h5 class="wow fadeIn" data-wow-delay="1.2s"><?php print_r($this->translations['intro_greeting']);?></h5>
	   			<h1 class="wow fadeInUp" data-wow-delay="2.0s"><?php print_r($this->translations['intro_name']);?></h1>

	   			<p class="wow fadeInUp intro-position" data-wow-delay="2.2s" >
	   				<span><?php print_r($this->translations['intro_position_1']);?></span>
	   				<span><?php print_r($this->translations['intro_position_2']);?></span> 
	   			</p>

	   			<a class="wow fadeInUpBig button stroke smoothscroll wow bounceInUp" data-wow-delay="2.4s" href="#about" title=""><?php print_r($this->translations['intro_button']);?></a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 
   	<ul class="intro-social wow fadeInUpBig" data-wow-delay="1.9s">        
         <li><a href="https://www.facebook.com/profile.php?id=61557348398112" target="_blank"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://t.me/Oleksandr_Kushnirenko" target="_blank"><i class="fa fa-telegram"></i></a></li>
         <li><a href="https://wa.me/37253916538" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
         <li><a href="https://github.com/ok-dev-xyz" target="_blank"><i class="fa fa-github"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve wow bounceInDown" data-wow-delay="0.5s">

   			<h5><?php print_r($this->translations['about_h5']);?></h5>
   			<h2><?php print_r($this->translations['about_heading']);?></h1>

   			<div class="intro-info">

   				<img src="/public/images/Portret.png" alt="Profile Picture">

   				<p class="lead"><?php print_r($this->translations['about_lead']);?></p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full wow bounceInLeft" data-wow-delay="0.8s">

   			<h3><?php print_r($this->translations['profile_heading']);?></h3>
   			<p><?php print_r($this->translations['profile_text']);?></p>

   			<ul class="info-list">
   				<li>
   					<strong><?php print_r($this->translations['info_fullname_label']);?></strong>
   					<span><?php print_r($this->translations['info_fullname']);?></span>
   				</li>
   				<li>
   					<strong><?php print_r($this->translations['info_birth_label']);?></strong>
   					<span><?php print_r($this->translations['info_birth']);?></span>
   				</li>
   				<li>
   					<strong><?php print_r($this->translations['info_job_label']);?></strong>
   					<span><?php print_r($this->translations['info_job']);?></span>
   				</li>
   				<li>
   					<strong><?php print_r($this->translations['info_website_label']);?></strong>
   					<a href=""><span><?php print_r($this->translations['info_website']);?></span></a>
   				</li>
   				<li>
   					<strong><?php print_r($this->translations['info_email_label']);?></strong>
   					<a href="mailto:info@ok-dev.xyz"><span><?php print_r($this->translations['info_email']);?></span></a>
   				</li>
				<li>
					<strong><?php print_r($this->translations['info_phone_label']);?></strong>
					<a href="tel:+37253916538"><span><?php print_r($this->translations['info_phone']);?></span></a>
				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full wow bounceInRight" data-wow-delay="0.8s">

   			<h3><?php print_r($this->translations['skills_heading']);?></h3>
   			<p><?php print_r($this->translations['skills_text']);?></p>

				<ul class="skill-bars">
				   <li>
				   		<div class="progress percent95"><span>95%</span></div>
				   		<strong>HTML5</strong>
				   </li>
				   <li>
						<div class="progress percent80"><span>80%</span></div>
						<strong>CSS3</strong>
				   </li>
				   <li>
						<div class="progress percent85"><span>85%</span></div>
				   		<strong>PHP</strong>
					</li>
					<li>
						<div class="progress percent85"><span>85%</span></div>
						<strong>Laravel</strong>
					</li>
					<li>
						<div class="progress percent65"><span>65%</span></div>
						<strong>JavaScript</strong>
					</li>  
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>Bootstrap</strong>
					</li>  
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>Angular</strong>
					</li>  
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section wow bounceInUp" data-wow-delay="0.0s">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll"><?php print_r($this->translations['hire_btn']);?></a>
   			<a href="public/files/CV_Oleksandr_Kushnirenko_<?php print_r($this->language);?>.pdf" title="Download CV" class="button button-primary" download><?php print_r($this->translations['download_btn']);?></a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro wow zoomIn" data-wow-delay="0.7s">
			<div class="col-twelve">

				<h5><?php print_r($this->translations['resume_h5']);?></h5>
				<h2><?php print_r($this->translations['resume_heading']);?></h1>

			</div>   		
   		</div> <!-- /section-intro--> 

		<div class="row resume-timeline wow zoomIn" data-wow-delay="0.9s">

			<div class="col-twelve resume-header">

				<h2><?php print_r($this->translations['education_heading']);?></h2>

			</div> <!-- /resume-header -->

			<div class="col-twelve">

				<div class="timeline-wrap">

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3><?php print_r($this->translations['edu_1_institution']);?></h3>
							<p><?php print_r($this->translations['edu_1_period']);?></p>
						</div>

						<div class="timeline-content">
							<h4><?php print_r($this->translations['edu_1_title']);?></h4>
							<p style="height: 16px;"></p>
						</div>

					</div> <!-- /timeline-block -->

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<div class="timeline-header">
							<h3><?php print_r($this->translations['edu_2_institution']);?></h3>
							<p><?php print_r($this->translations['edu_2_period']);?></p>
						</div>

						<div class="timeline-content">
							<h4><?php print_r($this->translations['edu_2_title']);?></h4>
							<p style="height: 16px;"></p>
						</div>

					</div> <!-- /timeline-block -->

				</div> <!-- /timeline-wrap -->   			

			</div> <!-- /col-twelve -->
			
		</div> <!-- /resume-timeline -->
	
		<div class="row resume-timeline wow zoomIn" data-wow-delay="0.5s">

			<div class="col-twelve resume-header">

				<h2><?php print_r($this->translations['work_experience_heading']);?></h2>

			</div> <!-- /resume-header -->

			<div class="col-twelve">

				<div class="timeline-wrap">

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-content">
							<h4><?php print_r($this->translations['work_1_company']);?></h4>
							<p><?php print_r($this->translations['work_1_description']);?></p>
							<p><?php print_r($this->translations['work_1_technologies']);?></p>
						</div>

					</div> <!-- /timeline-block -->

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-content">
						<h4><?php print_r($this->translations['work_2_company']);?></h4>
							<p><?php print_r($this->translations['work_2_description']);?></p>
							<p><?php print_r($this->translations['work_2_technologies']);?></p>
						</div>

					</div> <!-- /timeline-block -->

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-content">
						<h4><?php print_r($this->translations['work_3_company']);?></h4>
							<p><?php print_r($this->translations['work_3_description']);?></p>
							<p><?php print_r($this->translations['work_3_technologies']);?></p>
						</div>

					</div> <!-- /timeline-block -->

				</div> <!-- /timeline-wrap -->   			

			</div> <!-- /col-twelve -->
			
		</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro wow fadeIn" data-wow-delay="0.7s">
			<div class="col-twelve">

				<h5><?php print_r($this->translations['portfolio_h5']);?></h5>
				<h2><?php print_r($this->translations['portfolio_heading']);?></h1>

			</div>   		
   		</div> <!-- /section-intro--> 

   		<div class="row portfolio-content wow slideInUp" data-wow-delay="0.9s">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="public/images/portfolio/sirosa.ee_.png" alt="<?php print_r($this->translations['work_1_company']);?>">
	                  <a href="https://sirosa.ee/" target="_blank" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title"><?php print_r($this->translations['work_1_company']);?></h3>	     					    
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="public/images/portfolio/ok-dev.xyz_ProjectEvent_.png" alt="<?php print_r($this->translations['work_2_company']);?>">
	               	<a href="ProjectEvent" target="_blank" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"><?php print_r($this->translations['work_2_company']);?></h3>		     		
		     				</div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="public/images/portfolio/127.0.0.1_8000_.png"alt="<?php print_r($this->translations['work_3_company']);?>">
	                  <a href="ProjectNews" target="_blank" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title"><?php print_r($this->translations['work_3_company']);?></h3>		     		
		     				</div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   		</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


	
   <!-- contact
   ================================================== -->
	<section id="contact" class="wow fadeIn" data-wow-delay="0.5s">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5><?php print_r($this->translations['contact_h5']);?></h5>
				<h2><?php print_r($this->translations['contact_heading']);?></h1>


			</div> 
   		</div> <!-- /section-intro -->

   		<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="<?php print_r($this->translations['contact_placeholder_name']);?>" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="<?php print_r($this->translations['contact_placeholder_email']);?>" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="<?php print_r($this->translations['contact_placeholder_subject']);?>" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="<?php print_r($this->translations['contact_placeholder_message']);?>" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform"><?php print_r($this->translations['contact_button_submit']);?></button>
                     <div id="submit-loader">
                        <div class="text-loader"><?php print_r($this->translations['contact_loader']);?></div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i><?php print_r($this->translations['contact_success_message']);?><br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   		</div> <!-- /contact-form -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer class="wow fadeIn" data-wow-delay="0.5s">
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
					<li><a href="https://www.facebook.com/profile.php?id=61557348398112" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://t.me/Oleksandr_Kushnirenko"><i class="fa fa-telegram" target="_blank"></i></a></li>
					<li><a href="https://wa.me/37253916538" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
					<li><a href="https://github.com/ok-dev-xyz" target="_blank"><i class="fa fa-github"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span><?php print_r($this->translations['footer_copyright']);?></span>          	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="<?php print_r($this->translations['footer_go_top']);?>" href="#top"><i class="fa fa-angle-up"></i></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="/public/js/jquery-2.1.3.min.js"></script>
   <script src="/public/js/plugins.js"></script>
   <script src="/public/js/main.js"></script>
   <script src="/public/js/wow.min.js"></script>
   <script>
		/* wow
  	-------------------------------*/
  	new WOW({ mobile: false }).init();
   </script>

</body>

</html>