<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container">

	<div class="col-md-offset-3 col-md-6 text-center" style="margin-top:50px;">
		<img src="<?php echo base_url();?>assets/img/logo.png" width="70%">
		<br>
		<br>
		<br>
		<br>
		<form method="GET" action="<?php echo base_url();?>search/result">
			<div class="input-group">
				<input autocomplete="off" type="text" name="keyword" class="form-control" placeholder="Ketikan nama atau pekerjaan atau masalah anda..">
				<span class="input-group-btn">
			    	<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
			    </span>
			</div>
		</form>

	</div>

</div>
