<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="/" class="text-decoration-none text-black-">Accueil</a> > Gouvernance > Mot du directeur</p>
</section>

<section class="container-fluid direction">
	<div class="word_from_director">
		<div class="row">
			<div class="col-lg-8">
				<div class="row ">
					<div class="row mt-4">
						<h5>Mot du directeur</h5>
						<div class="col-6 my-3 ms-2" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
						<!-- <h4 class="font-weight-bold text-primary-" style="text-transform: uppercase;">Soyez les bienvenus à l'IFRI</h4> -->
						<p class="words">
							La vocation de l'Institut de Formation et de Recherche en Informatique (IFRI) de l'Université d'Abomey-Calavi est de former des apprenants capables de devenir des acteurs de solutions informatiques aux différents problèmes de société en s'appuyant sur les récents développements des Technologies de l'Information et de la Communication. Les performances des étudiants de l'IFRI font parler de l'Institut au plan national qu'international. Les multiples distinctions enregistrées au fil des années sont très illustratives. Championne en 2014 puis en 2016 au concours national de programmation, l'équipe de l'IFRI a occupé la deuxième place en 2015. Sur plus de cent (100) équipes sélectionnées de plusieurs pays de la sous-région participant au concours organisé par la société MAPCOM, l'équipe de l'IFRI a fini 5ème . Troisième au concours Innovaton organisé par la fondation HOUNGBEDJI en 2017, elle a gagné la totalité des 4 bourses d’études en Chine offertes par la même fondation en 2018. <br> 

							L'effort quotidien d'adéquation des formations de l'IFRI avec des besoins du marché de l'emploi a payé par l'insertion en masse des diplômés de l'institut dans plusieurs entreprises privés et publiques, d'ici et d'ailleurs. Des étudiants diplômés de l'IFRI se trouvent au Sénégal, au Canada, en France, en Belgique, en Chine, aux Etats-Unis, etc . Aussi, plusieurs nationalités sont-elles représentées dans l'effectif des étudiants de l'IFRI. Il s'agit notamment du Nigéria, du Niger, du Mali, du Rwanda, du Togo, de la République Démocratique du Congo , du Cameroun, de la Côte d'Ivoire et du Tchad. La démarche pédagogique de l'IFRI est caractérisée par une forte implication du monde professionnel pour des enseignements pratiques. Nous vous souhaitons la bienvenue afin de continuer le mouvement avec nous. IFRI, nous bâtissons l'excellence!
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">

				<div class="row text-center">
					<img src="<?= asset('img/dg3.png') ?>" class="dg__img">
					<h4 class="dg__name fw-bold">Directeur de l'IFRI-UAC</h4>
					<p class="text-black-">Professeur Eugène C. EZIN</p>
				</div>

				<div class="row" x-data="{
		        	showVideo() {
		        		document.getElementById('video_presentation').setAttribute('src', 'https://www.youtube.com/embed/-Lr8WktNY1w'); 
		        	}
		        }">
					<img src="<?= asset('img/video_poster.png') ?>" @click="showVideo" style="height: 250px; object-fit: contain;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
					<h6 class="text-black- fw-bold text-center my-2">Présentation de l'IFRI UAC</h6>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content"  x-data="{
	        	hideVideo() {
	        		document.getElementById('video_presentation').setAttribute('src', ''); 
	        	}
	        }">
            <div class="modal-header bg-dark border-dark p-2">
            	<i class="uil uil-times float-end" style="color: #fff; font-size: 25px;" data-bs-dismiss="modal" type="button" aria-label="Close"  @click="hideVideo"></i>
            </div>
            <div class="modal-body bg-dark p-0">
            	<div class="ratio ratio-16x9">
				  <iframe id="video_presentation" src="https://www.youtube.com/embed/-Lr8WktNY1w" title="YouTube video" allowfullscreen></iframe>
				</div>
            </div>
        </div>
    </div>
</div>