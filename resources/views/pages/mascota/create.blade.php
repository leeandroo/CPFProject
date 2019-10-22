@extends('layouts.dashboard')
@section('page-title', 'Agregar mascota')
@section('title', 'Agregar Mascota')
@section('mascotas', 'active-item')
@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-2">
    <div class="card mt-4 ml-2 mr-2">
        <div class="card-body" id="centrar">
            <div class="col-md-8  my-4">                
                <div class="container">
                    <p class="page-subtitle mb-4 text-left">Información de la mascota</p>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('registerPet') }}">    
                        {!! csrf_field() !!}                    
                        <div class="form-group pb-3">
                            <div class="form-row">
                                <!-- input nombre -->                                
                                <input name="usuario" class="form-control" type="hidden" value="{{ Auth::user()->id }}">
                                <input name="estado" class="form-control" type="hidden" value="1">

                                <div class="col-lg-6 col-md-6 col-12 my-2 ">
                                    <!-- <label for="nombre" class="mt-1 box-label">Nombre</label> -->
                                    <input name="nombre" class="form-control " type="text" placeholder="Nombre" value="{{ old('nombre') }}" required>
                                </div>
                                    <!-- input apellido -->
                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                    <!-- <label for="apellido" class="mt-1 box-label">Apellido</label> -->
                                    <input name="chip" class="form-control " type="number" placeholder="N° chip" value="{{ old('chip') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\.*)\./g, '$1');" maxlength="15">
                                    <!-- <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" > -->
                                </div>      
                                    <!-- input movil 1 -->
                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                    <!-- <label for="telefono" class="mt-1 box-label">Celular 1</label> -->
                                    <select class="browser-default custom-select" name="especie" id="especies" required>
                                        <option disabled selected>Selecciona una especie</option>
                                        <option value="1" >Perro</option>
                                        <option value="2" >Gato</option>
                                    </select>                                                                                                                   
                                </div>
                                    <!-- input movil 2 -->
                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                    <!-- <label for="telefono" class="mt-1 box-label">Celular 2</label> -->
                                    <select class="browser-default custom-select" name="raza" id="razas" required>
                                        <option disabled selected>Selecciona una raza</option>
                                    </select>                                                                                                                        
                                </div>
                                    <!-- input rut -->
                                <div class="col-lg-6 col-md-6 col-12 my-2" >
                                    <input type="text" placeholder="Fecha de Nacimiento" class="form-control" id="datepicker" name="fecha" value="{{ old('fecha') }}" required>                                             
                                </div>
                                    <!-- input Dirección-->
                                <div class="col-lg-6 col-md-6 col-12 my-2">
                                    <!-- <label for="direccion" class="mt-1 box-label">Dirección</label> -->
                                    <select class="browser-default custom-select" name="sexo" required>
                                            <option value="" disabled selected>¿Qué Sexo es?</option>
                                            <option value="Macho">Macho</option>
                                            <option value="Hembra">Hembra</option>
                                    </select>
                                </div>       
                                <div class="col-lg-12 col-md-12 col-12 my-2">
                                    <!-- <label for="direccion" class="mt-1 box-label">Dirección</label> -->    
                                        <div class="file-field">                                    
                                            <div class="btn btn-rounded blue btn-sm float-left ">
                                                <span>subir foto</span>
                                                <input type="file" accept="image/*" name="foto" value="{{ old('foto') }}">
                                            </div>
                                            <div class="file-path-wrapper" id="centrar">
                                                <input class="file-path validate form-control" disabled type="text" placeholder="Selecciona un Archivo" value="{{ old('foto') }}">
                                            </div>                                           
                                        </div>
                                </div>                         
                            </div>                            
                        </div>

                        <div class="md-form my-0 text-center" id="btnformulario">
                            <button type="submit" class="btn btn-rounded green btn-sm white-text" id="btn-aceptar">Ingresar <i class="fa fa-paper-plane ml-2"></i></button>
                            <button type="reset" class="btn btn-rounded red btn-sm white-text" id="btn-cancelar">Cancelar <i class="fas fa-times ml-2"></i></button>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
