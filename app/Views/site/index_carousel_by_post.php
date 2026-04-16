<!-- <header class="container-fluid header">
	<img src="<?= asset('img/header.png') ?>" class="rounded">
</header> -->

<section class="container-fluid mt-5">
	<div class="swiper mySwiper swiper_mtop">



	  	<div class="swiper-wrapper">


	  		<?php foreach ($events as $event) { ?>

				<div class="swiper-slide">
			    	<div>	
			    		<img src="<?= asset('img/header.png') ?>" class="rounded">

						<div class="text-center mx-auto mb-3 header_formation">
						     <a href="<?= route('formations') ?>" class="button_secondary text-decoration-none text-white">Découvrez nos formations <i class="uil uil-arrow-right"></i></a>
						</div>

						<div class="row">
							<div class="col-md-10 col-11 mx-auto post_single">
						        
						    	<h3 class="text-white fw-bold" ><?= $event['eventName'] ?></h3>

						    	<div class="row post_single_sub">
						    		<div class="col-md-10">
						    			<p class="text-white post_single_sub_p"><?= toDateSimple($event['created_at']) ?></p>
						    		</div>
						    		<div class="col-md-2">
						    			<a href="<?= AllConstants()['SITE_URL'].'event/'.$event['eventSlug'] ?>" class="text-decoration-none text-white- read_plus">Lire plus</a>
						    		</div>
						    	</div>						

							</div>

						</div>
					</div>		
			    </div>

			<?php } ?>


	  		<?php foreach ($infonotes as $infonote) { ?>

				<div class="swiper-slide">
			    	<div>		    	
			    		<img src="<?= asset('img/header.png') ?>" class="rounded">

						<div class="text-center mx-auto mb-3 header_formation">
						     <a href="<?= route('formations') ?>" class="button_secondary text-decoration-none text-white">Découvrez nos formations <i class="uil uil-arrow-right"></i></a>
						</div>

						<div class="row">
							<div class="col-md-10 col-11 mx-auto post_single">
						        
						    	<h3 class="text-white fw-bold"><?= $infonote['infonoteName'] ?></h3>
	
						    	<div class="row post_single_sub">
						    		<div class="col-md-10">
						    			<p class="text-white post_single_sub_p"><?= toDateSimple($infonote['created_at']) ?></p>
						    		</div>
						    		<div class="col-md-2">
						    			<a href="<?= AllConstants()['SITE_URL'].'infonote/'.$infonote['infonoteSlug'] ?>" class="text-decoration-none text-white- read_plus">Lire plus</a>
						    		</div>
						    	</div>						

							</div>

						</div>
					</div>		
			    </div>

			<?php	} ?>


	  		<?php foreach ($activities as $activity) { ?>

				<div class="swiper-slide">
			    	<div>		    	
			    		<img src="<?= asset('img/header.png') ?>" class="rounded">

						<div class="text-center mx-auto mb-3 header_formation">
						     <a href="<?= route('formations') ?>" class="button_secondary text-decoration-none text-white">Découvrez nos formations <i class="uil uil-arrow-right"></i></a>
						</div>

						<div class="row">  
							<div class="col-md-10 col-11 mx-auto post_single">
						        
						    	<h3 class="text-white fw-bold"><?= $activity['activityName'] ?></h3>

						    	<div class="row post_single_sub">
						    		<div class="col-md-10">
						    			<p class="text-white post_single_sub_p"><?= toDateSimple($activity['created_at']) ?></p>
						    		</div>
						    		<div class="col-md-2">
						    			<a href="<?= AllConstants()['SITE_URL'].'activity/'.$activity['activitySlug'] ?>" class="text-decoration-none text-white- read_plus">Lire plus</a>
						    		</div>
						    	</div>					

							</div>

						</div>
					</div>		
			    </div>

			<?php	} ?>
	  	</div>


		<!-- Add Pagination -->
		<div class="swiper-pagination pagination_header" style="display: none;"></div>
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
				<div class="col-lg-4 col-md-4 mx-auto threeBest_item text-center">
					<img src="<?= asset('img/1.1.png') ?>">
					<h5>Innovation</h5>
					<p>
						Les étudiants de l'IFRI sont formés avec le goût pour l'innovation et l'entreprenariat afin de développer des solutions pour résoudre des problèmes spécifiques de leur milieu de vie, et du monde en général.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 mx-auto threeBest_item  text-center">
					<img src="<?= asset('img/1.3.png') ?>">
					<h5>Recherche</h5>
					<p>
						L'institut dispose d'un laboratoire de recherche en science informatique et application qui permet aux doctorants et aux enseignants de mener des travaux de recherches et d'innovations.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 mx-auto threeBest_item text-center">
					<img src="<?= asset('img/1.2.png') ?>">
					<h5>Certification</h5>
					<p>
						Le programme de formation dans l'institut contient des cours de certifications dans divers domaines. Ainsi nos édutiants en L3 suivent les cours de certifications CCNA, CND, CEH, Mikrotik, Oracle
					</p>
				</div>
			</div>			
		</div>
	</div>
