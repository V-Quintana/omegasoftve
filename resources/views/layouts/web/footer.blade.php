<!--Main Footer-->
<footer class="main-footer footer-style-two">
        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-4 col-sm-12 col-xs-12">    
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-md-12 col-sm-6 col-xs-12"  style = "padding-left: 70px;" >
                                <div class="footer-widget about-widget">
                                    <div class="widget-inner">
                                        <div class="logo"><img src="{{ URL::to('/') }}/images/logo.png" alt="LOGO_EMPRESA"></div>
                                        <div class="text">
                                        Garantizamos soluciones a su empresa bajo el estándar integral de gestión de servicios IT basado en las buenas prácticas de ITIL </div>
                                        <div>
                                            <div class="social-links">
                                                <ul class="clearfix">
                                                    <li><a target="_black" href="https://www.facebook.com/Omegasoftve/"><span class="fa fa-facebook-f"></span></a></li>
                                                    <li><a target="_black" href="https://twitter.com/Omegasoft_ca "><span class="fa fa-twitter"></span></a></li>
                                                    <li><a target="_black" href="https://join.skype.com/invite/rbtBS36Igg1J"><span class="fa fa-skype"></span></a></li>
                                                    <li><a target="_black" href="https://www.instagram.com/omegasoftve/"><span class="fa fa-instagram"></span></a></li>
                                                    <li><a target="_black" href="https://www.linkedin.com/company/omegasoft-c-a"><span class="fa fa-linkedin"></span></a></li>
                                                    <li style = "margin-right: 3px;"><a style = "padding-left:0px;" target="_black" href="https://www.youtube.com/channel/UCXanLx5cEd8zIxDch2WJJTg?view_as=subscriber"><span class="fa fa-youtube"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<!--Footer Column-->
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-4 col-sm-12 col-xs-12"  >    
                        <div class="row clearfix">
                        <div class="footer-column col-md-12 col-sm-12 col-xs-12" style = "padding-left: 70px;">
                                <div class="footer-widget links-widget">
                                    <div class="widget-inner">
                                        <h3>Acceso rápido</h3>
                                        <div class="links">
                                            <ul>
                                                <li><a href="{{ URL::to('/') }}/soluciones/itsm/">Gestión de Servicios IT</a></li>
                                                <li><a href="{{ URL::to('/') }}/Activos-centralizados/">Gestión de Activos Centralizada</a></li>
                                                <li><a href="{{ URL::to('/') }}/productos-suite/">Omega ITSM</a></li>
                                                <li><a href="{{ URL::to('/') }}/soporte/">Centro de Soporte</a></li>
                                                <li><a href="{{ URL::to('/') }}/programa-partner/">Programa de Partner</a></li>
                                                <!-- <li><a href="#">Portal de Partner</a></li> -->
                                                <li><a href="{{ URL::to('/') }}/blog/">Blog</a></li>
                                                <!-- <li><a href="{{ URL::to('/') }}/newsletter/">Newsletter</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>

                    <div class="big-column col-md-4 col-sm-12 col-xs-12">  
                        <div class="footer-widget info-widget">
                            <div class="row clearfix">
                                                         <!--Footer Column-->
                            <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                                <div class="footer-widget info-widget">
                                    <div class="widget-inner">
                                        <h3 style="text-align: center;">CONTÁCTANOS</h3>
                                        <div class="info">
                                            <ul>
                                                <li class="clearfix"><strong style = "width: 30%;">Teléfono: </strong> <span class="txt fa fa-phone">(58) 244 386 8448 </span> <br> <span style = "width: 66%;padding-left: 110px;" class="fa fa-whatsapp">(58) 412 888 4477</span> </li>
                                                <li class="clearfix"><strong style = "width: 22%;">Correo: </strong> <span class="txt"><!--<a href="email:info@omegasoftve.com">-->info@omegasoftve.com<!--</a>--></span></li>
                                                <!-- <li class="clearfix"><strong>Direccion: </strong> <span class="txt">Dirección:  Calle Páez #24 entre calle Carabaño y Leopoldo Tosta, sector centro. Villa de Cura, Aragua, Venezuela.</span></li> -->
                                                <li>
                                                    {{ Form::open(array('route' => 'newsletter.send', 'id' => 'form-newsletter')) }}
                                                        <div style="width: 252px;">
                                                        <strong style = "width: 22%;">Suscríbete:</strong> 
                                                            <!-- <h4 style="text-align: center; color: white; font-size: 16px;padding: 7px; margin-top: 14px !important;">Newletter</h4> -->
                                                                <div class="input-group mb-3">
                                                                    <input type="email" class="form-control" 
                                                                        name="email"
                                                                        required
                                                                        placeholder="Email" 
                                                                        aria-label="Recipient's username" 
                                                                        aria-describedby="button-addon2">
                                                                        <div
                                                                            class="recaptcha-hide" 
                                                                            id="g-recaptcha-footer"
                                                                            data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                                                            data-callback="send_newsletter_footer"
                                                                            data-size="invisible">
                                                                        </div>
                                                                    <div class="input-group-append">
                                                                        <button
                                                                        style="background:#2387e4; color: white; font-size: 15px;" 
                                                                        class="btn btn-outline-secondary btn-send" 
                                                                        type="submit">Enviar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style=""> 
                                                                <label style="color: white; font-size: 9px;">
                                                                    <input type="checkbox" name="acepta" required checked autocomplete="off">Acepto Políticas de tratamiento de datos.
                                                                </label>
                                                            </div>
                                                    @include('flash::message')
                                                    {{ Form::close() }}  
                                                
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Column-->
                            <!-- <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget gallery-widget">
                                    <div class="widget-inner">
                                        <h3 style="margin-left: 25px;" >Redes Sociales</h3>
                                        <div> 
                                            <div>
                                                <div class="social-links">
                                                        <ul class="clearfix">
                                                            <li><a target="_black" href="https://www.facebook.com/Omegasoftve/"><span class="fa fa-facebook-f"></span></a></li>
                                                            <li><a target="_black" href="https://twitter.com/Omegasoft01"><span class="fa fa-twitter"></span></a></li>
                                                            <li><a target="_black" href="https://join.skype.com/invite/MHGMd5TGZRR9"><span class="fa fa-skype"></span></a></li>
                                                            <li><a target="_black" href="https://www.instagram.com/omegasoftve/"><span class="fa fa-instagram"></span></a></li>
                                                            <li><a target="_black" href="https://www.linkedin.com/company/omegasoft-c-a"><span class="fa fa-linkedin"></span></a></li>
                                                        </ul>
                                                </div>
                                            </div>

                                            {{ Form::open(array('route' => 'newsletter.send', 'id' => 'form-newsletter')) }}
                                            <div style="width: 203px;">
                                                    <h4 style="text-align: center; color: white; font-size: 16px;padding: 7px; margin-top: 14px !important;">Suscribete a nuestros boletin mensual</h4>
                                                        <div class="input-group mb-3">
                                                            <input type="email" class="form-control" 
                                                                name="email"
                                                                required
                                                                placeholder="Email" 
                                                                aria-label="Recipient's username" 
                                                                aria-describedby="button-addon2">
                                                                <div
                                                                    class="recaptcha-hide" 
                                                                    id="g-recaptcha-footer"
                                                                    data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                                                    data-callback="send_newsletter_footer"
                                                                    data-size="invisible">
                                                                </div>
                                                            <div class="input-group-append">
                                                                <button
                                                                style="background:#2387e4; color: white; font-size: 15px;" 
                                                                class="btn btn-outline-secondary btn-send" 
                                                                type="submit">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style=""> 
                                                        <label style="color: white; font-size: 9px;">
                                                            <input type="checkbox" name="acepta" required checked autocomplete="off"> Acepto Politicas de tratamiento de datos.
                                                        </label>
                                                    </div>
                                                    @include('flash::message')
                                                    {{ Form::close() }}    
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                        <div class="copyright">&copy; 2019. Omegasoft C.A.  Todos los derechos reservados <!--<a href="https://themeforest.net/user/yogsthemes/portfolio">YogsThemes--></a></div>
                    </div>
                   <!-- <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-nav clearfix">
                            <ul class="clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>


    </footer>
    @section('javascript')
<script>

    $(document).ready(function() {
            $('#flash-overlay-modal').modal();
        });
</script>
@endsection