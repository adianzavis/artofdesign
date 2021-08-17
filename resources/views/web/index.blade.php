@extends('web/layouts/main')

@section('body')
<section class="mextreo-hero inner mar-bot-140">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="hero-content" data-aos="fade-up" data-aos-duration="2000">
					<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.homepage.1') }}</h6>
					<h2 data-aos="fade-up" data-aos-duration="2000" class="homepage-headline">{{ __('web.homepage.2') }}</h2>
					<p data-aos="fade-up" data-aos-duration="2500" class="pb-5">{{ __('web.homepage.3') }}</p>
					<a href="/stretch-ceilings" class="btn btn-primary sub-btn main-button">{{ __('web.homepage.4') }}</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="hero-inner-img">
					<div class="owl-carousel owl-theme homepage-carousel">
						<div class="item">
							<img src="/assets/img/homepage_0.png" alt="" data-aos="fade-left" data-aos-duration="2000">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mextreo-about">
	<div class="container">
		<div class="row">
			<div class="col-md-5 order-md-1 order-2">
				<div class="about-bg" data-aos="fade-left" data-aos-duration="3000">
					<img src="/assets/img/homepage_2.png" alt="">
				</div>
				<div class="m-about-img" data-aos="fade-up" data-aos-duration="3000">
					<img src="/assets/img/homepage_1.png" alt="">
				</div>
			</div>
			<div class="col-md-5 offset-md-1 order-md-2 order-1">
				<div class="m-about-content">
					<h2 class="ab-tittle">{{ __('web.homepage.5') }}</h2>
					<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.homepage.6') }}</h6>
					<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.homepage.7') }}</h2>
					<p data-aos="fade-up" data-aos-duration="2500">
						{!! __('web.homepage.8') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mextreo-service">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="m-s-content">
					<h2 class="ms-tittle">{{ __('web.homepage.9') }}</h2>
					<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="2000">{{ __('web.homepage.10') }}</h6>
					<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.homepage.11') }}</h2>
					<p data-aos="fade-up" data-aos-duration="2500">
					{!! __('web.homepage.12') !!}
				</div>
			</div>
			<div class="col-md-5 offset-md-2">
				<div class="row">
					<div class="col-md-6" data-aos="fade-down-right" data-aos-duration="3000">
						<div class="single-service si-1">
							<i class="flaticon-house service-icon"></i>
							<h3>{{ __('web.homepage.13') }}</h3>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12" data-aos="fade-down-left" data-aos-duration="3000">
								<div class="single-service si-2">
									<i class="flaticon-interior-design service-icon"></i>
									<h3>{{ __('web.homepage.14') }}</h3>
								</div>
							</div>
							<div class="col-md-12" data-aos="fade-up-left" data-aos-duration="3000">
								<div class="single-service">
									<i class="flaticon-plane service-icon"></i>
									<h3>{{ __('web.homepage.15') }}</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Project Section-->
<section class="recent-project">
	<div class="container">
		<div class="recent-pro-top">
			<h2 class="rp-tittle">{{ __('web.homepage.16') }}</h2>
			<h6 class="ht-tittle" data-aos="fade-up" data-aos-duration="2000">{{ __('web.homepage.17') }}</h6>
			<h2 data-aos="fade-up" data-aos-duration="3000">{{ __('web.homepage.18') }}</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="project owl-carousel owl-theme">
					<div class="item">
						<a href="/stretch-ceilings">
							<div class="single-project" data-aos="fade-up" data-aos-duration="2500">
							<div class="sp-img">
								<img src="/assets/img/homepage_3.png" alt="">
							</div>
							<div class="sp-text">
								<h3>{{ __('web.homepage.19') }}</h3>
								<p>{{ __('web.homepage.20') }}</p>
							</div>
							<a href="/stretch-ceilings"> <i class="flaticon-add rp-icon"></i></a>
						</div>
						</a>
					</div>
					<div class="item">
						<div class="single-project" data-aos="fade-up" data-aos-duration="3000">
							<div class="sp-img">
								<img src="/assets/img/homepage_4.png" alt="">
							</div>
							<div class="sp-text">
								<h3>{{ __('web.homepage.21') }}</h3>
								<p></p>
							</div>
							<a href="/light-solutions"> <i class="flaticon-add rp-icon"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="work-success">
	<div class="container pb-5">
		<div class="row">
			<div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
				<div class="ws-content">
					<div class="ws-t-year">
						<img src="/assets/img/homepage_7.png" alt="">
						<h2>{{ __('web.homepage.22') }}</h2>
					</div>
					<h3>{!! __('web.homepage.23') !!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="success-bg" data-aos="fade-left" data-aos-duration="3000">
					<img src="/assets/img/homepage_5.png" alt="">
				</div>
				<div class="success-img" data-aos="fade-up" data-aos-duration="3000">
					<img src="/assets/img/homepage_6.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection