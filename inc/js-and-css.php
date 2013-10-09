<?php include 'get-siteurl.php'; ?>

<meta name="description" content="Across North America, the estimated number of migrating birds killed annually in collisions with buildings ranges from 100 million to 1 billion birds. FLAP is an organization dedicated to the safeguarding of migratory birds in the urban environment through education and research. Our vision is to create a 24-hour collision free environment for migratory birds." />
<meta name="keywords" content="migrating birds, safety for migrating birds, birds flying into windows, rescue birds, rehabilitation for birds, bird-window collision reduction, windows safe for birds, migratory birds, birds and glass, north american migratory birds, bird-safe buildings, bird volunteer, pacific bird migration, central bird migration, mississippi bird migration, atlantic bird migration, bird survival, ancient bird migration routes, workplace bird safety, home bird safety, flap, fatal light awareness program, colliding migratory birds, volunteer bird rescue, injured birds, fatal bird collisions, phototropic bird season, baby bird injuries, safe bird feeders, birds tapping at window, birds pecking at window, birds hitting buildings" />

<meta name="google-site-verification" content="0NRYiVsWJdzHgtC4zSIAgPqSUALZVI3ZLfLReQ8rsh4" />
<script src="http://code.jquery.com/jquery-latest.js"></script> 
<script type="text/javascript" src="<?php echo $siteUrl; ?>/js/swfobject.js"></script>

<script type="text/javascript">
    swfobject.registerObject("flash-logo", "10.1.52");
</script>







<script type="text/javascript" src="<?php echo $siteUrl; ?>/js/sfhover.js"></script>


<script type="text/javascript" src="<?php echo $siteUrl; ?>/js/cufon.js"></script>
<script type="text/javascript" src="<?php echo $siteUrl; ?>/js/DIN-Bold_400.font.js"></script>
<script type="text/javascript" src="<?php echo $siteUrl; ?>/js/Gill_Sans_400.font.js"></script>

<script type="text/javascript">
  Cufon.replace('#header-left h1, #thecount', { fontFamily: 'DIN-Bold', hover: true });
</script>

<script type="text/javascript">
  Cufon.replace('#header-left h2, .navbar li a, #main h2, #main-right h4', { fontFamily: 'Gill Sans', hover: true });
</script>

<script type="text/javascript">

	// Get cookie
	function getCookie(name) 
	{	
		var start = document.cookie.indexOf( name + "=" );
		var len = start + name.length + 1;
		if ( ( !start ) && ( name != document.cookie.substring( 0, name.length ) ) )
		{
			return null;
		}
		if ( start == -1 ) return null;
		var end = document.cookie.indexOf( ";", len );
		if ( end == -1 ) end = document.cookie.length;
		return unescape( document.cookie.substring( len, end ) );
	}
	
	// Set cookie
	function setCookie(name, value, expires, path, domain, secure) 
	{
		var NowDate = new Date();
		NowDate.setTime(NowDate.getTime());
		if (expires)
		expires = expires * 1000 * 60 * 60 * 24;
		var expires_date = new Date(NowDate.getTime() + (expires) );
		document.cookie = name + "=" +escape( value ) +
			//( ( expires ) ? ";expires=" + expires_date.toGMTString() : "" ) +
			( ( path ) ? ";path=" + path : "" ) + 
			( ( domain ) ? ";domain=" + domain : "" ) +
			( ( secure ) ? ";secure" : "" );
	}
	
	// Count
	var birdCountStartTime = (getCookie('starttime'))?parseInt(getCookie('starttime')):new Date().getTime();
	if(!getCookie('starttime'))
		setCookie('starttime',birdCountStartTime, '', '/', '', '');
	function birdCount()
	{		
		if(document.getElementById('thecount'))
			document.getElementById('thecount').innerHTML = Math.floor((((new Date().getTime()-birdCountStartTime)/86400)*100)*32);	 
		setTimeout("birdCount()",1000);	
	}	
	birdCount();
	
</script>


<link rel="stylesheet" type="text/css" href="<?php echo $siteUrl; ?>/styles/main.css" />

<!--[if lt IE 7]>
	<script type="text/javascript" src="<?php echo $siteUrl; ?>/js/unitpngfix.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $siteUrl; ?>/styles/ie6.css" />
<![endif]--> 

<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo $siteUrl; ?>/styles/ie7.css" />
<![endif]-->

