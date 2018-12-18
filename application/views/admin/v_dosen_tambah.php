<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header"<?php echo $sub_judul; ?>">
		</div>
		<div class="card-body">
			<form action="prosesdosen" method="post">
				<div class="form-group">
					<label>NIK</label>
					<input class="form-control" name="nik">
				</div>
				<div class="form-group">
					<label>NAMA DOSEN</label>
					<input class="form-control" name="nama_dosen">
				</div>
				<div class="form-group">
					<label>Alamat</label><br>
					<textarea name="Alamat" placeholder="Hapus pak"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="sumbit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>