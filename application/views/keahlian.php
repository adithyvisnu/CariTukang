<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-4">
			<h3>List Keahlian</h3>
			Tambahkan keahlian
			<form method="POST" action="<?php echo base_url();?>dashboard/add_keahlian/">
				<input type="text" class="form-control" name="keahlian" placeholder="Ex: Tukang Kayu" required style="margin-bottom:3px;">
				<textarea rows="6" class="form-control" name="keyword" required  placeholder="Keyword untuk keahlian" style="margin-bottom:3px;resize:none;"></textarea>
				<input type="submit" class="btn btn-success">
			</form>
		</div>
		<div class="col-md-8">
			<h3>Keyword Berdasarkan Keahlian</h3>
			<table class="table display" id="tables" style="font-size:0.95em;overflow:auto">
				<thead>
					<tr>
						<th>List Keahlian</th>
						<th>Keyword</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
					//print_r($keahlian);
					foreach ($keahlian as $data) {
						# code...
						echo "<tr>
						<td>$data->keahlian</td>
						<td>$data->keyword</td>
						<td><a href='".base_url()."dashboard/edit_keahlian/$data->ID_keahlian' class='btn btn-default' style='float:right;'><i class='glyphicon glyphicon-edit'></i></a></td>
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
