@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.products.store') }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="sku">SKU <span class="text-danger">*</span></label>
                                <input type="text" name="sku" id="sku" placeholder="xxxxx" class="form-control" value="{{ old('sku') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description </label>
                                <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group"> 
                                <label for="nBox">N° Box <span class="text-danger">*</span></label>
                                <input type="text" name="nBox" id="nBox" placeholder="N° Box" class="form-control" value="{{ old('nBox') }}">
                            </div>
                            <div class="form-group">
                                <label for="nBox">Link MercadoLibre <span class="text-danger"></span></label>
                                <input type="text" name="link_mercadoLibre" id="link_mercadoLibre" placeholder="Link MercadoLibre" class="form-control" value="{{ old('link_mercadoLibre') }}">
                            </div>
                            <div class="form-group">
                                <label for="cover">Cover </label>
                                <input type="file" name="cover" id="cover" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Images</label>
                                <input type="file" name="image[]" id="image" class="form-control" multiple>
                                <span class="text-warning">You can use ctr (cmd) to select multiple images</span>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity <span class="text-danger">*</span></label>
                                <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control" value="{{ old('quantity') }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Discount - Value in Pesos<span class="text-danger"></span></label>
                                <div class="input-group">
                                    <span class="input-group-addon">{{ config('cart.currency') }}</span>
                                    <input type="text" name="discount" id="discount" placeholder="Discount" class="form-control" value="{{ old('discount') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon">{{ config('cart.currency') }}</span>
                                    <input type="text" name="price" id="price" placeholder="Price" class="form-control" value="{{ old('price') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="buyprice">Buy Price <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon">PHP</span>
                                    <input type="text" name="buyprice" id="buyprice" placeholder="Price Buy" class="form-control" value="{{ old('buyprice') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Status </label>
                                <select name="status" id="status" class="form-control">
                                    <option value="0">Disable</option>
                                    <option value="1">Enable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>Categories</h2>
                            @include('admin.shared.categories', ['categories' => $categories])
                            <div class="form-group">
                                <label for="Etiqueta">Etiqueta </label>
                                <select name="tag" id="tag" class="form-control">
                                    <option value="Deshabilidado">Deshabilitado</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Remate">Remate</option>
                                    <option value="Locura">Locura</option>
                                    <option value="Agotado">Agotado</option>
                                    <option value="Pronto">Pronto</option> 
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
