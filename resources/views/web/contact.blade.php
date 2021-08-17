@extends('web/layouts/main')

@section('body')
	<!-- Mextreo Hero Section -->
	<section class="mextreo-hero inner mar-bot-140">
		<div class="container">
			<div class="row">
				<form action="/contact" class="col-md-6" method="POST" type="multipart/form-data">
					@csrf
					<div class="hero-content">
						<h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">{{ __('web.contact.1') }}</h6>
						<h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.contact.2') }}</h2>
						<p data-aos="fade-up" data-aos-duration="2500">{{ __('web.contact.3') }}</p>

						<div class="mextreo-contact" data-aos="fade-up" data-aos-duration="3000">
							<form id="cf" method="POST" action="/assets/mail-sender/contact.php">
								<div class="form-group mcfg">
									<input type="text" class="form-control m-input" name="name" id="name"
										placeholder="{{ __('web.contact.4') }}" onfocus="this.placeholder = ''"
										onblur="this.placeholder ='{{ __('web.contact.4') }}'">
								</div>
								<div class="form-group mcfg">
									<input type="text" class="form-control m-input" name="email" id="email"
										placeholder="{{ __('web.contact.5') }}" onfocus="this.placeholder = ''"
										onblur="this.placeholder ='{{ __('web.contact.5') }}'">
								</div>
								<div class="form-group mcfg">
									<textarea rows="4" class="form-control m-input" name="msg" id="msg"
										placeholder="{{ __('web.contact.6') }}" onfocus="this.placeholder =''"
										onblur="this.placeholder ='{{ __('web.contact.6') }}'"></textarea>
								</div>
								<button type="submit" id="submit" class="m-submit">{{ __('web.contact.7') }}</button>
								<div class="col-md-12 text-center">
									<div class="cf-msg"></div>
								</div>
							</form>
						</div>
					</div>
				</form>
				<div class="col-md-6">
					<div class="hero-inner-img">
						<img src="/assets/img/contact-room1.png" alt="Room" data-aos="fade-left" data-aos-duration="2000">
					</div>
					<div class="contact-details" data-aos="fade-up" data-aos-duration="3000">
						<img src="/assets/img/contact-logo.png" alt="Logo" style="width: 189px;">
						<div class="single-info">
							<h5>{!! __('web.contact.8') !!}</h5>
							<p>{!! __('web.contact.9') !!}</p>
							<p>{!! __('web.contact.10') !!}</p>
						</div>
						<div class="single-info">
							<h5>{!! __('web.contact.11') !!}</h5>
							<p>{!! __('web.contact.12') !!}</p>
							<p>{!! __('web.contact.13') !!}</p>
						</div>
						<div class="single-info">
							<h5>{{ __('web.contact.14') }}</h5>
							<p><a href="mailto:{{ __('web.contact.15') }}" class="text-gray">{{ __('web.contact.15') }}</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
@endsection