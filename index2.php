
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Grid Template for Bootstrap</title>
<?php include('inc/js-and-css.php'); ?>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/lightsout.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.js"></script> 
	<script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

		<!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!--<a class="navbar-brand" href="#">Project name</a>-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
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
            <li><a href="#">#LightsOutTO</a></li>
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
      
        <h1>It's time to turn the #LightsOutTO</h1>
        <p class="lead">Every year, millions of birds are killed when office lights are left on.<br />
Choose your tweet to help spread the word:</p>
      </div>

      <h3>Three equal columns</h3>
      <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
      <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Three unequal columns</h3>
      <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
      <div class="row">
        <div class="col-md-3">.col-md-3</div>
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-3">.col-md-3</div>
      </div>

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
	
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
