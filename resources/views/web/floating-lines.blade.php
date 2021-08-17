@extends('web/layouts/main')

@section('body')
	<!-- Mextreo Hero Section -->
	<section class="mextreo-hero inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="hero-content">
						<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.floating_lines.1') }}</h6>
						<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.floating_lines.2') }}</h2>
						<p data-aos="fade-up" data-aos-duration="2500">{{ __('web.floating_lines.3') }}</p>
						<p data-aos="fade-up" data-aos-duration="2500">
							<ul data-aos="fade-up" data-aos-duration="3000" class="d-flex flex-column">
								<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.floating_lines.4') }}</span></li>
								<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.floating_lines.5') }}</span></li>
								<li class="underline text-gold mt-25p"><span class="text-gold">{{ __('web.floating_lines.6') }}</span></li>
							</ul>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hero-inner-img">
						<img src="/assets/img/floating-lines/1.png" alt="" data-aos="fade-left"
							data-aos-duration="2000">
						<img src="/assets/img/floating-lines/2.png" alt="" class="hero-inner-2" data-aos="fade-up"
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
					<a data-fancybox="gallery" href="/assets/img/floating-lines/3.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
							<img src="/assets/img/floating-lines/3.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/floating-lines/4.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/floating-lines/4.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/floating-lines/5.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
							<img src="/assets/img/floating-lines/5.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/floating-lines/6.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
							<img src="/assets/img/floating-lines/6.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-8">
					<a data-fancybox="gallery" href="/assets/img/floating-lines/7.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/floating-lines/7.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a data-fancybox="gallery" href="/assets/img/floating-lines/8.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
							<img src="/assets/img/floating-lines/8.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a data-fancybox="gallery" href="/assets/img/floating-lines/9.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/floating-lines/9.png" alt=""><i class="flaticon-add rp-icon"></i>
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