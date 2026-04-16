
<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px" type="button" onclick="history.back()"><i class="uil uil-arrow-left" style="font-size: 22px; color: var(--text-color);"></i> Retour</p>
</section>

<section class="container-fluid bg-light- rounded mb-4 p2-4">
	<div class="row posts" x-data="like">
		<div class="col-lg-11 post mx-auto">
			<div class="post_sub">
				<p>
					<i class="uil uil-clock"></i>
					<small><?= timeago($infonote['created_at']) ?></small>
				</p>

				<h6 class="postTitle"><?= $infonote['infonoteName'] ?></h6>

				<p class="postDescription"><?= $infonote['infonoteDescription'] ?></p>

				<?php 
					$listImages = explode(';', $infonote['infonoteImage']);
				?>

				<div class="row">
					<?php foreach ($listImages as $image): ?>
						<div class="col-12 col-md-6 col-lg-4">
							<a href="<?= AllConstants()['APP_URL'].$image ?>">
								<img src="<?= AllConstants()['APP_URL'].$image ?>" class="postImage">
							</a>
						</div>
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
</section>

