<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Admistração Vorne</title>
		<!-- <link href="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/css/styles.css" rel="stylesheet" /> -->
		<link
			href="../../lib\paginas\index_admin\dist\css\styles.css"
			rel="stylesheet"
		/>
		<link
			href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
			rel="stylesheet"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
			crossorigin="anonymous"
		></script>
	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
			<a class="navbar-brand" href="{$GET_SITE_HOME}">Administração</a>
			<!-- Navbar Search-->
			<form
				class="
					d-none d-md-inline-block
					form-inline
					ml-auto
					mr-0 mr-md-3
					my-2 my-md-0
				"
			></form>
			<!-- Navbar-->
			<ul class="navbar-nav ml-auto ml-md-0">
				<li class="nav-item dropdown">
					<a
						class="nav-link dropdown-toggle"
						id="userDropdown"
						href="#"
						role="button"
						data-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
						><i class="fas fa-user fa-fw"></i
					></a>
					<div
						class="dropdown-menu dropdown-menu-right"
						aria-labelledby="userDropdown"
					>
						<a class="dropdown-item" href="{$GET_SITE_HOME}"
							>Ir para Loja</a
						>
						<a class="dropdown-item" href="{$PAG_SENHA}"
							>Alterar Senha</a
						>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{$PAG_LOGOFF}">Sair</a>
					</div>
				</li>
			</ul>
		</nav>
		<div id="layoutSidenav">
			<div id="layoutSidenav_nav">
				<nav
					class="sb-sidenav accordion sb-sidenav-dark"
					id="sidenavAccordion"
				>
					<div class="sb-sidenav-menu">
						<div class="nav">
							<div class="sb-sidenav-menu-heading">Principal</div>
							<a
								class="nav-link"
								href="{$GET_SITE_ADM}/adm_principal"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-tachometer-alt"></i>
								</div>
								Área Principal
							</a>
							<div class="sb-sidenav-menu-heading">
								Edição e criação de conteúdos
							</div>
							<a
								class="nav-link collapsed"
								href="{$PAG_ADM_PRODUTOS}"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-columns"></i>
								</div>
								Gerenciamento de Produtos
							</a>
							<a
								class="nav-link"
								href="{$GET_SITE_ADM}/adm_novos_produtos"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-tachometer-alt"></i>
								</div>
								Criação de Produtos
							</a>
							<a
								class="nav-link"
								href="{$GET_SITE_ADM}/adm_categorias"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-tachometer-alt"></i>
								</div>
								Categorias
							</a>

							<a
								class="nav-link"
								href="{$GET_SITE_ADM}/adm_clientes"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-tachometer-alt"></i>
								</div>
								Clientes
							</a>

							<a
								class="nav-link collapsed"
								href="{$PAG_ADM_PEDIDOS}"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-columns"></i>
								</div>
								Pedidos
							</a>

							<div class="sb-sidenav-menu-heading">Marketing</div>
							<a class="nav-link" href="https://facebook.com">
								<div class="sb-nav-link-icon">
									<i class="fas fa-chart-area"></i>
								</div>
								Pixel Facebook
							</a>
							<a
								class="nav-link"
								href="https://ads.google.com/intl/pt_BR/home/"
							>
								<div class="sb-nav-link-icon">
									<i class="fas fa-table"></i>
								</div>
								Google ads
							</a>
						</div>
					</div>
					<div class="sb-sidenav-footer">
						<div class="small">Logado em:</div>
						{$USER}
					</div>
				</nav>
			</div>
			<div id="layoutSidenav_content">
				<!-- Páginas -->
				<main>
					<div>{php} Rotas::get_Pagina(); {/php}</div>
				</main>

			</div>
		</div>
		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			crossorigin="anonymous"
		></script>
		<script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/js/scripts.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
			crossorigin="anonymous"
		></script>
		<script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/assets/demo/chart-area-demo.js"></script>
		<script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/assets/demo/chart-bar-demo.js"></script>
		<script
			src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
			crossorigin="anonymous"
		></script>
		<script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/assets/demo/datatables-demo.js"></script>
	</body>
</html>
