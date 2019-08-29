@extends('layouts.web.base')
@section('title', 'Omegasoft - Solución Gestión Activos')
@section('description', 'Omega CMDB, provee información precisa y veraz de los activos (CI&#180;s) de su infraestructura tecnológica y sus relaciones, potenciando la toma de decisiones.')
@section('content')


    <section class="page-title">
        <div class="" 
             style="opacity:10.0;">
                <img style = "float: left;"  src="{{ URL::to('/') }}/images/background/Soluciones_CMDB.jpg" alt="GESTION _ACTIVOS">
                    <div style = "padding-top: 26pc; padding-left:36pc;float: left;position: absolute;" class="text-center">
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

    <!--About Two Section-->
    <section style="margin-bottom: 60px;padding-top: 40px;">
        <div class="row" style="display: unset;">
        
        
        <div class="auto-container">
            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                <h1 style="font-size:30px; ">Centralice la información de sus activos, Conecte IT con el negocio</h1>
            </div>
        </div>
    

            <div class="col-md-6 col-sm-6 col-xs-12  size-cap-2">
                <div class="sec-title" style="margin-bottom: 0px">
                    <div class="text" style="padding-right: 15px;padding-left:15px;">
                    Nuestra solución de gestión de activos (CMDB), le permitirá disponer
                    de información precisa y veraz de los activos (CI's) de su
                    infraestructura tecnológica y sus relaciones, información imprescindible 
                    para garantizar que la toma de decisiones maximice el aporte de valor al negocio,  a la vez que se minimizan los riesgos asociados.
                    </div>
                </div>
                
                <div class="sec-title" style="margin-bottom: 0px">
                    <div class="text" style="padding-right: 15px;padding-left:15px;">
                    Adicionalmente, nuestra solución le facilita la gestión de contratos
                    (adquisición, alquiler, servicio, entre otros) asociados a cada activo, así
                    como los proveedores de cada uno de ellos. Además de definir planes de
                    mantenimiento preventivo sobre sus activos, garantizando el correcto
                    funcionamiento, permitiendo alargar su vida útil.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="{{ URL::to('/') }}/images/background/gestionCentrali.png" alt="CMDB">
            </div>
        </div>
    </section>
    <!--About Two Section-->    

    <section class="services-two" style="padding: 0px">
        <div class="auto-container">     
            <div class="sec-title-two centered " style="margin-bottom: 30px;">
                <h2 style="font-size:30px;text-transform: none;">Beneficios de contar con una Gestión de Activos (CMDB) </h2>
            </div>
            
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/flexibilidad.png" alt="SOLUCIONES_FLEXIBLES"></figure>
                        <h3>Información Centralizada</h3>
                        <div class="text colorSub letra">
                        La gestión de activos (CMDB) permite operar con una visión clara de
                        todos los activos que conforman su infraestructura, sus
                        relaciones, generando así un mayor control de su ambiente tecnológico.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/toma_de_decisiones.png" alt="TOMA_DECISIONES_GERENCIALES"></figure>
                        <h3>Toma de Decisiones</h3>
                        <div class="text colorSub letra">
                        Disponga de información precisa y veraz, permitiendo garantizar que
                        la toma de decisiones maximice el aporte de valor al negocio,
                        a la vez que se minimizan los riesgos asociados.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/3-gest-servicios.png" alt="SATISFACCION_DEL_CLIENTE"></figure>
                        <h3>Gestión de Servicio </h3>
                        <div class="text colorSub letra">
                        Mejore la eficiencia de sus técnicos en las gestiones de incidentes,
                        problemas y cambios, facilitándole información veraz y actualizada
                        sobre los activos impactados, necesaria para identificar incidentes
                        recurrentes y la solución de fallas eficazmente.</div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/4-continuidad.png" alt="REDUCCION_COSTOS"></figure>
                        <h3>Continuidad Operativa </h3>
                        <div class="text colorSub letra">
                        La principal causa de interrupciones en los servicios de TI en las
                        empresas deriva de cambios en la configuración, cuyos impactos no
                        fueron debidamente calculados, o bien, de un plan de “Reversa” que
                        no funcionó.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/5-eval-riesgos.png" alt="PRESTACION_SERVICIOS"></figure>
                        <h3>Evaluación de Riesgos</h3>
                        <div class="text colorSub letra">
                        Evalué correctamente el riesgo de los cambios en su infraestructura,
                        conociendo la información de los activos impactados y sus relaciones
                        con los servicios y el negocio.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/6-gest-problemas.png" alt="ESTANDARIZAR_PROCESOS"></figure>
                        <h3>Gestión de Problemas Eficaz</h3>
                        <div class="text colorSub letra">
                        Cuente con una amplia visión de todos los incidentes que afectan a sus activos, 
                        para determinar la causa raíz y evitar nuevos incidentes.</div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>


       <!--About Two Section-->
    <section style="padding-top: 40px;">
        <div class="row">    
            <div class="auto-container">
                <div class="sec-title-two centered " style="margin-bottom: 30px;">
                    <h2 style="font-size:30px; ">Centralice la información de sus activos, Conecte IT con el negocio</h2>
                </div>
            </div>
            
            <div class = "cmdb-img" style ="padding-bottom: 20px;padding-top: 50px;">
                <div class = "row" style = "padding-bottom: 30px;">             
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img style="width: 100%;padding-left: 50px;" src="{{ URL::to('/') }}/images/background/01_D.png" alt="GESTIONES_ACTIVOS_ITIL">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="sec-title-two centered " style="margin-bottom: 30px;">
                            <h2 style="font-size:30px;text-transform: none; color:#fff;">Gestión de Activos </h2>
                        </div>
                        <div class="sec-title" style="margin-bottom: 0px">
                            <div class="text" style="padding-right: 15px;padding-left:15px; color:#fff;">
                            Permite llevar el control de todos los elementos de configuración
                            de la infraestructura TI, con el adecuado nivel de detalle y gestionando
                            dicha información a través de la Base de Datos de Configuración
                            (CMDB), facilitando la posibilidad de crear y administrar 
                            los elementos de configuración proporcionando información precisa sobre la
                            localización de los activos, relaciones con otros activos, bitácora de
                            ticket y mantenimiento relacionados con dicho activo.<br>
                            Adicionalmente, por cada activo podrás tener un registro de existencia y versión
                            respectiva, así como de su historial.
                            </div>
                        </div>
                    </div>        
                </div>
            </div>

            <div class = "row" style = "padding-bottom: 30px;padding-top: 50px;"  >   
                <div class="col-md-6 col-sm-6 col-xs-12  size-cap-2">
                    <div class="sec-title-two centered " style="margin-bottom: 30px;">
                        <h2 style="font-size:30px;text-transform: none;">Gestión de Contratos </h2>
                    </div>
                    <div class="sec-title" style="margin-bottom: 0px">
                        <div class="text" style="padding-right: 15px;padding-left:15px;">
                        Permite optimizar la visibilidad y la información precisa sobre los
                        contratos, tipos de contratos, su centro de costos y los proveedores
                        relacionados, así como también tendrá una visión de las posibles
                        asociaciones que se han realizado con los activos, configurando alertas
                        de notificaciones enviadas vía correo electrónico para los contratos
                        que están pronto a vencer y que le permitirá seleccionar a las personas 
                        involucradas antes que un contrato venza,
                        costo total de los recursos en las áreas de su empresa. <br>
                        Adicionalmente, ofrece la funcionalidad de evaluación de sus contratos.
                        </div>
                    </div>
                </div>           
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/background/02_I.png" alt="GESTION_CONTRATOS">
                </div>
            </div>

            <div class = "cmdb-img2" style ="padding-top: 50px;">
                <div class = "row" style = "">      
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <img style="width: 100%;padding-left: 50px;" src="{{ URL::to('/') }}/images/background/03_D.png" alt="GESTION_MANTENIMIENTOS">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12  ">
                        <div class="sec-title-two centered " style="margin-bottom: 30px;">
                            <h2 style="font-size:30px;text-transform: none; color:#fff;">Gestión de Mantenimiento </h2>
                        </div>
                        <div class="sec-title" style="margin-bottom: 0px">
                            <div class="text" style="padding-right: 15px;padding-left:15px;color:#fff;">
                            Genere planes de mantenimientos preventivos a los activos de su
                            empresa (anual, mensual o semanal), extendiendo la vida útil de los mismos, dicha gestión le
                            permitirá conocer la bitácora de los mantenimientos realizados y programados, 
                            además, de la información recabada en la ejecución,
                            responsables, entre otros detalles.<br>
                            Ofrece, un historial de los procedimientos llevados a cabo por cada recurso, 
                            esto facilita la rápida atención y solución de una orden de mantenimiento, 
                            dependiendo de la urgencia. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="services-two" style="padding: 0px;margin-bottom: 50px"> 
        <div class="auto-container">
            <div class="sec-title-two centered" style="margin-bottom: 30px; padding-top: 50px;">
                <h2 style="font-size:30px;">Integraciones</h2>
            </div>
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <div class="text">
                    Complemente las funcionalidades de Omega CMDB,
                    adquiriendo diferentes soluciones de Omegasoft que
                    facilitan la gestión de sus recursos y servicios IT.
                    Nuestra solución para gestión de servicios IT Omega
                    ITSM, permite gestionar diversos procesos de forma
                    centralizada brindando oporte a asuntos relacionados 
                    con: solicitudes, requerimientos de servicio, incidentes, 
                    problemas y cambios.
                </div>
            </div>
        </div>
    </section>
    <!--About Two Section--> 

@endsection
