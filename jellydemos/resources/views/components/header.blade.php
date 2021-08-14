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
        <div id="navigation-mobile">
            <a href="javascript:void(0);" class="burger" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            <ul id="myLinks">
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
    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</header>
