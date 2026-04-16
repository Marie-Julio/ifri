<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Gouvernance > <a href="<?= route('administration') ?>" class="text-decoration-none text-black-">Administration</a> > <?= $administrator['administratorName'] ?></p>
</section>

<section>
	<div class="container">

		<div class="container-fluid  administation">
			<div class="row">

				<div class="text-center">
					<!-- <div class="item_top"></div> -->
					<div class="row item_1">
							<h4 class="item__name"><?= $administrator['administratorName'] ?></h4>
							<p class="text-black-"><?= $administrator['administratorPost'] ?></p>
							<div class="col-lg-6">
								<img src="<?= AllConstants()['APP_URL'].$administrator['administratorImage'] ?>">
							
							</div>
							<div class="col-lg-6">
								<p class="text-black- mt-4 px-2" style="line-height: 30px; font-size: 16px; text-align: justify;"><?= $administrator['administratorDescription'] ?></p>
							</div>
							<div class="mt-4 mb-4">
		                        <a href="#" target="_blank"><i class="uil uil-link administration_member_social"></i></a>
		                        <a href="<?= $administrator['administratorLinkedin'] ?>" target="_blank"><i class="uil uil-linkedin administration_member_social"></i></a>
		                        <a href="mailto:<?= $administrator['administratorInstagram'] ?>"><i class="uil uil-envelope administration_member_social"></i></a>
		                    </div>
					</div>
				</div>


			</div>
		</div>

	</div>



</section>
