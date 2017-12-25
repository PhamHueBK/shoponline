<?php $__env->startSection('content'); ?>
<div class="top-brands">
		<div class="container">
		<div class="section group">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #f1f1f1;text-align: center;">
				<br>
				<h1>Dashboard</h1>
				<br>
				<h1>
					<img src="<?php echo e(asset('uploads/users/'.Auth::user()->avatar)); ?>" width="50px" height="50px">
					<br>
					<?php echo e(Auth::user()->name); ?>

				</h1>
				<br>
				<ul>
					<li style="background-color: #53EF0E;padding:7px">
						<a class="ico ico-user" href="<?php echo e(url('profile')); ?>">
							<p style="font-size: 20px;">Profile</p>
						</a>
					</li>
				</ul>
				<br>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<table class="table table-bordered table-striped">
					<?php if(Session::has('failed')): ?>
						<p style="color: #00F0FF"><?php echo e(Session::get('failed')); ?></p>
					<?php endif; ?>
					<p style="color: red;list-style-type: afar;object-position: bottom;"><?php echo e($errors->first('password', ':message')); ?></p>
					<?php echo Form::open(['method' => 'POST', 'url' => 'profile/change-password/'.Auth::user()->id]); ?>

					<thead>
						<tr>
							<th colspan="2" style="text-align: center;">Change pasword</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo e(trans('account.password')); ?></td>
							<td>
								<?php echo Form::password('old_password', ['class' => 'form-control']); ?>

							</td>
						</tr>
						<tr>
							<td><?php echo e(trans('account.new-password')); ?></td>
							<td>
								<?php echo Form::password('password', ['class' => 'form-control']); ?>

							</td>
						</tr>
						<tr>
							<td><?php echo e(trans('account.confirm-password')); ?></td>
							<td>
								<?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;">
								<?php echo Form::submit('Save'); ?>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-header-and-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>