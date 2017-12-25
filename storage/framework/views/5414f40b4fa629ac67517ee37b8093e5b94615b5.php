<?php $__env->startSection('main'); ?>
<div class="row mt">
  <div class="col-lg-6">
   <div class="form-panel">
    <h4 class="mb"><i class="fa fa-angle-right"></i>Update Product </h4>

    <?php echo Form::model($product,['method'=>'PATCH','url'=>['admin/product',$product->id],'class'=>'form-horizontal style-form','files'=>true]); ?>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <?php echo Form::text('name',$product->name,['class'=>'form-control','placeholder'=>'Input name product ...']); ?>

        <?php echo $errors->first('name','<p style="color:red">:message</p>'); ?>

      </div>


    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Price</label>
      <div class="col-sm-10">
        <?php echo Form::text('price',$product->price,['class'=>'form-control','placeholder'=>'Input price product ...']); ?>

      </div>
      <?php echo $errors->first('price','<p style="color:red">:message</p>'); ?>

    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Discount</label>
      <div class="col-sm-10">
        <?php echo Form::text('discount',$product->discount,['class'=>'form-control','placeholder'=>'Input discount product ...']); ?>

      </div>
      <?php echo $errors->first('discount','<p style="color:red">:message</p>'); ?>

    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Count</label>
      <div class="col-sm-10">
        <?php echo Form::text('count',$product->count,['class'=>'form-control','placeholder'=>'Input count product ...']); ?>

      </div>
      <?php echo $errors->first('count','<p style="color:red">:message</p>'); ?>

    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        <?php echo Form::textarea('description',$product->description,['class'=>'form-control','style'=>'height:100px']); ?>

      </div>
      <?php echo $errors->first('description','<p style="color:red">:message</p>'); ?>

    </div>

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Thumbnail</label>
      <div class="col-sm-10">
        <?php echo Form::file('thumbnail',['class'=>'form-control']); ?>

      </div>
      <?php echo $errors->first('thumbnail','<p style="color:red">:message</p>'); ?>

    </div>
    
    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Category</label>
      <div class="col-sm-10">
        <?php echo Form::select('categoryId',['1'=>'Phone','2'=>'Laptop','3'=>'TV'],$product->category_id, ['placeholder' => 'Pick a category...']); ?>

      </div>
      <?php echo $errors->first('categoryId','<p style="color:red">:message</p>'); ?>

    </div>
    

    <div class="form-group">
      <label class="col-sm-2 col-sm-2 control-label">Supplier</label>
      <div class="col-sm-10">
        <?php echo Form::select('supplierId',['1'=>'Công ty HHP','2'=>'Công ty MAM','3'=>'Công ty LAP','4'=>'Công ty PNG'],$product->supplier_id, ['placeholder' => 'Pick a supplier...']); ?>

      </div>
      <?php echo $errors->first('supplierId','<p style="color:red">:message</p>'); ?>

    </div>
    
<div class="form-group">
  <?php echo Form::submit('Update',['class'=>'btn btn-primary']); ?>

  <?php echo Form::reset('Reset',['class'=>'btn btn-primary']); ?>

</div>


<?php echo Form::close(); ?>

</div> 
</div><!-- col-lg-12-->       
</div><!-- /row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>