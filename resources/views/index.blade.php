
@extends('layouts.app')
@section('main')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Efecto Estratégico</div>
                    //<h1 class="display-4 text-white mb-4 animated slideInRight">Contact Center Especializado</h1>

                    <a href="{{ route('contacto') }}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contactanos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">

                    <h1 class="mb-4">Ayudamos a crecer su negocio</h1>
                    <p class="mb-4">Somos una empresa de impulso de venta omnicanal, generamos demanda e influimos en la decisión de compra...

                        Tenemos como misión brindar a nuestros clientes la mejor experiencia; proporcionando tecnología, asesoría, personal altamente calificado y estrategias para el correcto posicionamiento de nuestras campañas
                        </p>

                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                        <img class="img-fluid" src="{{ asset('assets/img/Logo-Efecto-grande.jpg')}}">

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon btn-square">
                            <i class="fa fa-robot fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Inbound Marketing</h5>
                        <p>Una metodología comercial que se basa en atraer clientes con contenido útil, relevante y agregando valor en cada una de las etapas del recorrido del comprador.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('inbound') }}">Leer Más...</a>
                    </div>
                </div>
                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon btn-square">
                            <i class="fa fa-graduation-cap fa-2x"></i>

                        </div>
                        <h5 class="mb-3">Reclutamiento digital</h5>
                        <p>La adaptación de la metodología inbound marketing a procesos de reclutamiento. Aprovecha las herramientas digitales, que proveen las redes sociales, para llegar al público objetivo de una forma más rápida y eficiente.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('reclutamiento') }}">Leer Más...</a>
                    </div>
                </div>
                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon btn-square">
                            <i class="fa fa-phone fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Call Center</h5>
                        <p>15 años como empresa de contacto directo omnicanal, especializada en cobranza, venta directa, retención y atención al cliente.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="{{ route('call') }}">Leer Más...</a>
                    </div>
                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="text-white mb-4">Nuestros Valores.</h1>

                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span> Responsabilidad</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Honestidad</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Compromiso</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Innovacion</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Profesionalidad</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">

                                <a class="btn btn-secondary rounded-pill px-4" href="">Conózcanos</a>

                        </div>

                    </div>
                </div>

                <div class="col-lg-6 mt-100px text-center" data-wow-delay="0.5s">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- Somos -->

        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">

                    <h1 class="mb-4">Somos Efecto Estratégico</h1>
                    <p class="mb-4">Nos caracterizamos por ser una empresa seria, puntual y responsable; nos centramos en la honestidad hacía nuestros clientes y nuestros colaboradores; brindamos el mejor trato y servicio posible que asegure una experiencia gratificante a todo aquel que nos conoce; nos satisface ser un lugar donde todo quien forme parte, se sienta cómodo, motivado y comprometido con nuestra función; nos guiamos por un sentido de innovación y creatividad para posicionar a nuestros clientes, como la mejor opción en el mercado. Es así, como todo esto nos ayuda a reforzar nuestra profesionalidad como organización.</p>
                </div>
                <div class="col-lg-7 " >
                    <div class="about-img">
                    <img class="img-fluid" src="{{ asset('assets/img/img-10.png')}}">
                    </div>
                </div>
            </div>
        </div>

    <!-- Somos End -->
@endsection
