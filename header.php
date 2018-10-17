<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
		<a class="navbar-brand" href="<?php echo home_url(); ?>">WordPress No-Instructor</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="/posts">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/archives">archives</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/wordpress-geekwise">wordpress geekwise</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/sample-page">sample page</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/giphysearch">giphy page</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
			<div class="dropdown-menu" aria-labelledby="dropdown01">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
			</li>
		</ul>
		
		</div>
	</nav>