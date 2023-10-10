@extends('layouts.app')
@section('main')
<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Contact Center Especializado</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light  py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <h1>Nosotros.</h1>
                <div class="mb-10">
                <p>
                    Omnicanalidad
                </p>
                <p >
                    15 años como empresa de contacto directo omnicanal, especializada en
                    cobranza, venta directa, retención y atención al cliente.
                </p>
                </div>
                <p>
                    Estructura
                </p>
                <p >
                    Capacidad instalada que permite ofrecer un
                     servicio a la medida de cada cliente.
                </p>

                <p>
                    Adaptabilidad
                </p>
                <p >
                    Equipo comprometido y procesos internos orientados al
                    logro de los objetivos de cada proyecto.
                </p>

                <p>
                    Innovación
                </p>
                <p >
                    Tecnología aplicada de desarrollo propio, para seguimiento
                    en tiempo real, de la productividad en cada campaña.
                </p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{asset('assets/img/call/call-1.jpg')}}" alt="reclutamiento_img">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 ">
            <div class="col-lg-11 align-self-center text-center text-lg-start mb-lg-5">
                <img class="img-fluid" src="{{asset('assets/img/call/call-2.jpg')}}" alt="reclutamiento_img">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-center">Adaptabilidad</h1>
            <p class="text-center">Equipo comprometido y procesos internos orientados al logro de los objetivos
                 de cada proyecto.</p>

        </div>
    </div>
    <div class="container">
        <div class="row g-5">
        <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{asset('assets/img/call/call-3.jpg')}}" alt="Card image">

            <div class="card-body">

              <h4 class="card-title"><a>01 Reclutamiento</a></h4>

              <p class="card-text">Proceso de reclutamiento enfocado en garantizar la cobertura de plantillas,
                 con un Role Play para el perfil específico de cada campaña.</p>
            </div>

          </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/call/call-4.jpg')}}" alt="Card image">

                <div class="card-body">

                  <h4 class="card-title"><a>02 Capacitación</a></h4>

                  <p class="card-text">Modelo de capacitación desarrollado para asimilar la información propia de cada campaña y transmitir a
                     cada liner de manera puntual la forma en que debe ejecutar la comunicación.</p>
                </div>

              </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{asset('assets/img/call/call-5.jpg')}}" alt="Card image">

                    <div class="card-body">

                      <h4 class="card-title"><a>03 Desarrollo</a></h4>

                      <p class="card-text">El plan de desarrollo identifica y reconoce colaboradores
                        de alto desempeño, lo que permite mantener un equipo motivado y comprometido.</p>
                    </div>

                  </div>
                </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-l-12 pt-10 pb-10 wow fadeIn" data-wow-delay="0.1s">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/call/call-6.jpg')}}" alt="Card image">

            </div>
        </div>
    </div>
<div class="container">
    <div class="row g-5">
    <div class="col-l-4 pt-10 pb-10 wow fadeIn" data-wow-delay="0.1s">
    <h1>Dashboard en
        Tiempo Real</h1>
        <p>CRM de desarrollo propio que permite el seguimiento en tiempo real de la productividad de cada campaña.

            El dashboard de seguimiento puede ser visualizado desde cualquier dispositivo, con conexión a internet.</p>
    </div>
    <div class="col-l-7 pt-10 pb-10 wow fadeIn" data-wow-delay="0.1s">
        <img class="card-img-top img-fluid" src="{{asset('assets/img/call/call-7.jpg')}}" alt="Card image">

</div>
<div class="col-l-4 pt-10 pb-10 wow fadeIn" data-wow-delay="0.1s">
    <h1>Nuestros Clientes</h1>
 </div>
    <div class="col-l-7 pt-10 pb-10 wow fadeIn" data-wow-delay="0.1s">
        <img class="card-img-top img-fluid" src="{{asset('assets/img/call/call-8.jpg')}}" alt="Card image">

</div>
    </div>
</div>
</div>


@endsection
