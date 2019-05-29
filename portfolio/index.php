<?php
   include 'inc/config.php';
   include 'cnx.php';
   include 'inc/session.php';
   Session::start();
   $select = $conn->query('SELECT w.name_prj,w.descr_prj,w.src_img,w.src_img_modals,w.link,w.id_cat,c.libelle FROM works w, categorie c WHERE w.id_works=c.id_cat');
   $projects = $select->fetchAll();
   $select_info = $conn->query('SELECT about,nom,adresse,phone,email FROM admin_user');
   $infoPersnl = $select_info->fetchAll();
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Essaifi Ahmed | Portfolio</title>
	<meta name="description" content="Portfolio">


   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/dropdown.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav" style="min-height: 52px;">
            <li class="current"><a class="smoothscroll" href="#home" style="line-height: 66px;"><?php echo $lang["Home"];?></a></li>
            <li><a class="smoothscroll" href="#about"><?php echo $lang["About"];?></a></li>
	         <li><a class="smoothscroll" href="#resume"><?php echo $lang["Resume"];?></a></li>
            <li><a class="smoothscroll" href="#portfolio"><?php echo $lang["Works"];?></a></li>
            <li><a class="smoothscroll" href="#contact"><?php echo $lang["Contact"];?></a></li>
            <li><a  href="login.php"><?php echo $lang["login"];?></a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text text-pop-up">
            <h1 class="responsive-headline"><?php echo $lang["title"];?></h1>
            <h3>
               <?php echo $lang["part1"];?><span><?php echo $lang["part2"];?></span>,<span><?php echo $lang["part3"];?></span><?php echo $lang["and"];?><span><?php echo $lang["part4"];?></span> 
               <?php echo $lang["part5"];?>  
               <a class="smoothscroll" href="#about"><?php echo $lang["part6"];?></a>
               <?php echo $lang["part7"];?>  
               <a class="smoothscroll" href="#about"><?php echo $lang["About me"];?></a>.
            </h3>
            <hr />
            <ul class="social">
               <li><a href="https://github.com/EssaifiAahmed"><i class="fa fa-github"></i></a></li>
               <li><a href="https://www.linkedin.com/in/essaifi-ahmed"><i class="fa fa-linkedin"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">
      <div class="row">
         <div class="three columns" data-aos="fade-right">
            <img class="profile-pic"  src="images/portfolioimg.png" alt="mon image"/>
         </div>
         <?php foreach ($infoPersnl as $infp):?>
            <div class="nine columns main-col" data-aos="fade-left">
               <h2><?php echo $lang["About me"];?></h2>
               <p><?=$infp['about'];?></p>
               <div class="row" data-aos="fade-up-left">
                  <div class="columns contact-details">
                     <h2><?php echo $lang["Contact Details"];?></h2>
                     <p class="address">
                        <span><?=$infp['nom'];?></span>
                        <span><br><?=$infp['adresse'];?>
                        </span><br>
                        <span><?=$infp['phone'];?><br>
                        <span><?=$infp['email'];?></span>
                     </p>
                  </div>
               </div> <!-- end row -->
            </div> <!-- end .main-col -->
         <?php endforeach;?>
      </div>
   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col" data-aos="zoom-in">
            <h1><span><?php echo $lang["Education"];?></span></h1>
         </div>

         <div class="nine columns main-col" data-aos="zoom-out">

            <div class="row item">

               <div class="twelve columns">

                  <h3><?php echo $lang["school"];?></h3>
                  <p class="info"><?php echo $lang["part9"];?> <span>&bull;</span> <em class="date"><?php echo $lang["date"];?></em></p>
                  <p class="specialist"><?php echo $lang["specialist"];?></p>

               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3><?php echo $lang["institute"];?></h3>
                  <p class="info"><?php echo $lang["part10"];?><span>&bull;</span> <em class="date">2016-2018</em></p>

                  <p class="specialist"><?php echo $lang["dev"];?></p>

               </div>

            </div>
            
            <div class="row item">

                  <div class="twelve columns">
   
                     <h3><?php echo $lang["part11"];?></h3>
                     <p class="info"><?php echo $lang["part12"];?><span>&bull;</span> <em class="date">2015-2016</em></p>
   
                     <p class="specialist"><?php echo $lang["english"];?></p>
   
                  </div>
   
               </div>
               
               <div class="row item">

                     <div class="twelve columns">
      
                        <h3><?php echo $lang["highschool"];?></h3>
                        <p class="info"><?php echo $lang["part13"];?><span>&bull;</span> <em class="date">2014-2015</em></p>

                     </div>
      
                  </div><!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col" data-aos="zoom-in">
            <h1><span><?php echo $lang["Experience"];?></span></h1>
         </div>

         <div class="nine columns main-col" data-aos="flip-up">

            <div class="row item">

               <div class="twelve columns">

                  <h3><?php echo $lang["stage"];?></h3>
                  <p class="info"><?php echo $lang["Groupe OCP"];?> <span>&bull;</span> <em class="date">01/2018 - 02/2018</em></p>

                  <p class="specialist">
                     <?php echo $lang["part14"];?>
                  </p>

               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3><?php echo $lang["stage"];?></h3>
                  <p class="info"><?php echo $lang["Cabinet Médical"];?><span>&bull;</span> <em class="date">03/2018 – 04/2018</em></p>

                  <p class="specialist">
                     <?php echo $lang["part15"];?>      
                  </p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill"data-aos="fade-right"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine">

         <div class="three columns header-col">
            <h1><span><?php echo $lang["skills"];?></span></h1>
         </div>

         <div class="nine columns main-col">

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand css3"></span><em>CSS3</em></li>
                  <li><span class="bar-expand javascript"></span><em>JavaScript</em></li>
						<li><span class="bar-expand dotnet"></span><em>.NET</em></li>
						<li><span class="bar-expand sql"></span><em>SQL</em></li>
						<li><span class="bar-expand entityframework"></span><em>ENTITY FRAMEWORK</em></li>
                  <li><span class="bar-expand bootstrap4"></span><em>BOOTSTRAP4</em></li>
                  <li><span class="bar-expand dart"></span><em>Dart</em></li>
                  <li><span class="bar-expand flutter"></span><em>FLUTTER</em></li>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->
   
   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">
      <div class="row">
         <div class="twelve columns collapsed">
            <h1><?php echo $lang["Check Out Some of My Works"];?></h1>
            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
            <?php foreach ($projects as $project):?>
          	   <div class="columns portfolio-item" data-aos="fade-down">
                     <div class="item-wrap">
                        <a href="#modal-01" title="">
                           <img alt="" src="images/portfolio/<?=$project['src_img'];?>">
                           <div class="overlay">
                              <div class="portfolio-item-meta">
                                 <h5><?=$project['name_prj'];?></h5>
                                 <p><?=$project['libelle'];?></p>
                              </div>
                           </div>
                           <div class="link-icon"><i class="icon-plus"></i></div>
                        </a>
                     </div>
          		</div> <!-- item end -->
            <?php endforeach;?>
            </div> <!-- portfolio-wrapper end -->
         </div> <!-- twelve columns end -->

         <!-- Modal Popup
	      --------------------------------------------------------------- -->
         <div id="modal-01" class="popup-modal mfp-hide">
               <img class="scale-with-grid" src="images/portfolio/modals/<?=$project['src_img_modals'];?>"/>
               <div class="description-box">
                  <h4></h4>
                  <p><?=$project['descr_prj'];?></p>
                  <span class="categories"><i class="fa fa-tag"></i><?=$project['libelle'];?></span>
               </div>
               <div class="link-box">
                  <a href="<?=$project['link'];?>" target="_blank"><?php echo $lang["Details"];?></a>
                  <a class="popup-modal-dismiss"><?php echo $lang["Close"];?></a>
               </div>
         </div><!-- modal-01 End -->
      </div> <!-- row End -->
   </section> <!-- Portfolio Section End-->

   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span><?php echo $lang["staying In Touch"];?></span></h1>

            </div>
            
         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName"><?php echo $lang["Name"];?> <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail"><?php echo $lang["Email"];?> <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject"><?php echo $lang["Subject"];?></label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage"><?php echo $lang["messsage"];?> <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit"><?php echo $lang["sumbit"];?></button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning">  <?php echo $lang["Error"];?></div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i><?php echo $lang["Your message was sent, thank you!"];?></div>
               <!-- contact-success --><br>
				   </div>

            </div>
      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="https://github.com/EssaifiAahmed"><i class="fa fa-github"></i></a></li>
               <li><a href="https://www.linkedin.com/in/essaifi-ahmed"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="languagepicker roundborders large">
               <a href="index.php?lang=en"><li><img src="eng.png" id="engimg"><?php echo $lang["English"];?></li></a>
               <a href="index.php?lang=fr"><li><img src="fra.png" id="frimg"><?php echo $lang["French"];?></li></a>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2014 CeeVee</li>
               <li>Design by <a href="http://www.styleshout.com/" title="Styleshout" target="_blank">Styleshout</a></li>   
            </ul>

         </div>
         
         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
    </script>
</body>

</html>