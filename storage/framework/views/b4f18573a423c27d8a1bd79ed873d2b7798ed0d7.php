<?php $__env->startSection('content'); ?>
<div class="top-brands">
		<div class="container">
		<div class="section group">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #f1f1f1;text-align: center;">
				<br>
				<h1>Dashboard</h1>
				<br>
				<h1>
					<img src="<?php echo e(asset('uploads/users/'. Auth::user()->avatar)); ?>" width="100px" height="100px">
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
				<?php if(Session::has('success_change_profile')): ?>
					<p style="color: #00F0FF"><?php echo e(Session::get('success_change_profile')); ?></p>
				<?php endif; ?>

				<?php if(Session::has('success_change_password')): ?>
					<p style="color: #00F0FF"><?php echo e(Session::get('success_change_password')); ?></p>
				<?php endif; ?>
				

				<?php echo Form::open(['method' => 'POST', 'url' => 'profile/'.Auth::user()->id, 'files' => true]); ?>


					<label for="username">Name</label>
					<?php echo Form::text('name', Auth::user()->name, ['id' => 'username', 
													 				'class' => 'form-control']); ?>

					<br>
					<label for="gender">Gender</label><br>
					<div style="margin-left: 30px;margin-top: 5px">
						<?php echo Form::radio('gender', 'male', true); ?>Male
						<?php echo Form::radio('gender', 'female'); ?>Female
					</div>
					<br>
					<label for="email">Email</label>
					<?php echo Form::email('email', Auth::user()->email, ['id' => 'email',
																  'readonly' => true,
																  'class' => 'form-control']); ?>

					<br>
					<label for="dob">Dob</label>
					<?php echo Form::date('birthday', Auth::user()->birthday, ['id' => 'dob',
															   'class' => 'form-control']); ?>

					<br>
					<label for="address">Address</label>
					<?php echo Form::text('address', Auth::user()->address, ['id' => 'address',
															   'class' => 'form-control']); ?>

					<br>
					<label for="phone">Phone</label>
					<?php echo Form::text('phone', Auth::user()->phone, ['id' => 'phone',
															   'class' => 'form-control']); ?>

					<br>
					<label for="avatar">Avatar</label>
					<?php echo Form::file('avatar', ['class' => 'form-control']); ?>

					<br>
					<?php echo Form::submit('Edit'); ?>


				<?php echo Form::close(); ?>

				
					<a class="btn btn-primary" href="<?php echo e(url('profile/change-password')); ?>" style="color: white;margin-top: 10px">
						Change password
					</a>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-header-and-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>