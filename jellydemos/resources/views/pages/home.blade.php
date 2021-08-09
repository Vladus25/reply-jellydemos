@extends('layouts.main-layout')

@section('content')

    <main>

        {{-- HOME SLIDER SECTION --}}
        <section class="jumbotron-container">

            <div class="jumbotron-img">
                {{-- <img src="{{asset('/storage/img/main-1.jpg')}}" alt="Main-1"> --}}
                <div class="jumbotron-main-1"></div>
            </div>

            <div class="slide-content">
                <div class="logo-intro"></div>

                <div class="text-welcome">
                    <h2>Welcome to restaurant</h2>
                </div>

                <div class="slide-sep"></div>

                <p>The Chef creates divine combinations</p>

                <div class="scroll-about">
                    <span></span>
                </div>

                <div class="owl-buttons">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                </div>
            </div>

            <div class="overlay"></div>
        </section>

        {{-- ABOUT SECTION --}}
        <section class="about">

            <div class="about-us">
                <h2>
                    About Us
                </h2>
            </div>

            <div class="subtitle">
                <p>We love restaurants as much as you do. That’s why we’ve been helping them fill tables since 1999. Welcome to elixir restaurant</p>
            </div>

            <div class="about-container-1">

                <div class="text-container">
                    <h2>The History</h2>
                    <p class="text">The <strong>History of Kitchens</strong>  and Cooks gives further intimation on Mr Boulanger usual menu, stating confidently that "Boulanger served salted poultry and fresh eggs, all presented without a tablecloth on small marble tables". Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                    <p class="text">According to Miss Spang, there is not a shred of evidence for any of it. She said: These legends just get passed on by hearsay and then spiral out of control. Her interest in <strong>Boulanger</strong>  dates back to a history of food seminar in Paris in the mid-1990s</p>
                    <div class="ornament"></div>
                </div>

                <div class="img-container">
                    <img src="{{ asset('storage/img/about-1.jpg') }}" alt="">
                </div>
            </div>

            <div class="about-container-2">

                <div class="img-container">
                    <img src="{{ asset('storage/img/about-4.jpg') }}" alt="">

                    <div class="owl-buttons">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>

                    <div class="owl-pagination">
                        <div class="owl-page active"></div>
                        <div class="owl-page"></div>
                        <div class="owl-page"></div>
                    </div>
                </div>

                <div class="text-container">
                    <p class="text">The <strong>History of Kitchens</strong>  and Cooks gives further intimation on Mr Boulanger usual menu, stating confidently that "Boulanger served salted poultry and fresh eggs, all presented without a tablecloth on small marble tables". Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                    <p class="text">According to Miss Spang, there is not a shred of evidence for any of it. She said: These legends just get passed on by hearsay and then spiral out of control. Her interest in <strong>Boulanger</strong>  dates back to a history of food seminar in Paris in the mid-1990s</p>
                </div>
            </div>
        </section>

        {{-- TIMETABLE SECTION --}}
        <section class="timetable">

        </section>
    </main>

@endsection
