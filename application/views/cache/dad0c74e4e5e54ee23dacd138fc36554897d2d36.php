<?php $__env->startSection('content'); ?>
<div class="container mt-4">
	<h1 class="review-text" style="padding-top:90px;padding-bottom:60px;">What are the best Forex brokers and how to choose the right one?</h1>
	<?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<article class="card card-product">
			<div class="card-body">
			<div class="row">
				<aside class="col-sm-2">
					<div class="box">
						<h4><?php echo e($list['list_nama']); ?></h4>
						<div class="rating-wrap">
							<ul class="rating-stars">
								<li style="width:<?php echo e($list['list_rating']); ?>%" class="stars-active"> 
									<i class="fa fa-star" style="font-size:12px;"></i> <i class="fa fa-star" style="font-size:12px;"></i> 
									<i class="fa fa-star" style="font-size:12px;"></i> <i class="fa fa-star" style="font-size:12px;"></i> 
									<i class="fa fa-star" style="font-size:12px;"></i> 
								</li>
								<li>
									<i class="fa fa-star" style="font-size:12px;"></i> <i class="fa fa-star" style="font-size:12px;"></i> 
									<i class="fa fa-star" style="font-size:12px;"></i> <i class="fa fa-star" style="font-size:12px;"></i> 
									<i class="fa fa-star" style="font-size:12px;"></i> 
								</li>
							</ul>
						</div> 
						<div class="img-wrap mt-3" style="border:none;"><img src="<?php echo e(base_url('uploads/'.$list['list_gambar'])); ?>"></div>
					</div>
				</aside> <!-- col.// -->
				<article class="col-sm-8 mt-3">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 icontext mb-3">
								<img src="<?php echo e(base_url('asset/icon/icon-1.svg')); ?>" alt="">
								<div class="text-wrap">
									<small class="text-muted">Minimum deposit</small>
									<div class="b"><?php echo e($list['list_min_depo']); ?></div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="<?php echo e(base_url('asset/icon/icon-2.svg')); ?>" alt="">
								<div class="text-wrap">
									<small class="text-muted">Regulation</small>
									<div class="b"><?php echo e($list['list_regulation']); ?></div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="<?php echo e(base_url('asset/icon/icon-3.svg')); ?>" alt="">
								<div class="text-wrap">
									<small class="text-muted">Bonus</small>
									<div class="b"><?php echo e($list['list_bonus']); ?></div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-sm-4 icontext mb-3">
								<img src="<?php echo e(base_url('asset/icon/icon-4.svg')); ?>" alt="">
								<div class="text-wrap">
									<small class="text-muted">Maximum leverage</small>
									<div class="b"><?php echo e($list['list_max_leverage']); ?></div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="<?php echo e(base_url('asset/icon/icon-5.svg')); ?>" alt="">
								<div class="text-wrap">
									<small class="text-muted">Year founded</small>
									<div class="b"><?php echo e($list['list_year_found']); ?></div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="<?php echo e(base_url('asset/icon/icon-6.svg')); ?>" alt="">
								<div class="text-wrap">
									<small class="text-muted">Trading platform</small>
									<div class="b"><?php echo e($list['list_trading_platform']); ?></div>
								</div>
							</div>
						</div>
					</div>
				</article> <!-- col.// -->
				<aside class="col-sm-2 mt-3">
					<div class="action-wrap">
						<a href="<?php echo e($list['list_web_link']); ?>" class="btn btn-primary btn-lg">Open Account</a>
					</div> <!-- action-wrap.// -->
				</aside> <!-- col.// -->
			</div> <!-- row.// -->
			</div> <!-- card-body .// -->
		</article> <!-- product-list.// -->
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/forex/application/views/home.blade.php ENDPATH**/ ?>