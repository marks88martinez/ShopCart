@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Empresa</li>
            </ol>
        </nav>
     
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-top m-b-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-img m-b-30">
                                <div class="img-responsive m-b-40">
                                    <img src="{{asset('template_front/assets/img/empresa/krishna.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h1 class="title title--large title--thin"> Nuestra Historia
                                </h1>
                                <div class="para__content">
                                    <p class="para__text">
                                        Desde hace 34 años, Krishna S.A. se ha dedicado a ofrecer a sus clientes una amplia gama de productos de alta calidad en accesorios, utensilios y decoración para el hogar. Nuestro compromiso es proporcionar no solo productos, sino también una experiencia única que combine funcionalidad y estilo. Gracias a nuestra vasta experiencia en el sector y nuestra pasión por la innovación, hemos logrado consolidarnos como líderes en el mercado.
                                    </p>
                                    <p class="para__text">
                                        En Krishna S.A., creemos que la decoración de un hogar es una expresión de la personalidad y el estilo de vida de nuestros clientes. Por eso, nos esforzamos por mantenernos al día con las últimas tendencias internacionales en diseño y decoración, viajando a diferentes países para seleccionar cuidadosamente los mejores productos. Nuestro equipo de expertos está siempre en la búsqueda de nuevas ideas y soluciones creativas que puedan transformar cualquier espacio en un lugar acogedor y elegante.
                                    </p>
                                    <p class="para__text">
                                        Además de nuestra dedicación a la calidad y el estilo, también nos enorgullece nuestro excelente servicio al cliente. En nuestros dos locales, la matriz en el Shopping Vendome y la filial en el Shopping Americana, ambos ubicados en Ciudad del Este, ofrecemos una atención personalizada para asegurarnos de que cada cliente encuentre exactamente lo que busca. Nuestro personal está capacitado para brindar asesoramiento experto y ayudar a nuestros clientes a tomar las mejores decisiones para sus necesidades de decoración.
                                    </p>
                                    <p class="para__text">
                                        En Krishna S.A., no solo vendemos productos, sino que también nos comprometemos a crear ambientes que inspiren y mejoren la vida de nuestros clientes. A lo largo de estos años, hemos construido una sólida reputación basada en la confianza y la satisfacción del cliente, y seguimos trabajando con la misma pasión y dedicación que al principio. Esperamos seguir siendo parte de la vida de nuestros clientes durante muchos años más, ayudándolos a convertir sus casas en verdaderos hogares.
                                    </p>
                                    {{-- <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero officiis eveniet accusamus recusandae. </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-single m-t-30">
                            <h3 class="title title--small title--regular">Our Company</h3>
                            <div class="para__content">
                                <p class="para__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-single m-t-30">
                            <h3 class="title title--small title--regular">Our Team</h3>
                            <div class="para__content">
                                <p class="para__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-single m-t-30">
                            <h3 class="title title--small title--regular">Testimonial</h3>
                            <div class="para__content">
                                <p class="para__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <br>
@endsection
