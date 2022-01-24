
    

    <?php $__env->startSection('title', 'Admin'); ?>
    
    
    <?php $__env->startSection('link'); ?>
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png" type="image/x-icon')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png" type="image/x-icon')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Teacher Management</title>
    <!-- Google font-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/icofont.css')); ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/themify.css')); ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flag-icon.css')); ?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/feather-icon.css')); ?>">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link id="color" rel="stylesheet" href="<?php echo e(asset('assets/css/color-1.css" media="screen')); ?>">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Teacher Management</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route("admin_index")); ?>">Home</a></li>
                    <li class="breadcrumb-item">TeacherManagement</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Base styles-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Teacher list</h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="example-style-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Avatar</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Birth of Date</th>
                            <th>Status</th>
                            <th>Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $Teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($value->id); ?></td>
                            <td><?php echo e($value->Ten); ?></td>
                            <td><img style="width:120px;height:80px;"src="<?php echo e(asset('extra-images')); ?>/<?php echo e($value->AVT); ?>"></td>   
                            <td><?php echo e($value->Phone); ?></td>
                            <td><?php echo e($value->Email); ?></td>
                            <td><?php echo e($value->DiaChi); ?></td>
                            <td><?php echo e($value->NgaySinh); ?></td>
                            <td><?php echo e($value->TrangThai); ?></td>
                            <td>
                              
                             <a href="<?php echo e(route('showcreateAccount')); ?>"> <button type="button" class="btn btn-default"><i class="fa fa-plus"></i></button></a>
                             <a href="<?php echo e(route('showupdateAccount', ['id' => $value->id])); ?>"> <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></button></a>
                              <a href="<?php echo e(route('deleteAccount', ['id' => $value->id])); ?>"> <button type="button"  class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

                              

                            </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Base styles Ends-->
            
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>

    <!-- latest jquery-->
    <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <!-- feather icon js-->
    <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <!-- Plugin used-->
  </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masteradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/484_466_436_PHP/elearning/resources/views/admin/TeacherManagement.blade.php ENDPATH**/ ?>