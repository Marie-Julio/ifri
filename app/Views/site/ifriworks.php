<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Gouvernance > <a href="<?= route('community-service') ?>" class="text-decoration-none text-black-">Service à communauté</a> > Les projets de l'IFRI</p>
</section>

<section class="container-fluid direction">
	<div class="container">
		<div class="row g-4">
			<?php foreach ($ifriworks as $ifriwork): ?>
                <div class="col-md-6">
                    <div class="my-4 ifriwork-item shadow-sm"> 
                        <img src="<?= AllConstants()['APP_URL'].'/'.$ifriwork['image'] ?>">
                        <div class="p-3">
                            <h3><?= $ifriwork['projectName'] ?></h3>
                            <p class="text-color- text-justify text-5 mb-4"><?= makeSubstr($ifriwork['description'], null, 250) ?></p>
                            <a href="<?= route('ifriwork', [$ifriwork['projectSlug']]) ?>" class="text-decoration-none">
                                <div style="width: 100%;">Plus de détails sur le projet <i class="uil uil-plus"></i></div>
                            </a>
                        </div>    
                    </div>
                </div>
            <?php endforeach ?>
		</div>
	</div>
</section>