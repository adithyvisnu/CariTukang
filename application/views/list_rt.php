<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-4">
			<h3>Tambahkan Perangkat Desa</h3>
			<form method="POST" name="rt" action="<?php echo base_url();?>dashboard/add_rt/">
				<b>Nomor KTP</b> <br>
				<input type="text" class="form-control" name="nomor_ktp" placeholder="Nomor KTP. Ex: 3277031234567890" style="margin-bottom:3px;">
				<b>Nama</b> <br>
				<input type="text" class="form-control" name="nama" placeholder=" Ex: Adithya Visnu " style="margin-bottom:3px;">
				<b>Alamat Lengkap</b> <br>
				<textarea class="form-control" rows="5" name="alamat" placeholder=" Sertakan alamat lengkap dari kota hingga rt dan rw .." style="margin-bottom:3px; resize:none;"></textarea>
				<b>Username</b> <br>
				<input type="text" class="form-control" name="username" placeholder=" min 12 chars " style="margin-bottom:3px;">
				<b>Password</b> <br>
				<input type="password" class="form-control" name="password" placeholder=" Password " style="margin-bottom:3px;">
				<input type="submit" class="btn btn-success">
			</form>
		</div>
		<div class="col-md-8">
			<h3>List Perangkat Desa</h3>
			<table class="table display" id="tables" style="font-size:0.95em;overflow:auto">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nomor KTP</th>
						<th>Nama, Username</th>
						<th>Alamat</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						//print_r($keahlian);
						foreach ($rt as $data) {
							# code...
							echo "<tr>
							<td>$data->id</td>
							<td>$data->nomor_ktp</td>
							<td>$data->nama, <b>$data->username</b></td>
							<td>$data->alamat</td>
							<td><a href='".base_url()."dashboard/rt_edit/$data->id' class='btn btn-default' style='float:right;'><i class='glyphicon glyphicon-edit'></i></a></td>
							</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#tables').DataTable();
	} );
</script>
