<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Formation > Doctorat</p>
</section>


<section class="container-fluid formation__content" x-data="formation"  x-data="show_licence: false">

	<div>
		
	</div>

	<div class="container">
		<h3 class="text-black-">Les formations de Doctorat</h3>

		<hr style="margin: 15px">
		<div class="row">

        <?php foreach ($formations as $formation): ?>
            <div class="col-lg-4 col-md-6 mb-4 col-sm-12 mx-auto">
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