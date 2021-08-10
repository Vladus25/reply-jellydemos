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

                <div class="part-menu-containe">

                    {{-- Prime Steaks --}}
                    <div class="part-menu">
                        <h3>Prime Steaks</h3>
                        <ul>
                            <li>
                                <div class="name">Filet</div>
                                <div class="details">
                                    <span class="detail">7 oz. Center Cut10 oz. Double cut</span>
                                    <span class="price">$14.49</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Boine in filet</div>
                                <div class="details">
                                    <span class="detail">10 oz Greg Norman Ranch, Australia</span>
                                    <span class="price">$20.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">New York Strip</div>
                                <div class="details">
                                    <span class="detail">9 oz. Center Cut12 oz. Double cut  oz</span>
                                    <span class="price">$9.99</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Porterhouse</div>
                                <div class="details">
                                    <span class="detail">7 oz. Center Cut10 oz. Double cut</span>
                                    <span class="price">$7.99</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Delmonico</div>
                                <div class="details">
                                    <span class="detail">10 oz Greg Norman Ranch, Australia</span>
                                    <span class="price">$17.99</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Drinks & Wines --}}
                    <div class="part-menu">
                        <h3>Drinks & Wines</h3>
                        <ul>
                            <li>
                                <div class="name">Raimat Abadia</div>
                                <div class="details">
                                    <span class="detail">Complex, Dark Cherry, Spice, bodied</span>
                                    <span class="price">$8.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Eden Chardonnay</div>
                                <div class="details">
                                    <span class="detail">Elegant, Lemon, Vanilla, bodied</span>
                                    <span class="price">$15.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Mailly Brut Reserva</div>
                                <div class="details">
                                    <span class="detail">Dry, Toast, Citrus, Medium-bodied </span>
                                    <span class="price">$17.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Leon V de Armenia</div>
                                <div class="details">
                                    <span class="detail">Crisp, Citrus, Full-bodied</span>
                                    <span class="price">$12.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Caberenet Sauvignon</div>
                                <div class="details">
                                    <span class="detail">Intense, Cherry, Chocolate, Full-bodied</span>
                                    <span class="price">$30.50</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Desserts --}}
                    <div class="part-menu">
                        <h3>Desserts</h3>
                        <ul>
                            <li>
                                <div class="name">Creme Brulee</div>
                                <div class="details">
                                    <span class="detail">Creme Anglaise, Vanilla Bean Ice Cream </span>
                                    <span class="price">$7.49</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Warm chocolate</div>
                                <div class="details">
                                    <span class="detail">Amarena Cherries, Kirsch Cream</span>
                                    <span class="price">$6.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Cheese cake</div>
                                <div class="details">
                                    <span class="detail">Cheese creme, ice cream, strawberry </span>
                                    <span class="price">$4.50</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Apple Turnover</div>
                                <div class="details">
                                    <span class="detail">Creme Anglaise, Vanilla Bean Ice Cream</span>
                                    <span class="price">$7.99</span>
                                </div>
                            </li>
                            <li>
                                <div class="name">Sorbet with fruit</div>
                                <div class="details">
                                    <span class="detail">Lemon, organge, strawberry or mango</span>
                                    <span class="price">$8.50</span>
                                </div>
                            </li>
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

            </div>
        </section>
    </main>

@endsection
