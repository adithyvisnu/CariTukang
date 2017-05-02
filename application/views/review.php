<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$data = $this->db->get_where('tb_pekerja',array('ID_pekerja'=>$id))->row();
?><!DOCTYPE html>

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
					</div>
				</div>
			</div>
			<div class="panel-footer" style="font-size:0.9em;">
				<i class="glyphicon glyphicon-road"></i> <?php echo $data->alamat;?>, Bayaran <b><?php echo $data->bayaran;?></b>
			</div>
		</div>
	</div>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<h3>Review Pekerja</h3>
			<form action="<?php echo base_url();?>reviews/review" method="POST">
				<input type="hidden" value="<?php echo $data->ID_pekerja;?>" name="ID_pekerja">
				<input type="hidden" value="<?php echo $this->session->username;?>" name="ID_pereview">
				<input type="hidden" value="<?php echo $this->session->level;?>" name="level_pereview">
				<div class="form-group">
					<label for="inputPassword3">Bagaimana yang bersangkutan melakukan pekerjaannya?</label>
					<textarea class="form-control" name="review" rows="5" id="inputPassword3" style="resize: none;" placeholder="Apakah hasilnya bagus atau sedang-sedang saja?" required></textarea>
				</div>

				<div class="form-group">
					<label for="inputPassword3">Senang atau tidak</label>
					<label class="radio-inline">
						<input type="radio" name="likes" id="inlineRadio1" value="1"> Senang
					</label>
					<label class="radio-inline">
						<input type="radio" name="likes" id="inlineRadio2" value="0"> Tidak
					</label>
				</div>
				<small><i>*Data Review tidak dapat diubah, jadi yakinkan data yang anda masukkan adalah data yang sesuai dengan kejadian</i></small><br>
				<div class="form-group">
					<div class="col-sm-offset-8 col-sm-4">
						<button type="submit" class="btn btn-success btn-block">Review</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
