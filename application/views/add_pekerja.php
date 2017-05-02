<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container">

	<div class="col-md-offset-3 col-md-6 text-center" style="margin-top:10px;">
	<h4>Daftarkan Pekerja<br><small><i><br>*Mohon diisi dengan data asli, nomor telepon bersifat unik (1 nomor untuk 1 orang)</i></small></h4><br>
		<form class="form-horizontal" action="<?php echo base_url();?>action/add_pekerja" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
				<div class="col-sm-9">
					<input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
					<input type="hidden" name="id_penambah" value="<?php echo $this->session->username;?>" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
					<input type="hidden" name="level_penambah" value="<?php echo $this->session->level;?>" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label">Alamat</label>
				<div class="col-sm-9">
					<textarea class="form-control" name="alamat" rows="5" id="inputPassword3" style="resize: none;" placeholder="Sertakan alamat asli dan lengkap anda" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label">Telepon</label>
				<div class="col-sm-9">
					<input type="text" name="telp" class="form-control" id="inputPassword3" placeholder="No. HP. Ex:0812345xxx" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label">Keahlian</label>
				<div class="col-sm-9">
					<select name="ID_keahlian" class="form-control" placeholder="No. HP. Ex:0812345xxx" required>
						<option value="">--Pilih Keahlian--</option>
						<?php 
							foreach ($keahlian as $data) {
								# code...
								echo "<option value='$data->ID_keahlian'>$data->keahlian</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label">Bayaran/Waktu</label>
				<div class="col-sm-9">
					<input type="text" name="bayaran" class="form-control" id="inputPassword3" placeholder="Ch : Rp. 50000 per hari" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label">Foto</label>
				<div class="col-sm-9">
					<input type="file" name="foto" class="form-control" id="inputPassword3" accept="image/*" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-8 col-sm-4">
					<button type="submit" id="btn" class="btn btn-success btn-block">Tambahkan Data (+)</button>
				</div>
			</div>
		</form>
	</div>

</div>
<script type="text/javascript">
	$(document).ready(function () {
		// body...
		$('#btn').click(function(){
			$('#btn').attr('disable','disabled');
		});
	});
</script>