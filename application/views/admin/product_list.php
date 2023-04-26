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
                <h3 class="card-title">Produk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
			  <div class="toolbar">
				<a href="<?= site_url('product/new') ?>" class="btn btn-primary mb-2" role="button">+ Tambah Produk</a>
			</div>
			<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nama Produk</th>
						<th style="width: 15%;" class="text-center">Qty</th>			
						<th style="width: 15%;" class="text-center">Harga</th>
						<th style="width: 25%;" class="text-center">Action</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach($produks as $produk): ?>
					<tr>
						<td>
							<div><?= $produk->nama ?></div>
							<div class="text-orange"><small><?= $produk->created_at ?><small></div>
						</td>
						<td style="width: 15%;" class="text-center">
							<div><?= $produk->qty ?></div>
						</td>
						<td style="width: 15%;" class="text-center">
							<div>Rp. <?= number_format($produk->price,0,',','.') ?>.-</div>
						</td>
						<td>
							<div class="action d-flex justify-content-center">
								<a href="<?= site_url('product/edit/'.$produk->id) ?>" class="btn btn-warning mr-1" role="button">Edit</a>
								<a href="#" 
									data-delete-url="<?= site_url('product/delete/'.$produk->id) ?>" 
									class="btn btn-danger ml-1" 
									role="button"
									onclick="deleteConfirm(this)">Delete</a>
									
							</div>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>	
			</div>
			</div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
			
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
	</div>

		</div>
			
	  

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>

	  </div>
		</div><!--/. container-fluid -->
    </section>
	<!-- /.content -->
						
		
	</body>
</html>
