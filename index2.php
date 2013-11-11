
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>#LightsOutTO - FLAP.org</title>
<?php include('inc/js-and-css.php'); ?>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/lightsout.css" rel="stylesheet">
	<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
      <script type="text/javascript">
	    $(document).ready(function() {
	    	function parallax(){
				var scrolled = $(window).scrollTop();
				$('.fullscreen-img').css('background-position-y', -(scrolled * 0.4) + 'px');
				//$('.fullscreen-img2').css('background-position-y', -(scrolled * 0.1) + 'px');
				//$('.fullscreen-img3').css('background-position-y', -(scrolled * 0.1) + 'px');
				
			}
		
			
					$(window).scroll(function(e){
					
					if($(window).width() > 768) {
					
						parallax();
						}
						
					});
		   
		});
	</script>
  </head>

  <body>
  
  <div class="wrapper" >
 
 <div class="container-wrapper">
  <div class="fullscreen-img"></div>
  <?php include('inc/header.php'); ?>

    <div class="container">
  <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="#">F L A P</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/index.php">Home</a></li>
            <li class="dropdown">
            	<a href="/who-we-are.php" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
            	<ul class="dropdown-menu">
	            	<li><a href="/who-we-are.php">Who we are</a></li>
	                <li><a href="/financials.php">Financials</a></li>
	                <li><a href="/supporters.php">Our partners</a></li>
            	</ul>
            </li><!-- close About list -->
            
            <li class="dropdown">
            	<a href="/bird-migration.php" class="dropdown-toggle" data-toggle="dropdown">Birds &amp; Buildings<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="/bird-migration.php">Bird Migration</a></li>
	                <li><a href="/hierarchy-of-threats.php">Hierarchy of Threats</a></li>
	                <li><a href="/glass.php">Glass</a></li>
	                <li><a href="/lights.php">Lights</a></li>
            	</ul>
            </li><!-- close Birds & buildings list -->

			<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs &amp; Services<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="/bird-rescue.php">Bird Rescue</a></li>
					<li class="dropdown-submenu">
						<a tabindex="-1" href="/research-and-analysis.php">Research & Analysis</a>
						<ul class="dropdown-menu">
							<li><a tabindex="-1" href="/museum-program.php">Royal Ontario Museum Specimens Program</a></li>
							<li><a href="/collision-data.php">Bird Collision Data</a></li>
							<li><a href="/report-bird-collision.php">Report a bird Collision</a></li>
						</ul>
					</li>
	                
	                <li class="dropdown-submenu">
	                <a href="/toronto-lights-out.php">Education programs</a>
	                	<ul class="dropdown-menu">
		                	<li><a href="/toronto-lights-out.php">Lights Out Toronto!</a></li>
	        				<li><a href="/great-lakes-lights-out.php">Great Lakes Lights Out Initiative</a></li>
	        				<li><a href="/migration-alerts.php">Migration Alerts</a></li>
	                	</ul>
	                
	                <li><a href="/the-value-of-our-volunteers.php">Volunteer Program</a></li>
	                <li><a href="http://www.flap.org/db">Volunteer Database</a></li>
	                <li><a href="/bird-safe-consulting.php">Bird-safe consulting</a></li>
            	</ul>
            </li><!-- close programs and services list -->
			
			<li class="dropdown">
            	<a href="/bird-safe-buildings.php" class="dropdown-toggle" data-toggle="dropdown">How Can I Help<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="/bird-safe-buildings.php">Bird-safe buildings</a></li>
	                <li><a href="/find-a-bird.php">If you find a bird</a></li>
	                <li><a href="/start-a-program.php">Start a Flap-like initiative in your city</a></li>
	                <li><a href="/volunteer.php">Volunteer For Flap</a></li>
	                <li><a href="donate-now.php">Donate</a></li>
            	</ul>
            </li><!-- close how can i help list -->
            <li><a href="/faqs.php">FAQ</a></li>
            <li class="dropdown">
            	<a href="/resources.php" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="/links.php">Links</a></li>
	                <li><a href="/downloads.php">Downloads</a></li>
            	</ul>
            </li><!-- close resources list -->
            <li><a href="/press.php">Press</a></li>
            <li class="active"><a href="/lightsoutto">#LightsOutTO</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <li class="dropdown">
            	<a href="/donate-now.php" class="dropdown-toggle" data-toggle="dropdown">Donate<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/monthly-giving.php">Monthly</a></li>
	        		<li><a href="/single-gifts.php">Single</a></li>
	        		<li><a href="/tribute-gifts.php">Tribute</a></li>
	        		<li><a href="/in-memoriam.php">Memoriam</a></li>
	        		<li><a href="/planned-gift-giving.php">Legacy</a></li>
	        		<li><a href="/carolynn-parke-memorial-gift.php">Carolynn Parke</a></li>
				</ul>
			</li>
          </ul> <!-- close nav navbar-nav -->
       <!--   <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
        
      </div>
		<!-- Static navbar -->
        
      <div class="page-header">
    
        <h1 style="color:#fff; letter-spacing:2px;"><br />It's  time  to  turn  the  <span style="color:#00aaf6;">#Lights<span style="color:#fff;">Out</span>TO</span></h1>
        <p class="lead" style="color:#fff;">Every year, millions of birds are killed when office lights are left on.<br />
