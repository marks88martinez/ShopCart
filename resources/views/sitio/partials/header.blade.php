   <!-- ::::::  Start  Header Section  ::::::  -->
   <header>
    <!-- ::::::  Start Large Header Section  ::::::  -->
    <div class="header header--1">
        <!-- Start Header Top area -->
        <div class="header__top header__top--style-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__top-content">
                            <div class="header__top-content--left">
                                <div class="contact_cms">
                                    <span class="cms1">Telefone: </span>
                                    <span class="cms2">+595 981278616</span>
                                </div>
                            </div>

                            <div class="header__top-content--right">
                           
                                {{-- ////////////////////////////////////// --}}
                                {{-- <div class="user-info user-set-role">
                                    <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true">  <i class="icon-user"></i> Setting <i class="fal fa-chevron-down"></i></a>
                                    <ul class="expand-dropdown-menu dropdown-menu" >
                                        <li><a href="my-account.html">

                                            My account
                                            </a>
                                        </li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Sign in</a></li>
                                    </ul>
                                </div>  --}}
                               
                               {{-- ////////////////////////////////////// --}}
                         
                               {{-- ////////////////////////////////////// --}}
                                @if (Auth::user() )
                                <div class="user-info user-set-role">
                                    
                                    <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true">  <i class="icon-user"></i>  {{ Auth::user()->name }} <i class="fal fa-chevron-down"></i></a>

                                    {{-- <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true">  <i class="icon-user"></i> Setting <i class="fal fa-chevron-down"></i></a> --}}
                                    <ul class="expand-dropdown-menu dropdown-menu" >

                                        <li><a href="client/my_account">

                                            Mi Cuenta
                                            </a>
                                        </li>
                                        <li><a href="cart">Checkout</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
    
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                     
                                    </ul>
                                </div> 
                                @else
                                    <div class="user-currency user-set-role">
                                        <a class="user-set-role__button" href="{{ route('client.login')}}"  aria-haspopup="true">  <i class="icon-user"></i> Login </i></a>
                                    </div>
                                    @endif
                                    
                                    <div class="user-currency user-set-role">
                                        <audio id="audioPlayer" controls>
                                            <source src="{{ asset('music/Nectar_Drop.mp3') }}" type="audio/mpeg">
                                        </audio>
                                    </div>
                               
                               
                                
                                 
                                <!-- <div class="user-currency user-set-role">
                                    <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true" >USD $<i class="fal fa-chevron-down"></i></a>
                                    <ul class="expand-dropdown-menu dropdown-menu" >
                                        <li><a href="#">USD $</a></li>
                                        <li><a href="#">EURO €</a></li>
                                    </ul>
                                </div> -->
                                <!-- <div class="user-info user-set-role">
                                    <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true"> <img src="template_front/assets/img/icon/flag/icon_usa.png" alt="">USA <i class="fal fa-chevron-down"></i></a>
                                    <ul class="expand-dropdown-menu dropdown-menu" >
                                        <li><a href="#"><img src="template_front/assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                                        <li><a href="#"><img src="template_front/assets/img/icon/flag/icon_france.png" alt=""> Français</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Start Header Top area -->
   

        <!-- Start Header Middle area -->
        <div class="header__middle header__top--style-1 p-tb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="/" class="header__logo-link">
                                <img style="height: 135px" src="{{ asset('template_front/assets/img/logo/logo-color.png') }}" alt="" class="header__logo-img">
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            <div class="col-lg-10">
                                
                                {{-- <form class="header__search-form" action="#">
                                    <div class="header__search-category">
                                        <select class="bootstrap-select" name="poscats">
                                            <option value="0">Categorias</option>
                                            <option value="12">
                                                Fashion
                                            </option>
                                            <option value="27">
                                                - - Women
                                            </option>
                                            <option value="30">
                                                - - - - Dresses
                                            </option>
                                            <option value="31">
                                                - - - - Shirts &amp; Blouses
                                            </option>
                                            <option value="32">
                                                - - - - Blazers
                                            </option>
                                            <option value="33">
                                                - - - - Lingerie
                                            </option>
                                            <option value="34">
                                                - - - - Jeans
                                            </option>
                                            <option value="28">
                                                - - Men
                                            </option>
                                            <option value="35">
                                                - - - - Shorts
                                            </option>
                                            <option value="36">
                                                - - - - Sportswear
                                            </option>
                                            <option value="37">
                                                - - - - Swimwear
                                            </option>
                                            <option value="38">
                                                - - - - Jackets &amp; Suits
                                            </option>
                                            <option value="39">
                                                - - - - T-shirts &amp; Tank Tops
                                            </option>
                                            <option value="29">
                                                - - Kids
                                            </option>
                                            <option value="40">
                                                - - - - Trousers
                                            </option>
                                            <option value="41">
                                                - - - - Shirts &amp; Tops
                                            </option>
                                            <option value="42">
                                                - - - - Knitwear
                                            </option>
                                            <option value="43">
                                                - - - - Jackets
                                            </option>
                                            <option value="44">
                                                - - - - Sandals
                                            </option>
                                            <option value="13">
                                                Electronics
                                            </option>
                                            <option value="45">
                                                - - Cameras
                                            </option>
                                            <option value="49">
                                                - - - - Cords and Cables
                                            </option>
                                            <option value="50">
                                                - - - - gps accessories
                                            </option>
                                            <option value="51">
                                                - - - - Microphones
                                            </option>
                                            <option value="52">
                                                - - - - Wireless Transmitters
                                            </option>
                                            <option value="46">
                                                - - Audio
                                            </option>
                                            <option value="53">
                                                - - - - Other Accessories
                                            </option>
                                            <option value="54">
                                                - - - - Portable Audio
                                            </option>
                                            <option value="55">
                                                - - - - Satellite Radio
                                            </option>
                                            <option value="56">
                                                - - - - Visual Accessories
                                            </option>
                                            <option value="47">
                                                - - Cell Phones
                                            </option>
                                            <option value="57">
                                                - - - - iPhone
                                            </option>
                                            <option value="58">
                                                - - - - Samsung Galaxy
                                            </option>
                                            <option value="59">
                                                - - - - SIM Cards
                                            </option>
                                            <option value="60">
                                                - - - - Prepaid Cell Phones
                                            </option>
                                            <option value="48">
                                                - - TV &amp; Video
                                            </option>
                                            <option value="61">
                                                - - - - 4K Ultra HDTVs
                                            </option>
                                            <option value="62">
                                                - - - - All TVs
                                            </option>
                                            <option value="63">
                                                - - - - Refurbished TVs
                                            </option>
                                            <option value="64">
                                                - - - - TV Accessories
                                            </option>
                                            <option value="14">
                                                Toys &amp; Hobbies
                                            </option>
                                            <option value="65">
                                                - - Books &amp; Board Games
                                            </option>
                                            <option value="67">
                                                - - - - Arts &amp; Crafts
                                            </option>
                                            <option value="68">
                                                - - - - Baby &amp; Toddler Toys
                                            </option>
                                            <option value="69">
                                                - - - - Electronics for Kids
                                            </option>
                                            <option value="70">
                                                - - - - Dolls &amp; Accessories
                                            </option>
                                            <option value="66">
                                                - - Baby Dolls
                                            </option>
                                            <option value="71">
                                                - - - - Baby Alive Dolls
                                            </option>
                                            <option value="72">
                                                - - - - Barbie
                                            </option>
                                            <option value="73">
                                                - - - - Baby Annabell
                                            </option>
                                            <option value="74">
                                                - - - - Bratz
                                            </option>
                                            <option value="15">
                                                Sports &amp; Outdoors
                                            </option>
                                            <option value="16">
                                                Smartphone &amp; Tablets
                                            </option>
                                            <option value="17">
                                                Health &amp; Beauty
                                            </option>
                                            <option value="18">
                                                Computers &amp; Networking
                                            </option>
                                            <option value="19">
                                                Accessories
                                            </option>
                                            <option value="20">
                                                Jewelry &amp; Watches
                                            </option>
                                            <option value="21">
                                                Flashlights &amp; Lamps
                                            </option>
                                            <option value="22">
                                                Cameras &amp; Photo
                                            </option>
                                            <option value="23">
                                                Holiday Supplies &amp; Gifts
                                            </option>
                                            <option value="24">
                                                Automotive
                                            </option>
                                            <option value="25">
                                                cosmetic
                                            </option>
                                        </select>
                                    </div>
                                    <div class="header__search-input">
                                        <input type="search" placeholder="¿Qué desea comprar?">
                                        <button class="btn btn--submit btn--blue btn--uppercase btn--weight " type="submit">Buscar</button>
                                    </div>
                                </form> --}}

                                <form action="{{ route('products') }}" method="GET" class="header__search-form">
                                    <div class="header__search-category">
                                

                                        <select class="bootstrap-select" name="categoria">
                                            <option value="0">Categorias</option>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">
                                                   {{ $categoria->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                  <div class="header__search-input">
                                      <input type="search" name="query" placeholder="¿Qué desea comprar?">
                                      <button class="btn btn--submit btn--blue btn--uppercase btn--weight" type="submit">Buscar</button>
                                  </div>
                                </form>
                                
                            </div>
                            <div class="col-lg-2">
                                <div class="header__wishlist-box">
                                 
                                    <!-- Start Header Wishlist Box -->
                                    {{-- <div class="header__wishlist pos-relative">
                                        <a href="wishlist.html" class="header__wishlist-link">
                                            <i class="icon-heart"></i>
                                            <span class="wishlist-item-count pos-absolute">3</span>
                                        </a>
                                    </div>  --}}

                                    
                                     <!-- End Header Wishlist Box -->

                                    <!-- Start Header Add Cart Box -->
                                    <div class="header-add-cart pos-relative m-l-40">
                                        <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                            <i class="icon-shopping-cart"></i>
                                            <span class="wishlist-item-count pos-absolute">{{ \Cart::getTotalQuantity()}}</span>
                                        </a>
                                    </div> 
                             
                                    <!-- End Header Add Cart Box -->
                                    <!-- Start Header User -->
                                    
                                    <!-- End Header User -->
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Header Middle area -->

        <!-- Start Header Menu Area -->
        <div class="header-menu">
            <div class="container">
                <div class="row col-12">
                    <nav>
                        <ul class="header__nav">
                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="{{ route('shop') }}" class="header__nav-link">Home</a>
                                <!--Single Dropdown Menu-->
                                <!-- <ul class="dropdown__menu pos-absolute">
                                    <li class="dropdown__list"><a href="index.html" class="dropdown__link">Home 1</a></li>
                                    <li class="dropdown__list"><a href="index-2.html" class="dropdown__link">Home 2</a></li>
                                    <li class="dropdown__list"><a href="index-3.html" class="dropdown__link">Home 3</a></li>
                                    <li class="dropdown__list"><a href="index-4.html" class="dropdown__link">Home 4</a></li>
                                </ul> -->
                                <!--Single Dropdown Menu-->
                            </li> <!-- End Single Nav link-->

                            <!--Start Single Nav link-->
                            <!-- <li class="header__nav-item pos-relative"> -->
                                <!-- <a href="#" class="header__nav-link">Pages <i class="icon-chevron-down"></i></a> -->
                                <!--Single Dropdown Menu-->
                                <!-- <ul class="dropdown__menu pos-absolute">
                                    <li class="dropdown__list"><a href="about.html" class="dropdown__link">About</a></li>
                                    <li class="dropdown__list"><a href="cart.html" class="dropdown__link">Cart</a></li>
                                    <li class="dropdown__list"><a href="checkout.html" class="dropdown__link">Checkout</a></li>
                                    <li class="dropdown__list"><a href="compare.html" class="dropdown__link">Compare</a></li>
                                    <li class="dropdown__list"><a href="empty-cart.html" class="dropdown__link">Empty Cart</a></li>
                                    <li class="dropdown__list"><a href="wishlist.html" class="dropdown__link">Wishlist</a></li>
                                    <li class="dropdown__list"><a href="my-account.html" class="dropdown__link">My Account</a></li>
                                    <li class="dropdown__list"><a href="login.html" class="dropdown__link">Login</a></li>
                                    <li class="dropdown__list"><a href="404-page.html" class="dropdown__link">404 Page</a></li>
                                </ul> -->
                                <!--Single Dropdown Menu-->
                            <!-- </li>  -->
                            <!-- End Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="{{ route('products') }}" class="header__nav-link">Productos </a>
                                <!-- Megamenu Menu-->
                                {{-- <ul class="mega-menu pos-absolute">
                                    <li class="mega-menu__box">
                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Shop Page Grid</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="single-1.html" class="mega-menu__link">Shop Default</a></li>
                                                <li class="mega-menu__list"><a href="shop-4-grid.html" class="mega-menu__link">Shop 4grid</a></li>
                                                <li class="mega-menu__list"><a href="shop-5-grid.html" class="mega-menu__link">Shop 5grid</a></li>
                                                <li class="mega-menu__list"><a href="shop-grid-left-sidebar.html" class="mega-menu__link">Shop Left Sidebar</a></li>
                                                <li class="mega-menu__list"><a href="shop-grid-right-sidebar.html" class="mega-menu__link">Shop Right Sidebar</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Shop Page List</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="shop-list.html" class="mega-menu__link">Shop List</a></li>
                                                <li class="mega-menu__list"><a href="shop-list-left-sidebar.html" class="mega-menu__link">Shop Left Sidebar</a></li>
                                                <li class="mega-menu__list"><a href="shop-list-right-sidebar.html" class="mega-menu__link">Shop Right Sidebar</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Product Single</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="single-1.html" class="mega-menu__link">Single</a></li>
                                                <li class="mega-menu__list"><a href="single-variable.html" class="mega-menu__link">Variable</a></li>
                                                <li class="mega-menu__list"><a href="single-left-tab.html" class="mega-menu__link">Left Tab</a></li>
                                                <li class="mega-menu__list"><a href="single-right-tab.html" class="mega-menu__link">Right Tab</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->

                                        <!--Single Megamenu Item Menu-->
                                        <div class="mega-menu__item-box">
                                            <span class="mega-menu__title">Product Single</span>
                                            <ul class="mega-menu__item">
                                                <li class="mega-menu__list"><a href="single-slider.html" class="mega-menu__link">Single Slider</a></li>
                                                <li class="mega-menu__list"><a href="single-gallery-left.html" class="mega-menu__link">Gallery Left</a></li>
                                                <li class="mega-menu__list"><a href="single-gallery-right.html" class="mega-menu__link">Gallery Right</a></li>
                                                <li class="mega-menu__list"><a href="single-sticky-left.html" class="mega-menu__link">Sticky Left</a></li>
                                                <li class="mega-menu__list"><a href="single-sticky-right.html" class="mega-menu__link">Sticky Right</a></li>
                                            </ul>
                                        </div>
                                        <!--Single Megamenu Item Menu-->
                                    </li>
                                    <!--Megamenu Item Banner-->
                                    <li class="mega-menu__banner">
                                        <a href="single-1.html" class="mega-menu__banner-link">
                                            <img src="template_front/assets/img/banner/menu-banner.jpg" alt="" class="mega-menu__banner-img">
                                        </a>
                                    </li>
                                    <!--Megamenu Item Banner-->
                                </ul> --}}
                                <!-- Megamenu Menu-->
                            </li> <!-- Start Single Nav link-->

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                <a href="{{ route('company') }}" class="header__nav-link">Empresa </i></a>
                              
                            </li> <!-- Start Single Nav link-->

                           

                            <!--Start Single Nav link-->
                            <li class="header__nav-item pos-relative">
                                 <a href="{{ route('contact') }}" class="header__nav-link">Contactos</a>
                            </li> <!-- End Single Nav link-->
                           
                          
                        </ul>
                        
                    </nav>
                </div>
            </div>
        </div> <!-- End Header Menu Area -->

        <!-- Start Header Tag Area -->
        <!-- <div class="header__bottom header__bottom--style-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__tag">
                            <span class="header__tag-title">Top Tags</span>
                            <ul class="header__tag-nav">
                                <li class="header__tag-list"><a href="" class="header__tag-link">Ebooks</a></li>
                                <li class="header__tag-list"><a href="" class="header__tag-link">Drone</a></li>
                                <li class="header__tag-list"><a href="" class="header__tag-link">Mobile Phone</a></li>
                                <li class="header__tag-list"><a href="" class="header__tag-link">Head Phone</a></li>
                                <li class="header__tag-list"><a href="" class="header__tag-link">Digital Watch</a></li>
                                <li class="header__tag-list"><a href="" class="header__tag-link">Gaming Console</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
         <!-- End Header Tag Area -->
    </div> <!-- ::::::  End Large Header Section  ::::::  -->

    <!-- ::::::  Start Mobile Header Section  ::::::  -->
    <div class="header__mobile mobile-header--1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Start Header Mobile Top area -->
                    <div class="header__mobile-top">
                        <div class="mobile-header__logo">
                            <a href="{{ url('/') }}"  class="mobile-header__logo-link">
                                <img style="height: 135px" src="{{ asset('template_front/assets/img/logo/logo-color.png') }}" alt="" class="mobile-header__logo-img">
                            </a>
                        </div>
                        <div class="header__wishlist-box">
                            <!-- Start Header Wishlist Box -->
                            {{-- <div class="header__wishlist pos-relative">
                                <a href="wishlist.html" class="header__wishlist-link">
                                    <i class="icon-heart"></i>
                                    <span class="wishlist-item-count pos-absolute">3</span>
                                </a>
                            </div>  --}}
                            <!-- End Header Wishlist Box -->

                            <!-- Start Header Add Cart Box -->
                            <div class="header-add-cart pos-relative m-l-20">
                                <a href="#offcanvas-add-cart__box" class="header__wishlist-link offcanvas--open-checkout offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="wishlist-item-count pos-absolute">{{ \Cart::getTotalQuantity()}}</span>
                                </a>
                            </div> <!-- End Header Add Cart Box -->

                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle m-l-20"><i class="icon-menu"></i></a>

                        </div>
                    </div> <!-- End Header Mobile Top area -->

                    <!-- Start Header Mobile Middle area -->
                    <div class="header__mobile-middle header__top--style-1 p-tb-10">
                        <form action="{{ route('products') }}" method="GET" class="header__search-form">
                            <div class="header__search-category header__search-category--mobile">
                                <select class="bootstrap-select">
                                    <option value="0">Categorias</option>
                             
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">
                                        {{ $categoria->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="header__search-input header__search-input--mobile">
                                <input type="search" placeholder="¿Qué desea comprar?"  id="query" name="query">
                                <button class="btn btn--submit btn--blue btn--uppercase btn--weight" type="submit"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div> <!-- End Header Mobile Middle area -->

                </div>
            </div>
        </div>
    </div> <!-- ::::::  Start Mobile Header Section  ::::::  -->

    <!-- ::::::  Start Mobile-offcanvas Menu Section  ::::::  -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas__close offcanvas-close">&times;</button>
        <div class="offcanvas-inner">
            {{-- <div class="offcanvas-userpanel m-b-30">
                <ul>
                    <li class="offcanvas-userpanel__role">
                        <a href="#">Menú</a>
                        <ul class="user-sub-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/products">Productos</a></li>
                            <li><a href="company">Empresa</a></li>
                            <li><a href="contact">Contactos</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas-userpanel__role">
                        <a href="#">USD $</a>
                        <ul class="user-sub-menu">
                            <li><a href="#">USD $</a></li>
                            <li><a href="#">EURO €</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas-userpanel__role">
                        <a href="#"><img src="template_front/assets/img/icon/flag/icon_usa.png" alt="">English </a>
                        <ul class="user-sub-menu">
                            <li><a href="#"><img src="template_front/assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                            <li><a href="#"><img src="template_front/assets/img/icon/flag/icon_france.png" alt=""> Français</a></li>
                        </ul>
                    </li>
                </ul>
            </div> --}}
            
            <div class="offcanvas-menu m-b-30">
                <h4>Menu</h4>
              
    
                    <li><a href="/">Home</a></li>
                    <li><a href="products">Productos</a></li>
                    <li><a href="company">Empresa</a></li>
                    <li><a href="contact">Contactos</a></li>
                </ul>
            </div>
   
            <div class="offcanvas-social">
                <span>Síganos</span>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/krishnacde"><i class="fab fa-facebook"></i></a>
                    </li>
                   
                    <li>
                        <a href="https://www.instagram.com/krishna_krs"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- ::::::  End Mobile-offcanvas Menu Section  ::::::  -->

    <!-- ::::::  Start Popup Add Cart ::::::  -->
    @include('sitio.partials.cart')
     <!-- :::::: End Popup Add Cart :::::: -->

    <div class="offcanvas-overlay"></div>
</header> <!-- ::::::  End  Header Section  ::::::  -->      