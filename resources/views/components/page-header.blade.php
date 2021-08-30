<!-- ////////////////// Start Header Section ////////////////// -->

<header class="header">
    <div class="social">
        <div class="container d-flex">
            <div class="social__phone mr-md-3"><span>Tel:</span> &nbsp;<a href="tel:+61 451 924 288" class="mail-link">+61 451 924 288</a></div>
            <div class="social__email mr-auto"><span>Email:</span>&nbsp;<a href="mailto:info@smartedumm.com" class="mail-link">info@smartedumm.com</a></div>

            <div class="social__social">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md">
        <div class="navbar__logo">
            <img srcset="/img/home/logo_large_2x.png 2x, /img/home/logo_large_1x.png 1x" src="/img/home/logo_large_2x.png" alt="logo" class="navbar__logo-img" />
        </div>
        <div class="collapse navbar-collapse navbar__menu" id="navmenu">
            <ul class="navbar__list navbar-nav">
                <li class="navbar__listitem"><a href="{{route('home')}}" class="navbar__link">home</a></li>
                <li class="navbar__listitem"><a href="{{route('about')}}" class="navbar__link">about us</a></li>
                <li class="navbar__listitem"><a href="{{route('service')}}" class="navbar__link">student services</a></li>
                <li class="navbar__listitem"><a href="#" class="navbar__link">migration</a></li>
                <li class="navbar__listitem"><a href="#" class="navbar__link">blog</a></li>
                <li class="navbar__listitem"><a href="{{route('partner')}}" class="navbar__link">partners</a></li>
                <li class="navbar__listitem"><a href="{{route('contact')}}" class="navbar__link">contact us</a></li>
            </ul>
        </div>
        <form action="#" class="navbar__search">
            <input type="text" name="" id="" class="navbar__searchinput" placeholder="Search.." />
            <span class="navbar__searchicon">
                <i class="fas fa-search"></i>
            </span>
        </form>

        <div class="toggle" type="button" data-toggle="collapse" data-target="#navmenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <input type="checkbox" id="toggle" class="toggle__checkbox" />
            <label for="toggle" class="toggle__icon">
                <span></span>
            </label>
        </div>
    </nav>
</header>

<!-- ////////////////// End Header Section ////////////////// -->