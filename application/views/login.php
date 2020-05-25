<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title><?= $judul ?></title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');

    body {
      font-family: 'Source Sans Pro', sans-serif;
      background: #cfcfd7;
    }

    .card {
      margin: 130px auto;
    }

    button {
      width: 90px;
    }
  </style>
</head>
<body>
<div class="card rounded-0" style="width: 22rem;">
	<h2 class="mt-4 text-center font-weight-bold">myCSE-SIPAdu</h2>
	<div class="card-body">
    <p class="text-center font-weight-bold">Silahkan login menggunakan username dan password integra</p>
		<?php if ($this->session->flashdata('message')): ?>
			<div class="alert alert-danger font-weight-bold" role="alert"><?= $this->session->flashdata('message'); ?></div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('logout')): ?>
			<div class="alert alert-success font-weight-bold" role="alert"><?= $this->session->flashdata('logout'); ?></div>
		<?php endif; ?>
    <form method="post" action="">
      <div class="form-group">
        <input type="text" class="form-control form-control-user rounded-0" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
				<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="password" class="form-control rounded-0" id="password" name="password" placeholder="Password">
				<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
      </div>
			<button class="btn btn-primary float-right rounded-0 font-weight-bold" type="submit">Login</button>
		</form>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
