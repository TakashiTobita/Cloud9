<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
　  <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css" /> 
	<style>
	body { margin: 0px; }
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top"role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">
				<img src="/assets/img/logo01.png" alt="">
			</a>
		</div>
		<div class="container">
			<div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">TopPage</a></li>
					<li><a href="/request">Request</a></li>
					<li><a href="/tweet/about">About Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="col-md-12">
			<?php echo $content; ?>
		</div>
	</div>
</body>
</html>