@extends('web/layouts/main')

@section('body')
	<!-- Mextreo Hero Section -->
	<section class="mextreo-hero inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="hero-content">
						<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.tray_ceilings.1') }}</h6>
						<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.tray_ceilings.2') }}</h2>
						<p data-aos="fade-up" data-aos-duration="2500">{{ __('web.tray_ceilings.3') }}</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hero-inner-img">
						<img src="/assets/img/tray/1.png" alt="" data-aos="fade-left"
							data-aos-duration="2000">
						<img src="/assets/img/tray/2.png" alt="" class="hero-inner-2" data-aos="fade-up"
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
					<a data-fancybox="gallery" href="/assets/img/tray/3.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
							<img src="/assets/img/tray/3.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/tray/4.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/tray/4.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/tray/5.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
							<img src="/assets/img/tray/5.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a data-fancybox="gallery" href="/assets/img/tray/6.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="1500">
							<img src="/assets/img/tray/6.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-8">
					<a data-fancybox="gallery" href="/assets/img/tray/7.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/tray/7.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a data-fancybox="gallery" href="/assets/img/tray/8.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="3000">
							<img src="/assets/img/tray/8.png" alt=""><i class="flaticon-add rp-icon"></i>
							<div class="sp-text">
								<h3>Light solutions</h3>
								<p>Light House</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a data-fancybox="gallery" href="/assets/img/tray/9.png">
						<div class="portfolio-img" data-aos="fade-up" data-aos-duration="2500">
							<img src="/assets/img/tray/9.png" alt=""><i class="flaticon-add rp-icon"></i>
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