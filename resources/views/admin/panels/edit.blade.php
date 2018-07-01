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
                               <label for="exampleFormControlInput1">Titulo</label>
                               <input type="text" class="form-control" id="" name="titulo" value="{{$panel->titulo}}">
                            </div>
                            <div class="form-group">
                               <label for="exampleFormControlInput1">Año</label>
                               <input type="number" min="2018" max="2050" class="form-control" id="exampleFormControlInput1" name="anio" value="{{$panel->anio}}">
                            </div>
                            <div class="form-group">
                               <label for="exampleFormControlTextarea1">Subtitulo</label>
                               <input type="text" class="form-control" id="" name="subtitulo" value="{{$panel->subtitulo}}">
                            </div>
                            <div class="form-group">
                               <label for="exampleFormControlInput1">Descripcion</label>
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" 
                                  >{{$panel->descripcion}}
                               </textarea>
                            </div>
                            <div class="form-group">
                               <label for="exampleFormControlTextarea1">Link a categoria Actual</label>
                               <input type="text" class="form-control" id=""  value="{{$categoryName}}" disabled>
                            </div>
                            <div class="form-group">
                               <label for="exampleFormControlInput1">Escoger categoria nueva</label>
                               <select name ="link">
                                  @foreach ($categories as $cat)
                                  <option value="{{$cat->slug}}">{{$cat->name}}</option>
                                  @endforeach
                               </select>
                            </div>
                            <label for="">Imagen Actual</label>
                            <img src="/images/{{$panel->imagen}}" alt=""  class="img-thumbnail" style="width: 300px; height: 300px;">
                            <div class="form-group">
                               <label for="exampleFormControlFile1">Imagen Siguiente</label>
                               <input type="file" class="form-control-file" id="files" name="imagen" >
                            </div>
                            <div class="form-group">
                                    <img id="image"class="img-thumbnail" style="width: 300px; height: 300px;"/>
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


@endsection