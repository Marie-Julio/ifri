<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--==================== CSS ====================-->
	<link rel="stylesheet" type="text/css" href="<?= asset('css/style2.css') ?>">

	<title><?= page_title($title ?? null) ?></title>

	<meta name="description" content="Le site officiel de L'Institut de Formation et de Recherche en Informatique de L'UAC">
   
    <meta name="keywords" content="IFRI, UAC, Informatique, Bénin, Recherche, Institut, Ecole, Ingenierie, Université, Sécurité Informatique, Génie Logiciel, Internet et Multimédia, Système d'Information et rédeaux Informatiques, Ordinateur, Programmation, LRSIA, WICSI, IFRI ALUMNI">
    <meta name="author" content="Institut de Formation et de Recherche en Informatique" >
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="http://www.ifri-uac.bj" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Institut de Formation et de Recherche en Informatique - Université d'Abomey-Calavi" />
    <meta property="og:description" content="Le site officiel de L'Institut de Formation et de Recherche en Informatique de L'UAC " />
    <meta property="og:url" content="http://ifri-uac.bj" />
    <meta property="og:site_name" content="Institut de Formation et de Recherche en Informatique - Université d'Abomey-Calavi" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Le site officiel de L'Institut de Formation et de Recherche en Informatique de L'UAC " />
    <meta name="twitter:title" content="Institut de Formation et de Recherche en Informatique - Université d'Abomey-Calavi" />

	<!--================= SITE ICON ===============-->
	<link rel="icon" type="image/x-icon" href="<?= asset('img/logoifri.png') ?>">
    <script src="https://cdn.tailwindcss.com"></script>

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">        
        
    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />   
	
	<!--================= CSS BOOTSTRAP ===============-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
	<!--==================== ALPINEJS ====================-->
	<script defer src="<?= asset('js/alpine-data.js') ?>"></script>
 
	<!--==================== ALPINEJS ====================-->
	<script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

</head>
<style type="text/css">
	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #f1f1f1;
	  margin-top: 5px;
	  text-align: left;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}
	.dropdown:hover .dropdown-content {display: block;}
