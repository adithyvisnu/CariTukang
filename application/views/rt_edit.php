<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = $this->uri->segment(3);
$data = $this->db->get_where('tb_perangkat_desa',array('id'=>$id))->row();
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<h3>Tambahkan Perangkat Desa</h3>
			<form method="POST" action="<?php echo base_url();?>dashboard/rt_edit/">
				<b>Nomor KTP</b> <br>
				<input type="hidden" class="form-control" value="<?php echo $data->id;?>" name="id" placeholder="Nomor KTP. Ex: 3277031234567890" style="margin-bottom:3px;">
				<input type="text" class="form-control" value="<?php echo $data->nomor_ktp;?>" name="nomor_ktp" placeholder="Nomor KTP. Ex: 3277031234567890" style="margin-bottom:3px;">
				<b>Nama</b> <br>
				<input type="text" class="form-control" value="<?php echo $data->nama;?>" name="nama" placeholder=" Ex: Adithya Visnu " style="margin-bottom:3px;">
				<b>Alamat Lengkap</b> <br>
				<textarea class="form-control" rows="5"  name="alamat" placeholder=" Sertakan alamat lengkap dari kota hingga rt dan rw .." style="margin-bottom:3px; resize:none;"><?php echo $data->alamat;?></textarea>
				<input type="submit" value="Update data (^)" class="btn btn-success">
			</form>
			<br>
			<br>
			<a href="<?php echo base_url();?>dashboard/rt_delete/<?php echo $id;?>" onclick="return confirm('Hapus akun ini?');" class="btn btn-danger"> Hapus akses ini? (-)</a>
		</div>
	</div>
</div>
