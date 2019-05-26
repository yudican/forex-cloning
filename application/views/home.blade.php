@extends('layout.master')
@section('content')
<div class="container mt-4">
	<h1 class="review-text" style="padding-top:90px;padding-bottom:60px;">What are the best Forex brokers and how to choose the right one?</h1>
	@foreach($lists as $list)
		<article class="card card-product">
			<div class="card-body">
			<div class="row">
				<aside class="col-sm-2">
					<div class="box">
						<h4>{{ $list['list_nama'] }}</h4>
						<div class="rating-wrap">
							<ul class="rating-stars">
								<li style="width:{{ $list['list_rating'] }}%" class="stars-active"> 
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
						<div class="img-wrap mt-3" style="border:none;"><img src="{{ base_url('uploads/'.$list['list_gambar']) }}"></div>
					</div>
				</aside> <!-- col.// -->
				<article class="col-sm-8 mt-3">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 icontext mb-3">
								<img src="{{ base_url('asset/icon/icon-1.svg') }}" alt="">
								<div class="text-wrap" style="padding-left:20px;">
									<small class="text-muted" style="font-size:14px;">Minimum deposit</small>
									<div class="b" style="font-size:16px;padding-top:4px;">{{ $list['list_min_depo'] }}</div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="{{ base_url('asset/icon/icon-2.svg') }}" alt="">
								<div class="text-wrap" style="padding-left:27px;">
									<small class="text-muted" style="font-size:14px;">Regulation</small>
									<div class="b" style="font-size:16px;padding-top:4px;">{{ $list['list_regulation'] }}</div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="{{ base_url('asset/icon/icon-3.svg') }}" alt="">
								<div class="text-wrap" style="padding-left:20px;">
									<small class="text-muted" style="font-size:14px;">Bonus</small>
									<div class="b" style="font-size:16px;padding-top:4px;">{{ $list['list_bonus'] }}</div>
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-sm-4 icontext mb-3">
								<img src="{{ base_url('asset/icon/icon-4.svg') }}" alt="">
								<div class="text-wrap" style="padding-left:20px;">
									<small class="text-muted" style="font-size:14px;">Maximum leverage</small>
									<div class="b" style="font-size:16px;padding-top:4px;">{{ $list['list_max_leverage'] }}</div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="{{ base_url('asset/icon/icon-5.svg') }}" alt="">
								<div class="text-wrap" style="padding-left:20px;">
									<small class="text-muted" style="font-size:14px;">Year founded</small>
									<div class="b" style="font-size:16px;padding-top:4px;">{{ $list['list_year_found'] }}</div>
								</div>
							</div>
							<div class="col-sm-4 icontext mb-3">
								<img src="{{ base_url('asset/icon/icon-6.svg') }}" alt="">
								<div class="text-wrap" style="padding-left:20px;">
									<small class="text-muted" style="font-size:14px;">Trading platform</small>
									<div class="b" style="font-size:16px;padding-top:4px;">{{ $list['list_trading_platform'] }}</div>
								</div>
							</div>
						</div>
					</div>
				</article> <!-- col.// -->
				<aside class="col-sm-2 mt-3">
					<div class="action-wrap">
						<a href="{{ $list['list_web_link'] }}" class="btn btn-primary btn-lg">Open Account</a>
					</div> <!-- action-wrap.// -->
				</aside> <!-- col.// -->
			</div> <!-- row.// -->
			</div> <!-- card-body .// -->
		</article> <!-- product-list.// -->
	@endforeach
	
</div>


@endsection