</style>
<body class="col-xl-9 col-lg-10 mx-auto">
		

		<div class="rounded top pt-3 d-md-none d-block">
			<div class="mx-auto text-white" style="padding: 0px 20px">
				<div class="row">
					<div class="col-12 col-md-9 mt-1">
						<p class="start_here text-white">Débutez votre carrière dans un domaine prometteur dès maintenant !</p>
					</div>
					<div class="col-12 d-none d-md-block text-center col-md-3">
					<!-- <div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"fr","languages":["fr","en"],"wrapper_selector":".gtranslate_wrapper"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/flags.js" defer></script> -->
						<!-- <button class="btn text-white float-end"><b onclick="document.location.href='<?= route('contact')  ?>'; return false;" >CONTACTEZ-NOUS</b></button> -->
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid sticky-top d-md-none d-block" x-data="{
			visible: false,
		}">
			<div class="row">
				<div class="col-11 mx-auto p-2 pt-4 banner_mobile1" :class="visible ? 'shadow' : 'shadow-sm'">
					<div class="hstack">
						<div>
							<a class="navbar-brand" href="<?= route('home') ?>"><img src="<?= asset('img/logoifri.png') ?>" id="ifri-logo-mobile"></a>
						</div>
						<div class="ms-auto ">
							<h6 class="text-center banner_ifri" style="color: black;">INSTITUT DE FORMATION ET DE RECHERCHE EN INFORMATIQUE (IFRI)</h6>
							<p class="text-center" style="font-style: italic; font-size: 12px;">Nous bâtissons l'excellence</p>
						</div>
						<div class="ms-auto">
							<i class="uil uil-bars nav_icon" x-show="!visible" @click="visible = !visible" type="button"></i>
							<i class="uil uil-times nav_icon" x-show="visible" x-cloak  @click="visible = !visible" type="button"></i>
						</div>
					</div>
					<div class="vstack mx-auto col-10" x-cloak x-transition.duration.500ms x-show="visible">
						
						<div class="row nav_mobile_item">
							<a href="<?= route('home') ?>" class="nav_mobile_link">Accueil</a>
						</div>

						<div class="row nav_mobile_item" x-data="{showMenu: false}">
							<h6 class="nav_mobile_link" @click="showMenu = !showMenu">Gouvernance 
								<i class="uil uil-angle-right-b float-end" x-show="!showMenu"></i>
								<i class="uil uil-arrow-down float-end" x-show="showMenu" x-cloak></i>
							</h6>
							<ul class="ps-4" x-show="showMenu" x-cloak>
								<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('word-from-director') ?>">Mot du directeur</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('history') ?>">Historique</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('administration') ?>">Administration</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('distinction') ?>">Distinction</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('community-service') ?>">Service à la communauté</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('ressources') ?>">Ressources académiques</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('acte_academiques') ?>">Actes académiques</a></li>
							</ul>
						</div>

						<div class="row nav_mobile_item" x-data="{showMenu: false}">
							<h6 class="nav_mobile_link" @click="showMenu = !showMenu"> Formation 
								<i class="uil uil-angle-right-b float-end" x-show="!showMenu"></i>
								<i class="uil uil-arrow-down float-end" x-show="showMenu" x-cloak></i>
							</h6>
							<ul class="ps-4" x-show="showMenu" x-cloak>
							<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('admission') ?>">Admission</a></li>
							<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('pedagogy') ?>">Pédagogie</a></li>
								<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('f_licence') ?>">Licence</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('f_master') ?>">Master</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('formations/formation-continue') ?>">Formation continue</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('f_doctorat') ?>">Doctorat</a></li>
							</ul>
						</div>

						<div class="row nav_mobile_item" x-data="{showMenu: false}">
							<h6 class="nav_mobile_link" @click="showMenu = !showMenu"> Recherche 
								<i class="uil uil-angle-right-b float-end" x-show="!showMenu"></i>
								<i class="uil uil-arrow-down float-end" x-show="showMenu" x-cloak></i>
							</h6>
							<ul class="ps-4" x-show="showMenu" x-cloak>
								<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('memories') ?>">Mémoire</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('students-works') ?>">Travaux des étudiants</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('formations/formation-continue') ?>">Formation continue</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('laboratoirepedagogique') ?>">Laboratoire pédagogique et d'innovation</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="https://lrsia.ifri-uac.bj/" target="_blank">Laboratoire de recherche <i class="uil uil-external-link-alt"></i></a></li>
							</ul>
						</div>

						<div class="row nav_mobile_item" x-data="{showMenu: false}">
							<h6 class="nav_mobile_link" @click="showMenu = !showMenu">Vie estudiantine 
								<i class="uil uil-angle-right-b float-end" x-show="!showMenu"></i>
								<i class="uil uil-arrow-down float-end" x-show="showMenu" x-cloak></i>
							</h6>
							<ul class="ps-4" x-show="showMenu" x-cloak>
								<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('stage-alternance') ?>">Stage et alternance</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('cultural-activities') ?>">Activités culturelles</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('wicsi') ?>">WICSI</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('alumni') ?>">Alumni</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('gallery') ?>">Galerie</a></li>
							</ul>
						</div>

						<div class="row nav_mobile_item">
							<a href="<?= route('cooperation') ?>" class="nav_mobile_link">Coopération </a>
						</div>

						<div class="row nav_mobile_item" x-data="{showMenu: false}">
							<h6 class="nav_mobile_link" @click="showMenu = !showMenu">Actualités 
								<i class="uil uil-angle-right-b float-end" x-show="!showMenu"></i>
								<i class="uil uil-arrow-down float-end" x-show="showMenu" x-cloak></i>
							</h6>
							<ul class="ps-4" x-show="showMenu" x-cloak>
								<li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('activities') ?>">Activités</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('events') ?>">Evènements</a></li>
							    <li class="nav_mobile_dropdown_item"><a class="nav_mobile_dropdown_link" href="<?= route('infonotes') ?>">Notes d'informations</a></li>
							</ul>
						</div>

						<div class="row nav_mobile_item">
							<a href="<?= route('contact') ?>" class="nav_mobile_link">Contact </a>
						</div>

					</div>
				</div>
			</div>
		</div>

	


		<div class="bg-white col-xl-9 col-lg-10 mx-auto d-none d-md-block" id="okkkkkkkk">

			<div class="rounded top pt-3" id="top_pc">
				<div class="mx-auto text-white" style="padding: 0px 20px">
					<div class="row">
						<div class="col-12 col-md-9 mt-1">
							<p class="start_here text-white">Débutez votre carrière dans un domaine prometteur dès maintenant !</p>
						</div>
						<div class="col-12 d-none d-md-block text-center col-md-3">
