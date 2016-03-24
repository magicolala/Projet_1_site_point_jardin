<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	    <title>Point Jardin</title>
	
	    <meta name="description" content="Point Jardin ǀ Matériaux et déco: paillage minéral,végétal, galet, gravier, bâche, bloc ardoise, engrais, gazon, terre végétale, terreau, dalle, sablon, grave">
	    <meta name="author" content="Cédric et Augustin">
		
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
	    <link href="css/style1.css" rel="stylesheet">
	</head>
	
	<body>

	    <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php
						include('./header.php')
					?>
					<div class="row produits">
						<h1 class="titre-produits">Sélectionnez votre produit</h1>
						<div class="col-md-4">
							<a href="mineral.php"><img alt="Minéral" src="images/mineral.jpg" class="bouton"></a>
						</div>
						<div class="col-md-4">
							<a href="vegetal.php"><img alt="Végétal" src="images/vegetal.jpg" class="bouton"></a>
						</div>
						<div class="col-md-4">
							<a href="#"><img alt="Accessoires" src="images/accessoires.jpg" class="bouton"></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<ul class="liste_balises">
								<li class="liste1"> Achetez la quantité dont vous avez besoin</li>
								<li class="liste2">En panne d’inspiration? Nous vous conseillons et dessinons votre jardin</li>
								<li class="liste3">Embellisez votre jardin avec notre gamme de paillage variés</li>
								<li class="liste4">Pas de véhicule adapté? Point jardin vous livre chez vous, petite ou grande quantité</li>
							</ul>
						</div>
						<div class="col-md-6">
							<article class="commentaire">
								<h4>Commentaires de Clients</h4>
								<h5>Anais G.</h5>
								<blockquote> Magasin proche et proposant des prix largement abordables</blockquote>
								<h5>Jacques B.</h5>
								<blockquote> Grâce à Point Jardin je trouve tout ce qu'il me faut !</blockquote>
							</article>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
								<?php
						include('./footer.php')
					?>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/scripts.js"></script>
	    <script src="js/classie.js"></script>
		<script src="js/clipboard.min.js"></script>
		<script>
		(function() {
			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
				var menuItems = menu.querySelectorAll('.menu__link'),
					setCurrent = function(ev) {
						ev.preventDefault();

						var item = ev.target.parentNode; // li

						// return if already current
						if (classie.has(item, 'menu__item--current')) {
							return false;
						}
						// remove current
						classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
						// set current
						classie.add(item, 'menu__item--current');
					};

				[].slice.call(menuItems).forEach(function(el) {
					el.addEventListener('click', setCurrent);
				});
			});

			[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
				link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
				new Clipboard(link);
				link.addEventListener('click', function() {
					classie.add(link, 'link-copy--animate');
					setTimeout(function() {
						classie.remove(link, 'link-copy--animate');
					}, 300);
				});
			});
		})(window);
		</script>
  	</body>
</html>