</section>




	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
	    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	        <div class="modal-content" x-data="{
	        	hideVideo() {
	        		document.getElementById('video_presentation').setAttribute('src', ''); 
	        	}
	        }">
	            <div class="modal-header bg-dark border-dark p-2">
	            	<i class="uil uil-times float-end" style="color: #fff; font-size: 25px;" data-bs-dismiss="modal" type="button" aria-label="Close" @click="hideVideo"></i>
	            </div>
	            <div class="modal-body bg-dark p-0">
	            	<div class="ratio ratio-16x9">
					  <iframe id="video_presentation" src="https://www.youtube.com/embed/-Lr8WktNY1w" title="YouTube video" allowfullscreen></iframe>
					</div>
	            </div>
	        </div>
	    </div>
	</div>


	<section class="container-fluid presentation">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-10 col-11 mx-auto">
				<h5>Mot du directeur</h5>
				<div class="col-6 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
				<p>
					La vocation de l'Institut de Formation et de Recherche en Informatique (IFRI) de l'Université d'Abomey-Calavi est de former des apprenants capables de devenir des acteurs de solutions informatiques aux différents problèmes de société en s'appuyant sur les récents développements des Technologies de l'Information et de la Communication. Les performances des étudiants de l'IFRI font parler de l'Institut au plan national qu'international. Les multiples distinctions enregistrées au fil des années sont très illustratives. Championne en 2014 puis en 2016 au concours national de programmation, l'équipe de l'IFRI a occupé la deuxième place en 2015. Sur plus de cent (100) équipes sélectionnées de plusieurs pays de la sous-région participant au concours organisé par la société MAPCOM, l'équipe de l'IFRI a fini ...
				</p>
					<a href="<?= route('word-from-director') ?>" class="text-decoration-none presentation_p_a"><small>Lire plus</small></a>
			</div>
			<div class="col-xl-5 col-lg-5 mx-auto col-11 col-sm-6 col-md-5 offset-md-1 mt-4"  x-data="{
		        	showVideo() {
		        		document.getElementById('video_presentation').setAttribute('src', 'https://www.youtube.com/embed/-Lr8WktNY1w'); 
		        	}
		        }">
				<img src="<?= asset('img/video_poster.png') ?>" @click="showVideo" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			</div>
		</div>
	</section>



	<section class="container-fluid rounded statistic">
		<h6 class="section__title1 text-center">NOS DERNIERES STATISTIQUES</h6>
		<div class="d-none d-md-block">
			<div class="row">
				<div class="col-md-10 col-xl-10 col-lg-11 mx-auto">
					<div class="row">
						<div class="col-4 statistic_">
							<div class="statistic_item">
								<div class="statistic__item" type="button" onclick="document.location.href='<?= route('distinction') ?>'; return false">
									<i class="uil uil-trophy"></i> <br>
									Distinctions <br>
									<b class="statistic_number"><?= $numberDistinctions ?></b>
								</div>
							</div>
						</div>
						<div class="col-4 statistic_ statistic_2">
							<div class="statistic_item statistic_item_2">
								<div class="statistic__item" type="button" onclick="document.location.href='<?= route('alumni') ?>'; return false">
									<i class="uil uil-chat-bubble-user"></i> <br>
									Etudiants <br> 
									<b class="statistic_number">709</b>
								</div>
							</div>
							<div class="statistic_item statistic_item_22">
								<div class="statistic__item" type="button" onclick="document.location.href='<?= route('formations') ?>'; return false">
									<i class="uil uil-file-check"></i> <br>
									Filières <br>
									<b class="statistic_number">5</b>
								</div>
							</div>
						</div>
						<div class="col-4 statistic_">
							<div class="statistic_item">
								<div class="statistic__item" type="button" onclick="document.location.href='<?= route('formations') ?>'; return false">
									<i class="uil uil-graduation-cap"></i> <br>
									Formations <br> 
									<b class="statistic_number"><?= $numberFormation ?></b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-block d-md-none">
			<div class="row">
				<div class="col-md-10 col-xl-10 col-lg-11 mx-auto">
					<div class="row">
						<div class="col-6">
							<div class="statistic_item_mobile">
								<div class="statistic__item_mobile" onclick="document.location.href='<?= route('distinction') ?>'; return false">
									<i class="uil uil-trophy"></i> <br>
									Distinctions <br>
									<b class="statistic_number"><?= $numberDistinctions ?></b>
								</div>
							</div>
						</div>
						<div class="col-6 ">
							<div class="statistic_item_mobile">
								<div class="statistic__item_mobile" onclick="document.location.href='<?= route('alumni') ?>'; return false">
									<i class="uil uil-trophy"></i> <br>
									Etudiants <br>
									<b class="statistic_number">709</b>
								</div>
							</div>
						</div>
						<div class="col-6 ">
							<div class="statistic_item_mobile">
								<div class="statistic__item_mobile" onclick="document.location.href='<?= route('formations') ?>'; return false">
									<i class="uil uil-trophy"></i> <br>
									Filières <br>
									<b class="statistic_number">5</b>
								</div>
							</div>
						</div>
						<div class="col-6 ">
							<div class="statistic_item_mobile">
								<div class="statistic__item_mobile" onclick="document.location.href='<?= route('formations') ?>'; return false">
									<i class="uil uil-graduation-cap"></i> <br>
									Formations <br> 
									<b class="statistic_number"><?= $numberFormation ?></b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="container-fluid admissionpart">
		<div class="row">
			<div class="col-6">
				<div class="hstack">
					<div class="admissionpartdivider"></div>
					<div>
						<h4 class="fw-bold text-white ms-4"><b>Admission</b></h4>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="hstack h-100">
					<div class="ms-auto  text-center-col">
						<a href="<?= route('admission') ?>" class="text-decoration-none text-white rounded">Lire toute l'information</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="container-fluid">
		<div class="row patner">
			<h3 class="text-center section__title1">NOS PARTENAIRES</h3>

			<?php foreach ($patners as $patner): ?>
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-4">
					<div  class="patner_item">
						<a href="<?= $patner['patnerUrl'] ?>" target="_blank" title="<?= $patner['patnerName'] ?>"><img src="<?= AllConstants()['APP_URL'].$patner['patnerImage'] ?>"></a>
					</div>
				</div>
			<?php endforeach ?>

			<div class="text-center mt-4">				
					<a href="<?= route('cooperation') ?>" class="text-decoration-none text-primary-">Tout voir <i class="uil uil-arrow-right"></i></a>
			</div>
		</div>
	</section>


	<section class="container-fluid testimony ">
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