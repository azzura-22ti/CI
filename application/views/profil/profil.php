<div class="container-fluid col-6 text-start">
    <h1 class="mt-4"><?= $judul ?></h1>
    <div class="card mb-3">
        <div class="row">
            <div class="col-4">
                <img src="<?= base_url('assets/img/profile/') .$user['gambar']?>" alt="" class="img-fluid p-4">
            </div>

            <div class="col-6">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>