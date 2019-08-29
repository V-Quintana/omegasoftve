@extends('layouts.web.base')
@section('title', 'Omegasoft - Programa de Partner')
@section('description', 'Nuestro programa está enfocado en ayudarlo a mejorar sus ventas, ampliar su portafolio de soluciones, productos y servicios, con el fin de llegar a más clientes de forma simple y efectiva.')
@section('content')

    <section class="page-title">
        <div class="" style="opacity:10.0;">
            <img style = "float: left;"  src="{{ URL::to('/') }}/images/background/programa-partner.jpg" alt="PARTNER">
            <div style = "padding-top: 29pc; padding-left:36pc;float: left;position: absolute;" class="text-center">
                <div class="text-center button-conten-carrusel">
                    <div class="theme-btn btn-style-one22 button-carrusel">
                        <a style = "text-decoration:none !important;" href="https://drive.google.com/open?id=10zEYjLNDEuRkj670B2l0gdX2-L6C0VmI"  target="_blank">
                            <img style = "height: 20px;padding-right: 10px;" src="{{ URL::to('/') }}/images/icons/descarga.png" alt="PROGRAMA_PARTNER_ALIANZAS">Programa de partner</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    @include('flash::message')
    <section class="services-two" style="padding-top: 50px; margin-bottom: -40px"> 
        <div class="auto-container">
            <div class="sec-title-two centered" style="margin-bottom: 30px;">
                <h1 style="font-size:30px">Las grandes asociaciones se basan en objetivos comunes, compromisos compartidos, y recompensas mutuas</h1>
            </div>
            <div class="sec-title centered">
                <div class="text">    
                    En Omegasoft creemos que las alianzas deben tener un beneficio mutuo. 
                    Por eso, nuestro programa ha sido planteado para que su 
                    empresa evolucione con facilidad, ofreciendo nuestros productos y servicios 
                    que cumplen con altos estándares de calidad, como parte de sus soluciones en el área de TI.
                </div>
            </div>
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <div class="text">
                    Nuestro Programa de Partner lo ayudará a mejorar sus ventas, 
                    ampliar su portafolio de soluciones, conocer nuestros productos 
                    y facilitar a sus clientes la gestión de servicio IT dentro de sus empresas.
                </div>
            </div>
        </div>
    </section>

    <section style=" margin-bottom: 40px;background: #5aceff12;">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <div class="sec-title-two centered" style="margin-bottom: 30px;padding-top: 40px;">
                        <h2 style="font-size: 29px;margin-top: 40px;text-transform:none; font-weight: bold">
                            Niveles de Membresía
                        </h2>
                    </div>
                     <div class="sec-title centered" style="margin-bottom: 30px;">
                        <div class="text">
                            La red de socios de Omegasoft está estructurada en cuatro categorías basadas 
                            en las ventas y los servicios que los socios proporcionan.
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-3 col-xs-3">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px; height: 320px !important;">
                            <div style="padding: 0px; margin-bottom: 0px;">
                                <figure style="text-align: center;" class="icon-box">
                                    <img src="{{ URL::to('/') }}/images/icons/partner-revendedor.png" alt="PARTNER_REVENDEDOR">
                                </figure>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:center; font-size:15px;">
                                    Opción más fácil para comenzar a hacer negocios basados 
                                    en nuestras soluciones, revendiendo ediciones comerciales 
                                    sin compromiso de formación y con compromiso de ventas anuales mínimo.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-3 col-xs-3">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px; height: 320px !important;">
                            <div style="padding: 0px; margin-bottom: 0px;">
                                <figure style="text-align: center;" class="icon-box">
                                    <img src="{{ URL::to('/') }}/images/icons/partner-servicio.png" alt="PARTNER_SERVICIO">
                                </figure>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:center; font-size:15px;">
                                    Opción para empresas prestadoras de servicios para la gestión IT, 
                                    que pudieran generar oportunidades de negocios en sus respectivos 
                                    clientes recomendando nuestras soluciones.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-3 col-xs-3">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px; height: 320px !important;">
                            <div style="padding: 0px; margin-bottom: 0px;">
                                <figure style="text-align: center;" class="icon-box">
                                    <img src="{{ URL::to('/') }}/images/icons/partner-soluciones.png" alt="PARTNER_SOLUCIONES">
                                </figure>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:center; font-size:15px;">
                                    Opción para empresas proveedoras de soluciones IT que 
                                    quieran convertirse en socios estratégicos de Omegasoft,
                                    con amplios conocimientos y capacidad para prestar 
                                    servicios alrededor de los mismos.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-ms-3 col-xs-3">
                        <div class="col-md-12 col-ms-12 col-xs-12" style="border: 1px solid #75777952; padding: 25px;background:#fff;margin-top: 30px; margin-bottom: 30px; height: 320px !important;">
                            <div style="padding: 0px; margin-bottom: 0px;">
                                <figure style="text-align: center;" class="icon-box">
                                    <img src="{{ URL::to('/') }}/images/icons/partner-distribuidor.png" alt="PARTNER_DISTRIBUIDOR">
                                </figure>
                            </div>
                            <div class="sec-title centered" style="padding: 0px; margin-bottom: 0px;"> 
                                <div class="text" style="text-align:center; font-size:15px;">
                                    Opción para empresas que cuentan con una cartera de partner 
                                    proveedoras de soluciones IT, con sólidos conocimientos 
                                    de los mercados, para comprender las necesidades del cliente y brindar apoyo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-two" style="padding: 0px; margin-top:0px;"> 
        <div class="auto-container">
            <div class="sec-title centered" style="margin-bottom: 20px;">
                <h2 style="font-size:30px;padding-top: 65px; margin-bottom: 10px;" class = "sec-title-two centered">Alguno de los beneficios de forma parte de nuestro equipo</h2>
                <div class="text">
                    Nuestro programa de partner le proporciona los recursos esenciales
                    para acelerar su ciclo de venta y ayudar a crecer su negocio
                </div>
            </div>
        </div>
    </section>

    <section class="services-two" style="padding: 0px">
        <div class="auto-container">     
            <div class="row clearfix">
                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/amplie-su-portafolio-de-soluciones.png" alt="OFRECER_SOLUCIONES"></figure>
                        <h3>Portafolio de Soluciones</h3>
                        <div style="font-size: 15px;" class="text">
                            Amplié su portafolio con nuestras soluciones y maximicé 
                            las posibilidades de captar clientes ofreciendo soluciones 
                            de calidad comprobada.
                        </div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/impulse-su-marca.png" alt="INCREMENTA_TUS_VENTAS"></figure>
                        <h3>Impulsa tu marca</h3>
                        <div style="font-size: 15px;" class="text">
                            Llegar a nuevos mercados e industrias ayudando a que los 
                            clientes mejoren su eficiencia en soporte de TI.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/oportunidades-de-negocio2.png" alt="GENERACION_DEMANDA_MARKETING"></figure>
                        <h3>Generación de demanda</h3>
                        <div style="font-size: 15px;" class="text">
                            Para impulsar las demandas de nuestras soluciones y generar oportunidades de negocio, llevamos a
                            cabo frecuentemente programas de marketing y ventas, en conjunto con nuestros partner.</div>
                    </div>
                </div>
                <!--Service Block-->
            </div>
            <div class="row clearfix">
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/maximice-sus-ingresos.png" alt="INGRESOS_ECONOMICOS"></figure>
                        <h3>Maximice sus ingresos</h3>
                        <div style="font-size: 15px;" class="text">
                            Nuestra atractiva relación costo beneficios, le permitirá captar nuevos clientes,
                            obteniendo importantes márgenes en nuevas ventas y renovaciones.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/formacion-tecnica1.png" alt="FORMACION_TECNICA_PROFESIONAL"></figure>
                        <h3>Formación técnica</h3>
                        <div style="font-size: 15px;" class="text">
                            Para nosotros, es de vital importancia la formación de nuestros Partner, para lo cual contamos con
                            varios programas de formación según el nivel del partner.</div>
                    </div>
                </div>
                <!--Service Block-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="icon-box"><img src="{{ URL::to('/') }}/images/icons/soporte_directo.png" alt="SOPORTE_TECNICO"></figure>
                        <h3>Soporte Directo</h3>
                        <div style="font-size: 15px;" class="text">
                        Como partner, te ofrecemos servicios de soporte técnico y comercial 
                        orientado a brindar el apoyo que tú y tus clientes requieran.</div>
                    </div>
                </div>
                <!--Service Block-->
            </div>
        </div>
    </section>

    <section class="services-two" style="padding: 0px;margin-bottom: 20px"> 
        <div class="auto-container">
            <div class="sec-title-two centered" style="margin-bottom: 30px; padding-top: 70px;">
                <h2 style="font-size:30px;">Únete a Nosotros</h2>
            </div>
            <div class="sec-title centered" style="margin-bottom: 30px;">
                <div class="text">
                    Nuestro programa está enfocado en ayudarlo a mejorar sus ventas, 
                    ampliar su portafolio de soluciones, productos y servicios, 
                    con el fin de llegar a más clientes de forma simple y efectiva.
                </div>
            </div>
        </div>
    </section>

    <section class="services-two" style="margin-top: -30px;padding:22px;height:100px;"> 
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="text-center"  style="transition: none; line-height: 15px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 10px;"><a href="" data-id="1" data-toggle="modal" data-target="#myPartner" class="theme-btn btn-style-three" style="transition: none; text-align: inherit; line-height: 24px; border-width: 2px; margin: 0px; padding: 15px 45px 11px; letter-spacing: 1px; font-weight: 600; font-size: 16px;border-color: #3ccc00; background: #3ccc00">As&oacute;ciate</a></div>
            </div>
        </div>
    </section>

@include('web.modals.Progra_partner')
@endsection