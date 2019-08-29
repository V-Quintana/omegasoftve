@extends('layouts.web.base')
@section('title', 'Omegasoft - Omega CMDB')
@section('description', 'Gestione los activos de su empresa y sus relaciones, centralice la información desde un único repositorio y controle su infraestructura tecnológica.')
@section('content')

    <section class="page-title">
        <div class="" 
             style="opacity:10.0;">
                <img style = "float: left;"  src="{{ URL::to('/') }}/images/background/OMEGA_CMBD.jpg" alt="GESTION_ACTIVOS">
                    <div style = "padding-top: 31pc; padding-left:36pc;float: left;position: absolute;" class="text-center">
                        <div class="text-center button-conten-carrusel">
                            <div class="theme-btn btn-style-one22 button-carrusel">
                                <a style = "text-decoration:none !important;" href="https://drive.google.com/open?id=1xMAZrv0MK5Qv-7rpxbAzMMtuea-t2v3v"  target="_blank">
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
                <h1 style="font-size:30px;">
                    Centralice la información de sus activos y 
                    controle su infraestructura tecnológica
                </h1>
            </div>
        </div>
            <div class="col-md-6 col-sm-6 col-xs-12  size-cap-2">
                <div class="sec-title centered" style="text-align: left; margin-bottom: 0px">
                    <div class="text" style="padding-right: 15px;padding-left:15px;padding-top: 50px;">
                    Con Omega CMDB, tendrá la posibilidad de centralizar en un único repositorio, la
                    información de los elementos de configuración de su empresa, tales como
                    hardware, software, documentos, personas, servicios, entre otros. También
                    podrá establecer las relaciones y dependencias entre los activos registrados,
                    generar órdenes de mantenimientos periódicas que permitan la prevención de
                    daños, registrar contratos y asociar los activos involucrados, gestionar los
                    proveedores, entre otras funcionalidades.
                    </div>
                </div>
                
                <div class="sec-title centered" style="text-align: left; margin-bottom: 0px">
                    <div class="text" style="padding-right: 15px;padding-left:15px;">
                    Omega CMDB, permitirá a su empresa conocer el estado real de sus activos,
                    mejorar la planificación de gastos y presupuesto, manejar efectivamente los
                    niveles de servicios respecto a sus recursos, por tales motivos podemos decir que
                    la CMDB ayudará a conectar la infraestructura tecnológica con el negocio.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 30px;">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <ul class="list-inline">
                        <li data-toggle="modal" data-target="#MODAL">
                            <a href="#GalleryCmdb" data-slide-to="0">
                                <img style = "height: 460px;" class="" src="{{ URL::to('/') }}/images/icons/cmdbSider.png">
                                <!--<img  style="position: absolute;left: 0;margin-left: 37%;margin-top: -45%;" src="{{ URL::to('/') }}/images/icons/magnifying-glass.png" alt="">-->
                                <div style="position: absolute;left: 0;margin-left: 37%;margin-top: -10%;">
                                    <div class="text-center button-conten-carrusel"><div class="theme-btn btn-style-three button-carrusel">
                                        <img src="{{ URL::to('/') }}/images/icons/magnifying-glass.png" alt="SOFTWARE_GESTION_ACTIVOS"> </div></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
    </section>

    <section>
        <div class="auto-container">
            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                <h2 style="font-size:30px;">Conozca algunas de las características de Omega CMDB</h2>
            </div>
        </div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-ms-12 col-xs-12" style="margin-top: -50px">
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12 " style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                        <span class="text">
                                                            <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/1_inf-centralizada.png" alt="INFORMACION_CENTRALIZADA">Información Centralizada</h3>
                                                        </span>
                                                    </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                            Conozca los detalles de sus activos (información general, responsable,
                                            ubicación, relaciones, entre otros) que son imprescindible para la toma de
                                            decisiones sobre los servicios y el negocio.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                    <span class="text">
                                                        <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/2_rel-activos.png" alt="RELACION_ACTIVOS">Relación entre activos</h3>
                                                    </span>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                            Grafique las relaciones que tiene sus activos y conozca las posibles
                                            afectaciones que pudieran presentarse en los diferentes servicios al
                                            momento de realizar un cambio en un activo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                    <span class="text">
                                                        <h3 style="font-size: 19px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/reglas-de-negocio.png" alt="REGLAS_DE_NEGOCIO">Reglas de Negocio</h3>
                                                    </span>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                            Configure reglas de negocio y automatice notificaciones, alertas de
                                            vencimiento de alquiler o garantía, así como cambios de estado según
                                            criterios definidos.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-ms-12 col-xs-12">
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12" style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                        <span class="text">
                                                            <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/4_service-desk.png" alt="SERVICE_DESK">Service Desk</h3>
                                                        </span>
                                                    </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                            Conozca detalles de la bitácora de cambios, incidentes, requerimientos,
                                            problemas y mantenimientos, en los cuales ha estado involucrado un activo
                                            en particular.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                    <span class="text">
                                                        <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/dashboard.png" alt="DASHBOARD">Dashboard</h3>
                                                    </span>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                Conozca en tiempo real información de su infraestructura tecnológica,
                                                contratos próximos a vencerse, mantenimientos en ejecución y planificados.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-4 col-xs-4">
                                <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                    <div class="row">
                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                            <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                        <span class="text">
                                                            <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/indicadores-de-gestion.png" alt="INDICADORES_GESTION">Indicadores de Gestión</h3>
                                                        </span>
                                                    </div>     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                            <div class="sec-title centered">
                                                <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                Cuente con una gama de reportes predefinidos, los cuales le permitirán
                                                conocer el estado de sus activos, contratos, proveedores y mantenimientos.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-ms-12 col-xs-12">
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12" style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                        <span class="text">
                                                            <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/7_eval-proveedores.png" alt="EVALUACION_PROVEEDORES">Evaluación de Proveedores</h3>
                                                        </span>
                                                    </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                            Conozca el comportamiento y valoración de cada uno de sus proveedores,
                                            realizando evaluaciones a los contratos en los que participen.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-4 col-xs-4">
                            <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                    <span class="text">
                                                        <h3 style="font-size: 20px;"><img style="padding-right: 15px;padding-left: 15px;" src="{{ URL::to('/') }}/images/icons/8_contratos.png" alt="CONTRATOS_SERVICIOS">Ciclo de Vida de Contratos</h3>
                                                    </span>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-12 col-ms-12 col-xs-12">
                                        <div class="sec-title centered">
                                            <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                            Cuente con información del estado de sus contratos y tome las previsiones
                                            necesarias antes que los mismos se venzan y produzcan afectaciones
                                            sobre los servicios asociados.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-ms-4 col-xs-4">
                                <div class="col-md-12 col-ms-12 col-xs-12 caract-cart">
                                    <div class="row">
                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                            <div class="col-md-12 col-ms-12 col-xs-12"  style="padding-right: 10px;padding-left: 10px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px; text-align: initial;">
                                                    <div class="sec-title centered" style="text-align: initial; margin-bottom: 0px;margin-top: 20px;">
                                                        <span class="text">
                                                            <h3 style="font-size: 20px;"><img style="padding-right: 5px;padding-left: 0px;" src="{{ URL::to('/') }}/images/icons/9_planificacion.png" alt="PLANIFICACION_MANTENIMIENTO">Planificación de Mantenimiento</h3>
                                                        </span>
                                                    </div>     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12 col-ms-12 col-xs-12">
                                            <div class="sec-title centered">
                                                <div class="text" style="padding-left: 20px;font-size: 15px;padding-right: 20px;text-align: justify;">
                                                Genere planes de mantenimiento preventivos para los activos y garantice el
                                                correcto funcionamiento de los mismos, permitiendo alargar su vida útil.    
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

@include('web.modals.SliderCmdb')

@endsection
