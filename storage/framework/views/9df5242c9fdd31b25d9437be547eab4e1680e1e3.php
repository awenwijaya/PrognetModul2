<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Estore Admin's Page | Home</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/adminlte.min.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">
		<!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <span class="brand-text font-weight-light">Estore Admin Dashboard</span>
      </a>
      
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/admin/home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Transaction Report</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Notification</a>
          </li>
          <li class="nav-item">
            <a href="/admin/home/crud" class="nav-link">CRUD Pages</a>
          </li>
        </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li><a href="#"><?php echo e(Session::get('name')); ?></a></li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Admin <small>CRUD Page</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/admin/home/crud">CRUD Pages</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class ="content">
    	<div class="container">
    		<div class="row">
		<div class="table">
			<h2 class="card-title" align="center">List Produk</h2 >
			<br>
		<span>
		<button type="button" class="btn-sm btn-success btn-icon-text" onclick="">
			<i class="mdi mdi-upload btn-icon-prepend fa fa-plus"></i>     
			<a href="<?php echo e(route('products.create')); ?>" style="color: white;">Tambah Produk</a>
		</button>
		</span>
		  <table class="table table-striped table-hover" style="width:1100px;">
			<thead>
			  <tr>
				<th >
					No.
			 	</th>
				<th >
			   		Nama Produk
				</th>
				<th >
				  Kategori
				</th>
				<th style="text-align: center;">
					Diskon
				</th>
				<th colspan="3" style="text-align: center;">
				  Action
				</th>
			  </tr>
			</thead>
			<tbody>
			  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  <tr>
				<td><?php echo e($loop->iteration); ?></td>
				<td><?php echo e($product->product_name); ?></td>
				<td>
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($product->id == $category->product_id): ?>
					  <li><?php echo e($category->category_name); ?></li>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</td>
				<td align="center"><a 
					<?php $__currentLoopData = $discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discounts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($product->id == $discounts->id_product): ?>
							class="btn btn-primary fa fa-percent"
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						class="btn btn-danger fa fa-percent"
					href="<?php echo e(route('discounts.show',$product->id)); ?>"></a></td>
				<td align="center">
					<a class="btn-sm btn-info fa fa-eye" href="<?php echo e(route('products.show',$product->id)); ?>"></a>
				
					<a class="btn-sm btn-warning fa fa-pencil" href="<?php echo e(route('products.edit',$product->id)); ?>"></a>
				
					<a class="btn-sm btn-danger fa fa-trash" href="/products/delete/<?php echo e($product->id); ?>" onclick="return confirm('Apa yakin ingin menghapus data ini?')"></a>
				</td>
			  </tr>  
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		  </table>
		  <?php echo $products->links(); ?>

  </div>
</div>
</div>
</div>
</div>
</div>
</nav>
</div>
<!-- jQuery -->
<script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\awenh\Documents\College Stuffs\PRAKTIKUM\PRAKTIKUM PROGNET\WEB PRAK. PROGNET\Praktikum Prognet Experiment - Percobaan 2 - Copy - Copy (2)\resources\views/product/adminlist.blade.php ENDPATH**/ ?>