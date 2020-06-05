<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Estore Admin's Page | Product Table</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
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
            <a href="/admin/crud" class="nav-link">CRUD Pages</a>
          </li>
        </ul>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li><a href="#">{{Session::get('name')}}</a></li>
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
              <li class="breadcrumb-item"><a href="/admin/crud">CRUD Pages</a></li>
              <li class="breadcrumb-item"><a href="/products">Products</a></li>
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
			<h2 class="card-title" align="center">Products</h2 >
			<br>
		<span>
		<button type="button" class="btn-sm btn-success btn-icon-text" onclick="">
			<i class="mdi mdi-upload btn-icon-prepend fa fa-plus"></i>     
			<a href="{{ route('products.create') }}" style="color: white;">Add</a>
		</button>
		</span>
		  <table class="table table-striped table-hover" style="width:1100px;">
			<thead>
			  <tr>
				<th >
					No.
			 	</th>
				<th >
			   		Product Name
				</th>
				<th >
				  Category
				</th>
				<th style="text-align: center;">
					Discount
				</th>
				<th colspan="3" style="text-align: center;">
				  Action
				</th>
			  </tr>
			</thead>
			<tbody>
			  @foreach($products as $product)
			  <tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $product->product_name }}</td>
				<td>
				@foreach($categories as $category)
					@if($product->id == $category->product_id)
					  <li>{{ $category->category_name }}</li>
					@endif
				@endforeach
				</td>
				<td align="center"><a 
					@foreach($discount as $discounts)
						@if($product->id == $discounts->id_product)
							class="btn btn-primary fa fa-percent"
						@endif
					@endforeach
						class="btn btn-danger fa fa-percent"
					href="{{ route('discounts.show',$product->id) }}"></a></td>
				<td align="center">
					<a class="btn-sm btn-info fa fa-eye" href="{{ route('products.show',$product->id) }}"></a>
				
					<a class="btn-sm btn-warning fa fa-pencil" href="{{ route('products.edit',$product->id)}}"></a>
				
					<a class="btn-sm btn-danger fa fa-trash" href="/products/delete/{{ $product->id }}" onclick="return confirm('Are you sure want to delete?')"></a>
				</td>
			  </tr>  
			  @endforeach
			</tbody>
		  </table>
		  {!! $products->links() !!}
  </div>
</div>
</div>
</div>
</div>
</div>
</nav>
</div>
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
