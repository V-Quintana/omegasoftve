<!-- Modal -->

<div class="modal fade" id="myCotizacion" tabindex="-1" role="dialog" aria-labelledby="myContizacionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="callback-box">
                <div class="callback-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;position: absolute;height: 30px;width: 30px;top: 5px;right: 6px;z-index: 9;"><i class="fa fa-times"></i></button>
                    <h2>solicitar cotización</h2>
                </div>
                <div class="form-box" style="padding-left:15px;padding-right:15px;padding-top:25px">
                    <div class="form-style-two callback-form">
                            {{ Form::open(array('route' => 'index.send', 'id' => 'form_index')) }}
                            <!-- {{ Form::open(array('route' => 'quotation.send', 'id' => 'form_quotation')) }} -->
                            <div class="col-md-12 col-md-12 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                <div class="form-group" style="padding-left: 0px; padding-right: 0px;">
                                    
                                    <div class="col-md-6 col-md-6 col-xs-6 form-group">
                                    
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="company" value="" placeholder="Empresa" required>
                                        </div>

                                        <div style="margin-bottom: 10px">
                                            <input type="text" name="contac" value="" placeholder="Contacto" required>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-md-6 col-xs-6">
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="phone" value="" placeholder="Teléfono" required>
                                        </div>

                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="email" value="" placeholder="Correo Electrónico" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        
                                            <div class="form-group">
                                                <select name="producto" required>
                                                    <option value="" selected  disabled>Seleccione la solución</option>
                                                    <option value="Gestión de Servicio (ITSM)" id="">Gestión de Servicio (ITSM)</option>
                                                    <option value="Gestión de Activo Centralizada (CMDB) " id="">Gestión de Activo Centralizada (CMDB) </option>
                                                </select>
                                            </div>
                                        
                                            <div class="form-group">
                                                <select name="versión" required>
                                                    <option value="" selected  disabled>Elegir Versión</option>
                                                    <option value="Initial" id="">Initial</option>
                                                    <option value="Standard" id="">Standard</option>
                                                    <option value="Professional" id="">Professional</option>
                                                    <option value="Enterprise" id="">Enterprise</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select name="modalidad" required>
                                                    <option value="" selected  disabled>Elegir Modalidad</option>
                                                    <option value="Premise" id="">On Premise</option>
                                                    <option value="Demand" id="">On Demand</option>
                                                </select>
                                            </div>
                                    </div>

                                    <div class="col-md-6 col-md-6 col-xs-12">

                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="concurrentes" value="" placeholder="Nro. de Licencias Concurrentes" required>
                                        </div>

                                    </div>
                                   
                                    <div class="col-md-6 col-md-6 col-xs-12">
                                        <div  style="margin-bottom: 10px">
                                            <input type="text" name="nombradas" value="" placeholder="Nro. de Licencias Nombradas" required>
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-12 col-md-12 col-xs-12">
                                            <div>
                                                <div class="text-center">
                                                    <button type="submit" class="theme-btn btn-style-two btn-send" style="margin-top: 0px; margin-bottom: 25px;">Enviar</button>
                                                </div>
                                            </div>
                                        <div
                                            class="recaptcha-hide" 
                                            id="g-recaptcha-index"
                                            data-sitekey="6LcjmmgUAAAAAIpIHH-NyYnEJwI8xhRB2knImJDW"
                                            data-callback="callbackIndex"
                                            data-size="invisible">
                                        </div>
                                    </div>

                            
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div><!-- modal content -->
    </div><!-- modal dialog -->
</div><!-- modal fade -->
<!-- Cierra Modal -->
