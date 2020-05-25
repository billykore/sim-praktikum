<div class="col-md-8 px-5 main">
	<h1>Praktikum Sinyal dan Sistem</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi delectus expedita minima molestias, natus nemo quo rem repellendus similique sint.</p>
	<div id="info" class="mt-5">
		<h3># Info</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, nobis.</p>
	</div>
	<div id="jadwal">
		<h3># Jadwal Praktikum</h3>
		<a class="btn btn-primary mb-3 ml-3" href="<?= base_url('praktikum/aturjadwal'); ?>">Ambil Jadwal Praktikum</a>
		<?php if ($this->session->flashdata('flash')): ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Jadwal praktikum <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th scope="col">Modul</th>
				<th scope="col">Hari - Tanggal</th>
				<th scope="col">Waktu</th>
				<th scope="col">Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php for ($i = 0; $i < count($tampilJadwal); $i++): ?>
				<tr>
					<th scope="row"><?= $tampilJadwal[$i]['modul']; ?></th>
					<td><?= $tampilJadwal[$i]['hari']; ?></td>
					<td><?= $tampilJadwal[$i]['waktu']; ?></td>
					<td>
						<a href="<?= base_url('praktikum/ubahjadwal'); ?>" class="btn btn-success badge badge-success">ubah</a>
					</td>
				</tr>
			<?php endfor; ?>
			</tbody>
		</table>
	</div>
	<div id="perlengkapan">
		<h3># Perlengkapan Praktikum</h3>
		<p>Perlengkapan praktikum dapat dilihat di <a href="">bit.ly/perlengkapan</a></p>
	</div>
	<div id="asisten">
		<h3># Daftar Asisten</h3>
		<ul class="list-group">
			<?php foreach ($asisten as $i): ?>
				<li class="list-group-item" style="width: 500px">
					<?= $i['nama']; ?>
					<a class="btn btn-primary badge badge-primary float-right" href="<?= base_url('praktikum/detailasisten/'); ?><?= $i['id']; ?>">detail</a>
					<small class="float-right mr-3"><?= $i['role']; ?></small>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div id="nilai">
		<h3># Nilai Praktikum</h3>
		<p>Nilai Praktikum dapat dilihat di <a href="#">bit.ly/nilaipraktikum</a></p>
	</div>
</div>
