<section class="container breadcrumb pt-2">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-"><b>Accueil</b></a> > Gouvernance > Admission</p>
</section>


<section class="container-fluid admission_detail pt-4 rounded">
	<div class="col-md-10 col-sm-11 mx-auto">
		<div class="row">
			<h2>Admission</h2>
			<div class="col-6 my-3 ms-2" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
			<p class="text-justify">
			Conformément à sa mission statutaire, l’IFRI offre des formations diplômantes des grades de Licence et de Master.
			</p><p class="text-justify">L’admission en première année des spécialités de Licence ou de Master à l’IFRI se fait suivant des normes institutionnelles contenues dans les textes réglementaires en vigueur à l’UAC.
			</p>
		</div>
	</div>
</section>







<section class="container-fluid admission_detail rounded mb-4" 
							x-data="{
								p1: false,
								p2: false,
								p3: false,
								p4: false,
								p5: false,
								p6: false,
								}">
	<div class="col-md-10 col-sm-11 mx-auto">
		


		<div class="row">
			<div class="hstack admission_part">
				<h6  @click="p1 = !p1" type="button">
				Entrée dans les formations de Licence</h6>
			    	<i class="uil uil-plus-circle ms-auto" x-show="!p1" @click="p1 = !p1"></i>
			    	<i class="uil uil-minus-circle ms-auto ms-auto" x-show="p1" @click="p1 = !p1"></i>
			    
			</div>
			<div x-show="p1" class="admission_detail1 ps-4">
				
				<div class="mb-8">
					<p class="mb-4 text-gray-700">Pour être admis en première année de Licence (L1) à l'IFRI, il faut être titulaire d'un baccalauréat scientifique des séries C, D, E, F2 ou de tout autre diplôme équivalent (DTI, WAEC, ...).</p>
					<p class="mb-4 text-gray-700">Il existe deux modalités d'admission en L1 à l'IFRI : l'admission via le Ministère de tutelle et l'admission sur étude de dossier au sein de l'IFRI.</p>
				</div>

				<div class="mb-8">
					<h3 class="text-xl font-semibold text-blue-500 mb-3"> Admission via le Ministère</h3>
					<p class="mb-4 text-gray-700">L'admission se fait directement par la sélection des nouveaux bacheliers à titres boursier, partiellement payant et entièrement payant. Ce mode de sélection s'opère à travers la plateforme <a href="http://www.apresmonbac.bj" class="text-blue-500 hover:underline">www.apresmonbac.bj</a> ouverte aux bacheliers par le Ministère de l'Enseignement supérieur et de la Recherche scientifique (MESRS).</p>
				</div>

				<div class="mb-8">
					<h3 class="text-xl font-semibold text-blue-500 mb-3"> Admission via l'IFRI</h3>
					<p class="mb-4 text-gray-700">Ce mode de sélection concerne exclusivement les bacheliers inscrits sur la plateforme <a href="http://www.apresmonbac.bj" class="text-blue-500 hover:underline">www.apresmonbac.bj</a> mais n'ayant pas été sélectionnés par le MESRS. Cette sélection par l'IFRI se fait pour pallier les désistements enregistrés au sein des candidats sélectionnés par le MESRS.</p>
					<p class="mb-4 text-gray-700">En outre, les nationaux détenteurs de baccalauréat ayant au plus deux ans d'ancienneté ont aussi la possibilité de s'inscrire à l'IFRI.</p>
					
					<div class="bg-gray-100 p-4 rounded-lg">
						<p class="font-medium mb-2">Ces candidats fournissent les pièces suivantes :</p>
						<ul>
							<li><i class="uil uil-check-circle"></i>une copie légalisée du relevé de notes du BAC ;</li>
							<li><i class="uil uil-check-circle"></i>une copie de l'acte de naissance sécurisé ;</li>
							<li><i class="uil uil-check-circle"></i>une copie du certificat d'identification personnelle ;</li>
							<li><i class="uil uil-check-circle"></i>une copie du certificat de nationalité ;</li>
							<li><i class="uil uil-check-circle"></i>un engagement parental pour le paiement des différents frais liés à la formation.</li>
						</ul>
					</div>
				</div>

				<div class="mb-8">
					<h3 class="text-xl font-semibold text-blue-600 mb-3">2.1.1.3 Entrée en troisième année de licence SIRI</h3>
					<p class="mb-4 text-gray-700">De façon spéciale, l'IFRI donne l'opportunité de s'inscrire directement en troisième année de licence en Systèmes d'Information et Réseaux informatiques (SIRI) aux étudiants ayant obtenu un BTS (Informatique de Gestion ou Télécom) ou qui ont validé les quatre premiers semestres du cycle de licence en mathématiques fondamentales, physique fondamentale, télécommunication et statistiques.</p>
					
					<div class="bg-gray-100 p-4 rounded-lg">
						<p class="font-medium mb-2">Les candidats de cette catégorie fournissent les pièces suivantes :</p>
						<ul>
							<li><i class="uil uil-check-circle"></i>une copie légalisée du relevé de notes du BAC ;</li>
							<li><i class="uil uil-check-circle"></i>une copie des relevés de notes des quatre premiers semestres de licence ;</li>
							<li><i class="uil uil-check-circle"></i>une attestation de demande d'authentification ou attestation d'authenticité des diplômes obtenus à l'étranger ;</li>
							<li><i class="uil uil-check-circle"></i>une copie de l'acte de naissance sécurisé ;</li>
							<li><i class="uil uil-check-circle"></i>une copie du certificat d'identification personnelle ou tout document équivalent ;</li>
							<li><i class="uil uil-check-circle"></i>une copie du certificat de nationalité ;</li>
							<li><i class="uil uil-check-circle"></i>un engagement parental pour le paiement des différents frais liés à la formation.</li>
							<li><i class="uil uil-check-circle"></i>une quittance de paiement des frais d'étude de dossier du Conseil universitaire de Contrôle des Aptitudes (CUCA) ;</li>
							<li><i class="uil uil-check-circle"></i>une quittance de paiement des frais d'étude de dossier de la Commission universitaire d'Orientation (CUO).</li>
						</ul>
					</div>
					
					<p class="mt-4 text-gray-700">Les titulaires de cette licence peuvent poursuivre leur étude en master dans les différentes spécialités disponibles à l'IFRI.</p>
				</div>

			</div>	
		</div>

		<div class="row">
			<div class="hstack admission_part">
				<h6  @click="p2 = !p2" type="button" >Entrée dans les formations de Master</h6>
			    <i class="uil uil-plus-circle ms-auto" x-show="!p2" @click="p2 = !p2"></i>
			    <i class="uil uil-minus-circle ms-auto" x-show="p2" @click="p2 = !p2"></i>
			</div>
			<div x-show="p2" class="admission_detail1 ps-4">
            <p class="mb-6 text-gray-700 leading-relaxed">
                L'admission en Master à l'IFRI est réservée aux détenteurs d'un diplôme de Licence en Informatique ou tout autre diplôme de licence équivalent et justifiant des compétences en anglais.
            </p>
            
            <h2 class="text-xl font-semibold text-blue-500 mb-4">Pièces nécessaires pour la candidature :</h2>
            
            <div class="bg-gray-50 p-5 rounded-lg border border-gray-200">
                <ul>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une demande adressée au Directeur de l'IFRI précisant la spécialité choisie et la motivation qui fonde le choix opéré ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une copie de l'acte de naissance sécurisé ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une copie du certificat d'identification personnelle ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une copie légalisée de l'attestation du diplôme de baccalauréat ou tout autre diplôme équivalent ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une copie légalisée de l'attestation de diplôme de Licence en Informatique ou tout autre diplôme de licence équivalent;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        les relevés de notes du BAC et de la licence (S1 à S6) ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une photo d'identité numérique sur clé ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une copie du certificat de nationalité ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une attestation de bourse de l'organisme octroyant la bourse (le cas échéant) ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une attestation de demande d'authentification ou attestation d'authenticité du BAC et de la licence pour les diplômes obtenus à l'étranger ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une attestation de compétences en anglais ou une attestation d'inscription dans un centre de formation agréé par l'UAC ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une quittance de paiement des frais d'étude de dossier du CUCA ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        une quittance de paiement des frais d'étude de dossier de la CUO ;
                    </li>
                    <li>
                        <i class="uil uil-check-circle"></i>
                        l'engagement à payer les frais de formation, d'inscription et de recherches (apprenant, parent ou tuteur d'apprenant).
                    </li>
                </ul>
            </div>
			</div>
		</div>

		<div class="row">
			<div class="hstack admission_part">
				<h6  @click="p3 = !p3" type="button" >Périodes d’admission</h6>
			    <i class="uil uil-plus-circle ms-auto" x-show="!p3" @click="p3 = !p3"></i>
			    <i class="uil uil-minus-circle ms-auto" x-show="p3" @click="p3 = !p3"></i>
			</div>
			<div x-show="p3" class="admission_detail1 ps-4">
				<p>Les dépôts de dossiers se font entre juin et septembre pour la rentrée universitaire de septembre. Les dates précises sont publiées sur les sites officiels ou par voie de communiqué à l’IFRI.</p>
			</div>
		</div>

		
		<div class="row">
			<div class="hstack admission_part">
				<h6  @click="p6 = !p6" type="button" >Frais de scolarité </h6>
			    <i class="uil uil-plus-circle ms-auto" x-show="!p6" @click="p6 = !p6"></i>
			    <i class="uil uil-minus-circle ms-auto" x-show="p6" @click="p6 = !p6"></i>
			</div>
			<div x-show="p6" class="admission_detail1 ps-4">
				<p>Les étudiants paient des frais d’inscription et de formation qui varient selon leur nationalité, cycle d’étude et statut de sélection.
				</p>
				<p class="pb-3">Tableau : Frais d’inscription et de formation</p>

				<img src="<?= asset('img/eee1.png') ?>" class="w-full" alt="Header Image">

				<p class="pt-2">NB : Ces frais sont susceptibles de modification.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="hstack admission_part">
				<h6  @click="p5 = !p5" type="button" >Accueil des étudiants anglophones </h6>
			    <i class="uil uil-plus-circle ms-auto" x-show="!p5" @click="p5 = !p5"></i>
			    <i class="uil uil-minus-circle ms-auto" x-show="p5" @click="p5 = !p5"></i>
			</div>
			<div x-show="p5" class="admission_detail1 ps-4">
				<p>L’IFRI accorde une attention particulière à l’intégration des étudiants anglophones au sein de ses formations. Conscient des défis linguistiques que peuvent rencontrer ces étudiants dans un environnement francophone, l’IFRI adopte une approche inclusive et proactive.  
				</p>
				<p>Ainsi, l’Institut a mis en place un programme d’immersion en langue française spécialement conçu pour accompagner les étudiants anglophones dans leur apprentissage du français et leur permettre de suivre avec succès les formations en informatique proposées par l’établissement.
				</p>
				<p>Par cette initiative, l’IFRI démontre son engagement en faveur de l’internationalisation de ses formations.
		      	<p>
		      		NB : L’ensemble des uniformes (tissus) et Lacoste) se paie au Service de la Comptabilité de l’IFRI.
		      	</p>
			</div>
		</div>
	


	</div>



</section>




