<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Galerie</p>
</section>



<section class="container-fluid bg-light- P-4">
	<a href="<?= asset('img/gallery_header.png') ?>"><img src="<?= asset('img/gallery_header.png') ?>" class="rounded"></a>
	<div class="row mt-4">
		<h3 class="text-center fw-bold mb-4 mt-4">Nous découvrir en image</h3>
		

		<div class="row">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6 mb-4 px-2">
						<a href="<?= AllConstants()['APP_URL'].$galeries[0]['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galeries[0]['galeryImage'] ?>" class="rounded h-220"></a>
					</div>
					<div class="col-lg-6 mb-4 px-2">
						<a href="<?= AllConstants()['APP_URL'].$galeries[1]['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galeries[1]['galeryImage'] ?>" class="rounded h-220"></a>
					</div>
					<div class="col-lg-12 mb-4 px-2">
						<a href="<?= AllConstants()['APP_URL'].$galeries[2]['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galeries[2]['galeryImage'] ?>" class="rounded xxh-220" ></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12 mb-4 px-2">
						<a href="<?= AllConstants()['APP_URL'].$galeries[3]['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galeries[3]['galeryImage'] ?>" class="rounded xxh-220"></a>
					</div>
					<div class="col-lg-6 mb-4 px-2">
						<a href="<?= AllConstants()['APP_URL'].$galeries[4]['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galeries[4]['galeryImage'] ?>" class="rounded h-220"></a>
					</div>
					<div class="col-lg-6 mb-4 px-2">
						<a href="<?= AllConstants()['APP_URL'].$galeries[5]['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galeries[5]['galeryImage'] ?>" class="rounded h-220"></a>
					</div>
				</div>				
			</div>
		</div>

		<?php $i = 0; ?>

		<?php foreach ($galeries as $galery): $i++; ?>
			<?php if ($i > 6): ?>
				<div class="col-lg-4 mb-4">
					<a href="<?= AllConstants()['APP_URL'].$galery['galeryImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$galery['galeryImage'] ?>" class="rounded" style=" height:  220px; width: 100%; object-fit: cover;"></a>
				</div>
			<?php endif ?>
			
		<?php endforeach ?>
	</div>
</section>	