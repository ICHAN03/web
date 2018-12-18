<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header"<?php echo $sub_judul; ?>>
		</div>
		<div class="card-body">
			<form action="proses_tambah" method="post">
				<div class="form-group">
					<label>NIM</label>
					<input class="form-control" name="nim">
				</div>
				<div class="form-group">
					<label>NAMA MAHASISWA</label>
					<input class="form-control" name="nama_mahasiswa">
				</div>
				<div class="form-group">
					<label>PROGRAM STUDI</label>
					<select class="form-control" name="program_studi">
						<option value="D3 MI">D3 MI</option>
						<option value="D3 TI">D3 TI</option>
						<option value="S1 TI">S1 TI</option>
						<option value="S1 DKV">S1 DKV</option>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="sumbit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>