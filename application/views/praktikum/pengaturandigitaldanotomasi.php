<div class="col-md-8 px-5 main">
	<h1>Praktikum Lab. Pengaturan Digital dan Otomasi</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eveniet placeat quis! Accusantium, ad architecto atque debitis deleniti enim et, ex fugit illum magnam officia officiis optio reiciendis repellendus tenetur unde voluptas! Aliquid, asperiores cum eos est id labore modi nesciunt omnis, possimus quia recusandae reiciendis rem saepe sed soluta?</p>
	<div id="info" class="mt-5">
		<h3># Info</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt illum laudantium rerum sapiente tempore? Ad aliquam consequatur cum deleniti illum ipsa laboriosam magnam nesciunt numquam obcaecati omnis, optio porro qui quod saepe tempora vel! Aperiam consectetur consequatur eligendi est id necessitatibus neque nesciunt pariatur quos, repellendus, sint temporibus ullam veniam?</p>
	</div>
	<div id="jadwal">
		<h3># Jadwal Praktikum</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, commodi consequuntur cupiditate dolor dolorem facere nobis obcaecati rem. Atque consectetur maxime necessitatibus nesciunt quasi, quibusdam?</p>
	</div>
	<div id="perlengkapan">
		<h3># Perlengkapan Praktikum</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam, animi autem commodi consequatur deserunt dicta dignissimos ex excepturi minima, molestias, odit porro qui quia quidem reprehenderit ullam voluptas!</p>
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
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum esse exercitationem nobis voluptas voluptates. Accusantium debitis earum eius eligendi magni pariatur quo rerum, ullam velit!</p>
	</div>
</div>
