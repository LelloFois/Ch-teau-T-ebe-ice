{{-- not used --}}
<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel = "icon" type = "image/png" href = "./images/logo.png">
        <link rel="stylesheet" href={{ mix("css/style.css") }}>
        <link rel="stylesheet" href={{ mix("css/footer.css") }}>
        <link rel="stylesheet" href={{ mix("css/about.css") }}>
        <link rel="stylesheet" href={{ mix("css/contact-us.css") }}>
        <link rel="stylesheet" href={{ mix("css/burger-icon.css") }}>
        <link rel="stylesheet" href={{ mix("css/navbar.css") }}>
        @yield('header')
        <title>Château Třebešice</title>
        
    </head>
<body>
    
   <header>
    
    <nav>
       
        
        <div class="navbar">
         

            <div class="navbar__links-left">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
            <div class="navbar__logo">
                <img src="./images/logo-green.svg" alt="logo" width="50px">
            </div>
            <div class="navbar__links-right">
                <ul>
                    <li><a href="#">Experience</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>
   </header>
    
    @yield('content')
    <div id="root"></div>

    
   <footer class="footer">
        <div class="footer__logo">
            <img src="./images/logo-smoke.svg" alt="logo" width="50px">
        </div>
        <div class="footer-nav">
            
            <a href="#">Home</a>
            <a href="#">Rooms</a>
            <a href="#">Events</a>
            <a href="#">Experience</a>
            <a href="#">Gallery</a>
            <a href="/contact">Contacts</a>
        </div>
        <div class="footer-info">

            <p>Privacy Policy | Cookie Policy</p>
            <p> © 2022 Chateau Trebesice Zámek -Třebešice  -28601 Čáslav -Czech Republic
                info@ct.com +420 732 7977 <br>
                <br>
            
            </p>
        </div>
   </footer>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</body>
</html>