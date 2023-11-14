<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="card">
            <h5 class="card-header"><?= $judul ?></h5>
            <a href="<?= base_url() ?>CapresController/tambah" class="btn btn-primary col-2 ml-3 mb-3 text-end"><i
                    class='bx bx-plus'></i>
                Tambah
                Data</a>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Asal</th>
                            <th>Partai Pendukung</th>
                            <th>Riwayat Pekerjaan</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $no = 1; ?>
                        <?php foreach($capres as $c) : ?>
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <span class="fw-medium"><?= $no; ?></span>
                            </td>
                            <td><?= $c['nik']; ?></td>
                            <td>
                                <?= $c['nama_lengkap']; ?>
                            </td>
                            <td>
                                <?= $c['asal']; ?>
                            </td>
                            <td>
                                <span class="badge bg-label-primary me-1"><?= $c['partai_pendukung']; ?></span>
                            </td>
                            <td>
                                <?= $c['riwayat_pekerjaan']; ?>
                            </td>
                            <td>
                                <?= $c['umur']; ?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <box-icon name='chevron-down'></box-icon>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="<?= base_url('CapresController/edit/') . $c['id'];?>"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item"
                                            href="<?= base_url('CapresController/hapus/') . $c['id'];?>"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                        <a class="dropdown-item"
                                            href="<?= base_url('CapresController/detail/') . $c['id'];?> "><i
                                                class='bx bx-detail'></i>
                                            Detail</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $no++?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
    <!-- / Content -->