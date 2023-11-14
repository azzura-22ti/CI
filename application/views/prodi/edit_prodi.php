<div class="content-wrapper">
	<!-- Content -->


	<div class="col-md-6 my-5" style="margin-left: 350px;">
		<div class="card mb-4">
			<h5 class="card-header">Form
				<?= $judul ?>
			</h5>
			<div class="card-body">
				<form action="" method="post">
					<input type="hidden" name="id" value="<?= $prodi['id']; ?>">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Program Studi</label>
						<input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="program studi" />
						<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Ruangan</label>
						<input type="number" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="exampleFormControlInput1" />
						<?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Jurusan</label>
						<input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="jurusan" />
						<?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Akreditasi</label>
						<input type="text" name="akreditasi" value="<?= $prodi['jurusan']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="akreditasi" />
						<?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>') ?>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Kaprodi</label>
						<input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="nama kaprodi" />
						<?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Tahun Berdiri</label>
						<input type="number" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="exampleFormControlInput1" />
						<?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Output Lulusan</label>
						<input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="exampleFormControlInput1" />
						<?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="mb-3">
						<img src="<?= base_url('assets/img/prodi/') . $prodi['gambar'] ?>" style="width: 200px;" class="img-thumbnail" alt="">
						<div class="custom-file">
							<label for="formFile" class="form-label"></label>
							<input class="form-control" name="gambar" type="file" id="formFile">
							<?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

					</div>

					<div class="mt-4 text-end">
						<a href="<?= base_url('ProdiController') ?>" class="btn btn-secondary">Kembali</a>
						<button type="submit" class="btn btn-primary">Ubah</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>