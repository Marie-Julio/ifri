<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Formation</p>
</section>


<section class="container-fluid formation__content" x-data="formation"  x-data="show_licence: false">

	<div>
		
	</div>

	<div class="container">
		<h3 class="text-black-">Quel est le diplôme que vous souhaitez avoir ?</h3>
		<div class="diplomas">
			<button class="btn-outline-licence" :class="licence" x-on:click="select('licence')">Licence</button>
			<button class="btn-outline-master" :class="master" x-on:click="select('master')">Master</button>
			<button class="btn-outline-doctorat" :class="doctorat" x-on:click="select('doctorat')">Doctorat</button>
			<button class="btn-outline-formation_continue" :class="formation_continue" x-on:click="select('formation_continue')">Formation continue</button>
		</div>
		<hr style="margin: 15px">
		<div class="row">

			<?php foreach ($formations as $formation): ?>
				<div class="col-lg-4 col-md-6 mb-4 col-sm-12 mx-auto" :class="show_<?= strtolower($formation['formationDiploma']) ?>">
					<div class="formation__item">
						<a href="<?= AllConstants()['SITE_URL'].'formation/'.$formation['formationSlug'] ?>">
							<img src="<?= AllConstants()['APP_URL'].$formation['formationImage'] ?>" alt="<?= $formation['formationDiploma'].' '.$formation['formationName'] ?>">
							<div class="formation_item_desc">
								<p><i class="uil uil-graduation-cap"></i> <b>Diplôme</b> : <?= $formation['formationDiploma'] ?></p>
								<p><i class="uil uil-book"></i> <b>Formation</b> : <?= $formation['formationName'] ?></p>
								<p><i class="uil uil-clock"></i> <b>Durée</b> : <?= $formation['formationDuration'] ?></p>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach ?>

		</div>
	</div>
</section>