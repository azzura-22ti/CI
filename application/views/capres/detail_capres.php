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
                <h2 class="card-title"><?= $capres['nama_lengkap']; ?></h2>
                <h6 class="card-subtitle mb-4 text-muted"><?= $capres['nik']; ?></h6>

                <div class="row mb-2">
                    <div class="col-md-2">Asal</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $capres['asal']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Partai Pendukung</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $capres['partai_pendukung']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Riwayat Pekerjaan</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $capres['riwayat_pekerjaan']; ?></div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-2">Umur</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $capres['umur']; ?></div>
                </div>

                <div class="row">
                    <a href="<?= base_url('CapresController')?>"
                        class="btn btn-secondary col-1 text-end mt-4">Kembali</a>
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
    <!-- / Content -->

    <!-- Footer -->