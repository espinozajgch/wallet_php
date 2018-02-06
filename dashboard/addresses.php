
								<!-- CONDENSED TABLE -->
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Direcciones Secundarias</h3>
										<div class="right">
											<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
											
										</div>
										<br>
									</div>
									<div class="panel-body">
												<a href="#" class="btn btn-primary"><i class="fa fa-plus-square"></i> Agregar</a>
											
										<br>
										<br>
											
										<div class="table-responsive ">
										
											<table class="table table-hover table-condensed">
												<thead>
													<tr>
														<th>Direccion</th>
														<th>Balance</th>
														<th>Estatus</th>
														<th>Acciones</th>
													</tr>
												</thead>
												<tbody>
													
													<!--tr>
														<td><a href="#">{{direccion}}</a></td>
														<td>{{saldo}}</td>
														<td>{{status}}</td>
														
															<td><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#archivar_direccion"><span class="fa fa-remove"></span></button>
															<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#unarchivar_direccion"><span class="fa fa-check-circle"></span></button></td>
														
													</tr-->
																								
												</tbody>
											</table>
											
										</div>
										


									</div>
								
									<div class="panel-footer">
										<div class="row">
											<div class="col-md-6"><span class="panel-note">Mi Monedero de Bitcoin: <strong></strong></span></div>
										</div>
									</div>
								</div>
								<!-- END CONDENSED TABLE -->
								
		<div id="archivar_direccion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form>
					<div class="modal-body">						
				          	Esta seguro de deshabilitar la direccion seleccionada?
		  			</div>
			  		<div class="modal-footer">
			  			<button type="submit" class="btn btn-primary>Aceptar"</button>
			  			<button type="button" data-dismiss="modal" class="btn">Salir</button>

			  		</div>
			  		</form>
				</div>
			</div>  
		</div>

		<div id="unarchivar_direccion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form>
					<div class="modal-body">						
				          	Esta seguro de habilitar la direccion seleccionada?
		  			</div>
			  		<div class="modal-footer">
			  			<button type="submit" class="btn btn-primary">Aceptar</button>
			  			<button type="button" data-dismiss="modal" class="btn">Salir</button>

			  		</div>
			  		</form>
				</div>
			</div>  
		</div>
		