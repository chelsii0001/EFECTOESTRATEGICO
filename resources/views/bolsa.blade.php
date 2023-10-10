@extends('layouts.app')
@section('main')

<div class="container-fluid pt-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Bolsa de trabajo</h1>

            </div>
        </div>
    </div>
</div>
<<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm">
                                <form class="form-horizontal" action="#0"  role="form" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <legend class="text-center header">En Efecto Estratégico siempre tenemos la solución a lo que estás buscando...¡Únete a nuestro equipo</legend>
                                        <div class="form-group mt-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Nombre" name="name" required>
                                              </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Apellidos" name="lastname" required>
                                              </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Correo" name="email" required>
                                              </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Teléfono" name="phone" required>
                                              </div>
                                        </div>
                                        <div class="form-group mt-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="fa fa-pdf-o"></i></span>
                                                </div>
                                                <input type="file" class="form-control" placeholder="Curriculum" name="file" required>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="message" name="msg" placeholder="Escribir mensaje:" rows="7" required></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group ma-4">
                                            <div class="col-md-12 text-center">
                                                <button type="button" id="BtnSubmitDisabled" class="btn btn-primary btn-lg">Enviar</button>
                                                <div class="ma-4">
                                                    <div id="loading" class="alert-primary text-center hide"></div>
                                                    <div id="error" class="alert-danger text-center hide"></div>
                                                    <div id="success" class="alert-success text-center hide"></div>
                                                    <div class="alert alert-danger print-error-msg text-center" style="display:none">
                                                        <ul></ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="{{asset('assets/img/contacto.png')}}" alt="reclutamiento_img">
            </div>
        </div>
    </div>
</div>



@endsection
@section('script')
<script type="text/javascript">
    $('#form-submit').submit(function(e) {
        $('#loading').show();
        $('#success').hide();
        $('#loading').text('CARGANDO....');
        $('#error').hide();
        $("#BtnSubmit").prop("disabled", true);
        let mensajes = [];
        e.preventDefault();
        let fd = new FormData(this);
        $.ajax({
            url: "{{ route('contact.post') }}",
            data: fd,
            type: "POST",
            dataType: 'json',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            success: function(data) {
                $('#success').text('MENSAJE ENVIANDO, PRONTO NOS PONDREMOS EN CONTACTO CONTIGO');
                $('#success').show();
                $("#form-submit").trigger("reset");
                $("#BtnSubmit").prop("disabled", false);
                $('#error').hide();
                $('#loading').hide();
                $(".print-error-msg").css('display', 'none');

            },
            error: function(errors) {

                $('#success').hide();
                $("#BtnSubmit").prop("disabled", false);
                if (errors.status == 422) {
                    mensajes = errors.responseJSON.errors;
                    printErrorMsg(mensajes);
                }
                if (errors.status == 401) {
                    window.location.href = '/';
                }
                $('#error').text('OCURRIO UN ERROR');
                $('#error').show();
                $('#loading').hide();
            }

        });

    });

    function printErrorMsg(msg) {

        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $.each(msg, function(key, value) {
            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
        });

    }

    function findPos(obj) {
        var curtop = 0;
        if (obj.offsetParent) {
            do {
                curtop += obj.offsetTop;
            } while (obj = obj.offsetParent);
            return [curtop];
        }
    }
</script>
@endsection
