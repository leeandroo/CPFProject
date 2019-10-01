@extends('layouts.dashboard')
@section('page-title', 'Detalle de plan')
@section('title', 'Detalle del plan seleccionado')
@section('plan', 'active-item')

@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <p class="page-title text-center mb-3">Productos y Servicios Anexos</p>
                
                @if($detalles->count() > 0)
                    <div style="position: relative; height: 400px; overflow: auto;">
                        <table class="table table-borderless table-responsive-sm text-center" >
                            <thead>
                                <tr>
                                    <th class="table-title">Variante</th>                            
                                    <th class="table-title">Cantidad</th>
                                    <th class="table-title">Precio Unitario</th>
                                </tr>
                            <tbody class="text-center">
                                    @foreach ($detalles as $detalle)
                                        <tr>
                                            <td class="table-text" style="width: 35%">{{ $detalle->nom1}} {{ $detalle->nom2}}</td>
                                            <td class="table-text" style="width: 35%">{{ $detalle->cantidad }}</td>  
                                            <td class="table-text" style="width: 30%">{{ $detalle->precio }}</td> 
                                        </tr>                                    
                                    @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5"></td>
                                </tr>
                            </tfoot>    
                        </table> 
                    </div>

                        <div class="col-lg-12 col-md-12 col-12" id="centrar">                                                            
                            <a class="btn  btn-rounded purple-gradient btn my-0" href="{{ url('/user-profile/plan') }}">Volver</a>
                        </div>   
                    
                @else
                    <blockquote class="blockquote bq-warning">
                        <p class="bq-title">No posee variantes o servicios Contratados <i class="far fa-sad-cry"></i></p>
                    </blockquote>
                @endif            
            </div>
        </div>
    </div>
</div>
@endsection