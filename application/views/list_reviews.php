<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//echo "<pre>";print_r($review);echo "</pre>";
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="col-md-12">	
		<table class="table table-responsive" id="tables" style="font-size:0.95em;overflow:auto">
			<thead>
				<tr>
					<th>Nama, Telepon</th>
					<th>Alamat, Keahlian</th>
					<th>Total Like</th>
					<th>Review</th>
				</tr>
			</thead>
			<tbody>
<?php
	foreach ($review as $data) :
		$id = $data->id_pekerja;
		$data_pekerja = $this->db->get_where("tb_pekerja",array("ID_pekerja"=>$id))->row();
		
		$id_k = $data_pekerja->ID_keahlian;
		$data_keahlian = $this->db->get_where("tb_keahlian",array("ID_keahlian"=>$id_k))->row();
?>	
		<tr>
			<td>
				<h4><i class="glyphicon glyphicon-user"></i> <?php echo $data_pekerja->nama; ?> <small>
				<i class="glyphicon glyphicon-phone"></i> <?php echo $data_pekerja->telp; ?> </small></h4>
			</td>
			<td>
				<?php echo $data_pekerja->alamat; ?><br>
				<b>	<?php echo $data_keahlian->keahlian; ?>  </b>
			</td>
			<td>
				Disukai: <br> <b><?php echo $data_pekerja->rating; ?> </b> pekerjaannya
			</td>
			<td>
				<?php

					if ($this->session->level == 3) {
						# code...
						$id_pekerja = $data_pekerja->ID_pekerja;
						$this->db->where("id_pekerja",$id_pekerja);
					} else {
						$id = $this->session->username;
						$level = $this->session->level;
						$id_pekerja = $data_pekerja->ID_pekerja;
						$this->db->where("id_pekerja",$id_pekerja);
						$this->db->where("id_pereview",$id);
						$this->db->where("level_pereview",$level);
					}
					$data = $this->db->get('tb_review')->result();

					foreach ($data as $data_review) :
					echo "- ".$data_review->review; 
					if ($this->session->level == 3) {
						# code...
						//$id = $data->id_pekerja;
						$id_pekerja = $data_review->id_pereview;
						if ($data_review->level_pereview==1) {
							# code...
							$data_pekerja = $this->db->get_where("tb_juragan",array("ID_juragan"=>$id_pekerja))->row();
							$level = "J,";
							$id = $data_pekerja->ID_juragan;
						} else {
							$data_pekerja = $this->db->get_where("tb_perangkat_desa",array("id"=>$id_pekerja))->row();
							$level = "RT,";
							$id = $data_pekerja->id;
						}
						echo ", oleh <b>";
						echo $data_pekerja->nama."($level$id)";
						echo "</b>";
					}
					echo br(1);
					endforeach;

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

