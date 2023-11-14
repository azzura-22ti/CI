<div class="content-wrapper">
	<!-- Content -->


	<div class="col-md-6 my-5" style="margin-left: 350px;">
		<div class="card mb-4">
			<h5 class="card-header">Form
				<?= $judul ?>
			</h5>
			<div class="card-body">
				<form action="<?= base_url('CapresController/upload'); ?>" method="post">

                    <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">NIK</label>
						<input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik anda" />
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
						<input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="nama anda" />
					</div>

                    <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Asal</label>
						<input type="text" name="asal" class="form-control" id="exampleFormControlInput1" placeholder="asal anda" />
					</div>

                    <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Partai Pendukung</label>
						<input type="text" name="partai_pendukung" class="form-control" id="exampleFormControlInput1" placeholder="partai anda" />
					</div>

                    <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Riwayat Pekerjaan</label>
						<input type="text" name="riwayat_pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="riwayat kerja anda" />
					</div>

                    <div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Umur</label>
						<input type="number" name="umur" class="form-control" id="exampleFormControlInput1" placeholder="umur anda" />
					</div>
					
					<div class="mt-4 text-end">
						<a href="<?= base_url('CapresController') ?>" class="btn btn-secondary">Kembali</a>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>