@extends('layouts.web.base')
@section('title', 'Omegasoft - Únete a Nosotros ')
@section('description', 'Omegasoft es el lugar perfecto para ti, conoce nuestros vacantes y forma parte del equipo.')
@section('content')
    <section class="page-title">
    	<div class="image-layer" 
             style="opacity:10.0;">
            <img src="{{ URL::to('/') }}/images/background/nuestro-equipo.jpg" alt="VALORES_EMPRESA">
        </div>
        <div class="auto-container">
        </div>
    </section>

    <section class="">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 40px;">
                        <div class="sec-title centered">
                            <h1>Únete a esta gran familia</h1>
                            <h2 style="font-size: 28px; margin-top: 20px;" >En Omegasoft más que un empleo, formarás parte de una familia</h2>
                        <div class="text" style="text-align: center;">
                            Si te apasiona la tecnología y estás interesado en desarrollar soluciones de 
                            vanguardia y ofrecer servicios IT, Omegasoft es el lugar perfecto para ti, 
                            conoce nuestros vacantes y forma parte del equipo. El desarrollo de software 
                            de calidad garantizara soluciones y la expansión de nuestra empresa, que en 
                            gran parte se debe al magnífico equipo de profesionales que nos conforman, es por 
                            esta razón que estamos abiertos a captar talento humano que nos lleve al crecimiento 
                            y nos permita ofrecer una atención de calidad a nuestros clientes con un armónico 
                            ambiente de trabajo.
                        </div>
                        <div class="text" style="text-align: center; margin-top: 20px">
                            Te invitamos a emprender juntos nuevos desafíos, que nos permitan demostrar 
                            nuestra actitud, pasión por lo que hacemos, creatividad, capacidad de 
                            colaboración y energía frente a los retos que se nos presenten y hacer la 
                            diferencia logrando resultados extraordinarios.                          
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="careers-page" style="padding:0px">
            <div class="auto-container">
                    <div class="sec-title centered">
                        <h2 style="font-size: 28px; margin-top: 20px;" >Nuestras Vacantes</h2>
                    </div>
                <div class="row clearfix">
                 
                    <div class="left-side col-md-4 col-sm-5 col-xs-12">
                        <div class="inner">
                       
                            <div class="jobs-widget side-widget">
                                <div style = "background: #00325d;">
									<div class="sidebar-title2">
										<h3 style ="font-size: 24px; margin-bottom: 0px; padding-bottom:0px; color: #fff; text-align: center;padding-top: 10px;padding-right: 0px;" >Oportunidades Actuales</h3>
									</div>
								</div>
                                <div>
                                    <ul id="categorys-vacancies-content">
                                        <li class="popular-category-list2 letra"><a data-id="select-Tecnología" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Tecnología (1)</span> <span class="pull-right"></span></a>
                                        </li>
                                        <li class= "popular-category-list2 letra"><a data-id="select-Comercial" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Comercial (3)</span> <span class="pull-right"></span></a>
                                        </li>
                                        <li class= "popular-category-list2 letra" ><a data-id="select-Marketing" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Marketing</span> <span class="pull-right"></span></a>
                                        </li>
                                        <li class= "popular-category-list2 letra" ><a data-id="select-Administración" class="clearfix categorys-vacancies" href="#">
                                            <span class="pull-left">Administración</span> <span class="pull-right"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    
                    @include('flash::message')
                    <div class="content-side col-md-8 col-sm-7 col-xs-12">
                        <div class="inner">
                            <div class="career-posts">
                               
                                <div class="career-block select-Tecnología">
                                    <div>
                                        <!--
                                        <div style="margin-bottom: 30px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="margin-bottom: 0px;text-transform: none;">Coordinador de Soporte Técnico</h2>
                                                    <p class="text" style="text-align: initial;">
                                                        Dirigir las actividades del departamento de soporte, seguimiento a las solicitudes realizadas
                                                        por nuestros clientes.
                                                    </p>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Funciones:</h2>
                                                    <ul>
                                                        <li>Supervisión de personal.</li>
                                                        <li>Visitas a pficinas de clientes.</li>
                                                        <li>Realización de informe e indicadores de gestión.</li>
                                                        <li>Implementación de software desarrollados por el negocio.</li>
                                                        <li>Definir planes de implementación de aplicaciones.</li>
                                                        <li>Capacitaciones de personal y clientes.</li>
                                                        <li>Resolución de incidencias y errores de productos.</li>
                                                        <li>Desarrollo de manuales y guías de usuarios.</li>
                                                        <li>Testing de desarrollos del negocio.</li>
                                                        <li>Nuevas funcionalidades.</li>
                                                        <li>Corrección de errores.</li>
                                                        <li>Presentaciones de software a nuevos clientes.</li>
                                                        <li>Apoyo a otras areas del negocio.</li>
                                                    </ul>
                                                </div>  
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Capacidades:</h2>
                                                    <ul>
                                                        <li>Liderazgo.</li>
                                                        <li>Resolución de problemas.</li>
                                                        <li>Capacidad de respuesta bajo presión.</li>
                                                        <li>Orientación al servicio.</li>
                                                        <li>Comunicación efectiva.</li>
                                                        <li>Toma decisiones.</li>
                                                        <li>Orientado a resultados.</li>
                                                        <li>Buena dicción y escritura.</li>
                                                    </ul
                                                    >
                                                </div>  
                                                <div class="link-box"><a href="#" data-title="Coordinador de Soporte Técnico" data-toggle="modal" 
                                                data-target="#myTeam" class="theme-btn btn-style-two">Postularse</a></div>
                                            </div> 
                                            <hr style="height:0px;width: 110%;background-color:#d8cece;">
                                            -->
                                            <div style="margin-bottom: 30px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="margin-bottom: 0px;text-transform: none;font-size: 24px; ">Analista de Soporte Técnico</h2>
                                                    <p class="text" style="text-align: initial;">
                                                        Profesional con amplios conocimientos técnico, orientado a la prestación de servicios
                                                    </p>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Capacidades:</h2>
                                                    <ul>
                                                        <li>Trabajar bajo presión y entregar resultados según cronogramas y tiempos acordados.</li>
                                                        <li>Disposición para aprender y adaptarse a cambios del entorno.</li>
                                                        <li>Proactivo.</li>
                                                        <li>Trabajo en equipo.</li>
                                                        <li>Disponibilidad para trasladarse por soporte en sitio.</li>
                                                    </ul>
                                                </div>  
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Conocimientos</h2>
                                                    <ul>
                                                        <li>Plataforma Sistema Operativo Windows/Linux (Intermedio o Avanzado).</li>
                                                        <li>Administración y gestión de bases de datos SQL (Intermedio).</li>
                                                        <li>Herramientas Ofimáticas.</li>
                                                        <li>ITIL intermedio o básico.</li>
                                                        <li>Herramientas de control remoto.</li>
                                                        <li>Manejo de atención a clientes.</li>
                                                        <li>Herramientas de gestión de ticket.</li>
                                                    </ul>
                                                </div>  
                                                <div class="link-box"><a href="#" data-title="Analista de Soporte Técnico" data-toggle="modal" 
                                                data-target="#myTeam"  class="theme-btn btn-style-two">Postularse</a></div>
                                            
                                            </div> 
                                            <hr style="height:0px;width: 110%;background-color:#d8cece;">
                                      
                                    </div>
                                </div>
                               
                                <div class="career-block select-Comercial">
                                    <div>
                                        
                                            <div style="margin-bottom: 30px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="margin-bottom: 0px;text-transform: none;font-size: 24px; ">Gerente Comercial</h2>
                                                    <p class="text" style="text-align: initial;">
                                                        Se requiere de un líder dinámico, 
                                                        estratega, buen negociador, espíritu 
                                                        comercial y competitivo con capacidad de afrontar retos.
                                                    </p>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 0px;">Perfil requerido</h2>                                        
                                                    <p class="text" style="text-align: initial;">
                                                            Formación universitaria superior en Administración, 
                                                            dirección de empresas, economía, derecho, marketing o afines.
                                                    </p>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Funciones:</h2>
                                                    <ul>
                                                        <li>Definir e implementar estrategias, políticas 
                                                            comerciales y objetivos con los colaboradores
                                                            de las distintas áreas, asumiendo la responsabilidad 
                                                            del resultado.
                                                        </li>
                                                        <li>
                                                            Planificar, dirigir y coordinar el funcionamiento del área comercial.
                                                        </li>
                                                        <li>
                                                            Diseño, desarrollo y ejecución del plan de negocio para la captación de nuevos clientes.
                                                        </li>
                                                        <li>
                                                            Prospección de mercados, buscando nuevas oportunidades de negocio, nichos de mercado
                                                            y clientes potenciales.
                                                        </li>
                                                        <li>
                                                            Establecer las estrategias de marketing necesarias.
                                                        </li>
                                                        <li>
                                                            Análisis de la competencia.
                                                        </li>
                                                    </ul>
                                                </div>  
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;">
                                                        <h2 style="font-size: 20px;margin-bottom: 10px;">Capacidades:</h2>
                                                        <ul>
                                                            <li>
                                                                Conocimiento en planificación estratégica.
                                                            </li>
                                                            <li>
                                                                Experiencia en el área de ventas en la red (Network Marketing).
                                                            </li>
                                                            <li>
                                                                Dominio en el manejo de los canales ventas y distribución.
                                                            </li>
                                                            <li>
                                                                Manejo y dominio de los indicadores de gestión.
                                                            </li>
                                                            <li>
                                                                Capacidad de negociación e interpretación de las estratégicas de mercado dirigidas al
                                                                crecimiento y mejora del departamento de ventas.
                                                            </li>
                                                            <li>
                                                                Facilidad para la toma de decisiones.
                                                            </li>
                                                            <li>
                                                                Alta Capacidad de relación y negociación.
                                                            </li>
                                                        </ul>
                                                </div>  
                                                <div class="link-box">
                                                    <a href="#" data-title="Director Comercial" 
                                                        data-toggle="modal" data-target="#myTeam"  
                                                        class="theme-btn btn-style-two">Postularse</a>
                                                </div>
                                            </div> 
                                            <hr style="height:0px;width: 110%;background-color:#d8cece;">
                                       
                                            <div style="margin-top: 50px; margin-bottom: 30px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="margin-bottom: 0px;text-transform: none;font-size: 24px; ">Ejecutivo de Ventas</h2>
                                                    <p class="text" style="text-align: initial;">
                                                        Profesional responsable, ordenado, dinámico y proactivo.
                                                    </p>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Competencias:</h2>
                                                    <ul>
                                                        <li>
                                                            Atención a cartera existente.
                                                        </li>
                                                        <li>
                                                            Captación de nueva cartera.
                                                        </li>
                                                        <li>
                                                            Capacidad de aportar a la estructura de ventas.
                                                        </li>
                                                        <li>
                                                            Orientación al servicio.
                                                        </li>
                                                        <li>
                                                            Comunicación efectiva.
                                                        </li>
                                                        <li>
                                                            Toma decisiones.
                                                        </li>
                                                        <li>
                                                            Orientado a resultados.
                                                        </li>
                                                        <li>
                                                            Buena dicción y escritura.
                                                        </li>
                                                    </ul>
                                                </div>  
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;text-transform: none;">Funciones inherente al Cargo:</h2>
                                                    <ul>
                                                        <li>
                                                            Atención personalizada de cartera.
                                                        </li>
                                                        <li>
                                                            Enlace directo entre clientes y empresa.
                                                        </li>
                                                        <li>
                                                            Canalización de requerimientos.
                                                        </li>
                                                        <li>
                                                            Mantener solvencia efectiva de sus clientes.
                                                        </li>
                                                        <li>
                                                            Ofertar todas las oportunidades de negocio que ofrece la empresa.
                                                        </li>
                                                        <li>
                                                            Participación activa en eventos donde participe la empresa.
                                                        </li>
                                                    </ul>
                                                </div>  
                                                <div class="link-box">
                                                    <a href="#" data-title="Ejecutivo de Ventas" data-toggle="modal" 
                                                       data-target="#myTeam"  class="theme-btn btn-style-two">Postularse</a>
                                                </div>
                                            </div> 
                                            <hr style="height:0px;width: 110%;background-color:#d8cece;">
                                    
                                            <div style="margin-top: 50px;margin-bottom: 30px;">
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="margin-bottom: 0px;text-transform: none;font-size: 24px; ">Gerente de Canales de Distribución</h2>
                                                    <p class="text" style="text-align: initial;">
                                                        Profesional con Experiencia en el Establecimiento de Alianzas Comerciales
                                                    </p>
                                                </div>
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;">Competencias:</h2>
                                                    <ul>
                                                        <li>Segmentación de canales de venta.</li>
                                                        <li>Atención a los distintos canales de venta.</li>
                                                        <li>Análisis de competencia.</li>
                                                        <li>Desarrollo de negocios a corto y mediano plazo.</li>
                                                        <li>Orientación al servicio.</li>
                                                        <li>Comunicación efectiva.</li>
                                                        <li>Toma decisiones.</li>
                                                        <li>Orientado a resultados.</li>
                                                        <li>Buena dicción y escritura.</li>
                                                    </ul>
                                                </div>  
                                                <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;">
                                                    <h2 style="font-size: 20px;margin-bottom: 10px;text-transform: none;">Funciones inherentes al Cargo:</h2>
                                                    <ul>
                                                        <li>Determinar necesidades de cada canal de ventas.</li>
                                                        <li>Direccionar la venta de los productos de la empresa.</li>
                                                        <li>Canalización de requerimientos.</li>
                                                        <li>Mantener solvencia efectiva de sus clientes.</li>
                                                        <li>Supervisión efectiva del uso del producto: debilidades y fortalezas.</li>
                                                        <li>Participación activa en eventos donde participe la empresa.</li>
                                                    </ul>
                                                </div>  
                                                <div class="link-box">
                                                <a href="#" data-title="Gerente de Canales de Distribución" data-toggle="modal" data-target="#myTeam"  
                                                class="theme-btn btn-style-two">Postularse</a></div>
                                            </div> 
                                                <hr style="height:0px;width: 110%;background-color:#d8cece;">
                                      
                                    </div>
                                </div>
                                
                                <div class="career-block select-Marketing">
                                    <div> 
                                        <div style="margin-bottom: 30px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                <p class="text" style="text-align: initial;">
                                                Si tu perfil no se ajusta a las oportunidades actuales, pero te gusta la tecnología 
                                                y la resolución de problemas tanto como a nosotros, nos encantaría conocerte. <br> <br>
                                                Envía tu curriculum vitae a nuestro correo <strong> talento.humano@omegasoftve.com </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="career-block select-Administración">
                                    <div> 
                                        <div style="margin-bottom: 30px;">
                                            <div class="sec-title centered" style="margin-bottom: 0px;text-align: initial;margin-bottom: 50px;">
                                                <p class="text" style="text-align: initial;">
                                                Si tu perfil no se ajusta a las oportunidades actuales, pero te gusta la tecnología 
                                                y la resolución de problemas tanto como a nosotros, nos encantaría conocerte. <br> <br>
                                                Envía tu curriculum vitae a nuestro correo <strong> talento.humano@omegasoftve.com </strong>
                                                </p>
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


@include('web.modals.team')
@endsection

@section('javascript')
<script src="{{ URL::to('/') }}/js/team.js"></script>
<script>
    function callbackTeam(data){
        $('#form_team').submit()
    }
    $('#myTeam').on('show.bs.modal', function(event) {
        var title = $(event.relatedTarget).data('title')
        $('#input-team-title').val(title)
        $('#title-team').html(title)
    })
    $(document).ready(function() {
        $('#flash-overlay-modal').modal();
    });
</script>
@endsection