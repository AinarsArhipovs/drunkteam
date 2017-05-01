 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juicy Page</title>
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
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="home.php"><i class="icon ion-home"></i></a>
					<li><a href="goodby.php"><?php include 'user-name.php'; ?> <i class="icon ion-toggle-filled"></i></a>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End of navbar -->

	<div class="container bloks">
		<div class="row rowh">
			<div class="col-sm-2 jumbotron5 panelis">
				<img class="img-resposive" src="assets/img/cido.gif">
				<ul class="panel5">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron4 panelis">
				<img class="img-resposive" src="assets/img/gutta.gif">
				<ul class="panel4">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron3 panelis">
				<img class="img-resposive" src="assets/img/sadachok.gif">
				<ul class="panel3">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron2 panelis">
				<img class="img-resposive" src="assets/img/cappy.jpg">
				<ul class="panel2">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron1 panelis">
				<img class="img-resposive" src="assets/img/pure.gif">
				<ul class="panel1">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

	<?php include 'comments.php'; ?>
 		<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest minified bootstrap JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="assets/js/panels.js"></script>

 </body>
 </html>