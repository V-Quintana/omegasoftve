<!-- Modal -->

<div class="modal fade" id="myCommentary" tabindex="-1" role="dialog" aria-labelledby="myCommentary">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="callback-box">
                <!-- <div class="callback-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;position: absolute;height: 30px;width: 30px;top: 5px;right: 6px;z-index: 9;"><i class="fa fa-times"></i></button>
                    <h3 style="color:#fff;">solicitar cotización</h3>
                </div> -->
                <div class="modal-header">
                    <h3 class="modal-title">Comenta</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              

                    <form action="{{route('commentary.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="name">
                            </div>
                          
                            <Input  type="hidden"  name="blog_id" value="{{$blog->id}}" >
                            
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Correo@gmail.com" name="email">
                            </div>
                            <div class="form-group">
                                <textarea onkeyup="countChars(this);" maxlength="230" class="form-control" rows="5" placeholder="Escribe tu Post" name="content"></textarea>
                                <p id="charNum">230 characters</p>

                            </div>
                        </div>  
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>   
                    </form>                        
               
            </div>
        </div><!-- modal content -->
    </div><!-- modal dialog -->
</div><!-- modal fade -->
<!-- Cierra Modal -->
<script>
function countChars(obj){
    var maxLength = 230;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 0){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">Has excedido el límite de '+maxLength+' Caracteres</span>';
    }else{
        document.getElementById("charNum").innerHTML = charRemain+' Caracteres Restantes';
    }
}
</script>