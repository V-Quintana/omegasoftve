@extends('layouts.web.base')
@section('title', 'Omegasoft - Manuales')
@section('description', 'Disponga de manuales prácticos, donde se establecen claramente los procesos de nuestros productos y soluciones orientados a proveer todo lo necesario para la gestión de servicios IT.')
@section('content')


<section class="page-title" style = "background: #f3fbfd;padding-top: 30px;">
    <div class="portal-media" >
        <div class="auto-container">
            <div class="row">
                <ul class="list-module">
                    <li>
                        <div>
                           <a target="_blank" href="https://drive.google.com/open?id=1NDbKjw19XtMD9E33xFfBmebSmYKELX8A"  style = "text-decoration: none;">
                               <img  style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/Analyst.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href="https://drive.google.com/open?id=1NDbKjw19XtMD9E33xFfBmebSmYKELX8A" style = "text-decoration: none;" >
                                        <h3> Omega Analyst</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Consola para el control y seguimientos 
                                            de las solicitudes, asociadas a los solucionadores.
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/cmdb.png" alt="">
                            </a>   
                                <div class="sec-title centered">
                                    <a target="_blank" href=""  style = "text-decoration: none;">
                                        <h3>Omega CMDB</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Gestión de activos, contratos, mantenimientos, 
                                            proveedores y opciones de configuración.
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/config.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href=""  style = "text-decoration: none;">
                                        <h3>Omega Configurations</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Opciones de parametrización de las gestiones 
                                            principales de Omega Service Desk.
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/dashboard.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href="" style = "text-decoration: none;">
                                        <h3>Omega Dashboard</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Visualización y  representación  gráfica de  
                                            indicadores  de la mesa de servicio
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-module">
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/kb.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href=""  style = "text-decoration: none;">
                                        <h3>Omega Knowledgebase</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Repositorio de soluciones centralizado  
                                            para usuarios y solucionadores.
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/profile.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href=""  style = "text-decoration: none;">
                                        <h3>Omega Profile</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Configuración de accesos, detalles de los 
                                            usuarios, perfiles y permisos.
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/user.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href=""  style = "text-decoration: none;">
                                        <h3>Omega User</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Canal para la autogestión de solicitudes 
                                            y acceso a la base de conocimiento.
                                        </p>
                                    </a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a target="_blank" href=""  style = "text-decoration: none;">
                                <img style="" class = "o-icon-module" src="{{ URL::to('/') }}/images/manuales/report.png" alt="">
                            </a>
                                <div class="sec-title centered">
                                    <a target="_blank" href=""  style = "text-decoration: none;">
                                        <h3>Omega Report</h3>
                                        <p class="text" style="font-size: 13px;">
                                            Estadísticas  de la mesa de servicio con 
                                            indicadores para  cada gestión.
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
