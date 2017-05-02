<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AyoMaju.com</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables.css">
</head>
<nav class="navbar navbar-default">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a style="padding:0px;" class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/icon_atas.png" height="40px" style="margin:5"></a>
	</div>	

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<!--ul class="nav navbar-nav">
			<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			</ul>
			</li>
		</ul-->
		<ul class="nav navbar-nav navbar-right">
			<!-- /.kalau sudah login -->
			<?php
				if ($this->session->userdata('login') AND ($this->session->userdata('level') == 3)) {
					# code...
					$nama = $this->db->get_where('tb_juragan',array('ID_juragan'=>$this->session->userdata('username')))->row();
			?>
			<li><a href="<?php echo base_url();?>"> Teras </a></li>
			<li><a href="<?php echo base_url();?>dashboard/"><i class="glyphicon glyphicon-th"></i> Dashboard</a></li>
			<li><a href="<?php echo base_url();?>dashboard/keahlian"><i class="glyphicon glyphicon-cog"></i> Keahlian Dan Keyword</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url();?>dashboard/rt"><i class="glyphicon glyphicon-th-large"></i> Perangkat Desa</a></li>
					<li><a href="<?php echo base_url();?>dashboard/juragan"><i class="glyphicon glyphicon-th"></i> Juragan</a></li>
					<li><a href="<?php echo base_url();?>dashboard/pekerja"><i class="glyphicon glyphicon-user"></i> Pekerja</a></li>
				</ul>
			</li>
			<li><a href="<?php echo base_url();?>dashboard/review"><i class="glyphicon glyphicon-book"></i> Reviews</a></li>
			<li><a href="<?php echo base_url();?>action/logout" onclick="return confirm('Keluar dari hak akses ini?');"> Hai <?php echo $nama->nama;?>, Logout &nbsp;&nbsp;<i class="glyphicon glyphicon-log-out"></i></a></li>
			<?php
				} else if ($this->session->userdata('login') AND ($this->session->userdata('level') == 2)) {
					# code...
					$nama = $this->db->get_where('tb_perangkat_desa',array('id'=>$this->session->userdata('username')))->row();

			?>
			<li><a href="<?php echo base_url();?>"> Teras </a></li>
			<li><a href="<?php echo base_url();?>rt/pekerja"><i class="glyphicon glyphicon-user"></i> Pekerja</a></li>
			<li><a href="<?php echo base_url();?>reviews">List pekerja yang saya review <i class="glyphicon glyphicon-list"></i></a></li>
			<li><a href="<?php echo base_url();?>action/logout" onclick="return confirm('Keluar dari hak akses ini?');"> Hai <?php echo $nama->nama;?>, Logout &nbsp;&nbsp;<i class="glyphicon glyphicon-log-out"></i></a></li>
			<!-- /.navbar-collapse -->
			<?php } else if ($this->session->userdata('login') AND ($this->session->userdata('level') == 1)) {
				# code...
					$nama = $this->db->get_where('tb_juragan',array('ID_juragan'=>$this->session->userdata('username')))->row();
					?>
			<li><a href="<?php echo base_url();?>"> Teras </a></li>
			<li><a href="<?php echo base_url();?>reviews">List pekerja yang saya review <i class="glyphicon glyphicon-list"></i></a></li>
			<li><a href="<?php echo base_url();?>action/logout" onclick="return confirm('Keluar dari hak akses ini?');"> Hai <?php echo $nama->nama;?>, Logout &nbsp;&nbsp;<i class="glyphicon glyphicon-log-out"></i></a></li>
					<?php

			} else { ?>
			<li><a href="<?php echo base_url();?>"> Teras </a></li>
			<li><a href="<?php echo base_url();?>carareview/"><i class="glyphicon glyphicon-star"></i> Cara Review</a></li>
			<li><a href="<?php echo base_url();?>register/"><i class="glyphicon glyphicon-align-justify"></i> Daftar menjadi Juragan</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <i class="glyphicon glyphicon-log-in"></i> <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<form method="POST" action="<?php echo base_url();?>action/login">
							<div class="form-group" style="padding:10px;">
								<input autocomplete="off" type="text" class="form-control" placeholder="Username" name="username" style="margin-bottom:5px;" required>
								<input autocomplete="off" type="password" class="form-control" placeholder="Password" name="password" style="margin-bottom:5px;" required>
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>