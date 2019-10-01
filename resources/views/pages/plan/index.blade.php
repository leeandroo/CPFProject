@extends('layouts.dashboard')
@section('page-title', 'Mis Planes')
@section('title', 'Mis Planes')
@section('plan', 'active-item')

@section('contenido')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <p class="page-title text-center mb-3">Planes Contratados</p>
                
                @if($planes->count() > 0)
                    <div style="position: relative; height: 400px; overflow: auto;">
                        <table class="table table-borderless table-responsive-sm text-center ">
                            <thead>
                                <tr>
                                    <th class="table-title">Codigo</th>
                                    <th class="table-title">Mascota</th>
                                    <th class="table-title">feccha y hora</th>
                                    <th class="table-title">Total</th>                                    
                                    <th class="table-title">Opciones</th>
                                </tr>
                            <tbody class="text-center">
                                    @foreach ($planes as $plan)
                                        <tr>
                                            <td class="table-text align-baseline" style="width: 100px">{{ $plan->id }} </td>
                                            <td class="table-text align-baseline">{{ $plan->nombre }}</td>      
                                            <td class="table-text align-baseline">{{ $plan->created_at }} </td>
                                            <td class="table-text align-baseline">{{ $plan->total}} </td>
                                            <td class="align-baseline" id="">

                                            <a class="btn btn-sm btn-rounded cyan white-text mb-2" href="{{url('detalle_plan', ['petid' => $plan->id])}}">                                                                                                                                                                                                                                                                     
                                                <i class="fas fa-plus"></i> Detalle
                                            </a>
                            
                                            </a> 
                                            </td>
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
                @else
                    <blockquote class="blockquote bq-warning">
                        <p class="bq-title">No posee planes Contratados <i class="far fa-sad-cry"></i></p>
                    </blockquote>
                @endif            
            </div>
        </div>
    </div>
</div>
@endsection