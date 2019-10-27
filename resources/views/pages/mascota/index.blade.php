@extends('layouts.dashboard')
@section('page-title', 'Mis Mascotas')
@section('title', 'Mis Mascotas')
@section('mascotas', 'active-item')
@section('boton-agregar')
<a class="btn btn-success btn-sm btn-rounded m-0 float-right" href="{{ url('/mascota/create') }}">
    <i class="fas fa-plus"></i> Nueva mascota
</a>
@endsection
@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <p class="page-title text-center mb-3">Lista de mascotas</p>
                
                @if(Auth::user()->mascotas->count() > 0)
                        @foreach(Auth::user()->mascotas as $mascota)
                            <div class="card my-4">
                                <div class="card-body p-0">
                                    <div class="row ml-0 mr-0 my-2">
                                        
                                        <div class="col-12 col-lg-4 col-md-12 text-center my-2">
                                            <div class="view overlay rounded z-depth-2 mb-lg-0">
                                                <img class="img-fluid" src="{{asset('/fotos/mascotas/'.$mascota->foto)}}" alt="{{ $mascota->foto }}" alt="Responsive image">                                                                            
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>  

                                        <div class="col-12 col-lg-4 col-md-6 pl-0" id="centrar">
                                            <div>
                                                <h3 class="font-weight-bold mb-3 my-2"><strong>{{ $mascota->nombre }}</strong></h3>
                                                <p class="my-2">
                                                    @foreach ($especies as $especie) 
                                
                                                        @if ( $especie->id == $mascota->especie_id )                                                       
                                                            <a><strong>Especie: </strong></a> {{ $especie->nombre }}                                  
                                                        @endif  
                                                        
                                                    @endforeach                                        
                                                </p>
                                                <p class="my-2">
                                                    @foreach ($razas as $raza) 
                                
                                                        @if ( $raza->id == $mascota->raza_id )     
                                                            <a><strong>Raza: </strong></a> {{ $raza->nombre }}                                                                                                                                                       
                                                        @endif  
                                                        
                                                    @endforeach                                     
                                                </p>
                                                <p class="my-2">

                                                    @if ( $mascota->chip == '' )                                                         
                                                        <a><strong>N° Chip:</strong></a> No posee chip                                                                                                                                                      
                                                    @else
                                                        <a><strong>N° Chip:</strong></a> {{ $mascota->chip }}  
                                                    @endif                                                                                             
                                                </p> 
                                                <p class="my-2">

                                                    @if ( $mascota->estado_plan == '1' )                                                         
                                                        <a><strong>Plan:</strong></a> No posee Plan                                                                                                                                                      
                                                    @else
                                                        <a><strong>Plan:</strong></a> Adquirido 
                                                    @endif                                                                                             
                                                </p> 
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4 col-md-6 pl-0" id="centrar">                                            
                                            @if ( $mascota->estado_plan == '1' ) 
                                                    
                                            <div>
                                                <div class="col-12 col-lg-12 col-md-12" id="centrar">
                                                <a class="btn purple btn-sm  btn-rounded " href="{{url('plan', ['especie' => $mascota->especie_id, 'mascota' => $mascota->id, 'user' => Auth::user()->id ])}}">                                                                                                                                                                                                                                                                     
                                                        <i class="fas fa-plus"></i> Agregar Plan
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-12 col-md-12" id="centrar">
                                                    <a class="btn btn-info btn-sm  btn-rounded " href="http://cirilo-app.herokuapp.com">
                                                        <i class="fas fa-papper-plane"></i>Asistente de mascota online
                                                    </a>
                                                </div>
                                                {{-- <div class="col-12 col-lg-12 col-md-12" id="centrar">
                                                    <a class="btn btn-info btn-sm  btn-rounded " href="#">
                                                        <i class="fas fa-edit"></i> Editar Información
                                                    </a>
                                                </div> --}}
                                            </div>     

                                            @else
                                            <div>                                                
                                                <div class="col-12 col-lg-12 col-md-12" id="centrar">
                                                    <a class="btn btn-info btn-sm btn-rounded " href="#">
                                                        <i class="fas fa-edit"></i> Editar Información 
                                                    </a>
                                                </div>
                                            </div>  
                                            @endif     

                                        </div>
                                    </div>
                                </div>
                            </div>    
                        @endforeach
                @else
                    <blockquote class="blockquote bq-warning">
                        <p class="bq-title">No posee mascotas <i class="far fa-sad-cry"></i></p>
                    </blockquote>
                @endif            
            </div>
        </div>
    </div>
</div>
@endsection
