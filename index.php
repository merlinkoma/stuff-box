<?php

$style = "index";
$title = "Home";
@include './header.php'
?>

<img src="./img/forest.jpg" id="banner" alt="">
<div class="accordion accordion-flush" id="accordionFlushExample">
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingOne">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
				Qu'est-ce que Stuff Box ?
			</button>
		</h2>
		<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Stuff Box est un projet de développement web réalisé dans le cadre d'une formation proposée par M2i Formations-Lille. Il s'agit d'une démonstration mettant en avant certaines compétences acquises avant le passage du titre professionnel :
				<ul class="list-group mt-2 mb-2">
					<li class="list-group-item">Structure du site en HTML</li>
					<li class="list-group-item">Utilisation de Bootstrap 5.0, ajustements en SCSS, compilation CSS</li>
					<li class="list-group-item">Intégration du PHP</li>
					<li class="list-group-item">Gestion d'une base de données via MySQL Workbench</li>
				</ul>
				L'idée de Stuff Box est venue bien avant que j'aie des compétences en développement web. La toute première version a été réalisée par un ami et permettait à un utilisateur de voir le contenu de ma bibliothèque pour éventuellement demander un prêt et était pour moi un outil de gestion de prêts. Dès que nous avons abordé le PHP en formation, j'ai repris ce projet du début pour m'entraîner et aboutir à la version actuellement en ligne.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingTwo">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
				Fonctionnement de Stuff Box
			</button>
		</h2>
		<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Stuff Box permet à un utilisateur enregistré d'accéder aux items que je prête, que je donne ou que je vends. Il est à destination d'amis et de connaissances et n'est donc pas un projet à but lucratif.</br>
				Compétences techniques :
				<ul class="list-group mt-2 mb-2">
					<li class="list-group-item">Gestion des inscriptions & sessions en PHP</li>
					<li class="list-group-item">Gestion un panier</li>
					<li class="list-group-item">Gestion des requêtes SQL</li>
				</ul>
				Version 1.0 : les demandes se font par mail suite à l'ajout d'items au panier. Un système plus complexe pourra être ajouté dans une version future.
			</div>
		</div>
	</div>
	<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingThree">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
				Qui suis-je ?
			</button>
		</h2>
		<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			<div class="accordion-body">Je m'appelle Mélissa Ameye, je suis stagiaire de la formation chez M2i-Formations pour passer le titre professionnel de Développeur web/ web mobile.
				J'ai débuté cette formation en novembre 2020 et elle se terminera en août 2021. Il s'agit d'une reconversion professionnelle, j'étais auparavent régisseure des oeuvres ; j'ai choisi le développement web car le domaine m'a toujours intéressée et il peut aujourd'hui la stabilité professionnelle que je cherche.
			</div>
		</div>
	</div>
</div>

<h3 class="card-header" style="text-align: center">Nouveautés</h3>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="d-flex flex-row">
				<img src="./img/stuffbox-1.jpg" style="width: calc(100% / 3)" alt="...">
				<img src="./img/stuffbox-2.jpg" style="width: calc(100% / 3)" alt="...">
				<img src="./img/stuffbox-3.jpg" style="width: calc(100% / 3)" alt="...">
			</div>
		</div>
		<div class="carousel-item">
			<div class="d-flex flex-row">
				<img src="./img/stuffbox-1.jpg" style="width: calc(100% / 3)">
				<img src="./img/stuffbox-2.jpg" style="width: calc(100% / 3)">
				<img src="./img/stuffbox-3.jpg" style="width: calc(100% / 3)">
			</div>
		</div>
		<div class="carousel-item">
			<div class="d-flex flex-row">
				<img src="./img/stuffbox-1.jpg" style="width: calc(100% / 3)" alt="...">
				<img src="./img/stuffbox-2.jpg" style="width: calc(100% / 3)" alt="...">
				<img src="./img/stuffbox-3.jpg" style="width: calc(100% / 3)" alt="...">
			</div>
		</div>

	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>