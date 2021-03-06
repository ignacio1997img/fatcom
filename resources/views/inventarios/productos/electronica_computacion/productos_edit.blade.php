@extends('voyager::master')
@section('page_title', 'Editar Producto')

@if(auth()->user()->hasPermission('edit_productos'))
    @section('page_header')
        <h1 class="page-title">
            <i class="voyager-harddrive"></i> editar producto
        </h1>
        {{-- <a href="{{route('sucursales_index')}}" class="btn btn-success btn-small">
            <i class="voyager-double-left"></i> <span>Atras</span>
        </a> --}}
    @stop

    @section('content')
        <div class="page-content">
            <form id="form" action="{{route('productos_update')}}" method="post" enctype="multipart/form-data">
                <div class="page-content browse container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                @csrf
                                {{-- datos por defecto --}}
                                <input type="hidden" name="unidad_id" value="1">
                                <input type="hidden" name="talla_id" value="1">
                                <input type="hidden" name="color_id" value="1">
                                <input type="hidden" name="genero_id" value="1">
                                <input type="hidden" name="uso_id" value="1">
                                {{-- </datos por defecto> --}}
                                <input type="hidden" name="id" value="{{$producto->id}}">
                                {{-- <input type="hidden" name="producto_unidad_id" value="{{$precio->id}}"> --}}
                                <div class="panel-body strong-panel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="">Nombre comercial</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Nombre comercial del producto. Este campo es obligatorio."></span> @endif
                                                    <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control" placeholder="Nombre del producto" required>
                                                    @error('nombre')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                    <div  style="position:absolute;right:15px;top:27px">
                                                        <input type="checkbox" id="input-nuevo" name="nuevo" data-toggle="toggle" data-on="<span class='voyager-check'></span> Nuevo" data-off="<span class='voyager-x'></span> Nuevo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">C??digo</label> @if(setting('admin.tips')) <span class="voyager-question text-default pull-right" data-toggle="tooltip" data-placement="left" title="C??digo de identificaci??n del producto. Este campo no es obligatorio."></span> @endif
                                                    <input type="text" name="codigo_interno" value="{{$producto->codigo_interno}}" class="form-control" placeholder="C??digo del producto">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Moneda</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Moneda de comercializaci??n del producto. Este campo es obligatorio."></span> @endif
                                                    <select name="moneda_id" id="select-moneda_id" class="form-control select2" required>
                                                        @foreach($monedas as $item)
                                                        <option value="{{$item->id}}" >{{$item->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Categor??a</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Categor??a a la que pertenece el producto. Este campo es obligatorio."></span> @endif
                                                    <select name="categoria_id" id="select-categoria_id" class="form-control select2" required>
                                                        @foreach($categorias as $item)
                                                        <option value="{{$item->id}}" >{{$item->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Sub categor??a</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Sub categor??a del producto. las subcategor??as se despliegan en base a la categor??a seleccionada previamente. Este campo es obligatorio."></span> @endif
                                                    <div id="div-select_subcategorias">
                                                        <select name="subcategoria_id" id="select-subcategoria_id" class="form-control select2" required>
                                                            @foreach($subcategorias as $item)
                                                            <option value="{{$item->id}}" >{{$item->nombre}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Marca</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Marca del producto. Este campo es obligatorio."></span> @endif
                                                    <select name="marca_id" id="select-marca_id" class="form-control" required>
                                                        @foreach($marcas as $item)
                                                        <option value="{{$item->id}}" >{{$item->nombre}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Modelo</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Modelo del producto. Este campo es obligatorio."></span> @endif
                                                    <input type="text" name="modelo" value="{{$producto->modelo}}" class="form-control" placeholder="Modelo del producto" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Garant??a</label> @if(setting('admin.tips')) <span class="voyager-question text-default pull-right" data-toggle="tooltip" data-placement="left" title="Garant??a del producto. Este campo no es obligatorio."></span> @endif
                                                    <input type="text" name="garantia" value="{{$producto->garantia}}" class="form-control" placeholder="12 meses">
                                                </div>
                                                {{-- <div class="form-group col-md-6">
                                                    <label for="">Cantidad</label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Cantidad de productos en stock. Este campo es obligatorio."></span> @endif
                                                    <input type="number" name="stock" readonly class="form-control" value="{{$producto->stock}}" min="0" step="0.01" required>
                                                    <div  style="position:absolute;right:15px;top:27px">
                                                        <input type="checkbox" id="input-se_almacena" name="se_almacena" data-toggle="toggle" data-on="<small>Se almacena</small> <span class='voyager-check'></span>" data-off="<small>Se almacena</small> <span class='voyager-x'></span>">
                                                    </div>
                                                </div> --}}
                                                <div class="form-group col-md-6">
                                                    <label for="">Cat??logo</label> @if(setting('admin.tips')) <span class="voyager-question text-default pull-right" data-toggle="tooltip" data-placement="left" title="Cat??logo del producto. Este campo no es obligatorio."></span> @endif
                                                    <input type="file" name="catalogo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="" id="label-descripcion"></label> @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Descripci??n breve del producto, no debe exceder los 255 caracteres. Este campo es obligatorio."></span> @endif
                                                    <textarea name="descripcion_small" class="form-control" id="text-descripcion" maxlength="255" rows="2" placeholder="Descripci??n corta del producto" required>{{$producto->descripcion_small}}</textarea>
                                                    @error('descripcion_small')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <article class="gallery-wrap">
                                                <div class="img-big-wrap card-banner" style="text-align:center;height:370px">
                                                    <article class="overlay top text-center">
                                                        <h4 class="title mb-0">Imagen principal del producto</h4>
                                                    </article>
                                                    @php
                                                        $img = ($producto->imagen!='') ? str_replace('.', '_medium.', $producto->imagen) : '../img/default.png';
                                                        $img_big = ($producto->imagen!='') ? $producto->imagen : '../img/default.png';
                                                    @endphp
                                                    <a id="img-slider" href="{{url('storage').'/'.$img_big}}" data-fancybox="slider1">
                                                        <img id="img-medium" class="img-thumbnail img-sm" src="{{url('storage').'/'.$img}}">
                                                    </a>
                                                </div>
                                                <div class="img-small-wrap">
                                                    @php
                                                        $style = ($producto->imagen!='') ? 'border:3px solid #2ECC71' : '';
                                                        $imagen_principal = 0;
                                                    @endphp
                                                    @foreach ($imagen as $item)
                                                        @php
                                                            $img = str_replace('.', '_small.', $item->imagen);
                                                            $img_big = $item->imagen;
                                                            if(!empty($style)){
                                                                $imagen_principal = $item->id;
                                                            }
                                                        @endphp
                                                        <div class="item-gallery" id="image-{{$item->id}}" style="{{ $style }}">
                                                            <div style="position:absolute;z-index:1;">
                                                                <label class="label label-danger btn-delete_img" data-toggle="modal" data-id="{{$item->id}}" data-target="#modal_delete" style="cursor:pointer;margin-left:30px;@if(!empty($style)) display:none @endif"><span class="voyager-x"></span></label>
                                                            </div>
                                                            <img src="{{url('storage').'/'.$img}}" class="img-thumbnail img-sm img-gallery" data-id="{{$item->id}}" data-img="{{url('storage').'/'.$img_big}}">
                                                        </div>
                                                        @php
                                                            $style = '';
                                                        @endphp
                                                    @endforeach
                                                </div>
                                            </article>
                                            <div class="col-md-12" style="">
                                                <div class="img-small-wrap" style="height:120px;overflow-y:auto;border:3px solid #096FA9;padding:5px">
                                                    <div class="item-gallery" id="img-preview">
                                                        <button type="button" class="btn" title="Agregar imagen(es)" onclick="add_img()">
                                                            <h1 style="font-size:50px;margin:10px"><span class="voyager-plus"></span></h1>
                                                        </button>
                                                    </div>
                                                    <input type="file" name="imagen[]" style="display:none" accept="image/png, image/jpeg" multiple id="gallery-photo-add">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-bordered">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="icon wb-image"></i> Precio(s) de compra <button type="button" class="btn btn-success btn-small" id="btn-add_compra" title="Agregar precio"><span class="voyager-plus"></span></button></h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-up" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Precio @if(setting('admin.tips')) <span class="voyager-question text-default pull-right" data-toggle="tooltip" data-placement="left" title="Precio de compra del producto. Este campo no es obligatorio."></span> @endif</th>
                                            <th>Cantidad m??nima @if(setting('admin.tips')) <span class="voyager-question text-default pull-right" data-toggle="tooltip" data-placement="left" title="Cantidad m??nima de compra para tener dicho precio. Este campo no es obligatorio."></span> @endif</th>
                                            <th></th>
                                        </thead>
                                        <tbody id="tr-precioCompra">
                                            @php
                                                $indiceCompra = 0;
                                            @endphp
                                            @for ($i = 0; $i < count($precio_compra); $i++)
                                                @if ($i==0)
                                                <tr>
                                                    <td><input type="number" min="0.01" step="0.01" class="form-control" value="{{$precio_compra[$i]->monto}}" name="monto[]"></td>
                                                    <td><input type="number" min="0" step="0.01" class="form-control" value="{{$precio_compra[$i]->cantidad_minima}}" name="cantidad_minima_compra[]"></td>
                                                    <td style="padding-top:15px"><span class="voyager-x text-secondary"></span></td>
                                                </tr>
                                                @else
                                                    <tr id="tr-precioCompra{{$indiceCompra}}">
                                                        <td><input type="number" min="0.01" step="0.01" class="form-control" value="{{$precio_compra[$i]->monto}}" name="monto[]" required></td>
                                                        <td><input type="number" min="0" step="0.01" class="form-control" value="{{$precio_compra[$i]->cantidad_minima}}" name="cantidad_minima_compra[]" required></td>
                                                        <td style="padding-top:15px"><span onclick="borrarTr({{$indiceCompra}}, 'Compra')" class="voyager-x text-danger"></span></td>
                                                    </tr>
                                                @endif
                                                @php
                                                    $indiceCompra++;
                                                @endphp
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-bordered">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="icon wb-image"></i> Precio(s) de venta <button type="button" class="btn btn-success btn-small" id="btn-add_venta" title="Agregar precio"><span class="voyager-plus"></span></button></h3>
                                    <div class="panel-actions">
                                        <a class="panel-action voyager-angle-up" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Precio @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Precio de venta del producto. Este campo es obligatorio."></span> @endif</th>
                                            <th>Cantidad m??nima @if(setting('admin.tips')) <span class="voyager-question text-info pull-right" data-toggle="tooltip" data-placement="left" title="Cantidad m??nima de venta para tener dicho precio. Este campo es obligatorio."></span> @endif</th>
                                            <th></th>
                                        </thead>
                                        <tbody id="tr-precioVenta">
                                            @php
                                                $indiceVenta = 0;
                                            @endphp
                                            @for ($i = 0; $i < count($precio_venta); $i++)
                                                @if ($i==0)
                                                <tr>
                                                    <td><input type="number" min="0.01" step="0.01" class="form-control" value="{{$precio_venta[$i]->precio}}" name="precio_venta[]" required></td>
                                                    <td><input type="number" min="0" step="0.01" class="form-control" name="precio_minimo[]"></td>
                                                    <td><input type="number" min="1" step="0.01" class="form-control" value="{{$precio_venta[$i]->cantidad_minima}}" name="cantidad_minima_venta[]" required></td>
                                                    <td style="padding-top:15px"><span class="voyager-x text-secondary"></span></td>
                                                </tr>
                                                @else
                                                    <tr id="tr-precioVenta{{$indiceVenta}}">
                                                        <td><input type="number" min="0.01" step="0.01" class="form-control" value="{{$precio_venta[$i]->precio}}" name="precio_venta[]" required></td>
                                                        <td><input type="number" min="0" step="0.01" class="form-control" value="{{$precio_venta[$i]->precio_minimo}}" name="precio_minimo[]"></td>
                                                        <td><input type="number" min="0" step="0.01" class="form-control" value="{{$precio_venta[$i]->cantidad_minima}}" name="cantidad_minima_venta[]" required></td>
                                                        <td style="padding-top:15px"><span onclick="borrarTr({{$indiceVenta}}, 'Venta')" class="voyager-x text-danger"></span></td>
                                                    </tr>
                                                @endif
                                                @php
                                                    $indiceVenta++;
                                                @endphp
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                <div class="panel-heading">
                                        <h4 class="panel-title"> Descripci??n para E-Commerce @if(setting('admin.tips')) <span class="voyager-question text-default" data-toggle="tooltip" data-placement="right" title="Descripci??n del producto que ser?? visualizada por sus clientes cuando se encuentre agregada al E-Commerca. Este campo no es obligatorio."></span> @endif</h4>
                                    <div class="panel-actions">
                                        <a class="panel-action panel-collapsed voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                    </div>
                                </div>
                                <div class="panel-body @if($producto->descripcion_long == '') collapse @endif">
                                    <div class="form-group">
                                        <textarea class="form-control richTextBox" name="descripcion_long" row="3">{{$producto->descripcion_long}}</textarea>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('partials.modal_load')
        {{-- @include('inventarios.productos.partials.modales', ['producto_id' => $producto->id]) --}}
    @stop

    @section('css')
        <link href="{{url('ecommerce_public/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">
        <!-- custom style -->
        <link href="{{url('ecommerce_public/css/ui.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('ecommerce_public/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    @stop

    @section('javascript')
    <script src="{{url('js/image-preview/image-preview.js')}}"></script>
    <script src="{{url('ecommerce_public/plugins/fancybox/fancybox.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/loginweb.js')}}"></script>
    <script src="{{url('js/inventarios/productos.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover({ html : true });
                $('[data-toggle="tooltip"]').tooltip();

                if('{{$producto->nuevo}}'=='1'){
                    $('#input-nuevo').bootstrapToggle('on')
                }

                if('{{$producto->se_almacena}}'=='1'){
                    $('#input-se_almacena').bootstrapToggle('on')
                }

                $('#label-descripcion').text(`Descripci??n (${$('#text-descripcion').val().length}/255)`)

                $('#select-categoria_id').val('{{$producto->categoria_id}}');
                $('#select-subcategoria_id').val('{{$producto->subcategoria_id}}');
                $('#select-marca_id').val('{{$producto->marca_id}}');
                $('#select-moneda_id').val('{{$producto->moneda_id}}');

                // $('#select-categoria_id').select2();
                // $('#select-subcategoria_id').select2();
                // $('#select-marca_id').select2();
                $('#select-moneda_id').select2();
                inicializar_select2('categoria_id');
                inicializar_select2('subcategoria_id');
                inicializar_select2('marca_id');

                // cambiar imagen principal
                $('.img-gallery').click(function(){
                    let img_medium = $(this).data('img').replace('_small', '_medium');
                    let img = $(this).data('img').replace('_small', '');

                    let id = $(this).data('id');
                    let producto_id = {{$producto->id}};
                    let url = "{{url('admin/productos/cambiar_imagen_principal')}}/"+producto_id+'/'+id
                    change_background(img_medium, img, id, url)
                });

                // Eliminar imagen
                $('#form-delete_imagen').on('submit', function(e){
                    e.preventDefault();
                    let datos = $(this).serialize();
                    delete_imagen("{{route('delete_imagen')}}", datos);
                });

                // agregar precios
                let indice_compra = {{$indiceCompra}};
                $('#btn-add_compra').click(function(){
                    add_precio_compra(indice_compra)
                    indice_compra++;
                });

                let indice_venta = {{$indiceVenta}};
                $('#btn-add_venta').click(function(){
                    add_precio_venta(indice_venta)
                    indice_venta++;
                });

                // ================

            });
        </script>
    @endsection

@else
    @section('content')
        @include('errors.sin_permiso')
    @stop
@endif
