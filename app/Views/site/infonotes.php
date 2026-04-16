<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Actualités > Notes d'informations</p>
</section>


<section class="container-fluid bg-light- rounded mb-4 py-4">
	<?php foreach ($infonotes as $infonote): ?>
		<div class="row posts" x-data="like">
			<div class="col-lg-11 post mx-auto">
				<div class="post_sub">
					<p>
						<i class="uil uil-clock"></i>
						<small><?= timeago($infonote['created_at']) ?></small>
					</p>

					<a href="<?= AllConstants()['SITE_URL'].'infonote/'.$infonote['infonoteSlug'] ?>" class="text-decoration-none">
						<h6 class="postTitle"><?= $infonote['infonoteName'] ?></h6>
					</a>


					<div class="mb-4" style="height: 90px; overflow: hidden;">
						<?= $infonote['infonoteDescription'] ?>
					</div>
					
					<p style="margin-top: -20px; margin-bottom: 30px;">
						<a href="<?= AllConstants()['SITE_URL'].'infonote/'.$infonote['infonoteSlug'] ?>" class="text-decoration-none text-primary- fw-bold">Lire plus</a>
					</p>

					<?php 
						$listImages = explode(';', $infonote['infonoteImages']);
					?>

					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 mt-2 d-none d-md-block">
							<a href="<?= AllConstants()['APP_URL'].$infonote['infonoteImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$infonote['infonoteImage'] ?>" class="postImage"></a>
						</div>
						<?php $i = 0; foreach ($listImages as $image): $i++; ?>							
							<?php if (strlen($image)): ?>
								<div class="col-12 col-md-6 col-lg-4 mt-2 d-none d-md-block">
									<a href="<?= AllConstants()['APP_URL'].$image ?>"><img src="<?= AllConstants()['APP_URL'].$image ?>" class="postImage"></a>
								</div>
							<?php endif ?>
						<?php endforeach ?>
					</div>


					<div class="hstack">
						<div @click="setNumberLove('infonote', '<?= $infonote['infonoteId'] ?>')">
							<i type="button" class="uil uil-heart fs-5 <?= hasLike('infonote'.$infonote['infonoteId']) ?>" :id="'like'+<?= $infonote['infonoteId'] ?>"></i>
							<span :id="'numberLove'+<?= $infonote['infonoteId'] ?>"><?= $infonote['infonoteNumberLove'] ?></span>
						</div>
						<div class="ms-auto dropup">
							<i class="uil uil-share-alt"></i>
							<span data-bs-toggle="dropdown" aria-expanded="false">Partager</span>
							<ul class="dropdown-menu">
							    <li><a class="dropdown-item" href="#"><i class="uil uil-envelope share_link_i"></i> <span class="share_link">Email</span></a></li>
							    <li><a class="dropdown-item" href="#"><i class="uil uil-facebook share_link_i"></i> <span class="share_link">Facebook</span></a></li>
							    <li><a class="dropdown-item" href="#"><i class="uil uil-twitter share_link_i"></i> <span class="share_link">Twitter</span></a></li>
							    <li><a class="dropdown-item" href="#"><i class="uil uil-instagram share_link_i"></i> <span class="share_link">Instagram</span></a></li>
							  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</section>

