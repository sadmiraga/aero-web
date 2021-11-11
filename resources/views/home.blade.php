@extends('layouts.mainLayout')

@section('content')


    <!-- HERO IMAGE AND TEXT -->
    <div class="hero-container">

        <h2 class="hero-heading">{{ __('homeH1') }}</h2>


        <div class="row hero-wrapper">
            <div class="hero-text-wrapper col">
                <p class="hero-text">{{ __('homeP1') }}</p>
            </div>

            <div class="hero-image-wrapper col">
                <img src="images/material-images/hero-image.jpg" class="hero-image">
            </div>
        </div>
    </div>


    <h2 class="big-heading"> {{ __('homeh2') }} </h2>


    <!-- STEPS -->
    <div class="steps-container">

        <!-- 1. IDEJA -->
        <div class="step">
            <div class="step-heading">
                <span class="step-heading-text">1. {{ __('step1heading') }}</span>
                <img src="/images/icons/idea.png" class="step-heading-icon">
            </div>
            <div class="step-text-wrapper">
                <p class="step-text">{{ __('step1text') }}</p>
            </div>
        </div>

        <div class="step-arrow">
            <img src="/images/icons/arrow.png">
        </div>

        <!-- 2. ZASNOVA -->
        <div class="step">
            <div class="step-heading">
                <span class="step-heading-text">2. {{ __('step2heading') }}</span>
                <img src="/images/icons/pencil.png" class="step-heading-icon">
            </div>
            <div class="step-text-wrapper">
                <p class="step-text">{{ __('step2text') }}</p>
            </div>
        </div>

        <div class="step-arrow">
            <img src="/images/icons/arrow.png">
        </div>

        <!-- 3. IZVEDBA -->
        <div class="step">
            <div class="step-heading">
                <span class="step-heading-text">3. {{ __('step3heading') }}</span>
                <img src="/images/icons/water.png" class="step-heading-icon">
            </div>
            <div class="step-text-wrapper">
                <p class="step-text">{{ __('step3text') }}</p>
            </div>
        </div>

        <div class="step-arrow">
            <img src="/images/icons/arrow.png">
        </div>

        <div class="step">
            <a href="{{ route('contact', app()->getLocale()) }}">
                <button class="contact-us-button">{{ __('contact') }}</button>
            </a>
        </div>

    </div>


    <x-partners />

@endsection
