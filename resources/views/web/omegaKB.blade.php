@extends('layouts.web.base')
@section('title', 'Omegasoft - Omega KnowledgeBase')
@section('description', 'Consulte y administre información técnica o funcional de su empresa desde un único repositorio, disponible las 24 horas del día.')
@section('content')

    <section class="page-title">
        <div class="" 
             style="opacity:10.0;">
                <img style = "float: left;"  src="{{ URL::to('/') }}/images/background/OMEGA_KNOWLEDGEBASE.jpg" alt="">
                    <div style = "padding-top: 31pc; padding-left:36pc;float: left;position: absolute;" class="text-center">
                        <div class="text-center button-conten-carrusel">
                            <div class="theme-btn btn-style-one22 button-carrusel">
                                <a style = "text-decoration:none !important;" href="https://drive.google.com/open?id=1QQUc82uuA79zYuwMJ-v6kSnsp-vmdxxN"  target="_blank">
                                    <img style = "height: 20px;padding-right: 10px;" src="{{ URL::to('/') }}/images/icons/descarga.png" alt="BROCHURE">Brochure</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
        </div>
    </section>

    <section style="margin-bottom: 60px;padding-top: 40px;">
        <div class="row" style="display: unset;">
        <div class="auto-container">
            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                <h1 style="font-size:30px;">Centralice el almacenamiento de la información y comparta el conocimiento</h1>
            </div>
        </div>
            <div class="col-md-6 col-sm-6 col-xs-12  size-cap-2">
                <div class="sec-title centered" style="text-align: left; margin-bottom: 0px">
                    <div class="text" style="padding-right: 15px;padding-left:15px;padding-top: 50px;">
                    Omega KnowledgeBase está diseñado especialmente para compartir
                    conocimiento con todos los usuarios y solucionadores de la mesa de servicio. Lo
                    cual mejora la capacidad de respuesta y gestión en su empresa. Se dispondrá
                    de toda la información para solucionar un caso sin necesidad de acudir a la mesa
                    de servicio, promoviendo la autogestión y reduciéndolos tiempos de atención.
                    </div>
                </div>
                
                <div class="sec-title centered" style="text-align: left; margin-bottom: 0px">
                    <div class="text" style="padding-right: 15px;padding-left:15px;">
                    Omega KnowledgeBase es un repositorio de información técnica o funcional para
                    la gestión y solución efectiva de incidentes, desde una consola de consulta
                    disponible 24 horas, 365 días al año elevando la calidad de los procesos de
                    servicio y soporte de su negocio.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <ul class="list-inline">
                        <li data-toggle="modal" data-target="#MODAL">
                            <a href="#GalleryKb" data-slide-to="0">
                                <img  style = "height: 460px;" class="" src="{{ URL::to('/') }}/images/icons/Kb_1.png">
                                <!--<img  style="position: absolute;left: 0;margin-left: 37%;margin-top: -45%;" src="{{ URL::to('/') }}/images/icons/magnifying-glass.png" alt="">-->
                                <div style="position: absolute;left: 0;margin-left: 37%;margin-top: -14%;">
                                    <div class="text-center button-conten-carrusel"><div class="theme-btn btn-style-three button-carrusel">
                                        <img src="{{ URL::to('/') }}/images/icons/magnifying-glass.png" alt=""> </div></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </section>

    <section style="padding-top: 50px;">
        <div class="auto-container">
            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                <h2 style="font-size:30px;text-transform: none;">Algunos de los beneficios de contar con una Base de Datos de Conocimiento </h2>
            </div>
        </div>
    </section>
                                    
    <section class="services-two" style="padding: 0px">
        <div class="auto-container">     
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/1-informacion.png" alt=""></figure>
                        <h3>Información Centralizada</h3>
                        <div style="font-size: 15px;" class="text">
                        Mantenga organizada la información de su empresa, centralizando la
                        documentación y manteniéndola disponible y actualizada en todo
                        momento.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/2-autoservicio.png" alt=""></figure>
                        <h3>Autoservicio</h3>
                        <div style="font-size: 15px;" class="text">
                        Incentive el autoservicio por parte de sus usuarios finales, poniendo
                        a su disposición información útil para resolver posibles incidencias.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/3-disponibilidad.png" alt=""></figure>
                        <h3>Disponibilidad</h3>
                        <div style="font-size: 15px;" class="text">
                        Base de conocimiento en línea disponible para sus clientes: 24
                        horas, los 365 días del año.</div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/4-calidad.png" alt=""></figure>
                        <h3>Calidad de Servicio</h3>
                        <div style="font-size: 15px;" class="text">
                        Cuente con un panel de ayuda con información actualizada a los usuarios finales, 
                        para un mejor desempeño del personal de TI y la satisfacción de sus clientes.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/5-comp-conocimiento.png" alt=""></figure>
                        <h3>Compartir conocimiento</h3>
                        <div style="font-size: 15px;" class="text">
                        Comparta el conocimiento adquirido, entre los grupos solucionadores de la mesa 
                        de servicio, lo que ofrece la posibilidad de resolver los casos a los usuarios 
                        de forma efectiva y eficiente. </div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/6-red-costos.png" alt=""></figure>
                        <h3>Reducción de Costos</h3>
                        <div style="font-size: 15px;" class="text">
                        Disponga de la documentación de las resoluciones a los casos, lo que permite reducción 
                        de los tiempos de solución y de interrupción de los procesos o servicios.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('web.modals.SliderKb')

@endsection
