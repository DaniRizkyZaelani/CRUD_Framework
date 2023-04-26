<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?> ">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?> ">
	<!-- Theme style -->
	<link rel="stylesheet" href=" <?= base_url('assets/dist/css/adminlte.min.css') ?>">
	<link rel="stylesheet" href=" <?= base_url('assets/css/about.css') ?>">	
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- Site wrapper -->	
<div class="wrapper">
	<!-- Navbar -->
		<?php $this->load->view('admin/_partials/navbar.php') ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

			 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
			
		<!-- Main content -->
		<section class="content">

		<div class="container-fluid">
		<div class="d-flex justify-content-center">
			<div class="d-flex flex-column text-center">
				<div class="mb-3">
					<h1>About Me</h1>
				</div>
				<div class="d-flex justify-content-center mb-3">
				<img src="<?= base_url('assets/image/zae.png') ?>" class="rounded-circle mx-auto d-block mb-3" style="border: 1px solid #555;" alt="..." 
				 width="300" height="300">
				</div>
			
				<div class="mb-3">
			<h5>Hallo, Saya Dani Rizky Zaelani. Saya seorang mahasiswa </br>
				di Universitas Informatika & Bisnis Indonesia </h5>
			</div>
			<div class="mb-3">
			<h2>Skills</h2>
			
				<i class="fab fa-html5 fa-3x m-2" style="color: #E54C21"></i></td>
				<i class="fab fa-css3-alt fa-3x m-2" style="color: #264DE4"></i></td>
				<i class="fab fa-js fa-3x m-2" style="color: #F7E018"></i></td>
				<i class="fab fa-php fa-3x m-2" style="color: #787CB4"></i></td>

			</div>
			<div class="mb-3">
			<h2 >Contact</h2>
			<tr>
				<a href="https://github.com/danirizkyzaelani"><i class="fab fa-github fa-3x m-2" style="color:black"></a></i></td>
				<a href="https://www.instagram.com/white_eyes_blue_dragon_/?hl=en"><i class="fab fa-instagram fa-3x m-2" style="color:black"></a></i></td>
				<a href="https://www.facebook.com/danirizkyzaelani.zaelani/"><i class="fab fa-facebook fa-3x m-2" style="color:black"></a></i></td>
				<a href="https://www.linkedin.com/in/dani-rizky/"><i class="fab fa-linkedin fa-3x m-2" style="color:black"></a></i></td>

			</div>
			</div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	<?php $this->load->view('admin/_partials/footer.php') ?>
			
			<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->


		<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
</body>
</html>
