<div class="row">
	<div class="col-md-12">
		<!-- MY OWM-->
		<div class="panel" id="mis-suscripciones">
			<div class="panel-heading">
				<h3 class="panel-title"> Actividad Reciente</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>

				</div>
				<br>
				<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#todas" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Todas</a>
                    </li>
                    <li role="presentation" class=""><a href="#bitcoin" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Bitcon</a>
                    </li>

              </ul>
			</div>

			<div class="panel-body no-padding">
			<div id="myTabContent" class="tab-content">
			<div role="tabpanel" class="tab-pane fade active in" id="todas" aria-labelledby="home-tab">
				
				<table class="table table-hover table-condensed">
				<thead>
						<tr>
							<th>Destinatario</th>
							<th>Cantidad</th>
							<th>Comision</th>
							<th>Estatus</th>
							<th>Moneda</th>
							<th>Fecha</th>
						</tr>
					</thead>
					<tbody>
						
						<!--tr>
							<td><a href="#">{{para}}</a></td>
							<td>{{cantidad}}</td>
							<td>{{fee}}</td>
							
							<td>{{status}}</td>
							<td>{{moneda}}</td>
							<td>{{fecha}}</td>

						</tr-->
																
					</tbody>
				</table>
				
				</div>
				<div role="tabpanel" class="tab-pane fade" id="bitcoin" aria-labelledby="profile-tab">
     			
				<table class="table table-hover table-condensed">
				<thead>
						<tr>
							<th>Destinatario</th>
							<th>Cantidad</th>
							<th>Comision</th>
							<th>Estatus</th>
							<th>Moneda</th>
							<th>Fecha</th>
						</tr>
					</thead>
					<tbody>
						
						<!--tr>
							<td><a href="#">{{para}}</a></td>
							<td>{{cantidad}}</td>
							<td>{{fee}}</td>

							<td>{{status}}</td>
							<td>{{moneda}}</td>
							<td>{{fecha}}</td>

						</tr-->
											
					</tbody>
				</table>

      			</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i>Ultima semana</span></div>
			</div>
		</div>
		</div>
		<!-- /MY OWM-->
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Tu Balance</h3>
			</div>
			<div class="panel-body">
				<div id="demo-area-chart" class="ct-chart"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Precios</h3>
			</div>
			<div class="panel-body">
				<div id="multiple-chart" class="ct-chart"></div>
			</div>
		</div>
	</div>
</div>
