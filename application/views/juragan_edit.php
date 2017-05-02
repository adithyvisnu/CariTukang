<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = $this->uri->segment(3);
$data = $this->db->get_where('tb_juragan',array('ID_juragan'=>$id))->row();
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<h3>Edit Juragan</h3>
			<form class="form-horizontal" action="<?php echo base_url();?>dashboard/edit_juragan" method="POST">
				<b>Nama</b> <br>
				<input type="text" class="form-control" value="<?php echo $data->nama;?>" name="nama" placeholder=" Ex: Adithya Visnu " style="margin-bottom:3px;">
				<input type="hidden" class="form-control" value="<?php echo $data->ID_juragan;?>" name="ID_juragan" placeholder=" Ex: Adithya Visnu " style="margin-bottom:3px;">
				<b>Alamat Lengkap</b> <br>
				<textarea class="form-control" rows="5" name="alamat" placeholder=" Sertakan alamat lengkap dari kota hingga rt dan rw .." style="margin-bottom:3px; resize:none;"><?php echo $data->alamat;?></textarea>
				<b>Nomor HP</b> <br>
				<input type="text" class="form-control" value="<?php echo $data->telp;?>" name="telp" placeholder="Nomor HP. Ex: 081234567xxx" style="margin-bottom:3px;" readonly>
				<div class="form-group">
					<div class="col-sm-offset-8 col-sm-4">
						<button type="submit" class="btn btn-success btn-block">Edit Data (^)</button>
					</div>
				</div>
			</form>
			<br>
			<br>
			<a href="" class="btn btn-danger"> Hapus juragan ini? (-)</a>
		</div>
	</div>
</div>
