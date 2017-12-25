<?php $__env->startSection('content'); ?>

<!-- //navigation -->
		<!-- <div class="container">
			<nav class="navbar navbar-default">
							Brand and toggle get grouped for better mobile display 
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="/shoponline/public/" class="act">Home</a></li>	
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Loại Sản Phẩm<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6> All </h6>
														<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<li><a href="<?php echo e(route('category',$cat->id)); ?>"><?php echo e($cat->name); ?></a></li>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hãng Sản Xuất<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6> All </h6>
														<?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<li><a href="<?php echo e(route('supplier',$supplier->id)); ?>"> <?php echo e($supplier->name); ?> </a></li>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li><a href="gourmet.html">Gourmet</a></li>
									<li><a href="offers.html">Offers</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>	 -->
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="<?php echo e(asset('images/BGImage2.jpg')); ?>" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3> TV </h3>
				</div>
			</li>
			<li>
				<img src="<?php echo e(asset('images/BGImage1.png')); ?>" alt="" />
				  <div class="slide-desc">
					<h3>Smart Phone + Laptop</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2> Tìm Thấy <strong style='color:blue' > <?php echo e(count($product)); ?> </strong> Sản Phẩm Phù Hợp </h2> 
			 <div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<!-- <ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">SẢN PHẨM MỚI</a></li>
					</ul>
					 -->
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							
							<div class="agile_top_brands_grids">
								<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="<?php echo e(asset('images/offer.png')); ?>" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="<?php echo e(url('product/'.$item->id)); ?>"><img width="200px" height="200px" title=" " alt=" " src="<?php echo e(asset('uploads/product/'.$item->thumbnail)); ?>" height="'100" width="100" /></a>		
															<p><?php echo e($item->name); ?></p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4><?php echo e($item->price - $item->discount); ?> đ<span><?php echo e($item->price); ?> đ</span></h4> <br>
															<h4 style="color: red" > <i> Tiết Kiệm <?php echo e($item->discount); ?> đ</i></h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
																	<input type="hidden" name="amount" value="20.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm Vào Giỏ Hàng" class="button" />
																</fieldset>
															</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<div class="clearfix"> </div>
							</div>
						</div> 
		
					</div>
					<!--
				</div>
			</div> -->
		</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-header-and-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>