@extends('web/layouts/main')

@section('body')
    <!-- Mextreo Hero Section -->
    <section class="mextreo-hero inner mar-bot-140">
        <div class="container">
            <div class="row pt-5 mt-2">
                <div class="col-12">
                    <h2 data-aos="fade-up" data-aos-duration="2000">{{ __('web.privacy.headline') }}</h2>
                </div>
                <div class="col-12 mt-3">
                    <h3><strong>{{ __('web.privacy.contact') }}</strong></h3>
                    <p>{!! __('web.privacy.address') !!}</p>
                    <p>{!! __('web.privacy.email') !!}</p>
                </div>
                <div class="col-12 mt-3">
                    <h3><strong>{{ __('web.privacy.text.1') }}</strong></h3>
                    <p>{!! __('web.privacy.text.2') !!}</p>
                </div>
                <div class="col-12 mt-3">
                    <h3><strong>{{ __('web.privacy.text.3') }}</strong></h3>
                    <p>{!! __('web.privacy.text.4') !!}</p>
                </div>
                <div class="col-12 mt-3">
                    <h3><strong>{{ __('web.privacy.text.5') }}</strong></h3>
                    <p>{!! __('web.privacy.text.6') !!}</p>
                </div>
                <div class="col-12 mt-5">
                    <h3><strong>{{ __('web.privacy.text.8') }}</strong></h3>
                    <p>{!! __('web.privacy.text.9') !!}</p>
                </div>
                <div class="col-12 mt-5">
                    <h3><strong>{{ __('web.privacy.text.10') }}</strong></h3>
                    <p>{!! __('web.privacy.text.11') !!}</p>
                </div>
                <div class="col-12 mt-5">
                    <h3><strong>{{ __('web.privacy.text.12') }}</strong></h3>
                    <p>{!! __('web.privacy.text.13') !!}</p>
                </div>
            </div>
        </div>

    </section>
@endsection
