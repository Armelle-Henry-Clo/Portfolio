<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Port-folio Armelle HENRY, CV Armelle HENRY, portfolio développeur web, developpeuse web, developpement web, HTML5, CSS3, PHP, PHPMyAdmin, MySQL, SQL, Bootstrap, JavaScript, WordPress, SEO">
		<title>Portfolio</title>
		<link rel="icon" type="image/png" href="img/favicon.svg">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header id="header">
			<nav>
				<a href="#header" class="home">Armelle HENRY</a>
				<div class="hamb">
					<a href="#"><i class="fas fa-bars"></i></a>
					<a href="#"><i class="far fa-window-close"></i></a>
				</div>
				<ul id="slide">
					<li><a href="#une">Portfolio</a></li>
					<li><a href="#deux">A propos</a></li>
					<li><a href="#trois">Contact</a></li>
				</ul>
			</nav>


			<?php 
    if(!empty($_POST)) :  

        // var_dump($_POST);

$mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);

$monmail = 'clotildearmelle@gmail.com';
$message = $_POST['name'] . $_POST['tel'] . $_POST['mail'] . $_POST['message'] . $_SESSION['date'];
mail($monmail,'Contact',$message);

file_put_contents('contact.text', $_POST, FILE_APPEND);

echo 'Merci ' . ucwords($_POST['name']) . ' pour votre message bientôt une réponse sur votre boite mail:' . $_POST['mail'];

endif; ?>

			<img class="tof1" src="img/me.jpg">
			<h1>Armelle HENRY</h1>
			
			<h2>Développeuse web junior</h2>
			
		</header>
		<main>
			<section id="une">
				<h2>Portfolio</h2>
				<div> 
                    <a target="_blank" href="https://monparcoursformation.alwaysdata.net/"><img src="img/projetFormation.png" ></a><figcaption>Travail en équipe de 5 personnes :  développer en une semaine un site dynamique en PHP from scratch de plusieurs pages, avec différents niveaux de connexion et d'interaction sur le site<br>(Télécharger le powerpoint <a href="MON PARCOURS FORMATION.pptx">ici</a>)</figcaption>
				
                    <a target="_blank" href="https://armelle-henry-clo.github.io/projet_BP/" ><img src="img/blackPink.png" ></a><figcaption>Travail individuel : développer en une semaine from scratch un site responsive one page avec les technologies- HTML/CSS/JS.<br> Une V2 de ce site a été faite. Il s'agissait de faire évoluer un site statique en un site dynamique avec BDD et de le mettre en production. <br> Pour voir cette version, cliquez <a target="_blank" href="https://fanbasebp.000webhostapp.com/">ici</a></figcaption>
				</div>

				<div>
                    <a target="_blank" href="RenoveTout/index.php"><img src="img/RenoveTout.png"></a><figcaption>Travail individuel: Développer from scratch un site responsive one page pour un client à partir d'une maquette <br> langages utilisés HTML et CSS </figcaption>
				</div>

				<div>
                    <a target="_blank" href="Projet_Travel/index_p1.php"><img src="img/travel.png" alt="image site de voyage"></a>
					<figcaption>Travail individuel libre : from scratch, intégrer un site responsive avec maillage interne. <br> langages : HTML/CSS/Bootstrap</figcaption>
                </div>
              
                <div>
                    <a href="img/ArtisteImaginaire.png"><img src="img/vinyl.png"></a><figcaption>Travail individuel : Créer une pochette d'album vynil pour l'artiste de son choix <br> utilisation Adobe Photoshop</figcaption>
				</div>
				<div>
					<a href="img/ChanteurImaginaire.png"><img src="img/single.png"></a><figcaption>Travail individuel : Créer une pochette cd pour l'artiste de son choix<br> utilisation Adobe Photoshop</figcaption>
                </div>                 				
			</section>
			
			<section id="deux">
				<h2>A propos</h2>
				<div>
					<article>
						<h3>Formation</h3><br>						
						<p>J'ai repris des études en développement web l'année dernière à mon rythme, d'abord sur internet avec OpenClassRooms. Ensuite, j'ai eu l'occasion de participer à un atelier avec Social Builder/Horizon Numérique ce qui m'a ouvert la porte vers une formation certifiante chez DORANCO en tant que développeuse web. Cette formation intensive m'a très rapidement permis d'être opérationnelle et de travailler en agilité sur plusieurs projets. </p>
						Aujourd'hui ma formation n'est pas terminée, je souhaiterais me spécialiser dans le back, en apprenant un langage de programmation comme Python ou Java, tout dépendra du nouveau projet qui s'offrirait à moi.
					</article>
					<article>
						<h3>Expérience</h3><br>
						<p>Forte d'une expérience de plusieurs années en tant que commerciale dans différents secteurs d'activités (télécommunications et immobilier principalement) aussi bien en tant qu'indépendante que salariée, j'ai décidé de m'orienter vers les métiers du numérique qui m'ont toujours passionnés. <br> Ecoute, patience, tenacité, emphatie: toutes ces qualités humaines nécessaires à l'accomplissement de mon ancien métier, m'ont apportées enormément dans le développement web, pour travailler en équipe, respecter les délais et monter en compétences.</p>
					</article>
				</div>
                <div>
                    <a target="_blank" href="CV/index.php"><i class="fas fa-eye"></i> CV</a>
                    <a target="_blank" download="" href="Armelle_HENRY_Développeur.pdf"><i class="fas fa-download"></i> CV</a>
                </div>
			</section>

			<section id="trois">
				<h2>Contactez moi</h2>
				<form action="index.php" method="POST">
					<aside>
						<label for="name">Nom</label>
						<input name="name" type="text" required >
					</aside>
					<aside>
						<label for="tel">Téléphone</label>
						<input  name="tel" type="tel">
					</aside>
					<aside>
						<label for="mail">Mail</label>
						<input name="mail" type="email" required>
					</aside>
					<aside>
						<label for="message" >Message</label>
						<textarea name="message" required></textarea>
					</aside>
					<button>Contactez moi</button>
				</form>
			</section>
		</main>
		<footer>
				<h4>Mes réseaux</h4>
					<ul>
						<li><a href="https://github.com/Armelle-Henry-Clo"><i class="fab fa-github"></i></a></li>
						<li><a href="https://www.linkedin.com/in/armelle-henry/"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="Mailto:clotildearmelle@gmail.com"><i class="fas fa-envelope"></i></a></li>
                        <li><a href="https://discord.com/channels/@me"><i class="fab fa-discord"></i></a></li>
					</ul><br>
				<p>Copyright &copy; Armelle HENRY - CLO81</p>
				<a hidden href='https://www.freepik.com/psd/mockup'>Mockup psd created by rawpixel.com - www.freepik.com</a>
		</footer>
		
	</body>
</html>