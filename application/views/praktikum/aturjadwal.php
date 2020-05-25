<div class="container">
	<h1 class="text-center mb-5">Ambil Jadwal Praktikum</h1>
	<form class="mx-auto" action="" method="post" style="width: 600px">
		<div class="form-group">
			<label for="modul">Modul</label>
			<select class="form-control" id="modul" name="modul">
				<?php foreach ($aturJadwal['modul'] as $i): ?>
					<option value="<?= $i['modul'] ?>"><?= $i['modul']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="hari">Hari</label>
			<select class="form-control" id="hari" name="hari">
				<?php foreach ($aturJadwal['hari'] as $i): ?>
					<option value="<?= $i['hari']; ?> - <?= $i['tanggal']; ?>"><?= $i['hari']; ?> - <?= $i['tanggal']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="waktu">Waktu</label>
			<select class="form-control" id="waktu" name="waktu">
				<?php foreach ($aturJadwal['waktu'] as $i): ?>
					<option value="<?= $i['jam']; ?>"><?= $i['jam']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<button class="btn btn-primary float-right" type="submit" name="atur">Ambil Jadwal</button>
	</form>
</div>
