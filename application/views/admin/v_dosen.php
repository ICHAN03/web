<div>
	<div class="card">
		<div class="card-header"><?php echo $sub_judul; ?></div>
		<div class="card-body">
			<a href="<?php echo site_url('admin/dosen/tambah'); ?>"class="btn btn-primary btn-lg">Tambah Data</a>
			<table class="table table-bordered">
				<tr>
					<th>NIK</th>
					<th>NAMA Dosen</th>
					<th>Alamat</th>
					<th>Tgl Dibuat</th>
					<th>Aksi</th>
				</tr>

				<?php foreach ($isi_tabel as $key) { ?>
					<tr>
						<td><?php echo $key->nik; ?></td>
						<td><?php echo $key->nama_dosen; ?></td>
						<td><?php echo $key->alamat; ?></td>
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