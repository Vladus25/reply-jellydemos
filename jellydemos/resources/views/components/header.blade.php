<header :class="{'onScroll': scrollPosition > 350}">
    <nav>
        <div id="logo">
            <a href="http://localhost:8000/home">
                <img src="{{asset('/storage/img/logo-elixir-yellow.png')}}" alt="Logo Elixir">
            </a>
        </div>
        <div id="navigation">
            <ul>
                <li><a class="home" href="http://localhost:8000/home">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Reservations</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="http://localhost:8000/admin">Admin</a></li>
            </ul>
        </div>
    </nav>
</header>
