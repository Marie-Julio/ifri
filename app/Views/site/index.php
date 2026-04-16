<!-- Header Section -->
<section class="w-full mt-5 relative">
  <div class="swiper mySwiper">
    <img src="<?= asset('img/annee01.png') ?>" class="w-full rounded-lg shadow-lg transform transition duration-500 hover:scale-105" alt="Header Image">

    <div class="absolute bottom-50 left-1/2 transform -translate-x-1/2 z-10">
      <a href="<?= route('formations') ?>" class="bg-[#0077D2] border-5 border-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:shadow-lg hover:-translate-y-1 flex items-center">
        Découvrez nos formations <i class="uil uil-arrow-right ml-2"></i>
      </a>
    </div>

    <div class="swiper-wrapper -mt-5">
      <?php foreach ($events as $event) { ?>
        <div class="swiper-slide">
          <div class="bg-[#0077D2] p-6 backdrop-blur-sm animate-fade-in">
            <h3 class="text-white font-bold text-xl mb-2"><?= $event['eventName'] ?></h3>
            <div class="flex justify-between items-center">
              <p class="text-gray-300"><?= toDateSimple($event['created_at']) ?></p>
              <a href="<?= AllConstants()['SITE_URL'].'event/'.$event['eventSlug'] ?>" class="text-white hover:text-blue-300 transition-colors duration-300 flex items-center">
                Lire plus <i class="uil uil-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>

      <?php foreach ($infonotes as $infonote) { ?>
        <div class="swiper-slide">
          <div class="bg-[#0077D2] p-6 backdrop-blur-sm animate-fade-in">
            <h3 class="text-white font-bold text-xl mb-2"><?= $infonote['infonoteName'] ?></h3>
            <div class="flex justify-between items-center">
              <p class="text-gray-300"><?= toDateSimple($infonote['created_at']) ?></p>
              <a href="<?= AllConstants()['SITE_URL'].'infonote/'.$infonote['infonoteSlug'] ?>" class="text-white hover:text-blue-300 transition-colors duration-300 flex items-center">
                Lire plus <i class="uil uil-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>

      <?php foreach ($activities as $activity) { ?>
        <div class="swiper-slide">
          <div class="bg-[#0077D2] p-6 backdrop-blur-sm animate-fade-in">
            <h3 class="text-white font-bold text-xl mb-2"><?= $activity['activityName'] ?></h3>
            <div class="flex justify-between items-center">
              <p class="text-gray-300"><?= toDateSimple($activity['created_at']) ?></p>
              <a href="<?= AllConstants()['SITE_URL'].'activity/'.$activity['activitySlug'] ?>" class="text-white hover:text-blue-300 transition-colors duration-300 flex items-center">
                Lire plus <i class="uil uil-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="swiper-pagination hidden"></div>
  </div>
</section>


<section class="container-fluid threeBest mx-auto">
	<div class="row mx-auto">
		<div class="d-block d-md-none">
			<div class="row">
				<div class="col-md-12 threeBest_item">
					<div class="row">
						<div class="col-sm-3 text-center mx-auto my-auto">
							<img src="<?= asset('img/1.1.png') ?>" style=" margin-right: 25px;">
						</div>
						<div class="vstack col-sm-9 col-12 mx-auto">
							<h5 class="text-center-col">Innovation</h5>
							<p>
								Les étudiants de l'IFRI sont formés avec le goût pour l'innovation et l'entreprenariat afin de développer des solutions pour résoudre des problèmes spécifiques de leur milieu de vie, et du monde en général.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 threeBest_item">
					<div class="row">
						<div class="col-sm-3 text-center mx-auto my-auto">
							<img src="<?= asset('img/1.3.png') ?>" style=" margin-right: 25px;">
						</div>
						<div class="vstack col-sm-9  col-12 mx-auto">
							<h5 class="text-center-col">Recherche</h5>
							<p>
								L'institut dispose d'un laboratoire de recherche en science informatique et application qui permet aux doctorants et aux enseignants de mener des travaux de recherches et d'innovations.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 threeBest_item">
					<div class="row">
						<div class="col-sm-3 text-center mx-auto my-auto">
							<img src="<?= asset('img/1.2.png') ?>" style="margin-right: 25px;">
						</div>
						<div class="vstack col-sm-9">
							<h5 class="text-center-col">Certification</h5>
							<p>
								Le programme de formation dans l'institut contient des cours de certifications dans divers domaines. Ainsi nos édutiants en L3 suivent les cours de certifications CCNA, CND, CEH, Mikrotik, Oracle
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="d-none d-md-block">
			<div class="row">
				<div class="col-lg-4 col-md-6 mx-auto px-3">
					<div class="threeBest_item hover:bg-orange-100 text-center transition-transform duration-300 transform hover:scale-110">
						<img src="<?= asset('img/1.1.png') ?>" alt="Innovation" class="transition-transform duration-300">
						<h5>Innovation</h5>
						<p>
							Les étudiants de l'IFRI sont formés avec le goût pour l'innovation et l'entreprenariat afin de développer des solutions pour résoudre des problèmes spécifiques de leur milieu de vie, et du monde en général.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mx-auto px-3">
					<div class="threeBest_item hover:bg-orange-100 text-center transition-transform duration-300 transform hover:scale-110">
						<img src="<?= asset('img/1.3.png') ?>" alt="Recherche" class="transition-transform duration-300">
						<h5>Recherche</h5>
						<p>
							L'institut dispose d'un laboratoire de recherche en science informatique et application qui permet aux doctorants et aux enseignants de mener des travaux de recherches et d'innovations.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mx-auto px-3">
					<div class="threeBest_item hover:bg-orange-100 text-center transition-transform duration-300 transform hover:scale-110">
						<img src="<?= asset('img/1.2.png') ?>" alt="Certification" class="transition-transform duration-300">
						<h5>Certification</h5>
						<p>
							Le programme de formation dans l'institut contient des cours de certifications dans divers domaines. Ainsi nos édutiants en L3 suivent les cours de certifications CCNA, CND, CEH, Mikrotik, Oracle
						</p>
					</div>
				</div>
			</div>
				
		</div>
	</div>
</section><br />

<!-- Director's Word Section -->
<section class="container mx-auto px-4 py-8 bg-gray-50 rounded-xl">
  <div class="flex flex-col lg:flex-row items-center gap-12">
    <div class="lg:w-1/2 animate-fade-in-left">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Mot du directeur</h2>
      <div class="w-1/3 h-1 bg-[#0077D2] rounded-full mb-6"></div>
      <p class="text-gray-700 mb-6">
        La vocation de l'Institut de Formation et de Recherche en Informatique (IFRI) de l'Université d'Abomey-Calavi est de former des apprenants capables de devenir des acteurs de solutions informatiques aux différents problèmes de société en s'appuyant sur les récents développements des Technologies de l'Information et de la Communication. Les performances des étudiants de l'IFRI font parler de l'Institut au plan national qu'international. Les multiples distinctions enregistrées au fil des années sont très illustratives. Championne en 2014 puis en 2016 au concours national de programmation, l'équipe de l'IFRI a occupé la deuxième place en 2015. Sur plus de cent (100) équipes sélectionnées de plusieurs pays de la sous-région participant au concours organisé par la société MAPCOM, l'équipe de l'IFRI a fini ...
      </p>
      <a href="<?= route('word-from-director') ?>" class="text-[#0077D2] hover:text-blue-800 font-medium transition-colors duration-300 inline-flex items-center">
        Lire plus <i class="uil uil-arrow-right ml-1"></i>
      </a>
    </div>
    
    <div class="lg:w-1/2 relative group animate-fade-in-right">
      <img src="<?= asset('img/video_poster.png') ?>" alt="Video Poster" class="rounded-xl shadow-lg w-full max-h-96 object-cover transform transition duration-500 group-hover:scale-105">
      <div class="absolute inset-0 flex items-center justify-center">
        <button @click="showVideo" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="bg-[#0077D2] bg-opacity-80 hover:bg-opacity-100 rounded-full w-16 h-16 flex items-center justify-center transition-all duration-300 transform group-hover:scale-110">
          <i class="uil uil-play text-white text-2xl"></i>
        </button>
      </div>
    </div>
  </div>
</section>
<br /><br />
<!-- Statistics Section -->
<section class="container mx-auto px-4 py-16 animate-fade-in bg-[#0077D2]">
  <h2 class="text-2xl font-bold text-white text-center mb-12">NOS DERNIERES STATISTIQUES</h2>
  
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center transform transition duration-500 hover:scale-110 hover:bg-opacity-20 cursor-pointer" onclick="document.location.href='<?= route('distinction') ?>'; return false">
      <i class="uil uil-trophy text-white text-4xl mb-3"></i>
      <p class="text-white font-medium mb-1">Distinctions</p>
      <p class="text-white text-3xl font-bold"><?= $numberDistinctions ?></p>
    </div>
    
    <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center transform transition duration-500 hover:scale-110 hover:bg-opacity-20 cursor-pointer" onclick="document.location.href='<?= route('f_licence') ?>'; return false">
      <i class="uil uil-notebooks text-white text-4xl mb-3"></i>
      <p class="text-white font-medium mb-1">Filières en Licence</p>
      <p class="text-white text-3xl font-bold"><?= $numberLicence ?></p>
    </div>
    
    <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center transform transition duration-500 hover:scale-110 hover:bg-opacity-20 cursor-pointer" onclick="document.location.href='<?= route('f_master') ?>'; return false">
      <i class="uil uil-notebooks text-white text-4xl mb-3"></i>
      <p class="text-white font-medium mb-1">Filières en Master</p>
      <p class="text-white text-3xl font-bold"><?= $numberMaster ?></p>
    </div>
    
    <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center transform transition duration-500 hover:scale-110 hover:bg-opacity-20 cursor-pointer" onclick="document.location.href='<?= route('f_doctorat') ?>'; return false">
      <i class="uil uil-notebooks text-white text-4xl mb-3"></i>
      <p class="text-white font-medium mb-1">Filières en Doctorat</p>
      <p class="text-white text-3xl font-bold"><?= $numberDoctorat ?></p>
    </div>
    
    <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center transform transition duration-500 hover:scale-110 hover:bg-opacity-20 cursor-pointer" onclick="document.location.href='<?= route('formations') ?>'; return false">
      <i class="uil uil-graduation-cap text-white text-4xl mb-3"></i>
      <p class="text-white font-medium mb-1">Formations</p>
      <p class="text-white text-3xl font-bold"><?= $numberFormation ?></p>
    </div>
    
    <?php foreach ($statistiques as $statistique) { ?>
      <div class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-xl text-center transform transition duration-500 hover:scale-110 hover:bg-opacity-20 cursor-pointer" onclick="document.location.href='<?= route($statistique['lien']) ?>'; return false">
        <i class="uil uil-users-alt text-white text-4xl mb-3"></i>
        <p class="text-white font-medium mb-1"><?= $statistique["nom"] ?></p>
        <p class="text-white text-3xl font-bold"><?= $statistique["valeur"] ?></p>
      </div>
    <?php } ?>
  </div><br /><br />
<section class="bg-orange-500 py-4 px-4 animate-fade-in">
  <div class="container mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <div class="flex items-center mb-6 md:mb-0">
        <div class="w-2 h-12 bg-gray-50 mr-4"></div>
        <h2 class="text-2xl font-bold text-white">Admission</h2>
      </div>
      <a href="<?= route('admission') ?>" class="bg-white text-orange-500 hover:bg-gray-100 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:shadow-lg hover:-translate-y-1 flex items-center">
        Lire toute l'information <i class="uil uil-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
</section>
</section>

<section class="container-fluid">
		<div class="row patner">
			<h3 class="text-center section__title1">NOS PARTENAIRES</h3>
			<br><br>
			<table class="table table-bordered text-center">
				<thead class="table-dark text-lg">
					<tr>
						<th style="padding: 20px;">Logo</th>
						<th style="width: 30%; padding: 20px;">Nom partenaire</th>
						<th style="padding: 20px;">Situation géographique</th>
						<th style="padding: 20px;">Domaine d'activité</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($patners as $patner): ?>
						<tr>
							<td>
								<img src="<?= AllConstants()['APP_URL'].$patner['patnerImage'] ?>" alt="<?= $patner['patnerName'] ?>" class="img-fluid" style="max-width: 100px; height: auto;">
							</td>
							<td>
								<a href="<?= $patner['patnerUrl'] ?>" target="_blank" class="fw-bold">
									<?= $patner['patnerName'] ?>
								</a>
							</td>
							<td><?= $patner['situation_geographique'] ?></td>
							<td><?= $patner['domaine_activite'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>

			<div class="text-center mt-4">				
					<a href="<?= route('cooperation') ?>" class="text-decoration-none text-primary-">Tout voir <i class="uil uil-arrow-right"></i></a>
			</div>
		</div>
	</section><br><br>


	<section class="container-fluid">
		<h3 class="text-center section__title1 mb-4">Nos étudiants témoignent</h3>
		<div class="swiper">
			<div class="swiper-wrapper testimony_mb">

				<div class="swiper-slide testimony__item">
					<div class="testimony__item_sub">
						<p>“Je me suis inscrite en licence professionnelle de Sécurité Informatique à IFRI car ici on a accès à une formation de qualité et une bonne ambiance de travail. Je pense qu'en suivant la formation offerte dans cet institut, je pourrai réaliser beaucoup d'exploits.”</p>
						<img src="<?= asset('img/codjia_deborah.jpeg') ?>" class="rounded-circle">
						<h4>CODJIA DÉBORA FIFAMÈ</h4>
						<p>Etudiante en Sécurité Informatique</p>
					</div>
				</div>

				<div class="swiper-slide testimony__item">
					<div class="testimony__item_sub">
						<p>“IFRI est la meilleure école informatique du Bénin, par excellence. Elle nous offre une formation hyper rigoureuse, avec beaucoup de pression mais on apprend beaucoup de choses. <br>”</p>
						<img src="<?= asset('img/pierre-eric.jpg') ?>" class="rounded-circle">
						<h4>OROU BADE Aïchatou</h4>
						<p>Étudiante en fin de formation en internet et multimédia.</p>
					</div>
				</div>

				<div class="swiper-slide testimony__item">
					<div class="testimony__item_sub">
						<p>“M&#039;inscrire en licence professionnelle de Sécurité informatique à IFRI a été le bon choix pour moi pour plusieurs raisons. La principale est que j&#039;ai suivi un programme académique rigoureux qui me mettait au défi chaque jour afin que je me perfectionne.”</p>
						<img src="<?= asset('img/hospice_michoagan.jpeg') ?>" class="rounded-circle">
						<h4>MICHOAGAN Hospice</h4>
						<p>Technicien en Sécurité Informatique</p>
					</div>
				</div>

			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
	</section>

  
	<section>
  <h3 class="text-center section__title1 mb-4">Catalogue des formations</h3>
  <img src="<?= asset('img/footer3.png') ?>" class="w-full" alt="Header Image">
  </section>

<!-- Video Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="staticBackdrop" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-gray-900 bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-700 rounded-t-md">
        <button type="button" class="btn-close box-content w-6 h-6 p-1 text-white" data-bs-dismiss="modal" aria-label="Close" @click="hideVideo">
          <i class="uil uil-times text-2xl"></i>
        </button>
      </div>
      <div class="modal-body relative p-0">
        <div class="aspect-w-16 aspect-h-9">
          <iframe id="video_presentation" class="w-full h-96" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div><br><br>

<!-- Custom Animations -->
<style>
  .animate-fade-in {
    animation: fadeIn 1s ease-in-out;
  }
  
  .animate-fade-in-left {
    animation: fadeInLeft 1s ease-in-out;
  }
  
  .animate-fade-in-right {
    animation: fadeInRight 1s ease-in-out;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  
  @keyframes fadeInLeft {
    from { 
      opacity: 0;
      transform: translateX(-20px);
    }
    to { 
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes fadeInRight {
    from { 
      opacity: 0;
      transform: translateX(20px);
    }
    to { 
      opacity: 1;
      transform: translateX(0);
    }
  }
</style>

<!-- Initialize Swipers -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Main swiper
    new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    
    // Testimonials swiper
    new Swiper('.testimonialSwiper', {
      loop: true,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  });
</script>