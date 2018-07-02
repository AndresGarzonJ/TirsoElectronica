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
                          <input type="text" class="form-control" id="" name="tituloName" placeholder="Collection">
                       </div>
                       <div class="form-group">
                          <label for="exampleFormControlInput1">Año</label>
                          <input type="number" min="2018" max="2050" class="form-control"  id="exampleFormControlInput1" name="anioName" placeholder="2018">
                       </div>
                       <div class="form-group">
                          <label for="exampleFormControlTextarea1">Subtitulo</label>
                          <input type="text" class="form-control" id="" name="subName" placeholder="Subtitulo">
                       </div>
                       <div class="form-group">
                          <label for="exampleFormControlInput1">Descripcion</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcionName" placeholder="Aprovecha la promocion de transistores...">
                          </textarea>
                       </div>
                       <select name ="linkName">
                          <label for="exampleFormControlInput1">Link a Categoria</label>
                          @foreach ($categories as $cat)
                          <option value="{{$cat->slug}}">{{$cat->name}}</option>
                          @endforeach
                       </select>
                       <div class="form-group">
                          <label for="exampleFormControlFile1">Imagen</label>
                          <input type="file" class="form-control-file" id="files" name="imagenName" >
                       </div>
                       <div class="form-group">
                          <img id="image" class="img-thumbnail" style="width: 300px; height: 300px;"/>
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
@endsection

