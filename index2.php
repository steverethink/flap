
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
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
			   parallax();
		   });
		
		});
	</script>
  </head>

  <body>
  
  <div class="wrapper" >
 
 <div class="container-wrapper">
  <div class="fullscreen-img"></div>
    <div class="container">

		<!-- Static navbar -->
      <div class="navbar navbar-default" style="margin-top:118px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!-- <a class="navbar-brand" href="#">F L A P</a> -->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
            	<ul class="dropdown-menu">
	            	<li><a href="#">Who we are</a></li>
	                <li><a href="#">Financials</a></li>
	                <li><a href="#">Our partners</a></li>
            	</ul>
            </li><!-- close About list -->
            
            <li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Birds &amp; Buildings<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="#">Bird Migration</a></li>
	                <li><a href="#">Hierarchy of Threats</a></li>
	                <li><a href="#">Glass</a></li>
	                <li><a href="#">Lights</a></li>
            	</ul>
            </li><!-- close Birds & buildings list -->

			<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs &amp; Services<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="#">Bird Rescue</a></li>
					<li class="dropdown-submenu">
						<a tabindex="-1" href="#">Research & Analysis</a>
						<ul class="dropdown-menu">
							<li><a tabindex="-1" href="#">Royal Ontario Museum Specimens Program</a></li>
							<li><a href="#">Bird Collision Data</a></li>
							<li><a href="#">Report a bird Collision</a></li>
						</ul>
	                <li><a href="#">Education programs</a></li>
	                <li><a href="#">Volunteer Program</a></li>
	                <li><a href="#">Volunteer Database</a></li>
	                <li><a href="#">Bird-safe consulting</a></li>
            	</ul>
            </li><!-- close programs and services list -->
			
			<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">How Can I Help<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="#">Bird-safe buildings</a></li>
	                <li><a href="#">If you find a bird</a></li>
	                <li><a href="#">Start a Flap-like initiative in your city</a></li>
	                <li><a href="#">Volunteer For Flap</a></li>
	                <li><a href="#">Donate</a></li>
            	</ul>
            </li><!-- close how can i help list -->
            <li><a href="#">FAQ</a></li>
            <li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
				<ul class="dropdown-menu">
	            	<li><a href="#">Links</a></li>
	                <li><a href="#">Downloads</a></li>
            	</ul>
            </li><!-- close resources list -->
            <li><a href="#">Press</a></li>
            <li class="active"><a href="#">#LightsOutTO</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Donate</a></li> 
          </ul> <!-- close nav navbar-nav -->
       <!--   <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
        
      </div>
  
      <div class="page-header">
    
        <h1 style="color:#fff;">It's time to turn the <span style="color:#00aaf6;">#LightsOutTO</span></h1>
        <p class="lead" style="color:#fff;">Every year, millions of birds are killed when office lights are left on.<br />
Choose your tweet to help spread the word:</p>
      </div> <!-- close page header -->
 
     <!-- <h3>Three equal columns</h3>
      <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
      <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
      </div> -->

      <!--<h3>Three unequal columns</h3>
      <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>-->
      <div class="row">
      
       <div class="col-md-3"><a href="https://twitter.com/intent/tweet?button_hashtag=LightsOutTO&text=Building%20lights%20are%20the%20second%20greatest%20threat%20to%20migrating%20birds"  data-url="http://flap.org/LightsOutTO"><img src="/flap/images/LO-tip1.png" alt="Building lights are the second greatest threat to migrating birds" /></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

       </div><!-- close col-md-3 -->
       
        <div class="col-md-3">  <a href="https://twitter.com/intent/tweet?button_hashtag=LightsOutTO&text=1-10%20birds%20are%20killed%20per%20building%20each%20year"  data-url="http://flap.org/LightsOutTO"><img src="/flap/images/LO-tip2.png" alt="Building lights are the second greatest threat to migrating birds" /></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </div><!-- close col-md-3 -->
       
        <div class="col-md-6"><a class="twitter-timeline" width="500" height="350" href="https://twitter.com/search?q=%23LightsOutTo"  data-widget-id="347918358328528896">Tweets about "#LightsOutTo"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div><!-- close col-md-6 -->
      </div><!-- close row -->
<!--
      <h3>Two columns</h3>
      <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
      <div class="row">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Full width, single column</h3>
      <p class="text-warning">No grid classes are necessary for full-width elements.</p>

      <hr>

      <h3>Two columns with two nested columns</h3>
      <p>Per the documentation, nesting is easy—just put a row of columns within an existing row. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
      <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
      <div class="row">
        <div class="col-md-8">
          .col-md-8
          <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>
          </div>
        </div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <hr>

      <h3>Mixed: mobile and desktop</h3>
      <p>The Bootstrap 3 grid system has four tiers of classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
      <p>Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.</p>
      <div class="row">
        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-6">.col-xs-6 .col-md-6</div>
        <div class="col-xs-6 col-md-6">.col-xs-6 .col-md-6</div>
      </div>

      <hr>

      <h3>Mixed: mobile, tablet, and desktop</h3>
      <p></p>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-lg-8">.col-xs-12 .col-lg-8</div>
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-sm-4 .col-lg-4</div>
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-sm-4 .col-lg-4</div>
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-sm-4 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-lg-6">.col-xs-6 .col-sm-6 .col-lg-6</div>
        <div class="col-xs-6 col-sm-6 col-lg-6">.col-xs-6 .col-sm-6 .col-lg-6</div>
      </div>
      -->
	
    </div> <!-- /container -->
   
   	<div class="container-wrapper2">
   	<div class="fullscreen-img2"></div>
   		<div class="container">
	   		
	   		<div class="row">
		   		<div class="col-md-6">
			   		<h2 style="color:#fff;">The Problem</h2>
			   		<p class="lead" style="color:#fff;">Many species of birds, some endangered, migrate at night using the age-old and constant patterns of light from the moon, the stars, and from the setting sun as navigational tools to follow their migration routes.</p>

			   		<p class="lead" style="color:#fff;">Lights left on at night, especially those of tall office towers, interfere with this instinctive behavior and draw night-migrating birds into urban areas. Disoriented, the birds find themselves in an unfamiliar maze of lit buildings where they will all too often collide with the building’s windows and walls.</p>
			   	</div><!-- close col-md-6 -->
			</div><!-- close row -->
		</div><!-- close container -->
   	</div><!-- close container-wrapper2 -->
	 </div><!-- container wrapper -->
  
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
   <div class="container-wrapper3">
   	<div class="fullscreen-img3"></div>
   		<div class="container">
	   		
	   		<div class="row">
	   		<div class="col-md-6"></div>
		   		<div class="col-md-6">
			   		<h2 style="color:#fff;">The Solution</h2>
			   		<p class="lead" style="color:#fff;">Continued awareness of this issue will create the necessary pressure on building management companies, owners, and individual companies to mandate floor lights are turned off at night.</p>

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
