<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-fluid flex-grow-1 container-p-y">
		<!-- Layout Demo -->
		<div class="card">
			<h5 class="card-header">Halaman Program Studi</h5>
			<a href="<?= site_url('ProdiController/tambah') ?>" class="btn btn-primary col-2 ml-3 mb-3 text-end"><i class='bx bx-plus'></i>
				Tambah
				Data</a>
			<div class="table-responsive text-nowrap">
				<?= $this->session->flashdata('message'); ?>
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Prodi</th>
							<th>Ruangan</th>
							<th>Jurusan</th>
							<th>Akreditasi</th>
							<th>Nama Kaprodi</th>
							<th>Tahun Berdiri</th>
							<th>Output Lulusan</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php $no = 1; ?>
						<?php foreach ($prodi as $p) : ?>
							<tr>
								<td>
									<i class="fab fa-angular fa-lg text-danger me-3"></i>
									<span class="fw-medium"><?= $no; ?></span>
								</td>
								<td><?= $p['nama']; ?></td>
								<td>
									<?= $p['ruangan']; ?>
								</td>
								<td><span class="badge bg-label-primary me-1"><?= $p['jurusan']; ?></span></td>
								<td><?= $p['akreditasi']; ?></td>
								<td><?= $p['nama_kaprodi']; ?></td>
								<td><?= $p['tahun_berdiri']; ?></td>
								<td><?= $p['output_lulusan']; ?></td>
								<td><img src="<?= base_url('assets/img/prodi/') . $p['gambar']; ?>" style="width: 100px;" class="img-thumbnail" alt=""></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<box-icon name='chevron-down'></box-icon>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?= base_url('ProdiController/edit/') . $p['id']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
											<a class="dropdown-item" href="<?= base_url('ProdiController/hapus/') . $p['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a>
											<a class="dropdown-item" href="<?= base_url('ProdiController/detail/') . $p['id']; ?> "><i class='bx bx-detail'></i>
												Detail</a>
										</div>
									</div>
								</td>
							</tr>
							<?php $no++ ?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
		<!--/ Layout Demo -->
	</div>
	<!-- / Content -->

	<!-- Footer -->