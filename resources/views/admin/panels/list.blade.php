@extends('layouts.admin.app')

@section('content')

    <section class="content">
  

        
            <div class="box">
                <div class="box-body">

                    

                <a href="{{route('admin.panels.create')}}" class="btn btn-success ">Crear panel</a> 
                   
                    <h2>Panel Principal </h2>
                    

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Anio</th>
                            <th scope="col">Subtitulo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($panels as $panel)
                        
                                
                         
                          <tr>
                            <td scope="row">{{ $panel->id }}</td>
                            <td scope="row">{{ $panel->titulo }}</td>
                            <td scope="row">{{ $panel->anio }}</td>
                            <td scope="row">{{ $panel->subtitulo }}</td>
                            <td scope="row">{{ $panel->link }}</td>
                          <td scope="row"><a class="btn btn-outline-primary btn-primary" href="/admin/panels/{{$panel->id}}/edit">Editar</a></td>
                          <td scope="row" onclick="return confirm('Está seguro de que quiere borrar esta panel de portada?');" >{{ Form::open([ 'route'=>['admin.panels.destroy',$panel->id],   'method'=>'DELETE' ])}}
                        
                                            {!! Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                                            {{ Form::close()}}
                        </td>
                           
                          </tr>
                          @endforeach
                        </tbody>
                        {{ $panels->render() }}
                      </table>
                  
                </div>
            </div>

    </section>

@endsection