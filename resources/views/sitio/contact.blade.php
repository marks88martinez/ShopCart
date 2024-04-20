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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="contact-info-wrap gray-bg m-t-40">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://+012-345-678-102">+012 345 678 102</a>
                            <a href="tel://+012-345-678-102">+012 345 678 102</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="mailto://urname@email.com">urname@email.com</a>
                            <a href="mailto://urwebsitenaem.com">urwebsitenaem.com</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <span>Address goes here,</span>
                            <span>street, Crossroad 123.</span>
                        </div>
                    </div>
                    <div class="contact-social m-t-40">
                        <div class="section-content">
                            <h5 class="section-content__title">Follow Us</h5>
                        </div>
                        <div class="social-link m-t-30">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
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
                                    <input type="text" placeholder="Name" required>
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
                                    <textarea rows="10" placeholder="Your Messege" required></textarea>
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
