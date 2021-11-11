@extends('layouts.mainLayout')

@section('content')

    <section class="bgimage">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </section>


    <!-- FIRST -->
    <div class="about-line-container">
        <h2 class="about-heading">{{ __('aboutHeading1') }}</h2>

        <div class="row about-row">

            <!-- TEXT --->
            <div class="about-text-container">
                <p class="about-text">{{ __('aboutText1') }}</p>
            </div>

            <!-- IMAGE -->
            <div class="about-image-container">
                <div class="about-image" style="background-image:url(/images/about-us/about_1.jpg)"></div>
            </div>
        </div>
    </div>


    <!-- SECOND -->
    <div class="about-line-container">
        <h2 class="about-heading">{{ __('aboutHeading2') }}</h2>

        <div class="row about-row">

            <!-- IMAGE -->
            <div class="about-image-container">
                <div class="about-image" style="background-image:url(/images/about-us/about_2.jpg)"></div>
            </div>

            <!-- TEXT --->
            <div class="about-text-container">
                <p class="about-text">{{ __('aboutText2') }}</p>
            </div>
        </div>
    </div>


    <!-- THIRD -->
    <div class="about-line-container">
        <h2 class="about-heading">{{ __('aboutHeading3') }}</h2>

        <div class="row about-row">

            <!-- TEXT --->
            <div class="about-text-container">
                <p class="about-text">{{ __('aboutText3') }}</p>
            </div>

            <!-- IMAGE -->
            <div class="about-image-container">
                <div class="about-image" style="background-image:url(/images/about-us/about_3.jpg)"></div>
            </div>
        </div>
    </div>

    <!-- FOURTH -->
    <div class="about-line-container">
        <h2 class="about-heading">{{ __('aboutHeading4  ') }}</h2>

        <div class="row about-row">

            <!-- IMAGE -->
            <div class="about-image-container">
                <div class="about-image" style="background-image:url(/images/about-us/about_4.jpg)"></div>
            </div>

            <!-- TEXT --->
            <div class="about-text-container">
                <p class="about-text">{{ __('aboutText4') }}</p>
            </div>
        </div>
    </div>

    <h3 class="about-mid-heading">{{ __('historyHeading1') }}</h3>


    <!-- HISTORY -->
    <div class="history-container">
        <div class="container">
            <div class="section-header">
                <img src="/images/icons/history.png" class="history-icon">
                <h2>{{ __('historyHeading2') }}</h2>
            </div>
            <div class="steps">
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history1') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">1962</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history2') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">1974</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history3') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">1976</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history4') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">1983</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history5') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">1992</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history6') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2008</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history7') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2010</div>
                </div>
                <div class="history-steps-container">
                    <div class="content">
                        <p>{{ __('history8') }} </p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2010</div>
                </div>
            </div>
        </div>
    </div>


@endsection
