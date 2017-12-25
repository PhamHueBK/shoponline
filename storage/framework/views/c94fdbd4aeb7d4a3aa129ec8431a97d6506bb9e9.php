<?php $__env->startSection('head-product-detail'); ?>
<link href="<?php echo e(asset('css/w3.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/styleCompare.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/Compare.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="w3-container">
        <div class="w3-row-padding">
        	<?php $__currentLoopData = $_SESSION['compare']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $description = $item->description; 
        				$array = json_decode($description,true);
        			?>
					<?php if($value == $item->id): ?>
		            <div class="w3-col l3 m6  relPos w3-center " style="height: 300px">
		            	<?php if($item->category_id == 1): ?>
		                	<div class="selectProduct w3-padding" data-image="<?php echo e(asset('uploads/product/'.$item->thumbnail)); ?>" data-id="<?php echo e($item->name); ?>"  data-title="<?php echo e($item->name); ?>" data-cate="1" data-loai="<?php echo e($array['Loại']); ?>" data-dophangiai="<?php echo e($array['Độ phân giải']); ?>" data-hedieuhanh="<?php echo e($array['Hệ điều hành']); ?>" data-manhinh="<?php echo e($array['Màn hình']); ?>" data-xuatxu="<?php echo e($array['Xuất xứ']); ?>">
						<?php elseif($item->category_id == 2): ?>
							<div class="selectProduct w3-padding" data-image="<?php echo e(asset('uploads/product/'.$item->thumbnail)); ?>" data-id="<?php echo e($item->name); ?>" data-title="<?php echo e($item->name); ?>" data-cate="2" data-loai="<?php echo e($array['Loại']); ?>" data-cpu="<?php echo e($array['CPU']); ?>" data-hedieuhanh="<?php echo e($array['Hệ điều hành']); ?>" data-manhinh="<?php echo e($array['Màn hình']); ?>" data-xuatxu="<?php echo e($array['Xuất xứ']); ?>">
						<?php else: ?>
							<div class="selectProduct w3-padding" data-image="<?php echo e(asset('uploads/product/'.$item->thumbnail)); ?>" data-id="<?php echo e($item->name); ?>"  data-title="<?php echo e($item->name); ?>" data-cate="3"
							data-loai="<?php echo e($array['Loại']); ?>" data-cpu="<?php echo e($array['CPU']); ?>" data-hedieuhanh="<?php echo e($array['Hệ điều hành']); ?>" data-manhinh="<?php echo e($array['Màn hình']); ?>" data-xuatxu="<?php echo e($array['Xuất xứ']); ?>" >
						<?php endif; ?>
		                    <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
		                    <img height="150px" src="<?php echo e(url('uploads/product/'.$item->thumbnail)); ?>" class="imgFill productImg">
		                    <h4><?php echo e($item->name); ?></h4>
		                </div>
		            </div>
		            <?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
	<div class="w3-container  w3-center">
        <div class="w3-row w3-card-4 w3-grey w3-round-large w3-border comparePanle w3-margin-top">
            <div class="w3-row">
                <div class="w3-col l9 m8 s6 w3-margin-top">
                    <h4>Add Compare</h4>
                </div>
                <div class="w3-col l3 m4 s6 w3-margin-top">
                    &nbsp;
                    <button class="w3-btn w3-round-small w3-white w3-border notActive cmprBtn" disabled>Compare</button>
                </div>
            </div>
            <div class=" titleMargin w3-container comparePan">
            </div>
        </div>
    </div>
    <!--end of preview panel-->
    
    <!-- comparision popup-->
    <div id="id01" class="w3-animate-zoom w3-white w3-modal modPos">
        <div class="w3-container">
            <a onclick="document.getElementById('id01').style.display='none'" class="whiteFont w3-padding w3-closebtn closeBtn">&times;</a>
        </div>
        <div class="w3-row contentPop w3-margin-top">
        </div>

    </div>
    <!--end of comparision popup-->

    <!--  warning model  -->
    <div id="WarningModal" class="w3-modal">
        <div class="w3-modal-content warningModal">
            <header class="w3-container w3-teal">
                <h3><span>&#x26a0;</span>Error</h3>
            </header>
            <div class="w3-container">
                <h4>Maximum of Three products are allowed for comparision</h4>

            </div>
            <footer class="w3-container w3-right-align">
                <button id="warningModalClose" onclick="document.getElementById('id01').style.display='none'" class="w3-btn w3-hexagonBlue w3-margin-bottom  ">Ok</button>
            </footer>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-header-and-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>