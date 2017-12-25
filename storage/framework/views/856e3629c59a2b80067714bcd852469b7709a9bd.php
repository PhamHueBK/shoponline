<?php $__env->startSection('main'); ?>
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            
	                  	  	  <h4><i class="fa fa-angle-right"></i>Product Table</h4>
                            <?php echo Form::open(['method'=>'GET','url'=>'admin/product']); ?>

                                <?php echo Form::text('keyword',null,['placeholder'=>'Search name ....','class'=>'form-control']); ?>

                                <?php echo Form::submit('Search',['class'=>'btn btn-primary']); ?>

                            <?php echo Form::close(); ?>

                            <?php if(Session::has('sucess')): ?>
                            <div class="alert alert-success">
                                <i><p><?php echo e(Session::get('sucess')); ?></p></i>
                            </div>
                            <?php endif; ?>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th><i class="fa fa-bullhorn"></i> Price</th>
                                  <th><i class="fa fa-bullhorn"></i> Count</th>
                                  <th><i class="fa fa-bullhorn"></i> Discount</th>
                                  <th><i class="fa fa-bullhorn"></i> Description</th>
                                  <th><i class="fa fa-bullhorn"></i> Thumbnail</th>
                                  <th><i class="fa fa-bullhorn"></i> Category</th>
                                  <th><i class="fa fa-bullhorn"></i> Supplier</th>
                                  <th colspan="2"><i class="fa fa-bullhorn">Action</i></th>
                                                                    <!-- <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                  <th><i class="fa fa-bookmark"></i> Profit</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th> -->
                              </tr>
                              </thead>
                              <tbody>
                              <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><?php echo e($item->id); ?></td>
                                  <td class="hidden-phone"><?php echo e($item->name); ?></td>
                                  <td><?php echo e(number_format($item->price,0,',','.')); ?> </td>
                                  <td><?php echo e($item->count); ?> </td>
                                  <td><span class="label label-info label-mini"><?php echo e($item->discount); ?>%</span></td>
                                  <td><?php echo e($item->description); ?></td>
                                  <td>
                                    <img src="<?php echo e(asset('uploads/product/'.$item->thumbnail)); ?>" height="50px" width="50px">
                                  </td>
                                  <td class="hidden-phone">
                                      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php if($item->category_id == $temp->id): ?>
                                            <?php echo e($temp->name); ?>

                                        <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </td>
                                  <td class="hidden-phone"> 
                                      <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <?php if($item->supplier_id == $temp->id): ?>
                                            <?php echo e($temp->name); ?>

                                        <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </td>
                                  <td>
                                    
                                      <button class="btn btn-primary btn-xs">
                                         <a href="<?php echo e(url('admin/product/'.$item->id.'/edit')); ?>" style="color:white" class="fa fa-pencil"></a>
                                      </button>
                                   </td>
                                   <td> 
                                      
                                  
                                      <?php echo Form::open(['method'=>'delete','url'=>['admin/product',$item->id]]); ?>

                                      <button class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn xóa không?')" href="<?php echo e(url('admin/product')); ?>" >
                                          <i class="fa fa-trash-o"></i>
                                      </button>
                                      <?php echo Form::close(); ?>

                                  </td>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>