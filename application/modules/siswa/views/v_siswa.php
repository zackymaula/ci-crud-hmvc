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
									<a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
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