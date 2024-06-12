<div class="row">
    <div class="col-lg-12">
        <form action="<?= base_url('siswa/tambah_aksi') ?>" class="form-horizontal" method="POST">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                    </div>

                    <h2 class="card-title">Tambah Siswa</h2>
                </header>
                <div class="card-body">
                    <div class="form-group row pb-3">
                        <label class="col-sm-4 control-label text-sm-end pt-2">Nama Siswa: </label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_siswa" class="form-control" autofocus>
                            <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>');
                            ?>
                        </div>
                    </div>
                    <div class="form-group row pb-3">
                        <label class="col-sm-4 control-label text-sm-end pt-2">Kelas Siswa: </label>
                        <div class="col-sm-8">
                            <input type="text" name="kelas_siswa" class="form-control">
                            <?= form_error('kelas_siswa', '<div class="text-small text-danger">', '</div>');
                            ?>
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <label class="col-lg-4 control-label text-lg-end pt-2" for="textareaDefault">Alamat Siswa: </label>
                        <div class="col-lg-8">
                            <textarea name="alamat_siswa" class="form-control" rows="3" id="textareaDefault"></textarea>
                            <?= form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>');
                            ?>
                        </div>
                    </div>
                    <div class="form-group row pb-3">
                        <label class="col-sm-4 control-label text-sm-end pt-2">Nomor Telepon: </label>
                        <div class="col-sm-8">
                            <input type="text" name="nomor_telepon" class="form-control">
                            <?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>');
                            ?>
                        </div>
                    </div>
                </div>
                <footer class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </footer>
            </section>
        </form>
    </div>
</div>