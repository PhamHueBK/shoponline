<?php $__env->startSection('content'); ?>
<section id="main-content">
  <section class="wrapper site-min-height">
   <h3><i class="fa fa-angle-right"></i> User</h3>
   <div class="row">

     <div class="col-md-12">
      <div class="content-panel">
       <h4><i class="fa fa-angle-right"></i>Table users</h4>
       <?php if(Session::has('success')): ?>
          <h3 style="color:red"><?php echo e(Session::get('success')); ?></h3>
       <?php endif; ?>
       <?php if(Session::has('up-failed')): ?>
          <h3 style="color:red"><?php echo e(Session::get('up-failed')); ?></h3>
       <?php endif; ?>
       <?php if(Session::has('down-failed')): ?>
          <h3 style="color:red"><?php echo e(Session::get('down-failed')); ?></h3>
       <?php endif; ?>
       <?php echo Form::open(['method' => 'GET', 'url' => 'admin/user/show']); ?>

          <?php echo Form::text('keyword', null, ['id' => 'keyword',
                                          'placeholder' => 'Enter a keyword',
                                          'class' => 'form-control']); ?>

          <?php echo Form::submit('Search', ['class' => 'btn btn-primary']); ?>

       <?php echo Form::close(); ?>

       <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Avatar</th>
            <th>Job</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Upgrade</th>
            <th>Downgrade</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($value->name); ?></td>
                <td><?php echo e($value->gender); ?></td>
                <td><?php echo e($value->phone); ?></td>
                <td><?php echo e($value->address); ?></td>
                <td>
                  <img src="<?php echo e(asset('uploads/users/'.$value->avatar)); ?>" width="50px" height="50px">
                </td>
                <td>
                  <?php 
                  if($value->group_id == 1) {
                      echo "admin";
                    } else if($value->group_id == 2) {
                      echo "manager";
                    } else {
                      echo "user";
                    }
                  ?>
                </td>
                <td><?php echo e($value->birthday); ?></td>
                <td><?php echo e($value->email); ?></td>
                <?php echo Form::open(['method' => 'POST', 'url' => 'admin/user/upgrade/' . $value->id]); ?>

                  <td>
                    <?php echo Form::submit('Upgrade', ['class' => 'btn btn-success']); ?>

                  </td>
                <?php echo Form::close(); ?>

                <?php echo Form::open(['method' => 'POST', 'url' => 'admin/user/downgrade/' . $value->id]); ?>

                  <td>
                    <?php echo Form::submit('Downgrade', ['class' => 'btn btn-warning']); ?>

                  </td>
                <?php echo Form::close(); ?>

                <td>
                  <button>
                    <a href="<?php echo e(url('admin/user/'.$value->id.'/edit')); ?>">Edit</a>
                  </button>
                </td>
                <td>
                  <?php echo Form::open(['url' => ['admin/user/delete',$value->id],'method' => 'DELETE']); ?>

                    <input type="submit" name="delete" value="Delete" id="delete" onclick="return confirm('Are you sure ?')">
                  <?php echo Form::close(); ?>

                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div><! --/content-panel -->
  </div><!-- /col-md-12 -->
</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>