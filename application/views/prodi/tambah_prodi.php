<div class="content-wrapper">
    <!-- Content -->


    <div class="col-md-6 my-5" style="margin-left: 350px;">
        <div class="card mb-4">
            <h5 class="card-header">Form
                <?= $judul ?>
            </h5>

            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Program Studi</label>
                        <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="exampleFormControlInput1" placeholder="program studi" />
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ruangan</label>
                        <input type="number" name="ruangan" value="<?= set_value('ruangan') ?>" class="form-control" id="exampleFormControlInput1" />
                        <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" value="<?= set_value('jurusan') ?>" class="form-control" id="exampleFormControlInput1" placeholder="jurusan" />
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Akreditasi</label>
                        <input type="text" name="akreditasi" value="<?= set_value('akreditasi') ?>" class="form-control" id="exampleFormControlInput1" placeholder="akreditasi" />
                        <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" value="<?= set_value('nama_kaprodi') ?>" class="form-control" id="exampleFormControlInput1" placeholder="nama kaprodi" />
                        <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tahun Berdiri</label>
                        <input type="number" name="tahun_berdiri" value="<?= set_value('tahun_berdiri') ?>" class="form-control" id="exampleFormControlInput1" />
                        <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Output Lulusan</label>
                        <input type="text" name="output_lulusan" value="<?= set_value('output_lulusan') ?>" class="form-control" id="exampleFormControlInput1" />
                        <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input class="form-control" name="gambar" type="file" id="formFile">
                    </div>

                    <div class="mt-4 text-end">
                        <a href="<?= base_url('ProdiController') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>