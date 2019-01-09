@extends('layouts.admin.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="panel panel-warning">
                <div class="panel panel-heading">
                    Actualizar Panel
                    <a  class="btn btn-primary pull-right btn-sm" href="{{route('admin.panels.index')}}">Atras</a>
                </div>
                <div class="panel-body">
                        <form method="POST" action="/admin/panels/{{$panel->id}}"    enctype="multipart/form-data" >
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                               <label for="titleName">Titulo</label>
                               <input type="text" class="form-control" id="titleName" name="titleName" value="{{$panel->title}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="description1Name">Descripcion 1 - Max 70 Characters</label>
                                <textarea class="form-control" rows="5" name="description1Name" id="description1Name" onKeyDown="valida_longitud_1()" onKeyUp="valida_longitud_1()">{{$panel->description1}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description2Name">Descripcion 2 - Max 70 Characters</label>
                                <textarea class="form-control" rows="5" name="description2Name" id="description2Name" onKeyDown="valida_longitud_2()" onKeyUp="valida_longitud_2()">{{$panel->description2}}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="text_btn_linkName">Texto Boton</label>
                              <textarea class="form-control" rows="5" name="text_btn_linkName" id="text_btn_linkName" >{{$panel->text_btn_link}}</textarea>
                           </div>
                            
                            
                            <div class="form-group">
                               <label for="linkName">Link</label>
                               <input type="text" class="form-control" id="linkName" name="linkName" value="{{$panel->link}}">
                            </div>

                            <label for="location_imageName">Ubicación Imagen</label>
                            <a data-toggle="modal" data-target="#modal_location_image">
                                <i class="fa fa-question-circle" aria-hidden="false"></i>
                            </a>
                            <select name="location_imageName" id="location_imageName" class="form-control">
                                <option value="right" @if($panel->location_image == "right") selected="selected" @endif>Derecha</option>
                                <option value="left" @if($panel->location_image == "left") selected="selected" @endif>Izquierda</option>
                            </select>


                            <label for="">Imagen Actual</label>
                            <br>
                            <img src="/storage/panels/{{$panel->imagen}}" alt=""  class="img-thumbnail" style="width: 100%; height: auto;">
                            <div class="form-group">
                               <label for="exampleFormControlFile1">Imagen Siguiente</label>
                               <input type="file" class="form-control-file" id="files" name="imagen" >
                            </div>
                            <div class="form-group">
                                    <img id="image"class="img-thumbnail" style="width: 100%; height: auto;"/>
                            </div>
                            
                            <div class="form-group">
                                    <button type="subtmit" class="btn btn-primary form-control">Actualizar</button>
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

