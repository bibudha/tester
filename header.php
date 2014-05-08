<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1 user-scalable=yes" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>Way me</title>
<link href="favicon.png" rel="shortcut icon" type="image/x-icon">
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="libs/gridlock.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 8]><link href="libs/gridlock-ie.css" rel="stylesheet" type="text/css" media="all" /><![endif]-->
<link type="text/css" rel="stylesheet" href="libs/jquery.mmenu.all.css" />
<link type="text/css" rel="stylesheet" href="libs/jquery.nouislider.min.css" />
<script src="libs/jquery-1.8.2.min.js"></script>
<script src="libs/jquery.mmenu.min.all.js"></script>
<script src="libs/jquery.accordion.js"></script>
<script src="libs/jquery.collapsible.js"></script>
<script src="libs/jPages.min.js"></script>
<script src="libs/jquery.nouislider.min.js"></script>
<script src="main.js"></script>
</head>

<body class="gridlock">
<!-------------------------------------------------------------------------------------------------------------------------------->
<div id="Header">
<div class="row relv">
	<div class="desktop-4 tablet-2 mobile-1">
		<div class="desktop-2 tablet-1"><a id="Never" href="#menu"></a></div>
		<form class="desktop-10 tablet-5 mobile-1 mobile-push-1" id="search">
			<input type="text" placeholder="SEARCH" class="search-field">
			<input type="submit" value="" class="search-submit">
		</form>
	</div>
	<div class="desktop-3 tablet-2" id="m15">
		<a href="index.php" id="logo"><img src="images/panjury_logo.png"></a>
	</div>
	<div class="desktop-5 tablet-2 mobile-3 rAlign" id="m80">
		<a id="profile_pic" href="#profile">
        	<img src="images/profile_pic.jpg">
        	<span class="hideMobile">
				Omprakash<br> <!-- First Name -->
				Choudhary <!-- Last Name -->
			</span>
        </a>
		<a id="friends" class="socials">
			<span class="Counts">1</span>
		</a>
		<a id="message" class="socials">
			<span class="Counts">2</span>
		</a>
		<a id="notification" class="socials">
			<span class="Counts">5</span>
		</a>
	</div>
</div><!-- Closed .row -->
</div><!-- Closed #Header -->
<!-------------------------------------------------------------------------------------------------------------------------------->
<nav id="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li>
			<a href="#">Join!</a>
			<ul>
				<li><a href="#">First Sub Menu</a></li>
				<li><a href="#">Second Sub Menu</a></li>
				<li><a href="#">Third Sub Menu</a></li>
			</ul>
		</li>
		<li><a href="#">FAQ</a>
			<ul>
				<li><a href="#">First Sub Menu</a></li>
				<li><a href="#">Second Sub Menu</a></li>
				<li><a href="#">Third Sub Menu</a></li>
				<li><a href="#">Forth Sub Menu</a></li>
			</ul>
		</li>
		<li><a href="#">Partners</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
</nav>
<!-------------------------------------------------------------------------------------------------------------------------------->
<nav id="profile">
	<ul>
		<li><a href="account.php">General</a></li>
		<li><a href="notification.php">Notification</a>
			<ul>
				<li><a href="#">First Sub Menu</a></li>
				<li><a href="#">Second Sub Menu</a></li>
				<li><a href="#">Third Sub Menu</a></li>
				<li><a href="#">Forth Sub Menu</a></li>
			</ul>
		</li>
		<li><a href="#">Following</a></li>
		<li><a href="privacy-security.php">Privacy & Security</a></li>
	</ul>
</nav>
<!-------------------------------------------------------------------------------------------------------------------------------->
<div style="width:100%; display:table;">