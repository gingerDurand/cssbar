<!DOCTYPE html>
<html>
<head>
	<title>Album Example for Bootstrap</title>
	<link rel="stylesheet" href="../bootstrap.css">
	<link rel="stylesheet" href="css/album.css">
</head>
<body>

	<div class="bg-dark">
		<div class="container">
			<div class="navbar navbar-dark">
			<header>
				<h1 class="navbar-text">
					<a href="" class="navbar-brand d-flex align-item-center">Album</a>
				</h1>	
			</header>

			<nav>
				<button type="button" class="navbar-toggler">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
			</div>
		</div>
	</div>

	<main>
		<section class="jumbotron text-center">
			<div class="container">
				<h2 class="jumbotron-heading">Album Example</h2>
				<p>Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
				<button type="button" class="btn btn-primary">Main Call to Action</button>
				<button type="button" class="btn btn-secondary">Secondary Action</button>
			</div>
		</section>

		<section class="py-5 bg-light">
			<div class="container">
				<div class="row">
				<?php for($i = 0; $i < 9; $i++) { ?>
					<article class="col-md-4">
						<div class="card mb-4">
							<img src="images/thumbnail.jpg" class="card-img-top" height="225" />
							<div class="card-body">
								<p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex align-items-center justify-content-between">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 min</small>
							</div>
							</div>
						</div>
					</article>
				<?php } ?>
				</div>
			</div>
		</section>
	</main>

	<footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
			<p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
		</div>
	</footer>
</body>
</html>