<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="card">
            <h5 class="card-header">Halaman Mahasiswa</h5>
            <a href="<?= base_url() ?>MahasiswaController/tambah" class="btn btn-primary col-2"><i class='bx bx-plus'></i>
                Tambah
                Data</a>
            <div class="table-responsive text-nowrap">
                <?= $this->session->flashdata('message'); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $no = 1; ?>
                        <?php foreach ($mahasiswa as $m) : ?>
                            <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <span class="fw-medium"><?= $no; ?></span>
                                </td>
                                <td><?= $m['nama']; ?></td>
                                <td>
                                    <?= $m['nim']; ?>
                                </td>
                                <td><span class="badge bg-label-primary me-1"><?= $m['email']; ?></span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <box-icon name='chevron-down'></box-icon>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?= base_url('MahasiswaController/edit/') . $m['id']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="<?= base_url('MahasiswaController/hapus/') . $m['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                            <a class="dropdown-item" href="<?= base_url('MahasiswaController/detail/') . $m['id']; ?> "><i class='bx bx-detail'></i>
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