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
		<div class="row">

			<div class="col-sm-2 jumbotron5">
				<img class="img-resposive" src="assets/img/cido.gif">
				<ul class="panel5">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron4">
				<img class="img-resposive" src="assets/img/gutta.gif">
				<ul class="panel4">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron3">
				<img class="img-resposive" src="assets/img/sadachok.gif">
				<ul class="panel3">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron2">
				<img class="img-resposive" src="assets/img/cappy.jpg">
				<ul class="panel2">
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
					<li>Links</li>
				</ul>
			</div>
			<div class="col-sm-2 jumbotron1">
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


	<form>
		<?php echo "{$_SESSION['first_name']} {$_SESSION['last_name']}"; ?>
	</form>

 		<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest minified bootstrap JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


	<script>
		$(document).ready(function(){
		    $(".jumbotron1").mouseover(function(){
		        $(".panel1").show();
		    });
		    $(".jumbotron1").mouseleave(function(){
		        $(".panel1").hide();
		    });
		    $(".jumbotron2").mouseover(function(){
		        $(".panel2").show();
		    });
		    $(".jumbotron2").mouseleave(function(){
		        $(".panel2").hide();
		    });
		    $(".jumbotron3").mouseover(function(){
		        $(".panel3").show();
		    });
		    	$(".jumbotron3").mouseleave(function(){
		        $(".panel3").hide();
		    });
		    $(".jumbotron4").mouseover(function(){
		        $(".panel4").show();
		    });
		    	$(".jumbotron4").mouseleave(function(){
		        $(".panel4").hide();
		    });
		    $(".jumbotron5").mouseover(function(){
		        $(".panel5").show();
		    });
		    	$(".jumbotron5").mouseleave(function(){
		        $(".panel5").hide();
		    });
		});
	</script>

 </body>
 </html>