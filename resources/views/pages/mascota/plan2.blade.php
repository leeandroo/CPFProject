@extends('layouts.main2')
@section('titulo', 'Edita tu plan')
@section('contenido')

		<!-- Content -->
		<div class="container" style="padding-top: 10px; padding-bottom: 10px;">

				<!-- Section heading -->
				<h2 class="h1 font-weight-bold text-center my-2 mplus">Crea el Plan para 
                    @if ( $estado == 'contratar' ) 
                        {{ $mascota->nombre }}
                    @else
                        {{ $nombre }}
                    @endif 
                </h2>
				<!-- Section description -->
				<p class="text-center w-responsive mx-auto mb-3">Te invitamos a crear un plan de salud preventivo para 
                @if ( $estado == 'contratar' ) 
                        {{ $mascota->nombre }},
                    @else
                        {{ $nombre }},
                    @endif
                
                uniendo  veterinaria, peluquería y alimentación para facilitar el cuidado de tu regalon</p>
				<div class="my-2" id="centrar">					
						
						<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect btn my-0 popoverInfo" data-toggle="popoverIconos" data-placement="bottom" data-content="<ul class='list-group custom-popover'>														
								<li class='list-group-item '><h5 class='mplus estiloSB'><i class='fas fa-notes-medical'></i> Servicios Básicos</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloVC'><i class='fas fa-syringe'></i> Vacunas</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloEX'><i class='fas fa-file-medical-alt'></i> Exámenes</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloSC'><i class='fas fa-user-md'></i> Servicios Clínicos</h5></li>
								<li class='list-group-item '><h5 class='mplus estiloES'><i class='fas fa-bath'></i> Estética</h5></li>
								</ul>">Categorias</button>
						
						
						<div id="refer" style="display: none">							
							<ul class="list-group custom-popover">														
							<li class="list-group-item text-center"><h5 class="mplus estiloSB">Servicios Básicos</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloVC">Vacunas</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloEX">Exámenes</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloSC">Servicios Clínicos</h5></li>
							<li class="list-group-item text-center"><h5 class="mplus estiloES">Estética</h5></li>
							</ul>
						</div>		
								
				</div>
					

				<!-- Grid row -->
				<div class="row" id="centrar">

					<div class="col-lg-8 mb-4">

						<div class="row" id="centrar">

							<!--  Grid column  -->
							<div class="col-lg-12 col-md-12 mb-lg-0 mb-4 my-2">

								<!-- Table with panel --> 
									<div class="card card-cascade narrower ">

										<!--Card image-->
										<div class="view view-cascade purple-gradient gradient-card-header mb-3" >											
											
											<!--Price -->
											<div class="pricing-card">                                                                               
												<div class="price pt-0">
													<h3 class="number mb-0 white-text font-weight-bold my-0" id="totalMes">0</h3>
												</div>
											</div>
											

										</div>
										<!--/Card image-->																			
									 
										<div class="px-4">
                                        <form method="POST" action="{{ url('/plan/contratarg') }}">
                                            {!! csrf_field() !!}
                                            @if ( $estado == 'contratar' ) 
                                                <input name="usuario" class="form-control" type="hidden" value="{{ Auth::user()->id }}">
                                                <input name="mascota" class="form-control" type="hidden" value="{{ $mascota->id }}">
                                                <input name="total" id="total" class="form-control" type="hidden" value="">
                                            @else
                                                <input name="total" id="total" class="form-control" type="hidden" value="">
                                            @endif 


                                            <div class="table-wrapper table-responsive table-wrapper-scroll-y my-custom-scrollbar scrollbar scrollbar-primary my-2">

                                                <!-- <h5 class="sub-title text-center" style="color: #3C7EEF; padding-bottom: 5px;">Servicios Básicos</h5> -->
                                                
                                                    <!--Table-->
                                                    <table class="table table-hover mb-0" id="dtHorizontalVerticalExample">									
                                                        <!--Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center" spellcheck="display:block;">
                                                                        <!-- <i class="fas fa-info-circle animated tada  infinite" style="font-size: 25px;" data-toggle="popoverIconos" data-placement="right" data-content="<ul class='list-group custom-popover'>														
                                                                                <li class='list-group-item '><h5 class='mplus estiloSB'><i class='fas fa-notes-medical'></i> Servicios Básicos</h5></li>
                                                                                <li class='list-group-item '><h5 class='mplus estiloVC'><i class='fas fa-syringe'></i> Vacunas</h5></li>
                                                                                <li class='list-group-item '><h5 class='mplus estiloEX'><i class='fas fa-file-medical-alt'></i> Examenes</h5></li>
                                                                                <li class='list-group-item '><h5 class='mplus estiloSC'><i class='fas fa-user-md'></i> Servicios Clinicos</h5></li>
                                                                                <li class='list-group-item '><h5 class='mplus estiloES'><i class='fas fa-bath'></i> Estetica</h5></li>
                                                                                </ul>"></i> -->

                                                                </th>
                                                                <th class="th-lg sub-title2" style="padding-top: 5px;">
                                                                    Servicios
                                                                </th>
                                                                <th class="th-lg sub-title2 text-center" style="padding-top: 5px;">
                                                                    Opciones
                                                                </th>		
                                                                <th class="th-lg sub-title2 text-center" style="padding-top: 5px;">
                                                                    Precio Unitario
                                                                </th>											
                                                            </tr>
                                                        </thead>
                                                        <!--Table head-->
                                            
                                                        <!--Table body-->
                                                        <tbody id="sub-title3">
                                                            @foreach ($variantes as $variante)

                                                                <tr>
                                                                    <td class="text-center">
                                                                        @if ( $variante->categoria == 1 )                                                         
                                                                            <i class="fas fa-notes-medical" style="font-size: 25px; color: #AA3B70;"></i>                                                                                                                                                                                                                                                                                                                                                                                            
                                                                        @elseif ( $variante->categoria == 2 )
                                                                            <i class="fas fa-syringe" style="font-size: 25px; color: #13A08E;"></i>
                                                                        @elseif ( $variante->categoria == 3 )
                                                                            <i class="fas fa-file-medical-alt" style="font-size: 25px; color: #FB446A;"></i>
                                                                        @elseif ( $variante->categoria == 4 )
                                                                            <i class="fas fa-user-md" style="font-size: 25px; color: #8D60F6;"></i> 
                                                                        @elseif ( $variante->categoria == 5 )
                                                                            <i class="fas fa-bath" style="font-size: 25px; color: #F88510;"></i>   
                                                                        @endif  														
                                                                    </td>
                                                                    <td class="sub-title3">{{ $variante->servicio}} {{ $variante->nom_variante }}</td>
                                                                    <td>														
                                                                        <div id="centrar">
                                                                            @if ( $variante->aplicacion == '1' )                                     
                                                                                <div class="switch ">
                                                                                    <label>																	  
                                                                                    @if ( $variante->id_variante == '4' )
                                                                                        <input type="checkbox" class="plan-control" checked name="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}" id="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}">
                                                                                        <span class="lever"></span>
                                                                                    @elseif ($variante->id_variante == '5')
                                                                                        <input type="checkbox" class="plan-control" checked name="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}" id="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}">
                                                                                        <span class="lever"></span>
                                                                                    @else   
                                                                                        <input type="checkbox" class="plan-control" name="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}" id="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}">
                                                                                        <span class="lever"></span>
                                                                                    @endif 
                                                                                    </label>
                                                                                </div>
                                                                            @elseif ( $variante->aplicacion == '2' )
                                                                                <select class="plan-control browser-default custom-select" name="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}" id="elemento{{ $variante->id_servicio}}_{{ $variante->id_variante}}" style="width: 70%;" >                                                                    
                                                                                    @for ($i = $variante->minimo; $i <= $variante->maximo; $i++)
                                                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                                                    @endfor
                                                                                </select>	
                                                                            @endif  		
                                                                        </div>	
                                                                    </td>
                                                                    <td class="text-center">{{ $variante->precio}}</td>
                                                                </tr>

                                                            @endforeach																						
                                                        </tbody>
                                                        <!--Table body-->
                                                    </table>
                                                    <!--Table-->
                                                
                                            </div>

                                            <div id="centrar" class="my-3">
                                                <div class="row" style="width: 75%;">
                                                    <div class="col-lg-6 col-md-12 col-12 my-2">
                                                        <input name="totalmes" id="totalmes" class="form-control text-center" disabled type="text" value="" >
                                                    </div> 
                                                    @if ( $estado == 'contratar' ) 
                                                        <div class="col-lg-6 col-md-12 col-12" id="centrar">
                                                            <button type="submit" class="btn  btn-rounded purple-gradient btn my-0 popoverInfo" id="btn-contratar">Contratar <i class="fa fa-plus ml-2"></i></button>                                                    
                                                        </div>
                                                    @else
                                                        <div class="col-lg-6 col-md-12 col-12" id="centrar">                                                            
                                                            <a class="btn  btn-rounded purple-gradient btn my-0" href="{{ url('/register') }}">Contratar <i class="fa fa-plus ml-2"></i></a>
                                                        </div>
                                                    @endif                                                                                                   	
                                                </div>                                             									                                            
                                            </div>

                                        </form>

										</div>
									
									</div>
								<!-- Table with panel -->

							</div>
							<!-- Grid column -->
		
						</div>

					</div>

				</div>
				<!-- Grid row -->
				
		</div>
		<!-- Content -->

        

@endsection 