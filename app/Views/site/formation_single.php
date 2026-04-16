<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > <a href="<?= route('formations') ?>" class="text-decoration-none text-black-">Formation</a> > <?= $formation['formationDiploma'].' '.$formation['formationName'] ?> </p>
</section>

<section class="container-fluid single_formation">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="single_formation_name"><?= $formation['formationName'] ?></h2>
				<p class="single_formation_short_des">
					<?= $formation['formationObjectif'] ?>
				</p>
				<a href="#infos" class="text-decoration-none mt-4 text-white button"> <i class="uil uil-angle-double-down text-white"></i> PLUS D'INFORMATION</a>
				<a href="#debouche" class="text-decoration-none mt-4 text-white button"><i class="uil uil-angle-double-down text-white"></i> DEBOUCHES</a>
			</div>
			<div class="col-lg-6 text-center  d-none d-lg-block">
				<img src="<?= AllConstants()['APP_URL'].$formation['formationImage'] ?>" style="height: 320px;">
			</div>
		</div>
	</div>
</section>


<section class="container-fluid one_formation__content" id="infos">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 one_formation__content_sub mx-auto ">
				<div class="row">
					<h2 class="single_formation_infos_title"><?= $formation['formationName'] ?>, qu’est-ce que c’est ?</h2>
					<p class="single_formation_infos_des">
						<?= $formation['formationDetail'] ?>
					</p> 
				</div>
				<a href="<?= asset('pdf/Tables_Offres_IFRI.pdf') ?>" download="OFFRE DE FORMATION IFRI" class="text-decoration-none my-3 text-white button"><i class="uil uil-import text-white"></i> TELECHERGER L'OFFRE DE FORMATION</a>


				<?php $courses = explode(';', $formation['formationCourses']) ?>
				<?php if (count($courses) > 1): ?>
					<div class="row">
						<h4 class="single_formation_infos_sub_title">Les principales matières</h4>
						<ul class="me-2">
							<?php foreach ($courses as $key => $value): ?>
								<li> <i class="uil uil-check-circle"></i><?php if(strlen($value) > 0) echo $value; ?></li>
							<?php endforeach ?>
						</ul>
					</div>
				<?php endif ?>

				
				<?php if ($formation['formationJobs'] != null): ?>
					<?php $jobs = explode(';', $formation['formationJobs']) ?>
					<?php if (count($jobs) > 1): ?>
						<div class="row" id="debouche">
							<h4 class="single_formation_infos_sub_title">Débouchés</h4>
							<ul class="me-2">
								<?php foreach ($jobs as $key => $value): ?>
									<li> <i class="uil uil-check-circle"></i><?php if(strlen($value) > 0) echo $value; ?></li>
								<?php endforeach ?>
							</ul>
						</div>
					<?php endif ?>
				<?php endif ?>

				
				<?php if ($formation['formationProfils'] != null): ?>
					<?php $profils = explode(';', $formation['formationProfils']) ?>
					<?php if (count($profils) > 1): ?>
						<div class="row" id="debouche">
							<h4 class="single_formation_infos_sub_title">Profils</h4>
							<ul class="me-2">
								<?php foreach ($profils as $key => $value): ?>
									<li> <i class="uil uil-check-circle"></i><?php if(strlen($value) > 0) echo $value; ?></li>
								<?php endforeach ?>
							</ul>
						</div>
					<?php endif ?>
				<?php endif ?>

			</div>

			<div class="col-lg-4 col-md-6 col-sm-12 d-none d-lg-block" style="background-color: var(--white); height: 430px; position: sticky; top: 0px; right: 0px">
				<div class="formation__item">
					<a href="<?= AllConstants()['SITE_URL'].'formation/'.$formation['formationSlug'] ?>">
						<img src="<?= AllConstants()['APP_URL'].$formation['formationImage'] ?>" alt="Licence Génie Logiciel">
						<div class="formation_item_desc">
							<p><i class="uil uil-graduation-cap"></i> <b>Diplôme</b> : <?= $formation['formationDiploma'] ?></p>
							<p><i class="uil uil-book"></i> <b>Formation</b> : <?= $formation['formationName'] ?></p>
							<p><i class="uil uil-clock"></i> <b>Durée</b> : <?= $formation['formationDuration'] ?></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
