@extends('web/layouts/main')

@section('body')
	<!-- Mextreo Hero Section -->
	<section class="mextreo-hero inner mar-bot-140">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="hero-content">
						<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.stretch_ceilings.1') }}</h6>
						<h2 data-aos="fade-up" data-aos-duration="2000">{!! __('web.stretch_ceilings.2') !!}</h2>
						<p data-aos="fade-up" data-aos-duration="2500">{{ __('web.stretch_ceilings.3') }}</p>
						<ul data-aos="fade-up" data-aos-duration="2500">
							<li class="underline text-gold"><span class="text-gold">{{ __('web.stretch_ceilings.4') }}</span></li>
							<li class="underline text-gold"><span class="text-gold">{{ __('web.stretch_ceilings.5') }}</span></li>
							<li class="underline text-gold"><span class="text-gold">{{ __('web.stretch_ceilings.6') }}</span></li>
						</ul>
						<p data-aos="fade-up" data-aos-duration="3000">{{ __('web.stretch_ceilings.7') }}</p>
						<p data-aos="fade-up" data-aos-duration="3000">{{ __('web.stretch_ceilings.8') }}</p>
						<p data-aos="fade-up" data-aos-duration="3000">{{ __('web.stretch_ceilings.9') }}</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hero-inner-img">
						<img src="/assets/img/about-room1.png" alt="Room" data-aos="fade-left" data-aos-duration="2000">
						<img src="/assets/img/about-room2.png" alt="Room" class="hero-inner-2" data-aos="fade-up"
							data-aos-duration="3000">
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Mextreo Hero Section-->

	<!-- Mextreo About Section-->
	<section class="mextreo-about pt-res-50">
		<div class="container">
			<div class="row">
				<div class="col-md-5 order-md-1 order-2">
					<!-- <div class="about-bg" data-aos="fade-left" data-aos-duration="3000">
						<img src="/assets/img/about/about-history-bg.jpg" alt="">
					</div> -->
					<div class="m-about-img" data-aos="fade-up" data-aos-duration="3000">
						<img src="/assets/img/about-room3.png" alt="">
					</div>
				</div>
				<div class="col-md-6 offset-md-1 order-md-2 order-1">
					<div class="m-about-content">
						<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.stretch_ceilings.10') }}</h6>
						<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.stretch_ceilings.11') }}</h2>
						<p data-aos="fade-up" data-aos-duration="2500">{{ __('web.stretch_ceilings.12') }}</p>
						<p data-aos="fade-up" data-aos-duration="3000" class="py-0">{{ __('web.stretch_ceilings.13') }}</p>
						<ul data-aos="fade-up" data-aos-duration="3000" class="d-flex flex-column">
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.15') }} <a href="/tray" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.16') }} <a href="/double-color" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.17') }} <a href="/photo-printing" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.18') }}<a href="/starry-sky" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.19') }}<a href="/art-perforation" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.20') }}<a href="/floating-ceilings" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.21') }}<a href="/translucent" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
							<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.stretch_ceilings.22') }}<a href="/floating-lines" class="text-gray">{{ __('web.stretch_ceilings.14') }}</a></span></li>
						</ul>
						<p data-aos="fade-up" data-aos-duration="3000" class="mt-5">{{ __('web.stretch_ceilings.23') }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection