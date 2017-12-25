<?php $__env->startSection('main'); ?>
<div class="row mt">
  <div class="col-lg-6">
   <div class="form-panel">
    <h4 class="mb"><i class="fa fa-angle-right"></i>Create New Product </h4>

    <?php echo Form::open(['method'=>'POST','url'=>'admin/category/create','class'=>'form-horizontal style-form','files'=>true]); ?>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Input name product ...']); ?>

        <?php echo $errors->first('name','<p style="color:red">:message</p>'); ?>

      </div>


    </div>
<div class="form-group">
  <?php echo Form::submit('Create',['class'=>'btn btn-primary']); ?>

  <?php echo Form::reset('Reset',['class'=>'btn btn-primary']); ?>

</div>


<?php echo Form::close(); ?>

</div> 
</div><!-- col-lg-12-->       
</div><!-- /row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>