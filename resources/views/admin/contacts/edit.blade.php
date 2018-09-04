@extends('layouts.admin.app')
 
@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box"> 
            <form name=form_edit action="{{ route('admin.contacts.update', $contact->id) }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Pagina de Contacto</h2>
                                    <div class="form-group">
                                        <label for="name_enterprise">Name Enterprise<span class="text-danger">*</span></label>
                                        <input type="text" name="name_enterprise" id="name_enterprise" placeholder="Name Enterprise" class="form-control" value="{!! $contact->name_enterprise !!}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name_proprietary">Name Proprietary<span class="text-danger">*</span></label>
                                        <input type="text" name="name_proprietary" id="name_proprietary" placeholder="Name Proprietary" class="form-control" value="{!! $contact->name_proprietary !!}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description </label>
                                        <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description">{!! $contact->description  !!}</textarea>
                                    </div>
                                    <div class="form-group" id="myId2">
                                        @if(isset($contact->cover))
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <img src="{{ asset("storage/$contact->cover") }}" alt="" class="img-responsive"> <br />

                                                    <a onclick="myFunction2('<?php  echo $contact->id; ?>','<?php echo substr($contact->cover,9);?>','{{ route('admin.contact.remove.image')}}')" 
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
                                </div>

                                <div class="form-group">
                                    <label for="address">Address<span class="text-danger">*</span></label>
                                    <input type="text" name="address" id="address" placeholder="Address" class="form-control" value="{!! $contact->address !!}">
                                </div>

                                <div class="form-group">
                                    <label for="e_mail">Email<span class="text-danger">*</span></label>
                                    <input type="text" name="e_mail" id="e_mail" placeholder="email123@micorreo.com" class="form-control" value="{!! $contact->e_mail !!}">
                                </div>

                                <div class="form-group">
                                    <label for="telephone_number_1">Telephone Number 1<span class="text-danger">*</span></label>
                                    <input type="text" name="telephone_number_1" id="telephone_number_1" placeholder="(092) 8245846" class="form-control" value="{!! $contact->telephone_number_1 !!}">
                                </div>

                                <div class="form-group">
                                    <label for="telephone_number_2">Telephone Number 2<span class="text-danger">*</span></label>
                                    <input type="text" name="telephone_number_2" id="telephone_number_2" placeholder="(+57) 312 456 78910" class="form-control" value="{!! $contact->telephone_number_2 !!}">
                                </div>

                                <div class="form-group">
                                    <label for="telephone_number_3">Telephone Number 3<span class="text-danger">*</span></label>
                                    <input type="text" name="telephone_number_3" id="telephone_number_3" placeholder="(+57) 312 456 78910" class="form-control" value="{!! $contact->telephone_number_3 !!}">
                                </div>

                                <div class="form-group">
                                    <label for="profile_facebook">Link Profile Facebook<span class="text-danger">*</span></label>
                                    <input type="text" name="profile_facebook" id="profile_facebook" placeholder="https://www.facebook.com/miPagina" class="form-control" value="{!! $contact->profile_facebook !!}">
                                </div>

                                <div class="form-group">
                                    <label for="profile_twitter">Link Profile Twitter<span class="text-danger">*</span></label>
                                    <input type="text" name="profile_twitter" id="profile_twitter" placeholder="https://www.twitter.com/myPagina" class="form-control" value="{!! $contact->profile_twitter !!}">
                                </div>

                                <div class="form-group">
                                    <label for="profile_mercadolibre">Link Profile Mercadolibre<span class="text-danger">*</span></label>
                                    <input type="text" name="profile_mercadolibre" id="profile_mercadolibre" placeholder="https://www.mercadolibre.com.co/miPagina" class="form-control" value="{!! $contact->profile_mercadolibre !!}">
                                </div>

                                <div class="form-group">
                                    <label for="profile_youtube">Link Profile YouTube<span class="text-danger">*</span></label>
                                    <input type="text" name="profile_youtube" id="profile_youtube" placeholder="https://www.youtube.com/miPagina" class="form-control" value="{!! $contact->profile_youtube !!}">
                                </div>


                                
                            </div>
                            <div class="row">
                                <div class="box-footer">
                                    <div class="btn-group">
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

         function myFunction2(idContact,cover,ruta) {
            
            if(confirm('Esta seguro?')){
                $.ajax({
                   url: ruta,
                   type: "get", //send it through get method
                   data: { 
                     contact: idContact,
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

             

         
    </script>
@endsection