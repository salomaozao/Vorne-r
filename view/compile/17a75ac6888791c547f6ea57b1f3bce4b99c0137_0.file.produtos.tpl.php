<?php
/* Smarty version 3.1.39, created on 2021-05-11 18:40:09
  from 'C:\xampp_v2\htdocs\vorne\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609af9b9210773_25331210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a75ac6888791c547f6ea57b1f3bce4b99c0137' => 
    array (
      0 => 'C:\\xampp_v2\\htdocs\\vorne\\view\\produtos.tpl',
      1 => 1620600736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609af9b9210773_25331210 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Jquery & popper -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap 4 -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Bootstrap 3 -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/images/icons/favicon.png"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/slick/slick.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/css/main.css">
<!--===============================================================================================-->
</head>


<body>
 <section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
						Todos os Produtos
					</button></a>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_link'];?>
"><button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" >
						<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>

					</button></a>
        	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    

				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filtros
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Procurar
					</div>
				</div>
				
				<!-- Search product -->
				<form method="post">
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="txt_buscar" placeholder="Procurar...">
					</div>	
				</div>
				</form>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Drops
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Drop 2021
									</a>
								</li>		
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Preço
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										R$0.00 - R$50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										R$50.00 - R$100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										R$100.00 - R$200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										R$200.00 - R$300.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										R$300.00 +
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Modelo
							</div>
							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Street
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tamanhos
							</div>
							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										XX
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            

				<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
				<h4 class="alert alert-danger">Nenhum produto encontrado!!</h4>
				
				<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
   
				
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
"  alt="IMG-PRODUCT">

							<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Visualizar
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

								</a>

								<span class="stext-105 cl3">
									R$: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<!--===============================================================================================-->	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/animsition/js/animsition.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/daterangepicker/moment.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib//paginas/produtos/vendor/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/slick/slick.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/js/slick-custom.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/parallax100/parallax100.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
        $('.parallax100').parallax100();
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/MagnificPopup/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/vendor/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
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
	<?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/lib/paginas/produtos/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
}
