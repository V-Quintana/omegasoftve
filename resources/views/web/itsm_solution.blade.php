@extends('layouts.web.base')
@section('title', 'Omegasoft - Solución ITSM')
@section('description', 'Omega ITSM, provee a su empresa una plataforma completa para mesas de servicios permitiéndole atender y satisfacer las demandas más apremiantes de su negocio.')
@section('content')

    <section class="page-title">
        <div class="" style="opacity:10.0;">
            <img style = "float: left;"  src="{{ URL::to('/') }}/images/background/Omega-ITSM.jpg" alt="GESTION_SERVICIO_ITIL">
            <div style = "padding-top: 29pc; padding-left:36pc;float: left;position: absolute;" class="text-center">
                <div class="text-center button-conten-carrusel">
                    <div class="theme-btn btn-style-one22 button-carrusel">
                        <a style = "text-decoration:none !important;" href="https://drive.google.com/open?id=1r3L4BZACtViM5aQ8HnV6mhyTuAB_kTsa"  target="_blank">
                            <img style = "height: 20px;padding-right: 10px;" src="{{ URL::to('/') }}/images/icons/descarga.png" alt="BROCHURE">Brochure</div>
                        </a>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    
    <section class="careers-page" style="padding: 0px 0px 0px;">
        <div class="">
            <div class="row clearfix">         
                <div class="content-side col-md-12 col-sm-12 col-xs-12" style="margin-bottom: -80px">
                    <div class="inner" style="padding-left:0px;">
                        <div class="career-posts">
                            <div class="career-block select-Información-General">
                                <!--About Two Section-->
                                <section style="margin-bottom: 60px;padding-top: 40px;">
                                    <div class="row" style="display: unset;">
                                        <div class="auto-container">
                                            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                                                <h1 style="font-size:30px; ">Gestión de Servicios IT Centralizada, Rápida y Efectiva</h1>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12  size-cap-2">
                                            <div class="sec-title" style="margin-bottom: 0px">
                                                <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                    Nuestra solución para la gestión de servicios IT (Omega ITSM) provee a su empresa de una
                                                    plataforma completa para mesas de servicios permitiéndole atender y satisfacer las demandas
                                                    más apremiantes de su negocio.
                                                </div>
                                            </div>
                                            <div class="sec-title" style="margin-bottom: 0px">
                                                <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                    Omega ITSM incluye los productos <strong>Omega Service Desk, Omega CMDB y Omega KnowledgeBase</strong>,
                                                    que ayudaran a gestionar los procesos de soporte (Requerimientos e Incidentes), controlar los
                                                    diferentes cambios en su infraestructura tecnológica (Gestión de Cambios) y centralizar la
                                                    información de sus activos tecnológicos (CMDB). Además, cuenta con un potente portal de
                                                    autoservicio para sus clientes.
                                                </div>
                                            </div>
                                            <div class="sec-title" style="margin-bottom: 0px">
                                                <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                    Omega ITSM, ha sido desarrollado para soportar y facilitar la automatización de los procesos,
                                                    basados en las buenas prácticas de ITIL.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <img src="{{ URL::to('/') }}/images/background/OmegaITSM2.png" alt="GESTION_SERVICIOS_ITSM">
                                        </div>
                                    </div>
                                </section>
                                <!--About Two Section-->
                                <section style="padding-top: 50px;">
                                    <div class="auto-container">
                                        <div class="sec-title-two centered " style="margin-bottom: 30px;">
                                            <h2 style="font-size:30px;text-transform: none;">Obtenga beneficios para su empresa con nuestras soluciones</h2>
                                        </div>
                                    </div>
                                </section>
                                <section class="services-two" style="padding: 0px">
                                    <div class="auto-container">     
                                        <div class="row clearfix">
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/flexibilidad.png" alt="SOLUCIONES_FLEXIBLES"></figure>
                                                    <h3>Flexibilidad</h3>
                                                    <div class="text colorSub letra">
                                                        Nuestras soluciones son fácilmente configurables y personalizables, para que las
                                                        mismas se ajusten al negocio y no de forma contraria.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/toma_de_decisiones.png" alt="TOMA_DECISIONES_GERENCIALES"></figure>
                                                    <h3>Toma de Decisiones</h3>
                                                    <div class="text colorSub letra">
                                                        Base la toma de decisiones en información oportuna, precisa y en tiempo real,
                                                        evitando desviaciones y retardos en la prestación de servicio.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/satisfaccion-del-cliente.png" alt="SATISFACCION_DEL_CLIENTE"></figure>
                                                    <h3>Satisfacción del Cliente</h3>
                                                    <div class="text colorSub letra">
                                                        Mejore los tiempos de respuesta, cumpliendo así a cabalidad los acuerdos de niveles
                                                        de servicios y aumentando la satisfacción de sus clientes.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/reduccion_de_costos.png" alt="REDUCCION_COSTOS"></figure>
                                                    <h3>Reducción de Costos</h3>
                                                    <div class="text colorSub letra">
                                                        Aumente la productividad y reduzca los costos, eliminando las tareas manuales y la duplicación de
                                                        esfuerzos u otras tareas que impliquen pérdida de tiempo.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/prestacion-de-servicio.png" alt="PRESTACION_SERVICIOS"></figure>
                                                    <h3>Prestación de Servicio</h3>
                                                    <div class="text colorSub letra">
                                                        El usuario final tiene la expectativa de que sus problemas y solicitudes se resuelvan
                                                        rápidamente. La automatización  de los procesos, enmarcado en las buenas prácticas, 
                                                        permiten reducir la dependencia del factor humano y los tiempos de espera,
                                                        aumentando así su satisfacción. 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/gobernabilidad-control.png" alt="ESTANDARIZAR_PROCESOS"></figure>
                                                    <h3>Gobernabilidad y Control</h3>
                                                    <div class="text colorSub letra">
                                                        La estandarización de los procesos basados en buenas prácticas, permiten la
                                                        introducción de controles internos, sobre los cambios efectuados en la infraestructura
                                                        reduciendo los riesgos e interrupciones en el servicio que afecten al negocio.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/eficiencia.png" alt="EFICACIA_EFICIENCIA"></figure>
                                                    <h3>Eficacia</h3>
                                                    <div class="text colorSub letra">
                                                        Las expectativas del usuario final con respecto al centro de soporte, se basa en cuán rápido
                                                        se resuelven las solicitudes. Omega ITSM posibilitan a los solucionadores sacar el
                                                        mayor provecho a su día de trabajo, sin necesidad de trabajar más arduamente sino
                                                        más inteligentemente.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/disponibilidad.png" alt="AUTOGESTION"></figure>
                                                    <h3>Disponibilidad</h3>
                                                    <div class="text colorSub letra">
                                                        Proporciona a los usuarios finales acceso a un portal de autoservicios, que incluye
                                                        una base de datos de conocimiento con información relevante para la solución de
                                                        incidencia, y sumado a la automatización de tareas permiten que el usuario pueda
                                                        tener ayuda disponible, aunque la mesa de servicio no esté operativa.
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Service Block-->
                                            <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                <div class="inner-box">
                                                    <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/automatizacion.png" alt="AUTOMATIZACION_PROCESOS"></figure>
                                                    <h3>Automatización</h3>
                                                    <div class="text colorSub letra">
                                                        Automatice sus métodos de asignación de tickets entrantes, 
                                                        al técnico o grupo solucionador más apropiado
                                                        dentro de la mesa de servicio.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                     
                                <section>
                                    <div class="imgback" > 
                                        <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                            <div class="sec-title centered" style="margin-bottom: 0px">
                                                <h2 style="font-size: 20px;color: #fff; ">Brochure</h2>
                                                <p class="text" style="margin-top: -10px;color: #fff;">
                                                    Descargue el documento con información adicional de nuestra solución 
                                                </p>
                                                <a href="https://drive.google.com/file/d/1r3L4BZACtViM5aQ8HnV6mhyTuAB_kTsa/view" target="_blank">
                                                    <figure class="icon-box">
                                                        <img src="{{ URL::to('/') }}/images/icons/brochure1.png" alt="BROCHURE">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 40px">
                                            <div class="sec-title centered" style="margin-bottom: 0px">
                                                <h2 style="font-size: 20px;color: #fff;">Demostración Guiada</h2>
                                                <p class="text" style="margin-top: -10px;color: #fff;">
                                                    Solicite que uno de nuestros expertos le muestren nuestros productos 
                                                </p>
                                                <a href="{{ URL::to('/') }}/demo-guiada/">
                                                    <figure class="icon-box">
                                                        <img src="{{ URL::to('/') }}/images/icons/demo-guiada.png" alt="SOLICITAR_DEMOSTRACION_GUIADA">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                    
                                <section style="padding-top: 40px;">
                                    <div class="row" style="display: unset;">
                                        <div class="auto-container">
                                            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                                                <h2 style="font-size:30px;text-transform: none;">Omega ITSM facilita la adopción de buenas prácticas en su empresa</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <img  src="{{ URL::to('/') }}/images/background/5245349.png" alt="GESTION_SERVICIOS_ITIL">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="sec-title" style="margin-bottom: 0px">
                                                <div class="text" style="padding-right: 15px;padding-left:15px;">
                                                    Omega ITSM, ha sido desarrollada para soportar ITIL y otros marcos de referencias de mejores
                                                    prácticas ampliamente adoptados por las empresas. Permitiendo la estandarización de procesos
                                                    para la gestión de servicios, como solicitudes de servicios, incidentes, problemas y cambios. Los
                                                    cuales son imprescindibles en las mesas de servicios, además integramos la gestión de
                                                    conocimiento, acuerdos de niveles de servicios y catálogo de servicio, dichos procesos permiten
                                                    garantizar la continuidad de los servicios críticos de IT. <br><br><br>
                                                    
                                                    Nuestra suite de gestión de servicios viene integra con una potente solución de gestión de
                                                    configuraciones (CMDB), la cual incluye gestión de activos, contrato y proveedores, así como sus
                                                    relaciones, permitiéndole obtener visibilidad de la infraestructura que soporta el negocio.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                    
                                    <section style="padding-top: 50px;">
                                        <div class="auto-container">
                                            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                                                <h2 style="font-size:30px;text-transform: none; ">Omega ITSM le ayuda a gestionar los siguientes procesos</h2>
                                            </div>
                                        </div>
                                    </section>
                                   
                                    <section class="services-two" style="padding:0px;padding-bottom: 90px;">
                                        <div class="auto-container">     
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/incidentes.png" alt="GESTION_INCIDENTES"></figure>
                                                        <h3>Gestión de Incidentes</h3>
                                                        <div class="text colorSub letra">
                                                        Restablezca los servicios afectados, gestione los 
                                                        incidentes notificados por los usuarios resolviendo 
                                                        con eficiencia y eficacia las interrupciones con el 
                                                        menor impacto.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/requerimientos.png" alt="GESTION_REQUERIMIENTOS"></figure>
                                                        <h3>Gestión de Requerimientos</h3>
                                                        <div class="text colorSub letra">
                                                        Proporcione una gestión adecuada a las solicitudes de los 
                                                        usuarios ante las peticiones orientadas a mejoras de los servicios.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/catalogo-de-servicio.png" alt="CATALOGO_SERVICIO"></figure>
                                                        <h3>Catálogo de Servicio</h3>
                                                        <div class="text colorSub letra">
                                                        Defina un catálogo de servicio de fácil comprensión para usuarios y solucionadores, donde detalle 
                                                        los servicios ofrecidos por el negocio y grupos solucionadores encargados de la atención.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/SLA.png" alt="ACUERDO_NIVEL_DE_SERVICIO"></figure>
                                                        <h3>Acuerdo de Niveles de Servicio</h3>
                                                        <div class="text colorSub letra">
                                                        Establezca contratos de tiempos para la resolución de las 
                                                        solicitudes entre el usuario y TI, los SLA implementados garantizarán el cumplimiento del soporte.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/bd-conocimiento.png" alt="GETION_CONOCIMIENTO"></figure>
                                                        <h3>Gestión de Conocimiento</h3>
                                                        <div class="text colorSub letra">
                                                        Disponga de un espacio para el almacenamiento de 
                                                        artículos y soluciones que sirva de canal colaborativo 
                                                        para usuarios y solucionadores en la resolución de inquietudes 24*7.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/problemas.png" alt="INCIDENTES_CRITICOS"></figure>
                                                        <h3>Gestión de Problemas</h3>
                                                        <div class="text colorSub letra">
                                                        Determine las causas raíz de los incidentes recurrentes sobre los activos de su empresa,
                                                        identifique errores conocidos y proporcione soluciones efectivas a problemas.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/cambios.png" alt="GESTION_CAMBIOS"></figure>
                                                        <h3>Gestión de Cambios</h3>
                                                        <div class="text colorSub letra">
                                                        Registre, controle y evalúe los cambios sugeridos sobre su 
                                                        infraestructura tecnológica, mejore el servicio e incremente la productividad del usuario.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/proyectos.png" alt="GESTION_PROYECTOS"></figure>
                                                        <h3>Gestión de Proyectos</h3>
                                                        <div class="text colorSub letra">
                                                        Planifique el desarrollo de nuevos proyectos para su empresa, orientados a la implementación de
                                                        nuevas tecnologías, programaciones, mejoras de servicio, entre otros.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/CMDB.png" alt="REPOSITORIO_ACTIVOS"></figure>
                                                        <h3>CMDB</h3>
                                                        <div class="text colorSub letra">
                                                        Administre todos los elementos de configuración y 
                                                        asigna sus relaciones y dependencias, permitiendole analizar visualmente el 
                                                        impacto de los cambios y las interrupciones en la toma de decisiones, 
                                                        minimizando los riesgos asociados.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row clearfix">
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/activos.png" alt="GESTION_ACTIVOS"></figure>
                                                        <h3>Gestión de Activos</h3>
                                                        <div class="text colorSub letra">
                                                        Lleve el control de todos los elementos de configuración de la 
                                                        nfraestructura TI, como hardware y software, entre otros. 
                                                        Evite la vulnerabilidad de sus activos, optimizando su uso. </div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/contratos.png" alt="GESTION_CONTRATOS"></figure>
                                                        <h3>Gestión de Contratos</h3>
                                                        <div class="text colorSub letra">
                                                        Lleve el control de todos los contratos relacionados con sus activos, generando alarmas por
                                                        vencimiento, permitiendo conocer y distribuir el costo total de los recursos en las áreas de la
                                                        empresa.</div>
                                                    </div>
                                                </div>
                                                <!--Service Block-->
                                                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                                                    <div class="inner-box">
                                                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/proveedores.png" alt="GESTION_PROVEEDORES"></figure>
                                                        <h3>Gestión de Proveedores</h3>
                                                        <div class="text colorSub letra">
                                                        Gestione la relación con los proveedores de servicios de los que depende su empresa. Con la
                                                        finalidad de alcanzar la mayor calidad y velar por el cumplimiento de los contratos próximos a
                                                        vencer.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div> 
                                <!--Career Block-->
                                </div>
                                <!--Career Block-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
 
@include('web.modals.versiones_precios')
@endsection

@section('javascript')
<script src="{{ URL::to('/') }}/js/itsm.js"></script>
<script>
    function callbackQuotation(data){
        $('#form_quotation').submit()
    }
</script>
@endsection
