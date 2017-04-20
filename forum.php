 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>et.id.lv</title>
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
   	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
 </head>
 <body>
 	<!-- NAvigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="home.php" class="navbar-brand">ET.ID</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php"><i class="icon ion-home"></i></a>
					<li><a href="news.php">NEWS <i class="icon ion-ios-paper"></i></a>
					<li><a href="jokes.php">JOKES <i class="icon ion-heart-broken"></i></a>
					<li><a href="gallery.php">GALLERY <i class="icon ion-images"></i></a>
					<li><a href="forum.php">FORUM <i class="icon ion-chatboxes"></i></a>
					<li><a href="goodby.php"><?php
												session_start();
												if (!isset($_SESSION['user_id'])) {
													require ('login_tools.php');
													load();
												}

												echo "{$_SESSION['first_name']} {$_SESSION['last_name']} | Log Out";
											?> <i class="icon ion-toggle-filled"></i></a>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End of navbar -->







 		<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest minified bootstrap JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 </body>
 </html>