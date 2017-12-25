<?php $__env->startSection('head-product-detail'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo e(asset('product_detail/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo e(asset('product_detail/js/jquery-1.7.2.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('product_detail/js/move-top.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('product_detail/js/easing.js')); ?>"></script>
<script src="<?php echo e(asset('product_detail/js/easyResponsiveTabs.js')); ?>" type="text/javascript"></script>
<link href="<?php echo e(asset('product_detail/css/easy-responsive-tabs.css')); ?>" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo e(asset('product_detail/css/global.css')); ?>">
<script src="<?php echo e(asset('product_detail/js/slides.min.jquery.js')); ?>"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="wrap">
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<?php if(count($product->image) != 0): ?>
										<?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<a href="<?php echo e(asset('uploads/product/'.$item->name)); ?>" target="_blank"><img src="<?php echo e(asset('uploads/product/'.$item->name)); ?>" alt=" " /></a>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
										<a href="#" target="_blank"><img src="<?php echo e(asset('uploads/no-image.jpg')); ?>" alt=" " /></a>
									<?php endif; ?>
									
								</div>
								<ul class="pagination">
									
									<?php if(count($product->image) !=0): ?>
										<?php $__currentLoopData = $product->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li><a href="<?php echo e(asset('uploads/product/'.$item->name)); ?>"><img src="<?php echo e(asset('uploads/product/'.$item->name)); ?>" alt=" " /></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
											<li><a href="#"><img src="<?php echo e(asset('product_detail/images/no-image.jpg')); ?>" alt=" " /></a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo e($product->name); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>					
					<div class="price">
						<p>Price: <span><?php echo e(number_format($product->price,0,",",".")); ?> VNĐ</span></p>
					</div>
					<div class="available">
						<p>Available Options :</p>
					<ul>
						<li>Color:
							<select>
							<option>Silver</option>
							<option>Black</option>
							<option>Dark Black</option>
							<option>Red</option>
						</select></li>
						<li>Size:<select>
							<option>Large</option>
							<option>Medium</option>
							<option>small</option>
							<option>Large</option>
							<option>small</option>
						</select></li>
						<li>Quality:<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select></li>
					</ul>
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#"><img src="<?php echo e(asset('product_detail/images/facebook.png')); ?>" alt="" /></a></li>
					    	<li><a href="#"><img src="<?php echo e(asset('product_detail/images/twitter.png')); ?>" alt="" /></a></li>					    
			    		</ul>
					</div>
					<div class="button"><span><a href="#">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare">
					 	    <?php echo Form::open(['method' => 'POST', 'url' => 'compare/'.$product->id]); ?>

											<?php echo Form::submit('Add to compare'); ?>

							<?php echo Form::close(); ?>

						</li>
				 	</ul>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Details</li>
					<li>product Tags</li>
					<li>Product Reviews</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<?php 
						$p = json_decode($product->description,true);

					?>
					<?php if($product->category_id == 1): ?>
						<div class="product-desc">
							<h4>CHI TIẾT SẢN PHẨM</h4>
							 <ul>
							 	<li>Loại : <?php echo e($p['Loại']); ?></li>
							 	<li>Độ Phân Giải : <?php echo e($p['Độ phân giải']); ?></li>
							 	<li>Hệ Điều Hành : <?php echo e($p['Hệ điều hành']); ?></li>
							 	<li>Màn Hình : <?php echo e($p['Màn hình']); ?></li>
							 	<li>Xuất xứ : <?php echo e($p['Xuất xứ']); ?></li>
							 	
							 </ul>
						</div>
					<?php elseif($product->category_id == 2): ?>
						<div class="product-desc">
							<h4>CHI TIẾT SẢN PHẨM</h4>
							 <ul>
							 	<li>Loại : <?php echo e($p['Loại']); ?></li>
							 	<li>CPU : <?php echo e($p['CPU']); ?></li>
							 	<li>Hệ Điều Hành : <?php echo e($p['Hệ điều hành']); ?></li>
							 	<li>Màn Hình : <?php echo e($p['Màn hình']); ?></li>
							 	<li>Xuất xứ : <?php echo e($p['Xuất xứ']); ?></li>
							 	
							 </ul>
						</div>
					<?php elseif($product->category_id == 3): ?>
						<div class="product-desc">
							<h4>CHI TIẾT SẢN PHẨM</h4>
							 <ul>
							 	<li>Loại : <?php echo e($p['Loại']); ?></li>
							 	<li>CPU : <?php echo e($p['CPU']); ?></li>
							 	<li>Ổ cứng : <?php echo e($p['Ổ cứng']); ?></li>
							 	<li>Màn Hình : <?php echo e($p['Màn hình']); ?></li>
							 	<li>Xuất xứ : <?php echo e($p['Xuất xứ']); ?></li>
							 	
							 </ul>
						</div>
					<?php endif; ?>
					

				 <div class="product-tags">
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<h4>Add Your Tags:</h4>
					<div class="input-box">
						<input type="text" value="">
					</div>
					<div class="button"><span><a href="#">Add Tags</a></span></div>
			    </div>	

				<div class="review">
					<?php if(auth()->guard()->guest()): ?>
						<p align="center">You have to <a href="<?php echo e(route('login')); ?>">Login</a></p>
					<?php else: ?>
						<?php if(Session::has('sucess')): ?>
                            <div class="alert alert-success">
                                <i><p><?php echo e(Session::get('sucess')); ?></p></i>
                            </div>
                            <?php endif; ?>
						<?php echo Form::open(['method' =>'POST','url'=>'product/review/'.$product->id.'/'.Auth::user()->id]); ?>

							<?php echo Form::text('name', Auth::check() ? Auth::user()->name:null,['class' => 'form-control','placeholder'=>'Your name ...','required'=>'true']); ?>

							<br>
							<?php echo Form::text('email',Auth::check() ? Auth::user()->email:null,['class' => 'form-control','placeholder'=>'Your email ...','required'=>'true']); ?>

							<br>
							<?php echo Form::text('content','',['class' => 'form-control','placeholder'=>'Your content ...','required'=>'true']); ?>

							<?php echo Form::submit('Submit'); ?>

						<?php echo Form::close(); ?>

					<?php endif; ?>
					<?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div id="review">
									<div style="width: 10%;float: left;">
										<img src="<?php echo e(url('uploads/product/no-image.jpg')); ?>" width="50px">
										<?php if($value->user['group_id'] == 1): ?>
										<h3 class="fa fa-star"> <?php echo e($value->user['name']); ?></h3>
										<?php else: ?>
										<h3><?php echo e($value->user['name']); ?></h3>
										<?php endif; ?>
									</div>
									<div style="width: 70%">
										<h3 style="color: #299DDF"><?php echo e($value->email); ?></h3>
										<br>
										<h5><?php echo e($value->content); ?></h5>
										<h6 style="float: right;">Updated at : <?php echo e($value->updated_at); ?></h6>
									</div>
									<div class="clear"></div>
									<hr>
								</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		 </div>
	 </div>
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>	  
        </div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				      <li><a href="<?php echo e(url('Category/'.$item->id)); ?>"><?php echo e($item->name); ?></a></li>
				     	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    				</ul>
    				<div class="section group">
					<br>
					<h2>You may like</h2>
					<?php $__currentLoopData = $prdSuggestByOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<ul>
						<li>
							<a href="<?php echo e(url('product/'.$value->id)); ?>">
								<img src="<?php echo e(asset('uploads/product/'.$value->thumbnail)); ?>" width="250px">
								<h5 style="color: #090205;margin-left: 20px"><?php echo e($value->name); ?></h5>
							</a>
						</li>
					</ul>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
 				</div>
 		</div>
 	</div>
    </div>
 </div>
 <!-- suggest product -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>SUGGEST PRODUCT</h3>
				<div class="agile_top_brands_grids">
					<?php $__currentLoopData = $suggest_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="<?php echo e(asset('images/offer.png')); ?>" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="<?php echo e(url('product/'.$item->product->id)); ?>"><img title=" " alt=" " src="<?php echo e(asset('uploads/product/'.$item->product->thumbnail)); ?>" height="100" width="100"></a>		
												<p><?php echo e($item->product->name); ?></p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<?php if($item->discount != 0): ?>
														<h4><?php echo e(number_format($item->product->price*(100 - $item->discount)/100,0,",",".")); ?> VNĐ<span><?php echo e(number_format($item->product->price,0,",",".")); ?></span></h4>
													<?php else: ?>
														<h4><?php echo e(number_format($item->product->price,0,",",".")); ?> VNĐ</h4>
													<?php endif; ?>
													
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
<!-- //suggest product -->
<!-- related to this product -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>RELATED TO THIS PRODUCT</h3>
				<div class="agile_top_brands_grids">
					<?php $__currentLoopData = $productByTagName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="<?php echo e(asset('images/offer.png')); ?>" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="<?php echo e(url('product/'.$item->id)); ?>"><img title=" " alt=" " src="<?php echo e(asset('uploads/product/'.$item->thumbnail)); ?>" height="100" width="100"></a>		
												<p><?php echo e($item->name); ?></p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<?php if($item->discount != 0): ?>
														<h4><?php echo e(number_format($item->price*(100 - $item->discount)/100,0,",",".")); ?> VNĐ<span><?php echo e(number_format($item->price,0,",",".")); ?></span></h4>
													<?php else: ?>
														<h4><?php echo e(number_format($item->price,0,",",".")); ?> VNĐ</h4>
													<?php endif; ?>
													
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
<!-- //related to this product -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-header-and-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>