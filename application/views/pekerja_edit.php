<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = $this->uri->segment(3);
$data = $this->db->get_where('tb_pekerja',array('ID_pekerja'=>$id))->row();
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<h3>Edit Pekerja</h3>
			<form class="form-horizontal" action="<?php echo base_url();?>pekerja/edit_pekerja" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-9">
						<input type="text" value="<?php echo $data->nama ;?>" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
						<input type="hidden" value="<?php echo $data->ID_pekerja ;?>" name="ID_pekerja" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="alamat" rows="5" id="inputPassword3" style="resize: none;" placeholder="Sertakan alamat asli dan lengkap anda" required><?php echo $data->alamat ;?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Telepon</label>
					<div class="col-sm-9">
						<input type="text" readonly="true" value="<?php echo $data->telp ;?>" name="telp" class="form-control readonly" id="inputPassword3" placeholder="No. HP. Ex:0812345xxx" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Keahlian</label>
					<div class="col-sm-9">
						<select name="ID_keahlian" class="form-control" placeholder="No. HP. Ex:0812345xxx" required>
							<option value="">--Pilih Keahlian--</option>
							<?php 
								foreach ($keahlian as $a) {
									# code...
									$c = $a->ID_keahlian;
									$d = $data->ID_keahlian;
									if ($c == $d) {
										# code...
										
										echo "<option value='$a->ID_keahlian' selected >$a->keahlian</option>";
									} else {
										echo "<option value='$a->ID_keahlian' >$a->keahlian</option>";
									}
									
								}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-3 control-label">Bayaran/Waktu</label>
					<div class="col-sm-9">
						<input type="text" value="<?php echo $data->bayaran ;?>" name="bayaran" class="form-control" id="inputPassword3" placeholder="Ch : Rp. 50000/hari" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-8 col-sm-4">
						<button type="submit" class="btn btn-success btn-block">Edit Data (^)</button>
					</div>
				</div>
			</form>
			<br>
			<br>
			<a href="" class="btn btn-danger"> Hapus perkerja ini? (-)</a>
		</div>
	</div>
</div>
