@extends('layouts.admin.app')
 
@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form name=form_edit action="{{ route('admin.blogs.update', $blog->id) }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>{{ ucfirst($blog->name) }}</h2>
                                    <div class="form-group">
                                        <label for="name_blog">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name_blog" id="name_blog" placeholder="Name Blog" class="form-control" value="{!! $blog->name_blog !!}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name_creator">Creator <span class="text-danger">*</span></label>
                                        <input type="text" name="name_creator" id="name_creator" placeholder="Creator" class="form-control" value="{!! $blog->name_creator !!}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description_short">Description short - Max 150 Characters</label>
                                        <textarea class="form-control" rows="5" name="description_short" id="description_short" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()">{!! $blog->description_short  !!}</textarea>
                                        <!-- 
                                        <textarea 
                                        class="form-control ckeditor" 
                                        name="description_short" id="description_short" 
                                        rows="5" 
                                        placeholder="Description"
                                        >
                                            !! $blog->description_short  !!}
                                        </textarea>
                                        -->
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description </label>
                                        <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description">{!! $blog->description  !!}</textarea>
                                    </div>
                                    <div class="form-group" id="myId2">
                                        @if(isset($blog->cover))
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <img src="{{ asset("storage/$blog->cover") }}" alt="" class="img-responsive"> <br />

                                                    <a onclick="myFunction2('<?php  echo $blog->id; ?>','<?php echo substr($blog->cover,9);?>','{{ route('admin.blog.remove.image')}}')" 
                                                    href="#" class="btn btn-danger btn-sm btn-block">Remove image?</a><br />
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row"></div>
                                    <div class="form-group">
                                        <label for="cover">Cover </label>
                                        <input type="file" name="cover" id="cover" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="src_video1">Video 1 <span class="text-danger">*</span></label>
                                        <input type="text" name="src_video1" id="src_video1" placeholder="https://www.youtube.com/playlist?list=PLQqX8aKGHZ3HdskDWHss9poPRecOOhjh0" class="form-control" value="{!! $blog->src_video1 !!}">
                                        <br>
                                        Ej: Lista de Reproducción
                                        <ul>                                            
                                            <li>https://www.youtube.com/playlist?list=PLQqX8aKGHZ3HdskDWHss9poPRecOOhjh0</li>
                                        </ul>

                                        Ej: Solo un video
                                        <ul>
                                            <li>https://www.youtube.com/watch?v=zD4PFBt3cIg</li>
                                        </ul>

                                    </div>

                                    <!--        
                                    <div class="form-group" id="myId">

                                        foreach($images as $image)
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <img src="{ asset("storage/$image->src") }}" alt="" class="img-responsive"> <br />
                                                    <a  href="#" onclick="myFunction('<php  echo $image->src; ?>','{ route('admin.blog.remove.thumb')}}')"
                                                      class="btn btn-danger btn-sm btn-block">Remove?</a>
                                                      
                                                </div>
                                            </div>
                                        endforeach

                                    </div>
                                            
                                    <div class="row"></div>
                                    <div class="form-group">
                                        <label for="image">Images </label>
                                        <input type="file" name="image[]" id="image" class="form-control" multiple>
                                        <span class="text-warning">You can use ctr (cmd) to select multiple images</span>
                                    </div>
                                -->


                                   
                                    <div class="form-group">
                                        @include('admin.shared.status-select', ['status' => $blog->status])
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="box-footer">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-default btn-sm">Back</a>
                                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                    </div>
                                </div>
                            </div>                               
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
@section('css')
    <style type="text/css">
        label.checkbox-inline {
            padding: 10px 5px;
            display: block;
            margin-bottom: 5px;
        }
        label.checkbox-inline > input[type="checkbox"] {
            margin-left: 10px;
        }
        ul.attribute-lists > li > label:hover {
            background: #3c8dbc;
            color: #fff;
        }
        ul.attribute-lists > li {
            background: #eee;
        }
        ul.attribute-lists > li:hover {
            background: #ccc;
        }
        ul.attribute-lists > li {
            margin-bottom: 15px;
            padding: 15px;
        }
    </style>
