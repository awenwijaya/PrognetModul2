<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Edit Foto Profile</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-md-10 col-md-offset-1">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>
                        <img style="width:150px; height:150px; border-radius:100px;" src="/uploads/avatars/<?php echo e($user->profile_image); ?>">
                        <h1><?php echo e($user->name); ?>'s Profile</h1>
                <form enctype="multipart/form-data" action="home" method="POST">
                    <div class="form-group">
                        <h5>Update Profile Image</h5>
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Anda yakin ingin mengganti foto profile?')">
                    </div>
                    <div class="form-group">
                    </div>
                </form>
                </div>
            </div>
      <div class="super_container">
    <div class="home">
    <div class="home_slider_container">
        <div class="container">
            <table class="table table-bordered">    
            <div class="row">
                <td>
                <div class="col-md-10 col-md-offset-1">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>
                    <div class="form-group" style="width:500px;margin-left:150px;">
                        <img style="width:150px; height:150px; border-radius:100px;" src="/uploads/avatars/<?php echo e($user->profile_image); ?>">
                    </div>
                    <div class="form-grup" style="width:500px;margin-left:67px;">
                        <h1><?php echo e($user->name); ?>'s Profile</h1>
                    </div>
                    <div class="form-group">
                        <table class="table table-striped table-bordered " align='center' >
                            <tbody>
                              <tr>
                                <th>Nama</th>
                                <td><?php echo e($user->name); ?></td>
                              </tr>
                              <tr>
                                <th>Email</th>
                                <td><?php echo e($user->email); ?></td>
                              </tr>
                              <tr>
                                <th style="padding-top:20px;">Status</th>
                                <td>
                                    <img style="width:40px; height:40px;margin-bottom:3px;margin-left:-12px;" src="https://cdn.clipart.email/0638765a3f2a64a229becd27379510f8_facebook-verified-logo-logodix_1024-1024.png" alt="">Verified</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-warning btn-icon-text" style="margin-left:157px;">
                            <i class="mdi mdi-file-restore btn-icon-prepend "></i>     
                            <a href="" style="color: white;" data-toggle="modal" data-target="#myModal">Edit Foto Profile</a>
                      </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\awenh\Documents\College Stuffs\PRAKTIKUM\PRAKTIKUM PROGNET\WEB PRAK. PROGNET\Praktikum Prognet Experiment - Percobaan 2 - Copy - Copy (2)\resources\views/home.blade.php ENDPATH**/ ?>