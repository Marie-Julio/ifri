<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Gouvernance > <a href="<?= route('administration') ?>" class="text-decoration-none text-black-">Administration</a> > <?= $periode['date_debut'] ?></p>
</section>

<section>
	<div class="container">
		<div class="row">
		<div class="col-lg-8">
			<div class="container-fluid  administation ">
				<div class="card p-3 text-center" style="border: 4px solid var(--first-color);">
					<?php if ($periode['date_fin']=='') { ?><h4 class="item__name" style="color: var(--first-color), font-weight: 700;">
					<i class="uil uil-calendar-alt"></i> Depuis le <?= $periode['date_debut'] ?></h4>
					<?php }else{ ?><h4 class="item__name" style="color: var(--first-color), font-weight: 700;"><i class="uil uil-calendar-alt"></i> Du <?= $periode['date_debut'] ?> au <?= $periode['date_fin'] ?></h4><?php } ?>
				</div><br >
				<h5 class="text-black- fw-bold">Comité Restreint de Direction (CRD)</h5>
				<div class="col-2 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
				<div class="row">
					<?php foreach ($administrators1 as $administrator) { ?>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto text-center" style=" margin-top : 20px;" type="button" onclick="document.location.href='<?= AllConstants()['SITE_URL'].'administrator/'.$administrator['administratorSlug'] ?>'; return false">
							<!-- <div class="item_top"></div> -->
								<img src="<?= AllConstants()['APP_URL'].$administrator['administratorImage'] ?>">
							<div class="item">
								<h4 class="item__name"><?= $administrator['administratorName'] ?></h4>
								<p style="color: #555"><?= $administrator['administratorPost'] ?></p>
								<div class="mt-4">
									<a href="#" target="_blank"><i class="uil uil-link administration_member_social"></i></a>
									<a href="<?= $administrator['administratorLinkedin'] ?>" target="_blank"><i class="uil uil-linkedin administration_member_social"></i></a>
									<a href="mailto:<?= $administrator['administratorInstagram'] ?? "#" ?>"><i class="uil uil-envelope administration_member_social"></i></a>
								</div>
							</div>
						</div>
						
					<?php } ?>

				</div>
				<br >
				<h5 class="text-black- fw-bold">Personnel de l'administration</h5>
				<div class="col-2 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
				<div class="row">
					<?php foreach ($administrators2 as $administrator) { ?>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto text-center" style=" margin-top : 20px;" type="button" onclick="document.location.href='<?= AllConstants()['SITE_URL'].'administrator/'.$administrator['administratorSlug'] ?>'; return false">
							<!-- <div class="item_top"></div> -->
								<img src="<?= AllConstants()['APP_URL'].$administrator['administratorImage'] ?>">
							<div class="item">
								<h4 class="item__name"><?= $administrator['administratorName'] ?></h4>
								<p style="color: #555"><?= $administrator['administratorPost'] ?></p>
								<div class="mt-4">
									<a href="#" target="_blank"><i class="uil uil-link administration_member_social"></i></a>
									<a href="<?= $administrator['administratorLinkedin'] ?>" target="_blank"><i class="uil uil-linkedin administration_member_social"></i></a>
									<a href="mailto:<?= $administrator['administratorInstagram'] ?? "#" ?>"><i class="uil uil-envelope administration_member_social"></i></a>
								</div>
							</div>
						</div>
						
					<?php } ?>
				</div>
				<br >
				<?php if($administrators3) {?>
				<h5 class="text-black- fw-bold">Chef de Département</h5>
				<div class="col-2 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
				<div class="row">
					<?php foreach ($administrators3 as $administrator) { ?>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto text-center" style=" margin-top : 20px;" type="button" onclick="document.location.href='<?= AllConstants()['SITE_URL'].'administrator/'.$administrator['administratorSlug'] ?>'; return false">
							<!-- <div class="item_top"></div> -->
								<img src="<?= AllConstants()['APP_URL'].$administrator['administratorImage'] ?>">
							<div class="item">
								<h4 class="item__name"><?= $administrator['administratorName'] ?></h4>
								<p style="color: #555"><?= $administrator['administratorPost'] ?></p>
								<div class="mt-4">
									<a href="#" target="_blank"><i class="uil uil-link administration_member_social"></i></a>
									<a href="<?= $administrator['administratorLinkedin'] ?>" target="_blank"><i class="uil uil-linkedin administration_member_social"></i></a>
									<a href="mailto:<?= $administrator['administratorInstagram'] ?? "#" ?>"><i class="uil uil-envelope administration_member_social"></i></a>
								</div>
							</div>
						</div>
						
					<?php } ?>

				</div>
				<?php } ?>
			</div>
		</div>


		<div class="col-lg-4 ">
			<div class="links">
				<dl>
					<dt>Tous les périodes</dt>
					<?php foreach ($periodes as $periode) { ?>
					<dd class="mt-4"><a href="<?= AllConstants()['SITE_URL'].'administrationid/'.$periode['id'] ?>">
						<i class="uil uil-calendar-alt"></i>
						<?php if ($periode['date_fin']=='') { ?>
							Depuis le <?= $periode['date_debut'] ?>
							<?php }else{ ?>Du <?= $periode['date_debut'] ?> au <?= $periode['date_fin'] ?><?php } ?></a></dd>
					<?php } ?>
				</dl>
			</div>
		</div>

		</div>

	</div><br /><br />



</section>
