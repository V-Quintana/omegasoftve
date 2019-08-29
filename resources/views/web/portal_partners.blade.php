@extends('layouts.web.base')
@section('title', 'Omegasoft - Portal de Partner')
@section('description', 'En Omegasoft, proporcionamos herramientas para impulsar el negocio de nuestra red de socios, trabajando juntos.')
@section('content')

<section class="page-title" style = "background: #f3fbfd;height: 477px;">
    <div class="portal-media" >
        <div class="auto-container">
            <div class="row">
               
                <ul class="list-module" style = "padding-top: 120px; max-height: 477px;min-height: 477px;">
                    <li>
                        <div>
                            <a target="_blank" href="http://162.252.57.101/login/?next=/business-opportunities/create/"  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/portal/oportunidad-negocios.png" alt="OPORTUNIDAD_DE_NEGOCIO">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href="http://162.252.57.101/login/?next=/business-opportunities/create/"  style = "text-decoration: none;">
                                        <h3>Oportunidades de Negocio</h3>
                                        <p class="text" style="font-size: 13px;">
                                           Registro y seguimiento de las oportunidades de 
                                           negocio actualmente manejadas por su empresa
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="http://162.252.57.101/administration/serial/solicitud/" target="_back"  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/portal/seriales.png" alt="SERIALES">
                            </a>
                                <div class="sec-title centered">
                                    <a href="http://162.252.57.101/administration/serial/solicitud/" target="_back"  style = "text-decoration: none;">
                                        <h3>Seriales</h3>
                                        <p class="text" style="font-size: 13px;">
                                         Solicite seriales para nuestras soluciones según las licencias adquiridas
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href="http://162.252.57.243/login/?next=/OmegaUsers/tickets/"  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/portal/tickets.png" alt="TICKET_SOPORTE">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href="http://162.252.57.243/login/?next=/OmegaUsers/tickets/"  style = "text-decoration: none;">
                                        <h3>Tickets</h3>
                                        <p class="text" style="font-size: 13px;">
                                          Seguimiento de su solicitud a la mesa de servicio
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href="http://162.252.57.243/login/?next=/OmegaUsers/dbc/"  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/portal/kb.png" alt="BASE_DATOS_CONOCIMIENTO">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href="http://162.252.57.243/login/?next=/OmegaUsers/dbc/" style = "text-decoration: none;">
                                        <h3>Base de conocimiento</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Artículos para la soluciones a errores o preguntas frecuentes
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>


@endsection