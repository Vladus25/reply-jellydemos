@extends('layouts.main-layout')

@section('content')

    <main>

        {{-- HOME SLIDER SECTION --}}
        <section class="jumbotron-container">

            <div class="jumbotron-img">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($slides as $slide)
                            @if ($slide -> category == "Slide")

                                @if ($slide -> id == '1')
                                    <div class="carousel-item active">
                                        <div class="jumbotron-main-1 d-block w-100" style="background-image: url('/storage/img/{{$slide -> img}}');"></div>
                                    </div>
                                @endif
                                @if ($slide -> id > '1')
                                    <div class="carousel-item">
                                        <div class="jumbotron-main-1 d-block w-100" style="background-image: url('/storage/img/{{$slide -> img}}');"></div>
                                    </div>
                                @endif

                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="slide-content">
                <div class="logo-intro"></div>

                <div class="text-welcome">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($slides as $slide)
                                @if ($slide -> category == "Text-slide")

                                    @if ($slide -> id == '4')
                                        <div class="carousel-item active">
                                            <h2 class="d-block w-100">{{$slide -> text}}</h2>
                                        </div>
                                    @endif
                                    @if ($slide -> id > '4')
                                        <div class="carousel-item">
                                            <h2 class="d-block w-100">{{$slide -> text}}</h2>
                                        </div>
                                    @endif

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="slide-sep"></div>

                <p>The Chef creates divine combinations</p>

                <div class="scroll-about app">
                    <span></span>
                </div>

                <div class="owl-buttons">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>

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
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('storage/img/about-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('storage/img/about-2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('storage/img/about-3.jpg') }}" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-container-2">

                <div class="img-container owl-carousel owl-theme">
                    <img class="item" src="{{ asset('storage/img/about-4.jpg') }}" alt="">
                    <img class="item" src="{{ asset('storage/img/about-5.jpg') }}" alt="">
                    <img class="item" src="{{ asset('storage/img/about-6.jpg') }}" alt="">
                </div>

                <div class="text-container">
                    <p class="text">The <strong>History of Kitchens</strong>  and Cooks gives further intimation on Mr Boulanger usual menu, stating confidently that "Boulanger served salted poultry and fresh eggs, all presented without a tablecloth on small marble tables". Numerous commentators have also referred to the supposed restaurant owner's eccentric habit of touting for custom outside his establishment, dressed in aristocratic fashion and brandishing a sword</p>
                    <p class="text">According to Miss Spang, there is not a shred of evidence for any of it. She said: These legends just get passed on by hearsay and then spiral out of control. Her interest in <strong>Boulanger</strong>  dates back to a history of food seminar in Paris in the mid-1990s</p>
                </div>
            </div>
        </section>

        {{-- TIMETABLE SECTION --}}
        <section class="timetable">

            <div class="section-title">
                <div class="timetable-decorator-1"></div>
                <div class="opening-hours">Opening Hours</div>
                <div class="timetable-decorator-2"></div>
            </div>

            <div class="reservations">Call For Reservations</div>

            <div class="hour-days-container">

                <div class="section-subtitle-container">
                    <div class="section-subtitle-days">
                        Sunday to Tuesday
                    </div>
                    <div class="section-subtitle-hours">
                        09:00
                        <br>
                        24:00
                    </div>
                </div>

                <div class="column-divider"></div>

                <div class="section-subtitle-container">
                    <div class="section-subtitle-days">
                        Friday and Saturday
                    </div>
                    <div class="section-subtitle-hours">
                        08:00
                        <br>
                        03:00
                    </div>
                </div>

            </div>

            <div class="number">
                RESERVATION NUMBER: 0842-5484214
            </div>

        </section>

        {{-- BEGIN MENU SECTION --}}
        <section class="menu">
            <div class="container-begin">

                <div class="img-menu">
                    <img src="{{asset('/storage/img/menu-logo.png')}}" alt="Menu logo">
                </div>

                <div class="part-menu-container">

                    {{-- Prime Steaks --}}
                    <div class="part-menu">
                        <h3>Prime Steaks</h3>
                        <ul>
                            @foreach ($plates as $plate)
                                @if ($plate -> category == 'Prime Steaks')
                                    <li>
                                        <div class="name">{{$plate -> name}}</div>
                                        <div class="details">
                                            <span class="detail">{{$plate -> description}}</span>
                                            <span class="price">${{$plate -> price}}</span>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    {{-- Drinks & Wines --}}
                    <div class="part-menu">
                        <h3>Drinks & Wines</h3>
                        <ul>
                            @foreach ($plates as $plate)
                                @if ($plate -> category == 'Drinks & Wines')
                                    <li>
                                        <div class="name">{{$plate -> name}}</div>
                                        <div class="details">
                                            <span class="detail">{{$plate -> description}}</span>
                                            <span class="price">${{$plate -> price}}</span>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    {{-- Desserts --}}
                    <div class="part-menu">
                        <h3>Desserts</h3>
                        <ul>
                            @foreach ($plates as $plate)
                                @if ($plate -> category == 'Desserts')
                                    <li>
                                        <div class="name">{{$plate -> name}}</div>
                                        <div class="details">
                                            <span class="detail">{{$plate -> description}}</span>
                                            <span class="price">${{$plate -> price}}</span>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="all-menu">
                    <a href="#">View Complete Menu</a>
                </div>

            </div>
        </section>

        {{-- TESTIMONIALS SECTION --}}
        <section class="testimonials">
            <div class="container-testimonials">
                <div class="logo-text">
                    <div class="testimonials-img"></div>
                    <div class="test-container">
                        <h2>Testimonials</h2>
                        <span>”</span>
                    </div>
                </div>

                <div class="owl-item owl-carousel owl-theme">
                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <p>{{$testimonial -> description}}</p>
                            <span class="author">{{$testimonial -> author}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- CONTACT SECTION --}}
        <section class="contact-dark">
            <div class="container-contact">

                <div class="title-contact">
                    <h2>Contact</h2>
                </div>

                <div class="section-subtitle">
                    W325 State Road 123 Mondovi, WI  (Wisconsin)   98746-54321
                </div>

                <form class="contact" action="index.html" method="post">

                    <div class="info-message-container">
                        <div class="info">
                            <input type="text" name="name" value="Name">
                            <input type="text" name="email" value="Email">
                            <input type="text" name="subject" value="Subject">
                        </div>

                        <div class="message">
                            <textarea name="message" rows="10" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="submit">
                        <input class="button" type="submit" name="" value="Submit">
                    </div>
                </form>
            </div>
        </section>

        {{-- POSITION SECTION --}}
        <section class="position">
            <div id="map"></div>
            <script>
                function initMap() {
                  // The location of Uluru
                  const uluru = { lat:40.74831153862195, lng: 14.503175540248169 };
                  // The map, centered at Uluru
                  const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    center: uluru,
                  });
                  // The marker, positioned at Uluru
                  const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                  });
                }
            </script>
        </section>

    </main>

@endsection
