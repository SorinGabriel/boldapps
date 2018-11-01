<!DOCTYPE html>

<html lang="en">

<head>
	<title>Develop great apps - BoldApps</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>	
	<script>
		$(document).ready(function(){
			AOS.init();			
		})
	</script>
	<script>
		// Smooth scrolling
		$(document).ready(function(){
			$('body').scrollspy({target: ".navbar", offset: 50});
			$("#collapsibleNavbar a").on('click', function(event) {
				if (this.hash !== "") {
					event.preventDefault();
					var hash = this.hash;
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function(){
				  	window.location.hash = hash;
				});
				}
			});
		});
	</script>
	<script>
		//fade out 
		$(window).scroll(function(){
			$("#intro").css("opacity", 1 - $(window).scrollTop() / 700);
			$("#about").css("opacity", 0 + $(window).scrollTop() / 500);
		});
	</script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


	<nav class="navbar navbar-expand-md bg-myColor navbar-dark fixed-top">

		<div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="collapsibleNavbar">

				<ul class="nav navbar-nav ml-auto mr-auto">
					<li class="nav-item">
					  <a class="nav-link" href="#intro">Intro</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#technologies">Technologies</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#portofolio">Portofolio</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#contact">Contact</a>
					</li>
				</ul>

			</div>

		</div>

	</nav>

	<section id="intro">

		<div class="message" data-aos="zoom-out" data-aos-delay="300">
			<h1>BoldApps</h1>
			<h2>Going next level</h2>
		</div>

		<div class="landscape"></div>
		<canvas id="canvas"></canvas>
		<script src='js/zkeddv.js'></script>
		<script  src="js/index.js"></script>

	</section>

	<section id="about">

		<div class="text-middle">

			<p>My Intro</p>

		</div>

	</section>

	<section id="technologies">

		<div class="text-middle">

			<p>My Intro</p>

		</div>

	</section>

	<section id="portofolio">

		<div class="text-middle">

			<p>My Intro</p>

		</div>

	</section>

	<section id="contact">

		<div class="text-middle">

			<p>My Intro</p>

		</div>

	</section>

</body>

</html>