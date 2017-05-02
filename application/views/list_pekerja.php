<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-2">
			<a href="<?php echo base_url();?>pekerja/add" class="btn btn-block btn-primary">Pekerja (+)</a>
		</div>
		<div class="col-md-offset-1 col-md-1">
			<center><img src=" " style="object-fit:cover" height="35px"></center>
		</div>
	</div>
	<div class="col-md-12">
		
		<table class="table" id="tables" style="font-size:0.95em;overflow:auto">
			<thead>
				<tr>
					<th>Nama, Nomor HP</th>
					<th>Alamat</th>
					<th>Keahlian, Rating, Bayaran</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

<?php
	foreach ($pekerja as $data):
?>
			<tr>
				<td>
					<h4><i class="glyphicon glyphicon-user"></i> <?php echo $data->nama;?> <small><br><br>
					<i class="glyphicon glyphicon-phone"></i> <?php echo $data->telp;?></small></h4>
				</td>
				<td>
					<i class="glyphicon glyphicon-road"></i> <?php echo $data->alamat;?> <br><br>
					<?php
						if ($this->session->level == 3) {
							# code...
							if ($data->level_penambah == 3) {
								# code...
								echo "Ditambahkan oleh <b>Super Admin</b>";
							} else {
								$id = $data->id_penambah;
								$nama = $this->db->get_where('tb_perangkat_desa',array('id'=>$id))->row();
								echo "Ditambahkan oleh <b>$nama->nama</b>, ID : $nama->id";
							}
						}
					?>
				</td>
				<td>	
					Disukai: <b><?php echo "$data->rating";?></b>_pekerjaannya <br>
						<?php 
							$keahlian = $this->db->get_where('tb_keahlian',array('ID_keahlian' => $data->ID_keahlian))->row();
							echo $keahlian->keahlian;
						?> 
					 <br>
					<br><b class="label label-success"><?php echo $data->bayaran;?></b>
				</td>
				<td>
					<?php 
							if (($this->session->level == 3) OR (($this->session->level == $data->level_penambah) AND ($this->session->username == $data->id_penambah))) {
						?>
						<center>Edit <br> <a href="<?php echo base_url();?>pekerja/edit_pekerja/<?php echo $data->ID_pekerja;?>" class="btn btn-default" title="Edit Adithya Visnu Prasetyo Putra"> <i class="glyphicon glyphicon-edit"></i> </a></center>
						<?php
							}
						?>
				</td>

			</tr>

<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#tables').DataTable();
	} );
</script>
