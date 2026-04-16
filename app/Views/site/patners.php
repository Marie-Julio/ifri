<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Coopération</p>
</section>

<div class="container mb-4">
	<div class="row">
		<div class="col-lg-6">
			<h5 class="text-black- fw-bold">Un partenariat fort avec les entreprises et universités</h5>
			<div class="col-6 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
			<p style="text-align: justify; line-height: 30px">
				Depuis plus de <?= (date('Y') - 2012) ?> ans l'IFRI entretient des liens de coopération forts avec un tissu d'entreprises et d'universités dans tous les secteurs d'activités. Ces entreprises viennent rechercher un regard innovant et une méthodologie claire pour traiter les defis technologiques et de transformation auquels elles sont confrontées. C'est d'ailleurs souvent un terrain idéal pour les étudiants pour trouver un stage, une alternance ou un emploi. 
			</p>
		</div>
		<div class="col-lg-6">
			<h5 class="text-black- fw-bold">Les projets intégrateurs</h5>
			<div class="col-6 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
			<p style="text-align: justify; line-height: 30px">
				Les projets intégrateurs sont un liant essentiel entre les differents cours qui composent les offres de formations. Ils permettent à l'étudiant de mobiliser ces compétences sur des cas réels mais également de parfaire son savoir-être au contact de vraies entreprises. C'est une forme d'apprentissage capitale pour acquérir une opérationnalité forte mais également pour comprendre et transformer le monde dans lequel évoluent les étudiants. 
			</p>
		</div>
	</div>
	<section class="row patner pt-0">
		<h3 class="text-center section__title1">NOS PARTENAIRES</h3>
		<br><br>
		<table class="table table-bordered text-center">
			<thead class="table-dark">
				<tr>
					<th>Logo</th>
					<th style="width: 30%;">Nom partenaire</th>
					<th>Situation géographique</th>
					<th>Domaine d'activité</th>
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
	</section>
</div>