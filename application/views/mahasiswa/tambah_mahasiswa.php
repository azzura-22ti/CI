<div class="content-wrapper">
	<!-- Content -->


	<div class="col-md-6 my-5" style="margin-left: 350px;">
		<div class="card mb-4">
			<h5 class="card-header">Form
				<?= $judul ?>
			</h5>
			<div class="card-body">
				<form action="<?= base_url('MahasiswaController/tambah'); ?>" method="post">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama</label>
						<input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="exampleFormControlInput1" placeholder="nama anda" />
						<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">NIM</label>
						<input type="number" name="nim" value="<?= set_value('nim') ?>" class="form-control" id="exampleFormControlInput1" placeholder="nim anda" />
						<?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
						<select class="form-select" name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id="exampleFormControlSelect1" aria-label="Default select example">
							<option selected>pilih -</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input type="email" name="email" value="<?= set_value('email') ?>" class="form-control" id="exampleFormControlInput1" placeholder="email anda" />
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlSelect1" class="form-label">Program Studi</label>
						<select class="form-select" name="prodi" value="<?= set_value('prodi') ?>" id="exampleFormControlSelect1" aria-label="Default select example">
							<option selected>pilih -</option>
							<?php foreach ($prodi as $p) : ?>
								<option value="<?= $p['id']; ?>"><?= $p['nama'] ?></option>
							<?php endforeach; ?>
						</select>
						<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
						<input type="textt" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" class="form-control" id="exampleFormControlInput1" placeholder="cth: SMK Muhammadiyah" />
						<?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nomor Hape</label>
						<input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" id="exampleFormControlInput1" placeholder="081xxxxxxxxx" />
						<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div>
						<label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
						<textarea class="form-control" name="alamat" value="<?= set_value('alamat') ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
						<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mt-4 text-end">
						<a href="<?= base_url('MahasiswaController') ?>" class="btn btn-secondary">Kembali</a>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>