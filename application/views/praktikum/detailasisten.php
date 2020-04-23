<div class="container">
	<div class="card mb-3 rounded-0 shadow-sm bg-light" style="width: 400px;">
		<div class="card-header font-weight-bold">
			Detail Asisten
		</div>
		<div class="row no-gutters">
			<div class="col-md-5">
				<img src="<?= base_url('img/logo.png') ?>" style="height: 100%" class="card-img" alt="...">
			</div>
			<div class="col-md-7">
				<div class="card-body">
					<h5 class="card-title font-weight-bold"><?= $asisten['nama']; ?></h5>
					<p class="card-text"><?= $asisten['nrp'] ?></p>
					<p class="card-text"><?= $asisten['role']; ?></p>
					<p class="card-text text-muted">Angkatan <?= $asisten['angkatan']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
