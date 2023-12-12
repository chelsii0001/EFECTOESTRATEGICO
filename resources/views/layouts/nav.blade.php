   <!-- header Start -->
   <div class="container-fluid sticky-top">
       <div class="container">
           <nav class="navbar navbar-expand-lg navbar-dark p-0">
               <a href="{{ route('/') }}" class="navbar-brand">
                   <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo-Efecto" width="150">
               </a>
               <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                   data-bs-target="#navbarCollapse">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                   <div class="navbar-nav ms-auto">
                       <a href="{{ route('/') }}" class="nav-item nav-link " style="color: #fff">Inicio</a>
                       <a href="{{ route('inbound') }}" class="nav-item nav-link" style="color: #fff">Inbound
                           Marketing</a>
                       <a href="{{ route('reclutamiento') }}" class="nav-item nav-link"
                           style="color: #fff">Reclutamiento Digital</a>
                       <a href="{{ route('btl') }}" class="nav-item nav-link" style="color: #fff">Agencia BTL</a>
                       <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                               style="color: #fff">Contacto</a>
                           <div class="dropdown-menu bg-light mt-2">
                               <a href="{{ route('contacto') }}" class="dropdown-item">Contáctanos</a>
                               <a href="{{ route('bolsa') }}" class="dropdown-item">Bolsa de Trabajo</a>
                           </div>
                       </div>
                   </div>
               </div>
           </nav>
       </div>
   </div>
   <!-- header End -->
