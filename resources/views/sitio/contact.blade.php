@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
            </ol>
        </nav>
     
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.3455043664265!2d-54.610386006946804!3d-25.508226532876453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457aef2e17b78b7%3A0x21ebf8b7b573f100!2sKrishna!5e0!3m2!1ses!2spy!4v1693052150786!5m2!1ses!2spy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="contact-info-wrap gray-bg m-t-40">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://061-501-305">061-501-305</a>
                            <a href="tel://+595 981 278 616">+595 981 278 616</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="mailto://krishnacde.py@gmail.com">krishnacde.py@gmail.com</a>
                            {{-- <a href="mailto://urwebsitenaem.com">urwebsitenaem.com</a> --}}
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <span>Shopping Vendome - 5º Piso,</span>
                            <span> Shopping Americana - 1º piso.</span>
                        </div>
                    </div>
                    <div class="contact-social m-t-40">
                        <div class="section-content">
                            <h5 class="section-content__title">Síganos</h5>
                        </div>
                        <div class="social-link m-t-30">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/krishnacde"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                
                                {{-- <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li> --}}
                                {{-- <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li> --}}
                                <li>
                                    <a href="https://www.instagram.com/krishna_krs"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form gray-bg m-t-40">
                    <div class="section-content">
                        <h5 class="section-content__title">Contacto</h5>
                    </div>
                    <form class="contact-form-style" id="contact-form" action="#" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <input type="text" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-box__single-group">
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                               <div class="form-box__single-group">
                                    <input type="text" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-box__single-group">
                                    <textarea rows="10" placeholder="" required></textarea>
                                </div>
                                <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight m-t-30" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>
@endsection
