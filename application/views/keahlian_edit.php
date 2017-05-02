<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = $this->uri->segment(3);
$data = $this->db->get_where('tb_keahlian',array('ID_keahlian'=>$id))->row();
?><!DOCTYPE html>

<div class="container" style="margin-top:10px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<h3>List Keahlian</h3>
			Tambahkan keahlian
			<form method="POST" action="<?php echo base_url();?>dashboard/edit_keahlian/">
				<input type="hidden" class="form-control" name="ID_keahlian" style="margin-bottom:3px;" value="<?php echo $data->ID_keahlian?>">
				<input type="text" class="form-control" name="keahlian" style="margin-bottom:3px;" value="<?php echo $data->keahlian?>">
				<textarea rows="7" class="form-control" name="keyword" style="resize:none;margin-bottom:3px;"><?php echo $data->keyword?></textarea>
				<input type="submit" class="btn btn-success">
			</form>
		</div>
	</div>
</div>
