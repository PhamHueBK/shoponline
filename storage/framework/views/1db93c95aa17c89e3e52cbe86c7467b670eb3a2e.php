<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('dathang')); ?>" method="POST" class="form-horizontal col-xs-12 col-sm-12 col-md-12" role="form" style="color: black; background: white">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong><?php if(Session::has('thongbao')): ?><?php echo e(Session::get('thongbao')); ?><?php endif; ?></strong> 
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<legend>Đặt hàng</legend>
		</div>
		<?php if(auth()->guard()->guest()): ?>
		<div class="form-group">
			<label>Họ tên</label>
			<input type="txt" class="form-control" id="name" name="name" placeholder="Họ tên" required="true">
		</div>
		
		<div class="form-group">
			<label class="col-xs-2 col-sm-2 col-md-2">Giới tính</label>
			<div class="col-xs-8 col-sm-8 col-md-8">
				<select id="gender" name="gender" class="form-control" required="required">
					<option name="gender" id="gender" value="Nam">Nam</option>
					<option name="gender" id="gender" value="Nữ">Nữ</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true">
		</div>

		<div class="form-group">
			<label>Địa chỉ nhận hàng</label>
			<input type="txt" class="form-control" id="address" name="address" placeholder="địa chi nhận hàng" required="true">
		</div>

		<div class="form-group">
			<label>Số điện thoại</label>
			<input type="txt" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required="true">
		</div>
		<div class="form-group">
			<label class="col-xs-4 col-sm-4 col-md-4">Hình thức thanh toán</label>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<select id="payment_method" name="payment_method" class="form-control" required="required">
						<option name="payment_method" id="payment_method" value="Thành toán khi nhận hàng">Thành toán khi nhận hàng</option>
						<option name="payment_method" id="payment_method" value="Chuyển khoản">Chuyển khoản</option>
					</select>
				</div>
			</div>
		</div>
		<?php else: ?>
			<div class="form-group">
				<label>Họ tên</label>
				<input type="txt" class="form-control" id="name" name="name" placeholder="Họ tên" value="<?php echo e(Auth::user()->name); ?>" required="true">
			</div>
			
			<div class="form-group">
				<label class="col-xs-2 col-sm-2 col-md-2">Giới tính</label>
				<input type="txt" class="form-control" id="name" name="name" placeholder="Họ tên" value="<?php echo e(Auth::user()->gender); ?>" required="true">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" required="true" required="true">
			</div>

			<div class="form-group">
				<label>Địa chỉ nhận hàng</label>
				<input type="txt" value="<?php echo e(Auth::user()->address); ?>" class="form-control" id="address" name="address" placeholder="địa chi nhận hàng" required="true">
			</div>

			<div class="form-group">
				<label>Số điện thoại</label>
				<input type="txt" value="<?php echo e(Auth::user()->phone); ?>" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required="true">
			</div>
		<?php endif; ?>
		<div class="form-group">
			<label class="col-xs-4 col-sm-4 col-md-4">Hình thức thanh toán</label>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<select id="payment_method" name="payment_method" class="form-control" required="required">
						<option name="payment_method" id="payment_method" value="Thành toán khi nhận hàng">Thành toán khi nhận hàng</option>
						<option name="payment_method" id="payment_method" value="Chuyển khoản">Chuyển khoản</option>
					</select>
				</div>
			</div>
		</div>
		
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<table class="table table-hover">
			<thead>
				<tr>
					<th colspan="4">Đơn hàng của bạn</th>
				</tr>
				<tr>
					<td>Tên sản phẩm</td>
					<td>Ảnh sản phẩm</td>
					<td>Đơn giá</td>
					<td>Số lượng</td>
				</tr>
			</thead>
			<tbody>
				<?php if(Session::has('cart')): ?>
				<?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td style="padding-top: 5%"><?php echo e($cart['item']['name']); ?></td>
					<td><img width="100%" src="uploads/product/<?php echo e($cart['item']['thumbnail']); ?>" alt="" class="pull-left"></td>
					<td style="padding-top: 5%"><?php echo e(number_format($cart['item']['price'])); ?> đồng</td>
					<td style="padding-top: 5%"><?php echo e($cart['item']['count']); ?></td>
				</tr>
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				<tr>
					<td colspan="4">
						<h5>Hình thức thanh toán</h5>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Thanh toán khi nhận hàng
					</td>
					<td colspan="2">
						Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
					</td>
				</tr>
				<tr>
					<td colspan="2">
						Chuyển khoản
					</td>
					<td colspan="2">
						Chuyển tiền đến tài khoản sau:
						<br>- Số tài khoản: 123 456 789
						<br>- Chủ TK: Nguyễn A
						<br>- Ngân hàng ACB, Chi nhánh TPHCM
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="form-group">
		<div>
			<button type="submit" class="btn btn-primary" >Đặt hàng <i class="fa fa-chevron-right"></i></button>
		</div>
	</div>
	
</form>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-header-and-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>