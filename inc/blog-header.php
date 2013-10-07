<?php include 'get-siteurl.php'; ?>
<div id="wrapper-outer">

  <div id="wrapper-inner">
  
    <div id="header" class="clearfix">
    
      <div id="header-left">
      
      	<object class="floatleft" id="flash-logo" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="120" height="118">
        	<param name="movie" value="<?php echo $siteUrl; ?>/flash/flap-logo.swf" />
        	<!--[if !IE]>-->
        	<object type="application/x-shockwave-flash" data="<?php echo $siteUrl; ?>/flash/flap-logo.swf" width="120" height="118">
        	<!--<![endif]-->
          		<img class="floatleft" src="<?php echo $siteUrl; ?>/flash/flap-logo.jpg" alt="logo" />
        	<!--[if !IE]>-->
        	</object>
        	<!--<![endif]-->
      	</object>
      
        <!--<a href="index.php"><img class="floatleft" src="images/logo.jpg" alt="Fatal Light Awareness Program (FLAP)" /></a>-->
        <div class="floatleft" id="header-space">&nbsp;</div>
        
        <h1><a href="index.php">Fatal Light Awareness Program</a></h1>
        <h2>No bird was harmed in the production of this website.<br />A shiny window took care of that.</h2>
      	
      </div> <!-- CLOSE FOR "HEADER-LEFT" -->
      
      <div id="header-right">
        <img src="<?php echo $siteUrl; ?>/images/img-counter.png" alt="" />
      	<p id="thecount"></p>
      </div> <!-- CLOSE FOR "HEADER-RIGHT" -->
      
      <ul id="nav">
        <li class="home"><a href="<?php echo $siteUrl; ?>/index.php">Home</a></li>
        <li class="about"><a href="<?php echo $siteUrl; ?>/who-we-are.php">About</a>
        	<ul>
        		<li><a href="<?php echo $siteUrl; ?>/who-we-are.php">Who We Are</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/financials.php">Financials</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/supporters.php">Our Partners</a></li>
        	</ul>	
        </li>
        <li class="birds-buildings"><a href="<?php echo $siteUrl; ?>/bird-migration.php">birds &amp; Buildings</a>
        	<ul>
        		<li><a href="<?php echo $siteUrl; ?>/bird-migration.php">Bird Migration</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/hierarchy-of-threats.php">Hierarchy of Threats</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/glass.php">Glass</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/lights.php">Lights</a></li>
        	</ul>
        </li>
        <li class="programs-services"><a href="<?php echo $siteUrl; ?>/bird-rescue.php">Programs &amp; Services</a>
        	<ul>
        		<li><a href="<?php echo $siteUrl; ?>/bird-rescue.php">Bird Rescue</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/research-and-analysis.php">Research &amp; Analysis</a>
        			<ul>
        				<li><a href="<?php echo $siteUrl; ?>/museum-program.php">Royal Ontario Museum Specimens Program</a></li>
        				<li><a href="<?php echo $siteUrl; ?>/collision-data.php">Bird Collision Data </a></li>
        				<li><a href="<?php echo $siteUrl; ?>/report-bird-collision.php">Report a Bird Collision</a></li>
        			</ul>
        		</li>
        		<li><a href="<?php echo $siteUrl; ?>/toronto-lights-out.php">Education Programs</a>
        			<ul>
        				<li><a href="<?php echo $siteUrl; ?>/toronto-lights-out.php">Lights Out Toronto!</a></li>
        				<li><a href="<?php echo $siteUrl; ?>/great-lakes-lights-out.php">Great Lakes Lights Out Initiative</a></li>
        				<li><a href="<?php echo $siteUrl; ?>/migration-alerts.php">Migration Alerts</a></li>
        			</ul>
        		</li>
        		<li><a href="<?php echo $siteUrl; ?>/the-value-of-our-volunteers.php">Volunteer Program</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/db" target="_blank">Volunteer Database</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/bird-safe-consulting.php">Bird-Safe Consulting</a></li>
        	</ul>
        </li>
        <li class="how-help"><a href="<?php echo $siteUrl; ?>/bird-safe-buildings.php">How Can I Help</a>
        	<ul>
        		<li><a href="<?php echo $siteUrl; ?>/bird-safe-buildings.php">Bird-Safe Buildings</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/find-a-bird.php">If You Find A Bird</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/start-a-program.php">Starting a FLAP-like Program in Your City</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/volunteer.php">Volunteer for FLAP</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/donate-now.php">Donate</a></li>
        	</ul>
        </li>
        <li class="faq"><a href="<?php echo $siteUrl; ?>/faqs.php">FAQ</a></li>
        <li class="resources"><a href="<?php echo $siteUrl; ?>/resources.php">Resources</a>
        	<ul>
        		<li><a href="<?php echo $siteUrl; ?>/links.php">Links</a></li>
        		<li><a href="<?php echo $siteUrl; ?>/downloads.php">Downloads</a></li>
        	</ul>
        </li>
        <li class="press"><a href="<?php echo $siteUrl; ?>/press.php">Press</a></li>
        <li class="blog"><a href="/blog/">Blog</a></li>
        <li class="contact"><a href="<?php echo $siteUrl; ?>/contact.php">Contact</a></li>
        <li class="donate"><a href="<?php echo $siteUrl; ?>/donate-now.php">Donate</a>
        	<ul>
        		<li class="press"><a href="<?php echo $siteUrl; ?>/monthly-giving.php">Monthly</a></li>
        		<li class="press"><a href="<?php echo $siteUrl; ?>/single-gifts.php">Single</a></li>
        		<li class="press"><a href="<?php echo $siteUrl; ?>/tribute-gifts.php">Tribute</a></li>
        		<li class="press"><a href="<?php echo $siteUrl; ?>/in-memoriam.php">Memoriam</a></li>
        		<li class="press"><a href="<?php echo $siteUrl; ?>/planned-gift-giving.php">Legacy</a></li>
        		<li class="press"><a href="<?php echo $siteUrl; ?>/carolynn-parke-memorial-gift.php">Carolynn Parke</a></li>
        	</ul>
        </li>
      </ul>
    
    </div> <!-- CLOSE FOR "HEADER" -->
    
    <div id="main" class="clearfix">
    
      <div id="fadeshow1"></div>
      