<!-------------------------------------------------------------------
			#######  #######  #######  #######
			#        #        #        #
			#        #        #        #
			#        #######  #####    #
			#              #  #        #
			#              #  #        #
			#######  #######  #######  #######
--------------------------------------------------------------------->	
<?php
	include_once "../counter.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CSEC is the departmental club of Computer Science and Engineering Department of National Institute of Technology, Hamirpur. CSEC stands for Computer Science Engineers Community. The website brings to you the treasure of computer science knowledge.">
    <meta name="author" content="">

    <title>CSEC</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/nivo-lightbox.css" rel="stylesheet" />
	<link href="./css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="./css/animate.css" rel="stylesheet" />
    <link href="./css/csec.css" rel="stylesheet">
	<link href="./color/default.css" rel="stylesheet">

</head>

<body data-spy="scroll">
<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a href="../index.php#about" class="gn-icon gn-icon-download">About</a>
								</li>
								<li><a href="./index.php#whatwedo" class="gn-icon gn-icon-cog">What We do</a></li>						
								<li><a href="../tutorials/index.html" class="gn-icon gn-icon-cog">Tutorials</a></li>						
								<li><a href="./index.php#Activities" class="gn-icon gn-icon-article">Activities</a></li>
								<li><a href="../gallery.php" class="gn-icon gn-icon-pictures">Gallery</a></li>
								<?php
									$rem_ip=getenv('REMOTE_ADDR');
									//echo $rem_ip;
									$ip= substr($rem_ip,0,7);
									if($ip=="172.16."){
									echo '<li><a href="../tutorials.php" class="gn-icon gn-icon-videos">Tutorials</a></li>
								<li><a href="../judge.php/" class="gn-icon gn-icon-cog">Compile your Code</a></li>';
								}
								?>
								<li><a href="../members.php" class="gn-icon gn-icon-cog">Members</a></li>
								<li>
									<a href="./index.php#contact" class="gn-icon gn-icon-archive">Contact</a>
								</li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.php">CSEC</a></li>
				<li><ul class="company-social">
                            <li class="social-facebook"><a href="http://www.facebook.com/csec.nith" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/csecnith" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li class="social-google"><a href="https://plus.google.com/u/0/104484102243545712040/about" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	</li>
			</ul>
	</div>
