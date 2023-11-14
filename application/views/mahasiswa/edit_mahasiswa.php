<div class="content-wrapper">
	<!-- Content -->


	<div class="col-md-6 my-5" style="margin-left: 350px;">
		<div class="card mb-4">
			<h5 class="card-header">Form
				<?= $judul ?>
			</h5>
			<div class="card-body">
				<form action="" method="post">
					<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama</label>
						<input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="nama anda" />
						<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">NIM</label>
						<input type="number" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="nim anda" />
						<?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
						<select class="form-select" name="jenis_kelamin" value="<?= $mahasiswa['jenis_kelamin']; ?>" id="exampleFormControlSelect1" aria-label="Default select example">
							<option selected>pilih -</option>
							<option value="Laki-laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki") {
															echo "selected";
														} ?>>Laki-laki</option>
							<option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
															echo "selected";
														} ?>>Perempuan</option>
						</select>
						<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input type="email" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="email anda" />
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlSelect1" class="form-label">Program Studi</label>
						<select class="form-select" name="prodi" value="<?= $mahasiswa['prodi']; ?>" id="exampleFormControlSelect1" aria-label="Default select example">
							<?php foreach ($prodi as $p) : ?>

								<option value="<?= $p['id'] ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
																	echo "selected";
																} ?>> <?= $p['nama']; ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
						<input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="cth: SMK Muhammadiyah" />
						<?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nomor Hape</label>
						<input type="number" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="081xxxxxxxxx" />
						<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div>
						<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
						<textarea class="form-control" name="alamat" value="<?= $mahasiswa['alamat']; ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
						<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mt-4 text-end">
						<a href="<?= base_url('MahasiswaController') ?>" class="btn btn-secondary">Kembali</a>
						<button type="submit" class="btn btn-primary">Ubah</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>