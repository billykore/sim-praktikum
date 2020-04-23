<div class="container">
	<h1>Selamat Datang</h1>
	<div class="row">
		<div class="col-md-8 mt-2">
			<div class="card mb-3 rounded-0 border-light shadow-sm bg-light" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="<?= base_url('img/logo.png') ?>" style="height: 100%" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title font-weight-bold"><?= $user['nama']; ?></h5>
							<p class="card-text"><?= $user['username']; ?></p>
							<p class="card-text"><small class="text-muted"><?= $user['jurusan']; ?></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mt-2">
			<h3># Info</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolores dolorum ex explicabo iure nam nostrum qui quia sed sunt.</p>
		</div>
	</div>
</div>
