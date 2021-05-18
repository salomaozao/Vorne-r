<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link
			href="{$GET_SITE_HOME}\lib\paginas\index\header.css"
			rel="stylesheet"
		/>

		<link
			href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet"
		/>
	</head>
	<body>
		<div id="header">
			<div>
				<h2 id="minTitle">Vorne co.</h2>
				<a href="{$GET_SITE_HOME}">
					<img
						class="timlogo"
						src="{$GET_SITE_HOME}\media\logo_transparent.png"
						onclick="location.reload"
					/>
				</a>
			</div>

			<div id="icons" class="headerStruture">
				<a href="{$PAG_MINHACONTA}">
					<div
						id="config"
						class="material-icons"
						href="{$PAG_MINHACONTA}"
						name="account_circle"
					></div>
				</a>

				<a href="{$GET_SITE_HOME}">
					<div
						id="circle"
						class="material-icons"
						href="{$GET_SITE_HOME}"
						name="store"
					></div>
				</a>

				<a href="{$PAG_CARRINHO}">
					<div
						id="config"
						class="material-icons"
						href="{$PAG_CARRINHO}"
						name="shopping_cart"
					></div>
				</a>
			</div>
		</div>
		<div>{php} Rotas::get_Pagina(); {/php}</div>
	</body>
</html>
