<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
		<a href="index.php">Tu Billetera Digital</a>
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		</div>
		<form class="navbar-form navbar-left">
			<div class="input-group">
				
			</div>
		</form>
		<div class="navbar-btn navbar-btn-right">
		</div>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
						<i class="lnr lnr-alarm"></i>
					</a>
				</li>

				<li class="dropdown">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>
					<?php 
						if(isset($_SESSION['idusuario'])){
							echo $_SESSION['usuario'];
						}
					?>
						
					</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="lnr lnr-user"></i> <span>Mi Perfil</span></a></li>
						<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mensajes</span></a></li>
						<li><a href="../clases/logout.php"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- END NAVBAR -->
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a style="cursor:pointer;" onclick="mostrar_consulta('dashboard.php');" class="{{dashboard}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				<li><a style="cursor:pointer;" onclick="mostrar_consulta('transactions.php');" class="{{transactions}}"><i class="lnr  lnr-chart-bars"></i> <span>Transacciones</span></a></li>

				<li><a style="cursor:pointer;" onclick="mostrar_consulta('addresses.php');" class="{{addresses}}"><i class="lnr lnr-file-empty"></i><span>Direcciones</span></a>
				</li>
				
				<li>
					<a href="#subConf" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Configuracion</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subConf" class="collapse ">
						<ul class="nav">
							<li><a href="#" class="">General</a></li>
							<li><a href="#" class="">Preferencias</a></li>
							<li><a href="#" class="">Seguridad</a></li>
							<li><a style="cursor:pointer;" onclick="mostrar_consulta('charts.php');" class="{{charts}}">Estadisticas</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#" class=""><i class="lnr lnr-question-circle"></i> <span>Centro de Ayuda</span></a></li>
			</ul>
		</nav>
	</div>
</div>
<!-- END LEFT SIDEBAR -->
