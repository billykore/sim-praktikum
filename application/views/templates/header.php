<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

  <title><?= $judul; ?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 fixed-top">
	<a class="navbar-brand" href="<?= base_url('user/index'); ?>">
		<img class="logo" src="<?= base_url('img/logo.png'); ?>" style="height: 60px" alt="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('user'); ?>">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('praktikum'); ?>">Praktikum</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('tugasakhir'); ?>">Tugas Akhir</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('kerjapraktek'); ?>">Kerja Praktek</a>
			</li>
		</ul>
		<div class="nav-link ml-auto"><?= $user['username']; ?></div>
		<a class="btn btn-outline-dark btn-sm font-weight-bold" href="<?= base_url('auth/logout'); ?>">Log out</a>
	</div>

</nav>
<div class="content">
