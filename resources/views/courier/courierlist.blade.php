<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Estore Admin's Page | Courier's Table</title>

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
            <h1 class="m-0 text-dark"> Admin <small>Courier's Table</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/admin/crud">CRUD Pages</a></li>
              <li class="breadcrumb-item"><a href="/couriers">Couriers</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="table">
        <h2 class="card-title" align="center">Couriers</h2>
        <br>
            <button type="button" class="btn-sm btn-success btn-icon-text" onclick="">
                    <i class="mdi mdi-upload btn-icon-prepend fa fa-plus"></i>     
                    <a href="{{ route('couriers.create') }}" style="color: white;">Add</a>
            </button>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
					        <th>
						          No.
					        </th>
                    <th>
                      Courier Name
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($couriers as $courier)
                  <tr>
					<td>{{ $loop->iteration }}</td>
                    <td>{{ $courier->courier }}</td>
                    <td>
                        <a class="btn-sm btn-warning fa fa-pencil" href="{{ route('couriers.edit',$courier->id)}}"></a>

              <form action="{{ route('couriers.destroy', $courier->id)}}" method="post">
							{{ csrf_field() }}
							@method('DELETE')
							<button class="btn btn-danger fa fa-trash" type="submit" onclick="return confirm('Apa yakin ingin menghapus data ini?')"></button>
						  </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {!! $couriers->links() !!}
            </div>
          </div>
        </div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
