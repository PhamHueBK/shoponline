<?php $__env->startSection('content'); ?>
<section id="main-content">
     <section class="wrapper site-min-height">
         <h3><i class="fa fa-angle-right"></i>Edit User</h3>
         <?php if(Session::has('success')): ?>
         <p style="color: red"><?php echo e(Session::get('success')); ?></p>
         <?php endif; ?>
         <div class="row mt">
             <div class="col-lg-12">
               <?php echo Form::model($item,['url' => ['admin/user/show',$item->id], 
                                      'method' => 'PATCH', 
                                      'files' => true]); ?>

               <table class="table">
                    <tr>
                         <td><label for="name">Name : </label></td>
                         <td><?php echo Form::text('name',null,['id' => 'title', 
                                                         'class' => 'form-control',
                                                         'required' => true]); ?></td>
                        <?php echo $errors->first('name','<p>:message</p>'); ?>

                    </tr>
                    <tr>
                         <td><label for="gender">Gender : </label></td>
                         <td>
                            <?php echo Form::radio('gender', 'male', true); ?>Male
                            <?php echo Form::radio('gender', 'female'); ?>Female

                         </td>
                        <?php echo $errors->first('name','<p>:message</p>'); ?>

                    </tr>
                    <tr>
                         <td><label for="email">Email : </label></td>
                         <td><?php echo Form::text('email',null,['id' => 'email','class' => 'form-control']); ?></td>
                         <?php echo $errors->first('email','<p>:message</p>'); ?>

                    </tr>
                    <tr>
                         <td><label for="phone">Phone : </label></td>
                         <td><?php echo Form::text('phone',null,['id' => 'phone', 'class' => 'form-control']); ?></td>
                         
                    </tr>
                    <tr>
                         <td><label for="birthday">Date of Birth : </label></td>
                         <td><?php echo Form::date('birthday',null,['id' => 'birthday', 'class' => 'form-control', 'required' => true]); ?></td>
                          <?php echo $errors->first('dob','<p>:message</p>'); ?>

                    </tr>
                    <tr>
                         <td><label for="address">Address : </label></td>
                         <td><?php echo Form::text('address',null,['id' => 'address','class' => 'form-control']); ?></td>
                         
                    </tr>
                    <tr>
                         <td><label for="Avatar">Avatar : </label></td>
                         <td><?php echo Form::file('avatar',['class' => 'form-control']); ?></td>
                         
                    </tr>
                    <tr>
                         <td colspan="2">
                              <?php echo Form::submit('Save'); ?>

                         </td>
                    </tr>
               </table>
               <?php echo Form::close(); ?>

     </div>
</div>

</section>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>