<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-1">
			<center><img src="<?php echo base_url();?>assets/img/logo.png" style="object-fit:cover" height="35px"></center>
		</div>
		<div class="col-md-5 text-center">
			<form method="GET" action="<?php echo base_url();?>search/result/">
				<div class="input-group">
					<input type="text" class="form-control" value="<?php echo $this->input->get('keyword');?>" name="keyword" placeholder="Ketikan nama atau pekerjaan atau masalah yang anda butuhkan..">
					<span class="input-group-btn">
				    	<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
				    </span>
				</div>
			</form>
		</div>
	</div>

<?php
	if ($hasil == 0) {
		# code...
		?>
		<div class="col-md-offset-3 col-md-6 text-center">
			<h3><?php echo $pekerja;?></h3>
		</div>
		<?php
	} else {
	foreach ($pekerja as $data) :
?>
	<div class="col-md-offset-3 col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-8">
					<div class="col-xs-3">
						<img src="<?php echo base_url();?>assets/img/prof_pict/<?php echo $data->foto;?>" width="50px;" height="50px" style="object-fit:cover;border-radius:50%;">
					</div>
					<div class="col-xs-9">
						<h4><i class="glyphicon glyphicon-user"></i> <?php echo $data->nama;?> <small><br><br>
						<i class="glyphicon glyphicon-phone"></i> <?php echo $data->telp;?> </small></h4>
					</div>
				</div>
				<div class="col-md-4">
					<b>	
						<?php
						$id = $data->ID_keahlian;
						$data_keahlian=$this->db->get_where("tb_keahlian", array('ID_keahlian' => $id ))->row();
						echo $data_keahlian->keahlian;
						?> 
					</b><br><br>
					<div style="font-size:0.8em;float:left">Disukai: <br> <b><?php echo $data->rating;?></b> pekerjaannya</div>
					<div style="font-size:0.8em;float:right">
					<?php
						if ($this->session->login) {
							# code...
					?>
						<a href="<?php echo base_url();?>search/review/<?php echo $data->ID_pekerja; ?>" class="btn btn-warning" title="Review Adithya Visnu Prasetyo Putra"> <i class="glyphicon glyphicon-star"></i> </a>
					<?php
						}
					?>
					</div>
				</div>
			</div>
			<div class="panel-footer" style="font-size:0.9em;">
				<i class="glyphicon glyphicon-road"></i> <?php echo $data->alamat;?>, Bayaran <b><?php echo $data->bayaran;?></b>
			</div>
		</div>
	</div>
<?php endforeach; }?>

</div>
