<div>
	<div class="card">
		<div class="card-header"><?php echo $sub_judul; ?></div>
		<div class="card-body">
			<a href="<?php echo site_url('admin/mahasiswa/tambah'); ?>"class="btn btn-primary btn-lg">Tambah Data</a>
			<table class="table table-bordered">
				<tr>
					<th>NIM</th>
					<th>NAMA MAHASISWA</th>
					<th>Program Studi</th>
					<th>Tgl Dibuat</th>
					<th>Aksi</th>
				</tr>

				<?php foreach ($isi_tabel as $key) { ?>
					<tr>
						<td><?php echo $key->nim; ?></td>
						<td><?php echo $key->nama_mahasiswa; ?></td>
						<td><?php echo $key->program_studi; ?></td>
						<td><?php echo date('d M Y', strtotime($key->created_at) ); ?></td>
						<td>
							Edit | Hapus
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>