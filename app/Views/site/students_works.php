<section class="breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Recherche > Travaux des étudiants</p>
</section>


<section class="container-fluid ">
	<div class="col-md-12">
		<h3 class="text-black- fw-bold">Les séminaires hebdomadaires</h3>
		<div class="col-md-4 col-6 my-3" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
		<p style="text-align: justify; line-height: 30px">
			Chaque mardi, les étudiants en master, accompagnés par des professeurs et des professionnels, presentent des projets concrets de nature variée en presence de leur camarade sous la supervision d'un jury constitué pour les évaluer. Ce cadre leur permet de mettre en pratique, de manière intensive et en équipe, les connaissances qu'ils ont acquises au cours de l'année, et de travailler dans des conditions proches de celles qu'ils rencontreront en entreprise. Ce séminaire reçoit parfois des invités d'honneur pour des séances de partages d'experiences et des doctorants pour la présentation de leur travaux de recherche.<br>
		</p>
	</div>

	<hr class="my-4">

	<div class="">
		<div class="row">
			
			<h6 class="mb-4">L'opérationnalité de nos étudiants dès les premières années; le travail n'est pas un mythe !</h6> 
			<?php foreach ($studentworks as $studentwork) { ?>
				
				<div class="col-md-6 col-sm-9 mb-4">
					<div class="card studentwork_single">
					    <img src="<?= AllConstants()['APP_URL'].$studentwork['workImage'] ?>" class="card-img-top" style="height: 250px; object-fit: cover;">
					    <div class="card-body">
					      <h5 class="card-title fw-bold">
					      	<a href="<?= $studentwork['workUrl'] ?>" target="_blank" class="text-decoration-none"><?= $studentwork['workName'] ?></a>
					      </h5>
					      <p class="card-text"><?= $studentwork['workDescription'] ?></p>
					    </div>
					    <div class="card-footer">
					      <div class="hstack">
					      	<img src="<?= AllConstants()['APP_URL'].$studentwork['studentImage'] ?>" style="height: 40px; width: 40px; border-radius: 50%;">
					      	<b class="mx-auto text-orange-"><?= $studentwork['studentName'] ?></b>
					      </div>
					    </div>
					  </div>
				</div>

			<?php } ?>

		</div>
	</div>
</section>