@extends('web/layouts/main')

@section('body')
	<!-- Mextreo Hero Section -->
	<section class="mextreo-hero inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="hero-content">
						<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.light_solutions.1') }}</h6>
						<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.light_solutions.2') }}</h2>
						<p data-aos="fade-up" data-aos-duration="2500">{{ __('web.light_solutions.3') }}</p>
						<p data-aos="fade-up" data-aos-duration="3000">{{ __('web.light_solutions.4') }}</p>
						<ul data-aos="fade-up" data-aos-duration="3000">
							<li class="underline text-gold"><span class="text-gold">{{ __('web.light_solutions.5') }}</span></li>
							<li class="underline text-gold"><span class="text-gold">{{ __('web.light_solutions.6') }}</span></li>
							<li class="underline text-gold"><span class="text-gold">{{ __('web.light_solutions.7') }}</span></li>
							<li class="underline text-gold"><span class="text-gold">{{ __('web.light_solutions.8') }}</span></li>
						</ul>
						<p data-aos="fade-up" data-aos-duration="3000">{{ __('web.light_solutions.9') }}</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hero-inner-img">
						<img src="/assets/img/project-room1.png" alt="" data-aos="fade-left"
							data-aos-duration="2000">
						<img src="/assets/img/project-room2.png" alt="" class="hero-inner-2" data-aos="fade-up"
							data-aos-duration="3000">
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Mextreo Hero Section-->

	<!--Project Gallery-->
	<section class="project-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-1.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
							<img src="/assets/img/project-gallery-1.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-2.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/project-gallery-2.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-3.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
							<img src="/assets/img/project-gallery-3.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-4.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
							<img src="/assets/img/project-gallery-4.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-8">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-5.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/project-gallery-5.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-6.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
							<img src="/assets/img/project-gallery-6.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a data-fancybox="gallery" href="/assets/img/project-gallery-7.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/project-gallery-7.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection