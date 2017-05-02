<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container">


	<div class="col-md-offset-3 col-md-6 text-center" style="margin-top:10px;">
	<h4>Daftar Diri sebagai Juragan<br><small><i><br>*Mohon diisi dengan data asli, nomor telepon bersifat unik (1 nomor untuk 1 orang) yang digunakan untuk pengiriman password</i></small></h4><br>
		<form class="form-horizontal" method="POST" action="<?php echo base_url();?>register/proses">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-10">
					<textarea name="alamat" class="form-control" rows="5" id="inputPassword3" style="resize: none;" placeholder="Sertakan alamat asli dan lengkap anda" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Telepon</label>
				<div class="col-sm-10">
					<input type="text" name="telp" class="form-control" id="inputPassword3" placeholder="No. HP. Ex:0812345xxx" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-10 col-sm-2">
					<button type="submit" class="btn btn-success btn-block">Daftar</button>
				</div>
			</div>
		</form>
	</div>

</div>
