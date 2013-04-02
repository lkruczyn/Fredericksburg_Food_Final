	<?php
	
	session_start();
	
	if(!isset($_SESSION['loggedIn']))
	{
 		
 		$_SESSION['loggedIn'] = 0;
 		header("location: login.php");
 	}      
 	
	if(!isset($_SESSION['isAdmin']))
	{
 		
 		$_SESSION['isAdmin'] = 0;
 	}
 	
 	?>

<head>
<meta charset="UTF-8" />
<title>FredFood</title>
<link href="style.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script src="js/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/loopedslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#slider').loopedSlider({
			autoStart: 6000,
			restart: 5000
		});
		
	});
</script> 
</head>

<body>
<div id="bodywrap">
<section id="pagetop">
<p id="siteinfo">
	<?php
		if($_SESSION['loggedIn'] == 1)
		{
			echo "Welcome, " . $_SESSION['real_name'];
			echo "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log out</a>";
		}
		else
		{
			echo "<a href=\"createAccount.php\">Create an Account</a>";
		}
	?>
</p>
<nav id="sitenav">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="newReview.php">Write a Review</a></li>
<li><a href="New_Restaurant.php">Add a Restaurant</a></li>

</ul>

</nav>
</section>
<header id="pageheader">
<h1>
fred<span>food</span>
</h1>
<div id="search">

<form action="submitSearch.php" method="post">
<div class="searchfield">
<input type="text" name="search" id="s">
</div>
<div class="searchbtn">
<input type="image" src="images/searchbtn.png" name=searchbutton id=searchbutton alt="search">
</div><br/><br/><br/>
<b>Search by: <input type="radio" name="searchClass" value="Name" checked>Name</input>&nbsp;&nbsp;<input type="radio" name="searchClass" value="Area">Area</input>
&nbsp;&nbsp;<input type="radio" name="searchClass" value="Rating">Rating</input></b></form>
</div>
</header>
<div id="contents">
<section id="main">
<section id="featured">
<h2 class="ftheading">Featured</h2>
<div class="ftwrap">
<div class="ftimg">

  <img src="images/img1.jpg" width="204" height="128" alt="img1"></div>
  <!-- LOGIN HERE -->
  <?php 
		if($_SESSION['loggedIn'] == 0)
		{
			include 'includes\loginBox.php';
		}
   ?>
  
  </div>
</section>