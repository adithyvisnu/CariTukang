<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-4">
			<h3>Tambahkan Juragan</h3>
			<form method="POST" action="<?php echo base_url();?>dashboard/add_juragan/">
				<b>Nama</b> <br>
				<input type="text" class="form-control" name="nama" placeholder=" Ex: Adithya Visnu " style="margin-bottom:3px;">
				<b>Alamat Lengkap</b> <br>
				<textarea class="form-control" rows="5" name="alamat" placeholder=" Sertakan alamat lengkap dari kota hingga rt dan rw .." style="margin-bottom:3px; resize:none;"></textarea>
				<b>Nomor HP</b> <br>
				<input type="text" class="form-control" name="telp" placeholder="Nomor HP. Ex: 081234567xxx" style="margin-bottom:3px;">
				<input type="submit" class="btn btn-success">
			</form>
		</div>
		<div class="col-md-8">
			<h3>List Juragan</h3>
			<table class="table" id="tables" style="font-size:0.95em;overflow:auto">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Nomor HP</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						//print_r($keahlian);
						foreach ($juragan as $data) {
							# code...
							echo "<tr>
							<td>$data->nama</td>
							<td>$data->alamat</td>
							<td>$data->telp</td>
							<td><a href='".base_url()."dashboard/edit_juragan/$data->ID_juragan' class='btn btn-default' style='float:right;'><i class='glyphicon glyphicon-edit'></i></a></td>
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
