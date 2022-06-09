@extends('layouts.app')

@section('nombre_pagina')
    <title>Mi perfil</title>
@endsection

@section('content')
    <div class="container emp-profile">
        <form action="{{route('profile_update')}}" method="post">
            @csrf
            <div class="row">
                @php
                    if($registro->tipo_login == 'facebook'){
                        $imagen = $registro->avatar;
                    }else{
                        $imagen = url('storage').'/'.$registro->avatar;
                    }
                @endphp
                <div class="col-md-4">
                    <div class="profile-img">
                        <img id="btn-img" src="{{$imagen}}" alt="img user" title="Editar imagen"/>
                        <input style="display:none" type="file" id="input-file" name="file"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <br>
                    <div class="profile-head">
                        <h4>{{$registro->razon_social}}</h4>
                        <h6>{{$registro->email}}</h6>
                        {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="link-tab nav-link active" data-value="perfil" id="perfil-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Información</a>
                            </li>
                            <li class="nav-item">
                                <a class="link-tab nav-link" data-value="password" id="password-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contraseña</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <input type="button" id="btn-edit" class="label-dato profile-edit-btn btn-default" value="Editar Perfil"/>
                    <input type="submit" style="display:none" class="input-dato profile-edit-btn btn-primary" value="Guardar"/>
                    <input type="button" id="btn-cancel" style="display:none" class="input-dato profile-edit-btn btn-default" value="cancelar"/>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    {{-- <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br/>
                        <a href="">Bootsnipp Profile</a><br/>
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br/>
                        <a href="">Web Developer</a><br/>
                        <a href="">WordPress</a><br/>
                        <a href="">WooCommerce</a><br/>
                        <a href="">PHP, .Net</a><br/>
                    </div> --}}
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="perfil-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Usuario</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="label-dato">{{$registro->name}}</p>
                                    <input type="text" style="display:none" name="name" class="form-control input-dato" value="{{$registro->name}}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre completo</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="label-dato">{{$registro->razon_social}}</p>
                                    <input type="text" style="display:none" name="razon_social" class="form-control input-dato" value="{{$registro->razon_social}}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="label-dato">{{$registro->email}}</p>
                                    <input type="text" style="display:none" name="email" class="form-control input-dato" value="{{$registro->email}}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>NIT/CI</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="label-dato">{{$registro->nit}}</p>
                                    <input type="text" style="display:none" name="nit" class="form-control input-dato" value="{{$registro->nit}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Movil</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="label-dato">{{$registro->movil}}</p>
                                    <input type="text" style="display:none" name="movil" class="form-control input-dato" value="{{$registro->movil}}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Ciudad/Localidad</label>
                                </div>
                                <div class="col-md-6">
                                    <p class="label-dato">{{$localidad ? $localidad->localidad : 'No definida'}}</p>
                                    <div style="display:none" class="input-dato">
                                        <select name="localidad_id" id="select-localidad_id" class="form-control" required>
                                            <option value="">Selecciona tu ciudad</option>
                                            @foreach ($localidades as $item)
                                            <option value="{{$item->id}}">{{$item->localidad}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="password-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Contraseña actual</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" name="password" class="form-control input-password">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Contraseña nueva</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" name="new_password" class="form-control input-password">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Repetir contraseña</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" name="repeat_password" class="form-control input-password">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>
@endsection

@section('css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        body{
            background: -webkit-linear-gradient(top, #E4E3E3, #9E9D9D);
        }
        .emp-profile{
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        .profile-img{
            text-align: center;
        }
        .profile-img img{
            width: 50%;
            height: 100%;
        }
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        .profile-head h5{
            color: #333;
        }
        .profile-head h6{
            color: #0062cc;
        }
        .profile-edit-btn{
            border: none;
            border-radius: 1.5rem;
            /* width: 70%; */
            padding: 2%;
            font-weight: 600;
            cursor: pointer;
        }
        .proile-rating{
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        .proile-rating span{
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        .profile-head .nav-tabs{
            margin-bottom:5%;
        }
        .profile-head .nav-tabs .nav-link{
            font-weight:600;
            border: none;
        }
        .profile-head .nav-tabs .nav-link.active{
            border: none;
            border-bottom:2px solid #0062cc;
        }
        .profile-work{
            padding: 14%;
            margin-top: -15%;
        }
        .profile-work p{
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        .profile-work a{
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        .profile-work ul{
            list-style: none;
        }
        .profile-tab label{
            font-weight: 600;
        }
        .profile-tab p{
            font-weight: 600;
            color: #0062cc;
        }
        #btn-img{
            cursor: pointer;
        }
    </style>
@endsection

@section('script')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <script>
        $(document).ready(function(){
           
            // Activar boton de cambiar foto
            // $('#btn-img').click(function(){
            //     $( "#input-file" ).trigger( "click" );
            // });

            // Mostrar inputs para edición
            $('#btn-edit').click(function(){
                $('.input-dato').css('display', 'inline');
                $('.label-dato').css('display', 'none');
                @if($localidad)
                $('#select-localidad_id').val({{$localidad->id}});
                @endif
                $('#select-localidad_id').select2();
            });

            // Mostrar datos de visualización
            $('#btn-cancel').click(function(){
                $('.label-dato').css('display', 'inline');
                $('.input-dato').css('display', 'none');
            });

            // Cambiar campos requeridos si se selecciona el tab de contraseña
            $('.link-tab').click(function(){
                if($(this).data('value') == 'password'){
                    $('.input-password').attr('required', true);
                }else{
                    $('.input-password').removeAttr('required');
                }
            });
            
            $('.btn-link-page').click(function(){
                $(this).append(' <i class="fas fa-circle-notch fa-spin"></i>');
            });
        });
    </script>
@endsection
