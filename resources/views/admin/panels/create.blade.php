@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-lg-2"></div>
           <div class="col-lg-8">
              <div class="panel panel-primary">
                 <div class="panel panel-heading">
                    Crear Panel
                    <a  class="btn btn-warning pull-right btn-sm" href="{{route('admin.panels.index')}}">Atras</a>
                 </div>
                 <div class="panel-body">
                    <form method="POST" action="{{route('admin.panels.store')}}"    enctype="multipart/form-data" >
                       @csrf
                       <div class="form-group">
                          <label for="exampleFormControlInput1">Titulo</label>
                          <input type="text" class="form-control" id="titleName" name="titleName" placeholder="Titulo">
                       </div>

                       <div class="form-group">
                            <label for="description1Name">Descripcion 1 - Max 70 Characters</label>
                            <textarea class="form-control" rows="5" name="description1Name" id="description1Name" onKeyDown="valida_longitud_1()" onKeyUp="valida_longitud_1()">{{ old('description1Name') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description2Name">Descripcion 2 - Max 70 Characters</label>
                            <textarea class="form-control" rows="5" name="description2Name" id="description2Name" onKeyDown="valida_longitud_2()" onKeyUp="valida_longitud_2()">{{ old('description2Name') }}</textarea>
                        </div>
                       
                       
                       <div class="form-group">
                          <label for="text_btn_linkName">Texto Boton</label>
                          <textarea class="form-control" rows="5" name="text_btn_linkName" id="text_btn_linkName" placeholder="Ver Producto"></textarea>
                       </div>
                       
                       <div class="form-group">
                         <label for="linkName">Link</label>
                         <input type="text" class="form-control" id="linkName" name="linkName" placeholder="Link">
                      </div>

                      <label for="location_imageName">Ubicación Imagen</label>
                       <select name ="location_imageName">
                          <option value="right">Derecha</option>
                          <option value="left">Izquierda</option>
                       </select>
                       <a data-toggle="modal" data-target="#modal_location_image">
                            <i class="fa fa-question-circle" aria-hidden="false"></i>
                        </a>

                       <div class="form-group">
                          <label for="exampleFormControlFile1">Imagen</label>
                          <input type="file" class="form-control-file" id="files" name="imagenName" >
                       </div>
                       <div class="form-group">
                          <img id="image" class="img-thumbnail" style="width: 100%; height: auto;"/>
                       </div>
                       <div class="form-group">
                          <button type="subtmit" class="btn btn-primary btn-large form-control">Crear</button>
                       </div>
                    </form>
                 </div>
              </div>
           </div>
           <div class="col-lg-2"></div>
        </div>
    </div>
    <!-- Modal -->
    <div id="modal_location_image" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Guia panel</h3>
          </div>
          <div class="modal-body">
            <h4>Hacia la izquierda</h4>
            <img src={{asset("guia_izquierda.jpg")}} alt=""  class="img-thumbnail" style="width: 100%; height: auto;">
            <h4>Hacia la derecha</h4>
            <img src={{asset("guia_derecha.jpg")}} alt=""  class="img-thumbnail" style="width: 100%; height: auto;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>
@endsection


@section('js')
<script type="text/javascript">
    

    //Limitar caracteres - Description_short
    contenido_textarea = ""  
    num_caracteres_permitidos = 71 

    function valida_longitud_1(){ 
       num_caracteres = document.forms[0].description1Name.value.length 

       if (num_caracteres > num_caracteres_permitidos){ 
          document.forms[0].description1Name.value = contenido_textarea 
       }else{ 
          contenido_textarea = document.forms[0].description1Name.value    
       } 

       if (num_caracteres >= num_caracteres_permitidos){ 
          document.forms[0].description1Name.style.color="#ff0000"; 
       }else{ 
          document.forms[0].description1Name.style.color="#000000"; 
       } 

     
    }

    function valida_longitud_2(){ 
       num_caracteres = document.forms[0].description2Name.value.length 

       if (num_caracteres > num_caracteres_permitidos){ 
          document.forms[0].description2Name.value = contenido_textarea 
       }else{ 
          contenido_textarea = document.forms[0].description2Name.value    
       } 

       if (num_caracteres >= num_caracteres_permitidos){ 
          document.forms[0].description2Name.style.color="#ff0000"; 
       }else{ 
          document.forms[0].description2Name.style.color="#000000"; 
       } 

     
    } 
    
</script>
@endsection

