<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-"><b>Accueil</b></a> > Gouvernance > Distinctions</p>
</section>

<section>
	<img src="<?= asset('img/cultural_activity.jpg') ?>" class="rounded" style="max-height: 350px; width: 100%; object-fit: cover;">
	<div class="col-lg-10  mx-auto bg-green- rounded p-4" style="margin-top: -50px; position: relative;">
		<h2 class="text-center text-white fw-bold text-2">
			Les performances des étudiants de l'IFRI font parler de l'Institut au plan national qu'international. 
		</h2>
	</div>
</section>

<section class="container-fluid distinction">
	<div class="container  administation">
		<h5 class="text-black- fw-bold">Distinction</h5>
		<div class="col-2 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
		</div>
</section>

<section>
	<div class="container p-4">
		<div class="row">
		<div class="col-lg-9">
            <?php $distinctions = getDistinctionsForYear($year); ?>

            <div class="distinction__item" style="margin-top: 0px;">
                <h3 class="distinction__item__title">En <?= $year ?></h3>
                <div class="row">
                <?php foreach ($distinctions as $distinction) { ?>
        
                <p class="col-lg-12 px-4 distinction__item__subtitle">
                    <i class="uil uil-medal distinction__item__icon"></i>  
                    <?= $distinction['distinctionDescription'] ?>
                </p>
				<div class="row">
            		<?php $dist_imgs = getImgForDist($distinction['distinctionId']); 
					foreach ($dist_imgs as $dist_img) { ?>
						<div class="col-lg-3">
							<img src="<?= AllConstants()['APP_URL'].$dist_img['image'] ?>">
						</div>
					<?php }   ?>
				</div>
                <?php }   ?>

                </div>

            </div>
		</div>


		<div class="col-lg-3 d-lg-block d-none">
			<div class="links">
				<dl style="text-align: center; height: 300px; overflow: auto;">
					<dt>Distinction par année</dt>
					<?php foreach ($distinctionYears as $distinctionYear) {  ?>
					<dd class="mt-4"><a href="<?= AllConstants()['SITE_URL'].'distinctionid/'.$distinctionYear['distinctionYear'] ?>">
						<i class="uil uil-calendar-alt"></i> 
						<?= $distinctionYear['distinctionYear'] ?></a></dd>
					<?php } ?>
				</dl>
			</div>
		</div>

		</div>

	</div>



</section>
