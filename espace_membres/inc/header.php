<?php if(session_status() == PHP_SESSION_NONE){ session_start(); } ?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<title>Sudobrainwork site web</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="register.php">SudoBrainwork</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php if (isset($_SESSION['auth'])): ?>
						<li><a href="logout.php">Se déconnecter</a></li>
					<?php else: ?>
						<li><a href="../register.php">S'inscrire</a></li>
						<li><a href="login.php">Se connecter</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<main class="container">
		<?php if (isset($_SESSION['flash'])): ?>
			<?php foreach ($_SESSION['flash'] as $type => $message): ?>
				<div class="alert alert-<?= $type; ?>">
					<?= $message; ?>
				</div>
			<?php endforeach ?>
			<?php unset($_SESSION['flash']); ?>
		<?php endif ?>
