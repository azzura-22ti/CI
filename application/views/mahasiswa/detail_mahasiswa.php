<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="card">
            <h5 class="card-header">
                <?= $judul ?>
            </h5>
            <div class="card-body">
                <h2 class="card-title"><?= $mahasiswa['nama']; ?></h2>
                <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>

                <div class="row mb-2">
                    <div class="col-md-2">NIM</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['nim']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Jenis Kelamin</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['jenis_kelamin']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Program Studi</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['prodi']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Asal Sekolah</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['asal_sekolah']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">No Hape</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['no_hp']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Alamat</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['alamat']; ?></div>
                </div>

                <div class="row">
                    <a href="<?= base_url('MahasiswaController')?>"
                        class="btn btn-secondary col-1 text-end mt-4">Kembali</a>
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
    <!-- / Content -->

    <!-- Footer -->