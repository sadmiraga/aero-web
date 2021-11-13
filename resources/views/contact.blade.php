@extends('layouts.mainLayout')

@section('content')


    <div class="row contact-row" style="margin-top:100px;margin-bottom:100px;">
        <div class="col contact-col">
            <div class="contact-heading">
                <img src="/images/icons/director.png" class="director-icon">
                <h2>{{ __('director') }}</h2>
            </div>
            <p>Severina Gorjanc</p>
            <p>T: +386 1 200 27 81</p>
            <p>F: +386 1 257 23 83</p>
            <p>E: severina.gorjanc@aero-polyplast.si</p>
        </div>


        <div class="col contact-col">
            <div class="contact-heading">
                <img src="/images/icons/prodaja.png" class="director-icon">
                <h2>{{ __('sales') }}</h2>
            </div>
            <p>Jernej Kavčič</p>
            <p>T: +386 1 200 27 80</p>
            <p>F: +386 1 257 23 83</p>
            <p>E: jernej.kavcic@aero-polyplast.si</p>
        </div>
    </div>

    <h2 class="location-heading">{{ __('locatioHeading') }}</h2>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2763.3896326903105!2d14.597237015466927!3d46.1628990791154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476535b3dd15a335%3A0xffe1a52ffcd4112d!2sPuchova%20ulica%202a%2C%201235%20Radomlje!5e0!3m2!1shr!2ssi!4v1636476100314!5m2!1shr!2ssi"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <div class="location-text">
        <p>Aero - polyplast d.o.o.</p>
        <p>Puchova ulica 2a, 1235 Radomlje
        </p>
        <p>SLOVENIJA</p>
        <a href="tel:+38612002780">
            <p><i class="fas fa-phone"></i> +386 1 200 27 80</p>
        </a>
        <p><i class="fas fa-fax"></i> +386 1 257 23 83</p>
        <a href="mailto:info@aero-polyplast.si">
            <p><i class="far fa-envelope"></i>info@aero-polyplast.si</p>
        </a>
    </div>

    <x-partners />

@endsection