<div style="margin-left:180px;" class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"fr","languages":["fr","en"],"wrapper_selector":".gtranslate_wrapper","flag_size":48,"flag_style":"3d"}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/flags.js" defer></script>
							<!-- <button class="btn text-white float-end"><b onclick="document.location.href='<?= route('contact')  ?>'; return false;" >CONTACTEZ-NOUS</b></button> -->
						</div>
					</div>
				</div>
			</div>

			<div class="hstack mb-4 rounded mt-2 banner">
				<div class="hstack">
				  	<a href="<?= AllConstants()['SITE_URL'] ?>"><img src="<?= asset('img/logoifri.png') ?>" class="logo1"></a>
					<div class="mx-2">
						<h6 class="banner_ifri">INSTITUT DE FORMATION ET DE RECHERCHE EN INFORMATIQUE</h6>
						<p class="text-center" style="font-style: italic; font-size: 14px;">Nous bâtissons l'excellence</p>
					</div>
				</div>
				<div class="ms-auto">
				  	<div class="vstack banner_ministere">
				  		<b>UNIVERSITE D'ABOMEY-CALAVI</b>
				  		<div class="banner_drapeau">
				  			<div class="hstack" style="height: 8px">
				  				<div class="col" style="background-color: #5A9F69; height: 8px"></div>
					  			<div class="col" style="background-color: #DED843; height: 8px"></div>
					  			<div class="col" style="background-color: #BC6469; height: 8px"></div>
				  			</div>
				  		</div>
				  		<span class="banner_ministere_bottom">
				  			MNISTERE DE L'ENSEIGNEMENT SUPERIEUR ET DE LA RECHERCHE SCIENTIFIQUE
				  		</span>
				  	</div>
				</div>
				<div class="ms-4">
					<a href="https://www.uac.bj" target="_blank"><img src="<?= asset('img/logouac.png') ?>"  class="logo"></a>
				</div>
			</div>


			<div class="col-12 mx-auto menu">
				<div class="menu_banner row mx-auto">
					<div class="hstack text-center menu_banner_padding">
						
						<div >
							<a href="<?= route('home') ?>"><i class="uil uil-estate"></i></a>
						</div>

						<div class="ms-auto dropdown">
						  <a class="dropdown-toggle" href="#" role="button" >
						    Gouvernance
						  </a>

						  <ul class="dropdown-content dropdown-menu-light p-0">
						    <li><a class="dropdown-item" href="<?= route('word-from-director') ?>">Mot du directeur</a></li>
						    <li><a class="dropdown-item" href="<?= route('history') ?>">Historique</a></li>
							<li><a class="dropdown-item" href="<?= route('administration') ?>">Administration</a></li>
							
						    <li><a class="dropdown-item" href="<?= route('distinction') ?>">Distinction</a></li>
						    <li><a class="dropdown-item" href="<?= route('ressources') ?>">Ressources académiques</a></li>
						    <li><a class="dropdown-item" href="<?= route('community-service') ?>">Service à la communauté</a></li>
							<li><a class="dropdown-item" href="<?= route('acte_academiques') ?>">Actes académiques</a></li>
						  </ul>
						</div>

						<div class="ms-auto dropdown">
						  <a class="dropdown-toggle" href="#" role="button" >
						    Formation
						  </a>

						  <ul class="dropdown-content dropdown-menu-light p-0">
						  <li><a class="dropdown-item" href="<?= route('admission') ?>">Admission</a></li>
						  <li><a class="dropdown-item" href="<?= route('pedagogy') ?>">Pédagogie</a></li>
						    <li><a class="dropdown-item" href="<?= route('f_licence') ?>">Licence</a></li>
						    <li><a class="dropdown-item" href="<?= route('f_master') ?>">Master</a></li>
						    <li><a class="dropdown-item" href="<?= route('formations/formation-continue') ?>">Formation continue</a></li>
						    <li><a class="dropdown-item" href="<?= route('f_doctorat') ?>">Doctorat</a></li>
						  </ul>
						</div>

						<div class="ms-auto dropdown">
						  <a class="dropdown-toggle" href="#" role="button" >
						    Recherche
						  </a>

						  <ul class="dropdown-content dropdown-menu-light p-0">
						    <li><a class="dropdown-item" href="<?= route('memorie') ?>">Memoire</a></li>
						    <li><a class="dropdown-item" href="<?= route('students-works') ?>">Travaux des étudiants</a></li>
						    <li><a class="dropdown-item" href="<?= route('laboratoirepedagogique') ?>">Laboratoire pédagogique et d'innovation</a></li>
						    <li><a class="dropdown-item" href="https://lrsia.ifri-uac.bj/" target="_blank">Laboratoire de recherche <i class="uil uil-external-link-alt"></i></a></li>
						  </ul>
						</div>

						<div class="ms-auto dropdown">
						  <a class="dropdown-toggle" href="#" role="button" >
						    Vie estudiantine
						  </a>

						  <ul class="dropdown-content dropdown-menu-light p-0">
						    <li><a class="dropdown-item" href="<?= route('stage-alternance') ?>">Stages et alternance</a></li>
						    <li><a class="dropdown-item" href="<?= route('cultural-activities') ?>">Activités culturelles</a></li>
						    <li><a class="dropdown-item" href="<?= route('wicsi') ?>">WICSI</a></li>
						    <li><a class="dropdown-item" href="<?= route('alumni') ?>">Alumni</a></li>
						    <li><a class="dropdown-item" href="<?= route('gallery') ?>">Galerie</a></li>
						  </ul>
						</div>

						<div class="ms-auto">
							<a href="<?= route('cooperation') ?>">Coopération</a>
						</div>

						<div class="ms-auto dropdown">
						  <a class="dropdown-toggle" href="#" role="button" >
						    Actualités
						  </a>

						  <ul class="dropdown-content dropdown-menu-light p-0">
						    <li><a class="dropdown-item" href="<?= route('activities') ?>">Activités</a></li>
						    <li><a class="dropdown-item" href="<?= route('events') ?>">Evènements</a></li>
						    <li><a class="dropdown-item" href="<?= route('infonotes') ?>">Notes d'informations</a></li>
						  </ul>
						</div>
						<div class="ms-auto">
							<a href="<?= route('contact') ?>">Contact</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="dndnnfjjfnd" class="d-none d-md-block" style="height: 260px"></div>



		<?= $content ?> 

		<button onclick="topFunction()" id="myBtn"><i class="uil uil-angle-up"></i></button>

		<footer class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-6 mt-4">
						<dl>
							<dt>IFRI</dt>
							<dd class="mt-2"><a href="<?= route('word-from-director') ?>">Mot du directeur</a></dd>
							<dd class="mt-2"><a href="<?= route('history') ?>">Historique</a></dd>
							<dd class="mt-2"><a href="<?= route('administration') ?>">Administration</a></dd>
							<dd class="mt-2"><a href="<?= route('pedagogy') ?>">Pédagogie</a></dd>
							<dd class="mt-2"><a href="<?= route('distinction') ?>">Distinction</a></dd>
							<dd class="mt-2"><a href="<?= route('contact') ?>">Contact</a></dd>
							<dd class="mt-2"><a href="<?= route('community-service') ?>">Service à la communauté</a></dd>
						</dl>
					</div>
					<div class="col-md-3 col-6 mt-4">
						<dl>
							<dt>En plus</dt>
							<dd class="mt-2"><a href="<?= route('admission') ?>">Admission</a></dd>
							<dd class="mt-2"><a href="<?= route('formations') ?>">Formation</a></dd>
							<dd class="mt-2"><a href="https://lrsia.ifri-uac.bj/" target="_blank">Laboratoire <i class="uil uil-external-link-alt"></i></a></dd>
							<dd class="mt-2"><a href="<?= route('cooperation') ?>">Coopération</a></dd> 
							<dd class="mt-2"><a href="<?= route('memorie') ?>">Mémoire</a></dd>
							<dd class="mt-2"><a href="<?= route('students-works') ?>">Travaux etudiants</a></dd>
						</dl>
					</div>
					<div class="col-md-3 col-6 mt-4">
						<dl>
							<dt>Vie estudiantine</dt>
							<dd class="mt-2"><a href="<?= route('stage-alternance') ?>">Stage et alternance</a></dd>
							<dd class="mt-2"><a href="<?= route('wicsi') ?>">WICSI</a></dd>
							<dd class="mt-2"><a href="<?= route('cultural-activities') ?>">Activités culturelles</a></dd>
							<dd class="mt-2"><a href="<?= route('alumni') ?>">Alumni</a></dd>
							<dd class="mt-2"><a href="<?= route('gallery') ?>">Galerie</a></dd>
						</dl>
					</div>
					<div class="col-md-3 col-6 mt-4">
						<dl>
							<dt>Suivez-nous</dt>
							<dd class="mt-2"><a href="https://web.facebook.com/Uac.Ifri/" target="_blank"><i class="uil uil-facebook icon__social icon__facebook"></i> Facebook</a></dd>
							<dd class="mt-2"><a href="https://www.instagram.com/ifri.uac/" target="_blank"><i class="uil uil-instagram icon__social icon__facebook"></i> Instagram</a></dd>
							<dd class="mt-2"><a href="https://www.youtube.com/channel/UCp53uoRrWOsAzXDy-iuakOw" target="_blank"><i class="uil uil-youtube icon__social icon__facebook"></i> Youtube</a></dd>
							<dd class="mt-2"><a href="https://www.linkedin.com/company/ifri-uac/" target="_blank"><i class="uil uil-linkedin icon__social icon__facebook"></i> LinkedIn</a></dd>
						</dl>
					</div>
				</div>
				<div>
					<p class="mb-0" id="copyright">Copyright IFRI-UAC <?= date('Y') ?></p>
				</div>
			</div>
		</footer>


		<!--================= JS BOOTSTRAP ===============-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


		<!--==================== SWIPER JS ====================-->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<!--==================== JS ====================-->
		<script type="text/javascript" src="<?= asset('js/script.js') ?>"></script>

	</body>
</html>
