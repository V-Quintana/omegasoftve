@extends('layouts.web.base')
@section('title', 'Omegasoft - Centro de Soporte')
@section('description', ' Omegasoft, dispone de un centro de soporte en línea con personal altamente capacitado para atenderle, ofrecemos calidad en tiempo récord.')
@section('content')
    <section class="page-title">
        <div class="image-layer" 
             style="opacity:10.0;">
            <img src="{{ URL::to('/') }}/images/background/Soporte.jpg" alt="SOPORTE_TECNICO_CONSULTORIA ">
        </div>
        <div class="auto-container">
        </div>
    </section>

    <section style="background:#00325d;">
        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px; font-size: 20px;">
                            <a style="text-decoration:none;" href="">
                                <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/inicio-centro-de-soporte.png" alt="SOPORTE_REMOTO">Centro de Soporte</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px; font-size: 20px; ">
                            <a style="text-decoration:none;" target="_blank" href="{{route('open_ticket')}}">
                                <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/abrir-un-ticket.png" alt="TICKET_SOPORTE">Aperturar Ticket</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px; font-size: 20px; ">
                            <a target="_blank" style="text-decoration:none;" href="{{route('ticket_tracking')}}">
                                <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/estado-de-un-ticket.png" alt="MESA_SERVICIO">Seguimiento de ticket</a>
                        </h2>
                    </div>
                </div>
                <div class="col-md-3 col-ms-3 col-xs-3">
                    <div class="sec-title centered">
                        <h2 style="padding-top: 15px; font-size: 20px; ">
                            <a style="text-decoration:none;" target="_blank" href="{{route('omega_kwoledgebase')}}">
                                <img style="margin-right: 5px;margin-top:-5px;height: 20px;" src="{{ URL::to('/') }}/images/icons/base-de-conocimiento.png" alt="BASE_DATOS_CONOCIMIENTO">Base de conocimiento</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-two"  style="padding: 0px; margin-top: -50px;"> 
            <div class="auto-container">
                <div class="sec-title-two centered" style="margin-bottom: 0px;padding: 20px;">
                    <h1 style="font-size:30px" >¿Cómo podríamos ayudarte?</h1>
                </div>
                <div class="sec-title centered" style="margin-bottom: 0px">
                    <div class="text" style="font-size: 20px;margin-bottom: 30px;" >
                    Disponemos de personal altamente capacitado para atenderle 
                    por los diferentes medios de comunicación.
                    </div>
                </div>
            </div>
    </section>

    <section style=" margin-bottom: 70px;background: #5aceff12;">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/soporte-telefonico.jpg" alt="SOPORTE_TELEFONICO"></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h3 style="font-size:20px;text-align: initial;" >Soporte Telefónico</h3>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        Para obtener ayuda o soporte técnico, contáctenos a través del (58) 244 3868448 ext 605.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                    <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                            <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/solicitudes-por-correo.jpg" alt="SOLICITUD_POR_CORREO"></figure>
                        </div>
                        <div class="col-md-10 col-ms-10 col-xs-10" style="margin-bottom: -30px;">
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                <h3 style="font-size:20px;text-align: initial;" >Solicitudes por Correo</h3>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:initial; font-size:15px;">
                                    Para registrar una solicitud, envié un correo a la cuenta 
                                    <a style="text-decoration:none;" href="mailto:solicitud.soporte@omegasoftve.com">solicitud.soporte@omegasoftve.com</a> e indiqué sus datos de contacto.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/chat-interctivo.jpg" alt="CHAT_EN_LINEA"></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h3 style="font-size:20px;text-align: initial;" >Chat Interactivo</h3>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        A través de nuestra página web interactúe con nosotros en nuestro chat en línea.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                            <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                                <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/portal-web.jpg" alt="PORTAL_WEB"></figure>
                                </div>
                                <div class="col-md-10 col-ms-10 col-xs-10">
                                    <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                        <h3 style="font-size:20px;text-align: initial;">Portal Web</h3>
                                    </div>
                                    <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                        <div class="text" style="text-align:initial; font-size:15px;">
                                            Ingresa a nuestra base de conocimiento y si eres usuario registrado, 
                                            realiza tus solicitudes y da seguimiento <a style="text-decoration:none;" href="https://wwww.omegasoftve.com/registrar-ticket/">aquí</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 30px;">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="sec-title-two centered" style="margin-bottom: 10px">
                            <h2 style="font-size: 30px">
                                    Beneficios
                            </h2>
                        </div>
                        <div class=" soport-media">
                            <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;">
                                    <span class="text">
                                        <span><i class="fa fa-check check"></i>Resolución de incidencias, inconvenientes técnicos y asesorías.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;">
                                    <span class="text">
                                        <span><i class="fa fa-check check"></i>Documentación técnica especializada.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;">
                                    <span class="text">
                                        <span><i class="fa fa-check check"></i>Próximas actualizaciones.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;">
                                    <span class="text">
                                        <span><i class="fa fa-check check"></i>Presentaciones guiadas con personal y tecnología de vanguardia.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;">
                                    <span class="text">
                                        <span><i class="fa fa-check check"></i>Capacitaciones con un personal de amplia trayectoria.</span>
                                    </span>
                                </div>
                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 5px;">
                                    <span class="text">
                                        <span><i class="fa fa-check check"></i>Notificación de mejoras y nuevas funcionalidades.</span>
                                    </span>
                                </div>
                        </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="sec-title-two centered" style="margin-bottom: 30px;">
                            <h2 style="font-size: 30px">Horarios de Atención</h2>
                        </div>
                            <div class="sec-title centered" style="text-align: center; margin-bottom: 5px;">
                                <div class="text">
                                Lunes – Viernes de 8:00 a 17:00 (GMT – 4).
                                </div>
                                <div class="text">
                                En días dominicales y festivos no se brinda este servicio
                                </div>
                            </div>
                    </div> 
                </div>
            </div>
    </section>

    <section style=" margin-bottom: 70px;background: #5aceff12;">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                        <div class="sec-title-two centered" style="margin-bottom: 0px;">
                                <h2 style="font-size:30px;margin-top: 30px" >Alcance del Soporte</h2>
                            </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/tipos-de-soporte.png" alt="SOPORTE_AL_CLIENTE"></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h3 style="font-size:20px;text-align: initial;" >Tipo de Soporte</h3>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                        <ul>
                                            <li>• Asesoría Telefónica</li>
                                            <li>• Remoto</li>
                                            <li>• Oficinas del Cliente</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6">
                    <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 28px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                            <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/niveles-de-servicio.jpg" alt="NIVELES_DE_SERVICIO"></figure>
                        </div>
                        <div class="col-md-10 col-ms-10 col-xs-10" style="margin-bottom: -30px;">
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                <h2 style="font-size:20px;text-align: initial;" >Niveles de Servicio</h2>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:initial; font-size:15px;">
                                    <ul>
                                        <li>• Solución de dudas y asesoría en el uso del software</li>
                                        <li>• Incidentes complejos en la operación de la herramienta</li>
                                        <li>• Mejora a la plataforma y desarrollos de nuevas funcionalidades</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 16px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                            <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/tiempos-de-respuesta-y-solucion.jpg" alt="ATENCION_DE_SOLICITUDES"></figure>
                            </div>
                            <div class="col-md-10 col-ms-10 col-xs-10">
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                    <h3 style="font-size:20px;text-align: initial;" >Tiempo de Respuesta y Solución</h3>
                                </div>
                                <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                    <div class="text" style="text-align:initial; font-size:15px;">
                                            Para la atención de las solicitudes de nuestros clientes,
                                            Omegasoft dispone de acuerdos de servicios definidos por
                                            tiempos de respuestas y solución según el servicio afectado.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-ms-6 col-xs-6" style="margin-top: -31px">
                            <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 16px;background:#fff;margin-top: 30px; margin-bottom: 30px;">
                                <div class="col-md-2 col-ms-2 col-xs-2" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/niveles-de-prioridad.jpg" alt="NIVELES_DE_PRIORIDAD"></figure>
                                </div>
                                <div class="col-md-10 col-ms-10 col-xs-10">
                                    <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                        <h3 style="font-size:20px;text-align: initial;">Niveles de Prioridad</h3>
                                    </div>
                                        <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;">
                                                <div class="text" style="text-align:initial; font-size:15px;">
                                                        Priorizamos las solicitudes en 4 niveles:<br>
                                                        •Crítica&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; •Alta<br>
                                                        •Media&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; •Baja
                                                </div>
                                        </div>


                                    </div>
                                </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-two"  style="padding: 0px 0px 90px;"> 
            <div class="auto-container">
                <div class="row">
                    <div class="sec-title centered" style="margin-bottom: -100px;">
                        <h2 style="font-size:30px;margin-bottom: 25px;" >Limitaciones del servicio</h2>
                        <div class="col-md-6 col-ms-12 col-xs-12">
                            <div class="sec-title centered"> 
                                <div class="text" style="text-align: -webkit-auto">
                                        Nuestro servicio de soporte técnico se 
                                        brindará única y exclusivamente a clientes que
                                        tengan el servicio de soporte activo al momento de ser solicitado.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-12 col-xs-12">
                                <div class="sec-title centered"> 
                                    <div class="text" style="text-align: -webkit-auto">
                                        El servicio de soporte estándar se brindará a 
                                        través de comunicación telefónica, chat, vía
                                        internet, correo electrónico o acceso remoto. No incluye soporte en sitio.
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </section>

@endsection