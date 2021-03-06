@extends('voyager::master')
@section('page_title', 'Viendo Pedido')

@if(auth()->user()->hasPermission('read_ventas'))
    @section('page_header')
        <h1 class="page-title">
            <i class="voyager-basket"></i> Viendo Pedido #{{str_pad($order->id, 4, "0", STR_PAD_LEFT)}}
        </h1>
        <a href="{{ route('orders.index') }}" class="btn btn-warning btn-small">
            <i class="voyager-list"></i>&nbsp;
           Volver a la lista
        </a>
    @stop
    @section('content')
        <div class="page-content">
            <div class="page-content browse container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-bordered">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" style="margin:0px">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Cliente</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p>{{$order->cliente->razon_social}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="margin:0px">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">NIT o CI</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p>{{$order->cliente->nit}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="margin:0;">
                                    <div class="row">
                                        <div class="col-md-6" style="margin:0px">
                                            <div class="panel-heading" style="border-bottom:0;">
                                                <h3 class="panel-title">Estado</h3>
                                            </div>
                                            <div class="panel-body" style="padding-top:0;">
                                                <p>
                                                    @if($order->estado == 'R')
                                                        <label class="label label-danger">Recepcionada</label>
                                                    @else
                                                        <label class="label label">{{$order->estado}}</label>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>N&deg;</th>
                                                    <th>Producto</th>
                                                    <th>Precio</th>
                                                    <th>Cantidad</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $cont = 1;
                                                @endphp
                                                @foreach ($order->detalle as $item)
                                                @php
                                                    $img = ($item->imagen!='') ? str_replace('.', '_small.', $item->imagen) : '../img/default.png';
                                                    $imagen = ($item->imagen!='') ? $item->imagen : '../img/default.png';
                                                @endphp
                                                    <tr>
                                                        <td>{{$cont}}</td>
                                                        <td>
                                                            <table width="100%">
                                                                <tr>
                                                                    <td rowspan="5" width="110px"><a href="{{ url('storage').'/'.$imagen }}" data-fancybox="galeria1" data-caption="{{ $item->producto }}"><img src="{{url('storage').'/'.$img}}" width="100px" alt=""></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><h4>{{ $item->producto }}</h4></td>
                                                                </tr>
                                                                @if(setting('admin.modo_sistema')!='restaurante')
                                                                <tr>
                                                                    <td><b>Marca: </b>{{ $item->marca }}</td>
                                                                </tr>
                                                                @endif
                                                                @if(setting('admin.modo_sistema')=='boutique')
                                                                <tr>
                                                                    <td><b>Talla: </b> {{ $item->talla }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Color: </b>{{ $item->color }}</td>
                                                                </tr>
                                                                @endif
                                                                @if(setting('admin.modo_sistema')=='restaurante')
                                                                <td>
                                                                    <b>Extras: </b>
                                                                    @forelse ($item->extras as $extra)
                                                                        {{ intval($extra->cantidad) }} {{ $extra->nombre }},
                                                                    @empty
                                                                        Ninguno
                                                                    @endforelse
                                                                </td>
                                                                @endif
                                                            </table>
                                                        </td>
                                                        <td>{{ $item->precio }}</td>
                                                        <td>{{ $item->cantidad }}</td>
                                                        <td>{{ number_format($item->precio*$item->cantidad, 2, ',', '') }}</td>
                                                    </tr>
                                                    @php
                                                        $cont++;
                                                    @endphp
                                                @endforeach
                                                <tr>
                                                    <td colspan="4"><h4>TOTAL</h4></td>
                                                    <td><h4>{{number_format($order->total, 2, ',', '.')}} Bs.</h4></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal mapa --}}
        <div class="modal modal-primary fade" tabindex="-1" id="modal_mapa" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="voyager-location"></i> Ubicaci??n del pedido</h4>
                    </div>
                    <div class="modal-body">
                        <div id="list-ubicaciones"></div>
                        <div id="contenedor_mapa">
                            <div id="map"></div>
                        </div>
                        <input type="hidden" name="lat" id="latitud" >
                        <input type="hidden" name="lon" id="longitud">
                        {{-- <textarea name="descripcion" class="form-control" id="input-descripcion" rows="2" maxlength="200" placeholder="Datos descriptivos de su ubicaci??n..."></textarea> --}}
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>
                    </div> --}}
                </div>
            </div>
        </div>

    @stop

    @section('css')
        <link href="{{url('ecommerce_public/plugins/fancybox/fancybox.min.css')}}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <style>
            #map {
                height: 500px;
            }
        </style>
    @stop

    @section('javascript')
        <script src="{{ url('ecommerce_public/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
        <script src="{{ url('js/ubicacion_cliente.js') }}" type="text/javascript"></script>
        <script>
           
            // Nota: si se edita esta funci??n, tambien debe editarse en la vista ver producto
            marcador = {};
            function get_ubicacion(id, map, iconDelivery){
                $.ajax({
                        url: '{{url("admin/ventas/delivery/get_ubicacion")}}/'+id,
                        type: 'get',
                        success: function(data){
                            if(data.length){
                                map.removeLayer(marcador);
                                let lat = data[0].lat;
                                let lon = data[0].lon;
                                if(lat != '' && lon != ''){
                                    marcador = L.marker([lat, lon], {icon: iconDelivery}).addTo(map).bindPopup('Repartidor').openPopup();
                                    map.setView([lat, lon]);
                                }
                            }
                        }
                    });
            }
        </script>
    @endsection

@else
    @section('content')
        @include('errors.sin_permiso')
    @stop
@endif
