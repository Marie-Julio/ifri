<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Actualités > Evènements</p>
</section>



<section class="container-fluid bg-light- rounded mb-4 pb-4">
	<?php foreach ($events as $event): ?>
		<div class="row posts" x-data="like">
			<div class="col-lg-11 post mx-auto">
				<div class="post_sub">
					<div>
						<i class="uil uil-clock"></i>
						<small><?= timeago($event['created_at']) ?></small>
					</div>

					<a href="<?= AllConstants()['SITE_URL'].'event/'.$event['eventSlug'] ?>" class="text-decoration-none">
						<h6 class="postTitle"><?= $event['eventName'] ?></h6>
					</a>

					<div class="mb-4" style="height: 90px; overflow: hidden;">
						<?= $event['eventDescription'] ?>
					</div>

					<p style="margin-top: -20px; margin-bottom: 30px;">
						<a href="<?= AllConstants()['SITE_URL'].'event/'.$event['eventSlug'] ?>" class="text-decoration-none text-primary- fw-bold">Lire plus</a>
					</p>

					<?php 
						$listImages = explode(';', $event['eventImages']);
					?>

					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 mt-2 d-none d-md-block">
							<a href="<?= AllConstants()['APP_URL'].$event['eventImage'] ?>"><img src="<?= AllConstants()['APP_URL'].$event['eventImage'] ?>" class="postImage"></a>
						</div>
						<?php foreach ($listImages as $image): ?>							
							<?php if (strlen($image) > 5): ?>
								<div class="col-12 col-md-6 col-lg-4 mt-2 d-none d-md-block">
									<a href="<?= AllConstants()['APP_URL'].$image ?>"><img src="<?= AllConstants()['APP_URL'].$image ?>" class="postImage"></a>
								</div>
							<?php endif ?>
						<?php endforeach ?>
					</div>

					

					<div class="hstack">
						<div @click="setNumberLove('event', '<?= $event['eventId'] ?>')">
							<i type="button" class="uil uil-heart fs-5 <?= hasLike('event'.$event['eventId']) ?>" :id="'like'+<?= $event['eventId'] ?>"></i>
							<span :id="'numberLove'+<?= $event['eventId'] ?>"><?= $event['eventNumberLove'] ?></span>
						</div>

						<div class="ms-auto dropup">
							<i class="uil uil-share-alt"></i>
							<span data-bs-toggle="dropdown" aria-expanded="false">Partager</span>
							<ul class="dropdown-menu">
							    <li><a class="dropdown-item" href="#"><i class="uil uil-envelope share_link_i"></i> <span class="share_link">Email</span></a></li>
							    <li><a class="dropdown-item" href="#"><i class="uil uil-whatsapp share_link_i"></i> <span class="share_link">Whatsapp</span></a></li>
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

