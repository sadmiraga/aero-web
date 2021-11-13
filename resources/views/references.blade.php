@extends('layouts.mainLayout')

@section('content')



    <!-- KOZMETIKA -->
    <div class="reference-heading-container">

        <h2 class="reference-heading">{{ __('productHeading1') }}</h2>

        <div class="reference-logos-container">
            <img src="/images/reference-logos/trebnik.webp" class="reference-logo">
            <img src="/images/reference-logos/ilirija.png" class="reference-logo">
            <img src="/images/reference-logos/afrodita.svg" class="reference-logo">
        </div>

        <div class="referece-text-container">
            <p class="reference-text">{{ __('productText1') }}</p>
        </div>

        <div class="reference-images-container">

            <!-- ROW -->
            <div class="row product-row">

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_1.jpg');">
                    </div>
                    <p class="product-text"></p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_2.jpg');">
                    </div>
                    <p class="product-text">Afrodita Sun care</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_3.png');">
                    </div>
                    <p class="product-text">Shampoo for normal hair</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_4.png');">
                    </div>
                    <p class="product-text">Oil-base nail polish remover</p>
                </div>

            </div>

            <!-- ROW -->
            <div class="row product-row">

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_5.png');">
                    </div>
                    <p class="product-text">Oil shower gel</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_6.jpg');">
                    </div>
                    <p class="product-text"></p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_7.jpg');">
                    </div>
                    <p class="product-text">Mild shampoo</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_8.jpg');">
                    </div>
                    <p class="product-text"></p>
                </div>

            </div>

            <div class="product-row single-product-row">
                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kozmetika/kozmetika_9.png');">
                    </div>
                    <p class="product-text">Hair and body shampoo</p>
                </div>
            </div>


        </div>

    </div>

    <!-- FARMACIJA -->
    <div class="reference-heading-container">

        <h2 class="reference-heading">{{ __('productHeading2') }}</h2>

        <div class="reference-logos-container">
            <img src="/images/reference-logos/lk.png" class="reference-logo">
            <img src="/images/reference-logos/krka.png" class="reference-logo">
        </div>

        <div class="referece-text-container">
            <p class="reference-text">{{ __('productText2') }}</p>
        </div>

        <div class="reference-images-container">

            <!-- ROW -->
            <div class="row product-row">

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/farmacija/farmacija_0.jpg');">
                    </div>
                    <p class="product-text">Dermatological shampoo</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/farmacija/farmacija_1.jpg');">
                    </div>
                    <p class="product-text"></p>
                </div>


                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/farmacija/farmacija_2.jpg');">
                    </div>
                    <p class="product-text">Dermatological shampoo</p>
                </div>


                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/farmacija/farmacija_3.png');">
                    </div>
                    <p class="product-text">Operil</p>
                </div>


            </div>
        </div>
    </div>

    <!-- PREHRAMBENA INDUSTRIJA -->
    <div class="reference-heading-container">

        <h2 class="reference-heading">{{ __('productHeading3') }}</h2>

        <div class="reference-logos-container">
            <img src="/images/reference-logos/medex.png" class="reference-logo">
        </div>

        <div class="referece-text-container">
            <p class="reference-text">{{ __('productText3') }}</p>
        </div>

        <div class="reference-images-container">

            <!-- ROW -->
            <div class="row product-row two-products-row">

                <div class="product-card">
                    <div class="product-image"
                        style="background-image:url('/images/products/prehrambena_industrija/prehrambena_1.png');">
                    </div>
                    <p class="product-text">Sladki greh</p>
                </div>

                <div class="product-card">
                    <div class="product-image"
                        style="background-image:url('/images/products/prehrambena_industrija/prehrambena_2.png');">
                    </div>
                    <p class="product-text">Medex honey</p>
                </div>

            </div>
        </div>
    </div>

    <!-- KEMIJSKA INDUSTRIJA -->
    <div class="reference-heading-container">

        <h2 class="reference-heading">{{ __('productHeading4') }}</h2>

        <div class="reference-logos-container">
            <img src="/images/reference-logos/agrolit.png" class="reference-logo">
            <img src="/images/reference-logos/biotech.png" class="reference-logo">
        </div>

        <div class="referece-text-container">
            <p class="reference-text">{{ __('productText4') }}</p>
        </div>

        <div class="reference-images-container">

            <!-- ROW -->
            <div class="row product-row">

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_1.png');">
                    </div>
                    <p class="product-text">Korex</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_2.jpg');">
                    </div>
                    <p class="product-text">Edigs</p>
                </div>


                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_3.png');">
                    </div>
                    <p class="product-text">Forth</p>
                </div>


                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_4.jpg');">
                    </div>
                    <p class="product-text">Fluid Edigs</p>
                </div>
            </div>

            <!-- ROW -->
            <div class="row product-row">

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_5.jpg');">
                    </div>
                    <p class="product-text">Fluid Edigs</p>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_6.jpg');">
                    </div>
                    <p class="product-text">Laminat-leim</p>
                </div>


                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_7.png');">
                    </div>
                    <p class="product-text">Mekol</p>
                </div>


                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_8.jpg');">
                    </div>
                    <p class="product-text"></p>
                </div>
            </div>

            <div class="product-row single-product-row">
                <div class="product-card">
                    <div class="product-image" style="background-image:url('/images/products/kemijska/kemijska_9.png');">
                    </div>
                    <p class="product-text">Iglavce</p>
                </div>
            </div>


        </div>
    </div>

    <!-- SVEČARSTVO -->
    <div class="reference-heading-container">

        <h2 class="reference-heading">{{ __('productHeading5') }}</h2>

        <div class="reference-logos-container">
            <img src="/images/reference-logos/svečarstvo-jurkovič.jpg" class="reference-logo">
        </div>

        <div class="referece-text-container">
            <p class="reference-text">{{ __('productText5') }}</p>
        </div>

        <div class="reference-images-container">

            <!-- ROW -->
            <div class="row product-row two-products-row">

                <div class="product-card">
                    <div class="product-image"
                        style="background-image:url('/images/products/svecarstvo/svecarstvo_1.png');">
                    </div>
                    <p class="product-text"></p>
                </div>

                <div class="product-card">
                    <div class="product-image"
                        style="background-image:url('/images/products/svecarstvo/svecarstvo_2.png');">
                    </div>
                    <p class="product-text"></p>
                </div>

            </div>
        </div>
    </div>

@endsection
