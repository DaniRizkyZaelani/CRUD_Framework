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
	<div class="wrapper">

	 	<!-- Navbar -->
		<?php $this->load->view('admin/_partials/navbar.php') ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('admin/_partials/side_nav.php') ?>
			


		<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></i></span>
              
							<div class="info-box-content">
                <span class="info-box-text"><b>Produk</b></span>
                <span class="info-box-number">
									<div class="info-box-content">
										<h6>Jumlah produk :
										<?= $product_count ?></h6>
									</span>
									</div>
									<!-- /.info-box-content -->

									<a href="<?= site_url('product') ?>" class="button button-primary">Selengkapnya...</a>
									
              <!-- /.info-box-content -->
           	 </div>
            <!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div><!--/. container-fluid -->
    </section>
	<!-- /.content -->

	</div>
  

	 <!-- Control Sidebar -->
	 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

    <!-- Main Footer -->
			<?php $this->load->view('admin/_partials/footer.php') ?>

		</div>
		<!-- ./wrapper -->

	<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
</body>
</html>