Choose your tweet to help spread the word:</p>
      </div> <!-- close page header -->

      <!--<h3>Three unequal columns</h3>
      <p>Per the documentation, nesting is easy—just put a row of columns within an existing row. This gives you two columns starting at desktops and scaling to large desktops, with another two (equal widths) within the larger column.

At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>-->
    
 <div class="row">
      	<div class="col-md-6">
        	<a href="https://twitter.com/intent/tweet?button_hashtag=LightsOutTO&text=Over%201,000,000%20birds%20die%20from%20window%20collisions%20in%20Toronto%20every%20year"  data-url="http://flap.org/LightsOutTO"><img src="/flap/images/LO-tip3.png" alt="Over 1,000,000 birds die from window collisions in toronto every year" /></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<div class="row">
            	<div class="col-md-6"><a href="https://twitter.com/intent/tweet?button_hashtag=LightsOutTO&text=Lights%20out%20at%20night%20saves%20bird%20lives"  data-url="http://flap.org/LightsOutTO"><img src="/flap/images/LO-tip1.png" alt="Lights out at night saves bird lives" /></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> 
				</div><!-- close col-md-6 building lights -->
				<div class="col-md-6"><a href="https://twitter.com/intent/tweet?button_hashtag=LightsOutTO&text=1-10%20birds%20are%20killed%20per%20building%20each%20year"  data-url="http://flap.org/LightsOutTO"><img src="/flap/images/LO-tip2.png" alt="1-10 Birds are killed per building each year" /></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div><!-- close col-md-6 migrating -->
			</div><!-- close row -->
		</div><!-- close col-md-6 after row -->
        
        <div class="col-md-6"><a class="twitter-timeline" width="520" height="412" data-chrome="transparent" href="https://twitter.com/search?q=%23LightsOutTo"  data-widget-id="347918358328528896">Tweets about "#LightsOutTo"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div> <!-- twitter timeline close col-md-6 -->
     </div><!-- close row -->	
    </div> <!-- /container -->
   
   	<div class="container-wrapper2">
   	<div class="fullscreen-img2"></div>
   		<div class="container">
	   		
	   		<div class="row">
		   		<div class="col-md-6">
			   		<h2 style="color:#fff;">The Problem</h2>
			   		<p class="lead" style="color:#fff;">Many species of birds, including species at risk, migrate at night. They use age-old patterns of light from the moon, stars and setting sun as navigational tools to follow their migration routes.</p>

			   		<p class="lead" style="color:#fff;">Lights left on at night lure birds into urban areas. Disoriented, birds can collide with building's windows and walls. During the day, birds collide with our home and office windows because they cannot see glass.</p>
			   	</div><!-- close col-md-6 -->
			</div><!-- close row -->
		</div><!-- close container -->
   	</div><!-- close container-wrapper2 -->
	 </div><!-- container wrapper -->
  
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
   <div class="container-wrapper3">
   	<div class="fullscreen-img3"></div>
   		<div class="container">
	   		
	   		<div class="row">
	   		<div class="col-md-6"></div>
		   		<div class="col-md-6">
			   		<h2 style="color:#fff; font-size:30px; font-weight:700;">The Solution</h2>
			   		<p class="lead" style="color:#fff;">Continued awareness of this issue will encourage building owners to practice responsible light control at night and minimize window reflection and transparency during the day.</p>

			   		<p class="lead" style="color:#fff;">So help us spread the word and save millions birds one tweet at a time. </p>
			   	</div><!-- close col-md-6 -->
			</div><!-- close row -->
		</div><!-- close container -->
   	</div><!-- close container-wrapper3 -->
	
<footer style="height:50px; background-color:#333;">

</footer>
</div><!-- wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  
  </body>
</html>
