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
        <section>
            <h1>DFSDFSDF</h1>
        </section>
    </main>

@endsection
