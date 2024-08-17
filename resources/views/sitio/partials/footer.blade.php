  <!-- ::::::  Start  Footer Section  ::::::  -->
  <footer class="footer">
    <div class="footer__top gray-bg p-tb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{ url('/') }}" class="footer__logo-link">
                                <img style="height: 135px" src="{{ asset('template_front/assets/img/logo/logo-color.png') }}" alt="" class="footer__logo-img">
                            </a>
                        </div>
                        <div class="footer__text">
                            
                            <p>
                                Tienda de decoración, artículos para el hogar y regalos.<br/>
                                Ubicada en Ciudad del Este, Paraguay.
                             </p>
                        </div>
                        <ul class="footer__address">
                            <li class="footer__address-item"><span><strong>Sucursales:</strong></span> <br/>
                                Shopping Vendome - 5to Piso<br/>
                                Shopping Americana
                            </li>
                            <li class="footer__address-item"><span><strong> Contacto:</strong></span> <br/>
                               
                                <strong>Tel: </strong> 061-501-305<br/>
                                <strong> WhatsApp: </strong>+595 981 278 616<br/>
                                <strong> Email:</strong> krishnacde.py@gmail.com<br/>
                            </li>
                            {{-- <li class="footer__address-item"><span>Contacto: </span> <a href="tel:+595 981278616">+595 981278616</a> </li> --}}
                            {{-- <li class="footer__address-item"><span>Email: </span> <a href="mailto:contacto@krishna.com">contacto@krishna.com</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__menu">
                        <h4 class="footer__nav-title">Categorias</h4>
                        <ul class="footer__nav">
                            @foreach ($categorias as $index => $categoria)
                            @if ($index < 7)
                                <li class="footer__list"><a href="{{ url('/products/' . $categoria->id) }}" class="footer__link">{{$categoria->name}}</a></li>
                            @else
                                @break
                            @endif
                        @endforeach
                          
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__menu">
                        <h4 class="footer__nav-title">Menú</h4>
                        <ul class="footer__nav">
                            <li class="footer__list"><a href="{{ url('/') }}" class="footer__link">Home</a></li>
                            <li class="footer__list"><a href="{{ url('/product') }}" class="footer__link">Productos</a></li>
                            <li class="footer__list"><a href="{{ url('/company') }}" class="footer__link">Empresa</a></li>
                            <li class="footer__list"><a href="{{ url('/contact') }}" class="footer__link">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__menu">
                                <h4 class="footer__nav-title">Síganos</h4>
                                <ul class="footer__social-nav">
                                    <li class="footer__social-list"><a href="https://www.facebook.com/krishnacde" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                    {{-- <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li> --}}
                                    <li class="footer__social-list"><a href="https://www.instagram.com/krishna_krs" class="footer__social-link"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>

          
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="footer__copyright-text">
                        <p>Copyright <a href="#">krishna</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="footer__payment">
                        <a href="#" class="footer__payment-link">
                            <img src="#" alt="" class="footer__payment-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> <!-- ::::::  End  Footer Section  ::::::  -->