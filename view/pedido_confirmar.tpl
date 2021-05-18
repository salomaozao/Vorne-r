<!DOCTYPE html>
<html lang="en">
<head>
	<title>Carrinho</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/css/util.css">
	<link rel="stylesheet" type="text/css" href="{$GET_SITE_HOME}/lib/paginas/carrinho/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Produto</th>
									<th class="column-2"></th>
									<th class="column-3">Preço</th>
									<th class="column-4">Quantidade</th>
									<th class="column-5">Total</th>
								</tr>
                                {foreach from=$PRO item=P}
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{$P.pro_img}" alt="{$P.pro_nome}">
										</div>
									</td>
									<td class="column-2">{$P.pro_nome}</td>
									<td class="column-3">{$P.pro_valor}</td>									
									<td class="column-4">
									<center>		
											{$P.pro_qtd}
									</center>
									</td>
									<td class="column-5">{$P.pro_subtotal}</td>
								</tr>
                                {/foreach}
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}" >
                            <button type="submit" formmethod="post">
							 <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Efetuar Compra
							 </div>
                            </button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/bootstrap/js/popper.js"></script>
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{$GET_SITE_HOME}/lib/paginas/carrinho/js/main.js"></script>

</body>
</html>