@endsection
@section('js')
<script type="text/javascript">
    CKEDITOR.plugins.addExternal( 'charcount', '/js/ckeditor/cke-charcount-plugin.js', '' );
    
    /*
    CKEDITOR.replace('description_short', {
     extraPlugins: 'charcount', 
     maxLength: 151, 
     toolbar_CharCount: ['CharCount']
    });
    */

    CKEDITOR.replace('description', {
     extraPlugins: 'charcount', 
     maxLength: 0,
     toolbar_CharCount: ['CharCount']
    });

</script>
<script  type="text/javascript" charset="utf-8" async defer>
        
        /*
        * MyFunction
        * Borra sin regar la pagina las imagenes del producto.
        */
         function myFunction(nombre, ruta) {
            
           if(confirm('Esta seguro?')){
               $.ajax({
                  url: ruta,
                  type: "get", //send it through get method
                  data: { 
                    src: nombre
                  },
                  success: function(response) {
                    console.log('Listo loca');
                    $('#myId').load(location.href + ' #myId');
                    //location.hash="myId";
                    $('html, body').animate({
                        scrollTop: $("#myId").offset().top
                    }, 1000);
                  },
                  error: function(xhr) {
                    console.log('Nonaz');
                  }
                });//End ajax
           }
           else{  }

         }//End myFunction  

         function myFunction2(idBlog,cover,ruta) {
            
            if(confirm('Esta seguro?')){
                $.ajax({
                   url: ruta,
                   type: "get", //send it through get method
                   data: { 
                     blog: idBlog,
                     image  : cover
                   },
                   success: function(response) {
                     console.log('Listo loca');
                     $('#myId2').load(location.href + ' #myId2');
                     //location.hash="myId";
                     $('html, body').animate({
                         scrollTop: $("#myId2").offset().top
                     }, 1000);
                   },
                   error: function(xhr) {
                     console.log('Nonaz');
                   }
                 });//End ajax
            }
            else{  }
 
          }//End myFunction            
    </script>
    <script type="text/javascript">

        function backToInfo() {
            $('#tablist > li:first-child').addClass('active');
            $('#tablist > li:last-child').removeClass('active');

            $('#tabcontent > div:first-child').addClass('active');
            $('#tabcontent > div:last-child').removeClass('active');
        }

        $(document).ready(function () {
            var checkbox = $('input.attribute');
            $(checkbox).on('change', function () {
                var attributeId = $(this).val();
                if ($(this).is(':checked')) {
                    $('#attributeValue' + attributeId).attr('disabled', false);
                } else {
                    $('#attributeValue' + attributeId).attr('disabled', true);
                }
                var count = checkbox.filter(':checked').length;
                if (count > 0) {
                    $('#productAttributeQuantity').attr('disabled', false);
                    $('#productAttributePrice').attr('disabled', false);
                    $('#productAttributePrice').attr('disabled', false);
                    $('#createCombinationBtn').attr('disabled', false);
                    $('#combination').attr('disabled', false);
                } else {
                    $('#productAttributeQuantity').attr('disabled', true);
                    $('#productAttributePrice').attr('disabled', true);
                    $('#createCombinationBtn').attr('disabled', true);
                    $('#combination').attr('disabled', true);
                }
            });
        });

        //Limitar caracteres - Description_short
        contenido_textarea = "" 
        num_caracteres_permitidos = 151 

        function valida_longitud(){ 
           num_caracteres = document.forms[0].description_short.value.length 

           if (num_caracteres > num_caracteres_permitidos){ 
              document.forms[0].description_short.value = contenido_textarea 
           }else{ 
              contenido_textarea = document.forms[0].description_short.value    
           } 

           if (num_caracteres >= num_caracteres_permitidos){ 
              document.forms[0].description_short.style.color="#ff0000"; 
           }else{ 
              document.forms[0].description_short.style.color="#000000"; 
           } 

         
        } 
    </script>
@endsection