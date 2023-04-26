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
		<?php $this->load->view('admin/_partials/navbar.php') ?>
			<?php $this->load->view('admin/_partials/side_nav.php') ?>

				  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Produk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
			  <form action="" method="POST">
  		<div class="form-group">
    <label for="nama" class="form-label">Nama*</label>
    	<input type="text" placeholder="Nama Produk"  autocomplete="off" name="nama" class="form-control" value="<?= $produk->nama ?>" required >
  		</div>

		  <div class="form-row">
		  <div class="col"> 
		<div class="form-group" style="width: 250x">
    <label for="qty" class="form-label">Quantity</label>
    	<input type="number" name="qty" class="form-control" value="<?= $produk->qty ?>" required >
 		 </div>
		  </div>
		
		  <div class="col">
			 <div class="form-group" style="width: 250x">
			<label for="price" class="form-label">Harga</label>
		  <input type="number" name="price" class="form-control " value="<?= $produk->price ?>" required >
			  </div>
		  </div>
		  </div>
		 
		  <button type="submit" class="btn btn-primary" value="false">Simpan</button>
	 </div>
  		
			</form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->


						
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
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
