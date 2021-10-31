@extends('layouts.mainLayout')

@section('content')


    <!-- HERO IMAGE AND TEXT -->
    <div class="hero-container">

        <h2 class="hero-heading">Prava izbira pri izdelavi plastenk, zapork in pršilk</h2>


        <div class="row hero-wrapper">
            <div class="hero-text-wrapper col">
                <p class="hero-text">Že več kot 50 let uspešno rešujemo težave naših strank, jim svetujemo ter sledimo
                    njihovim željam pri izboru plastenk, zapork, pršilk, tiska, itd.. Materiali najvišje kakovosti,
                    najmodernejša strojna oprema, naša strokovna podkovanost ter dolgoletne izkušnje so zagotovilo, da boste
                    z našimi izdelki nadvse zadovoljni.
                </p>
            </div>

            <div class="hero-image-wrapper col">
                <img src="images/material-images/hero-image.jpg" class="hero-image">
            </div>
        </div>
    </div>


    <h2 class="big-heading">Veselimo se Vašega povpraševanja! </h2>


    <!-- STEPS -->
    <div class="steps-container">

        <!-- 1. IDEJA -->
        <div class="step">
            <div class="step-heading">
                <span class="step-heading-text">1. IDEJA</span>
                <img src="/images/icons/idea.png" class="step-heading-icon">
            </div>
            <div class="step-text-wrapper">
                <p class="step-text">Potrebujete izvirno, inovativno in kakovostno plastenko za vaš izdelek?</p>
            </div>
        </div>

        <div class="step-arrow">
            <img src="/images/icons/arrow.png">
        </div>

        <!-- 2. ZASNOVA -->
        <div class="step">
            <div class="step-heading">
                <span class="step-heading-text">2. ZASNOVA</span>
                <img src="/images/icons/pencil.png" class="step-heading-icon">
            </div>
            <div class="step-text-wrapper">
                <p class="step-text">Širok asortiman obstoječih izdelkov vam omogoča veliko možnosti ter kreativnosti
                    pri izboru želene pihane plastične embalaže. Ustrežemo tudi individualnim željam.</p>
            </div>
        </div>

        <div class="step-arrow">
            <img src="/images/icons/arrow.png">
        </div>

        <!-- 3. IZVEDBA -->
        <div class="step">
            <div class="step-heading">
                <span class="step-heading-text">3. IZVEDBA</span>
                <img src="/images/icons/pencil.png" class="step-heading-icon">
            </div>
            <div class="step-text-wrapper">
                <p class="step-text">Po vaši želji za vas izdelamo plastenke v dogovorjenem roku. Ponujamo tudi
                    zaporke, pršilke, uredimo tisk, itd.</p>
            </div>
        </div>

        <div class="step-arrow">
            <img src="/images/icons/arrow.png">
        </div>

        <div class="step">
            <a href="/kontakt">
                <button class="contact-us-button">KONTAKT</button>
            </a>
        </div>

    </div>


    <x-partners />

@endsection
