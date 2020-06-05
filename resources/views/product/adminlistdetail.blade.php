<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Estore Admin's Page | Product Detail</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
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
            <a href="/admin" class="nav-link">Home</a>
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
            <h1 class="m-0 text-dark"> Admin <small>Product Detail</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="/admin">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <h2 class="card-title" style="text-align: center;">Detail Produk</h2>
        <br>
		<div class="table">
		  <table class="table table-striped table-bordered " align='center' >
			@foreach($products as $product)
			<tbody>
			  <tr>
				<th>Product Name</th>
				<td>{{ $product->product_name }}</td>
			  </tr>
			  <tr>
				<th>Rate</th>
				<td>{{ $product->product_rate }}</td>
			  </tr>
			  <tr>
				<th>Stock</th>
				<td>{{ $product->stock }}</td>
			  </tr>
			  <tr>
				<th>Weight</th>
				<td>{{ $product->weight }}</td>
			  </tr>
			  <tr>
				<th>Price</th>
				<td>Rp. {{number_format($product->price)}}</td>
			  </tr>
			  <tr>
				<th>Product Description</th>
				<td>{{ $product->description }}</td>
			  </tr>
			  <tr>
				<th>Product Category</th>
				<td>
					@foreach($categories as $category)
					  <button class="btn btn-light">{{ $category->category_name }}</button>
					@endforeach
				</td>
			  </tr>
			</tbody>
		  </table>
		  <span>
            <div class="wrapper" align="center">
		  <button type="button" class="btn btn-warning btn-icon-text" onclick="/createProduct">
				<i class="mdi mdi-file-restore btn-icon-prepend fa fa-pencil"></i>     
				<a href="{{ route('products.edit',$product->id)}}" style="color: white;">Edit Data</a>
        </button>
            
		<button type="button" class="btn btn-success btn-icon-text" onclick="/addImage/{{ $product->id }}">
				<i class="mdi mdi-file-restore btn-icon-prepend fa fa-picture-o"></i>     
				<a href="/addImage/{{ $product->id }}" style="color: white;">Add Product's Photo</a>
        </button>
            </div>
		@endforeach
        </span>
        <br>
		</div>
      <br><br>
        <h2 class="card-title" align="center">Product's Photo</h2>
        <br>
		  <div class="table">
			<div class="row">
			 @forelse($image as $images)
			  <div class="col-md-4">
				<div class="thumbnail">
				  <img class="img-fluid-left img-thumbnail" src="/uploads/product_images/{{$images->image_name}}" alt="light" style="width:200px; height:200px;">
				  <form method="post" action="{{ route('product_images.destroy', $images->id) }}">
					@csrf
                    @method('DELETE')
                    <div class="wrapper" align="center">
				  <button type="submit" class="btn btn-danger btn-icon-text fa fa-trash" onclick="return confirm('Apa yakin ingin menghapus gambar ini?')">
                 </button>
                </div>
				 </form>
				</div>
			  </div>
			  @empty
			  <h1 align="center"> No photo!</h1>
			  @endforelse
			</div>
		  </div>
		  
			<h2 align="center" class="card-title">Product Review</h4>
				<br>
				<div class="table">
				  <table class="table table-striped table-bordered " align='center'>
					<thead>
					  <tr>
						<th>No</th>
						<th>User</th>
						<th>Rate</th>
						<th>Review</th>
						<th>Response</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					  @foreach($reviews as $review)
						<tr>
						  <td>{{ $loop->iteration }}</td>
						  <td>{{ $review->name }}</td>
						  <td>{{ $review->rate }}</td>
						  <td>{{ $review->content }}</td>
						  <td>@foreach($responses as $response)
								@if($review->id == $response->review_id)
								  {{ $response->content }}
								@endif
							  @endforeach
						  </td>
						  <td>
							  <button type="button" id="balas" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#response-{{$review->id}}">Reply</button></td>
						</tr>
						<script>
							$('#balas').click(function(e){
								e.preventDefault();
								$('#response-{{$review->id}}').modal();
							});
						</script>
						<!-- Modal -->
							<div class="modal" id="response-{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Response Review</h5>
								  </div>
								  <div class="modal-body">
									<form action="{{route('response.store')}}" method="POST">
									  @csrf
									  <div class="form-group">
										<input type="text" name="" readonly="" value="{{$review->content}}" class="form-control">
									  </div>
									  <div class="form-group">
										<label>Respon</label>
										<input type="text" name="content" class="form-control" style="width: 80%; margin-right: 20px;" placeholder="Respon review">
										<input type="hidden" name="review_id" value="{{$review->id}}">
										<input type="hidden" name="admin_id" value="{{Auth::user()->id}}">
									  </div>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-primary">Kirim</button>
									</form>
								  </div>
								</div>
							  </div>
							</div>
					  @endforeach
					</tbody>
				  </table>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
