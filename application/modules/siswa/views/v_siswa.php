<div class="row">
	<div class="col-lg-12">

		<?= $this->session->flashdata('pesan');
		?>

		<section class="card">
			<header class="card-header">
				<div class="card-actions">
					<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
					<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
				</div>

				<h2 class="card-title">Siswa</h2>
				<a href="<?= base_url('siswa/tambah') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Siswa</a>
			</header>
			<div class="card-body">
				<table class="table table-responsive-md mb-0">
					<thead>
						<tr><!-- class="text-center" -->
							<th>No</th>
							<th>Nama Siswa</th>
							<th>Kelas Siswa</th>
							<th>Alamat Siswa</th>
							<th>Nomor Telepon</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($siswa as $key) : ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $key->nama_siswa ?></td>
								<td><?= $key->kelas_siswa ?></td>
								<td><?= $key->alamat_siswa ?></td>
								<td><?= $key->nomor_telepon ?></td>
								<td>
									<button href="#edit<?= $key->id_siswa ?>" class="mb-1 mt-1 me-1 modal-basic btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
									<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</section>

	</div>
</div>

<!-- <a class="mb-1 mt-1 me-1 modal-basic btn btn-primary" href="#modalHeaderColorPrimary">Primary</a> -->

<?php foreach ($siswa as $key) : ?>
	<div id="edit<?= $key->id_siswa ?>" class="modal-block modal-header-color modal-block-primary mfp-hide">
		<form action="<?= base_url('siswa/edit/' . $key->id_siswa) ?>" class="form-horizontal" method="POST">
			<section class="card">
				<header class="card-header">
					<h2 class="card-title">Edit Data <?= $key->id_siswa ?></h2>
				</header>
				<div class="card-body">
					<div class="modal-wrapper">

						<div class="form-group row pb-3">
							<label class="col-sm-4 control-label text-sm-end pt-2">Nama Siswa: </label>
							<div class="col-sm-8">
								<input type="text" name="nama_siswa" class="form-control" value="<?= $key->nama_siswa ?>" required>
								<?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>');
								?>
							</div>
						</div>
						<div class="form-group row pb-3">
							<label class="col-sm-4 control-label text-sm-end pt-2">Kelas Siswa: </label>
							<div class="col-sm-8">
								<input type="text" name="kelas_siswa" class="form-control" value="<?= $key->kelas_siswa ?>">
								<?= form_error('kelas_siswa', '<div class="text-small text-danger">', '</div>');
								?>
							</div>
						</div>
						<div class="form-group row pb-4">
							<label class="col-lg-4 control-label text-lg-end pt-2" for="textareaDefault">Alamat Siswa: </label>
							<div class="col-lg-8">
								<textarea name="alamat_siswa" class="form-control" rows="3" id="textareaDefault"><?= $key->alamat_siswa ?></textarea>
								<?= form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>');
								?>
							</div>
						</div>
						<div class="form-group row pb-3">
							<label class="col-sm-4 control-label text-sm-end pt-2">Nomor Telepon: </label>
							<div class="col-sm-8">
								<input type="text" name="nomor_telepon" class="form-control" value="<?= $key->nomor_telepon ?>" required>
								<?= form_error('nomor_telepon', '<div class="text-small text-danger">', '</div>');
								?>
							</div>
						</div>
					</div>
				</div>
				<footer class="card-footer">
					<div class="row">
						<div class="col-md-12 text-end">
							<button type="submit" class="btn btn-primary">Edit</button>
							<button type="reset" class="btn btn-default modal-dismiss">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</form>
	</div>
<?php endforeach ?>