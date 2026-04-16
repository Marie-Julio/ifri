<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px" type="button" onclick="history.back()"><i class="uil uil-arrow-left" style="font-size: 22px; color: var(--text-color);"></i> Retour</p>
</section>

<section class="container-fluid bg-light- rounded mb-4 py-4"  x-data="{show: false}">
	<div class="row posts" x-data="like">
		<div class="col-lg-11 post mx-auto">
			<div class="post_sub">
				<p>
					<i class="uil uil-clock"></i>
					<small><?= timeago($activity['created_at']) ?></small>
				</p>

				<h6 class="postTitle"><?= $activity['activityName'] ?></h6>
                
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6">
    					<a href="<?= AllConstants()['APP_URL'].$activity['activityImage'] ?>">
    						<img src="<?= AllConstants()['APP_URL'].$activity['activityImage'] ?>" class="postImage">
    					</a>
    				</div>
                </div>

				<p class="postDescription text-color-"><?= $activity['activityDescription'] ?></p>


				<?php 
					$listImages = explode(';', $activity['activityImages']);
				?>

				<div class="row">
					<!--<div class="col-12 col-md-6 col-lg-4">-->
					<!--	<a href="<?= AllConstants()['APP_URL'].$activity['activityImage'] ?>">-->
					<!--		<img src="<?= AllConstants()['APP_URL'].$activity['activityImage'] ?>" class="postImage">-->
					<!--	</a>-->
					<!--</div>-->
					<?php foreach ($listImages as $image): ?>
						<?php if (strlen($image)): ?>
							<div class="col-12 col-md-6 col-lg-4">
								<a href="<?= AllConstants()['APP_URL'].$image ?>">
									<img src="<?= AllConstants()['APP_URL'].$image ?>" class="postImage">
								</a>
							</div>
						<?php endif ?>
					<?php endforeach ?>
				</div>


				<button @click="show = ! show" type="button" class="button mb-4" style="color: var(--white); margin-top: 30px; font-size: 18px">S'inscrire</button>



				<div x-data="activitysuscribers">

					<form @submit.prevent="activitysuscriber_add_form" x-show="show" x-cloak class="bg-white border rounded p-sm-4 p-2">
						<div class="row">

							<h6 class="text-black-" style="font-weight: 600; margin-bottom: 15px">Remplissez ce formulaire pour postuler au programme</h6>

							<div x-text="success_message" style="color: var(--first-color); font-size: 16px; margin-bottom: 15px"></div>

							<span class="d-none" id="activityId"><?= $activity['activityId'] ?></span>
							
							<div class="col-lg-6 mb-4">
								<label>Nom et prénom(s)</label>
								<input type="text" required x-model="name" class="form-control-">
							</div>
							
                            <div class="col-lg-6 mb-4">
								<label>Email</label>
								<input type="email" required x-model="email" class="form-control-">
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Téléphone</label>
								<input type="tel" required x-model="telNumber" class="form-control-">
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Genre</label>
								<select required class="form-control-" x-model="sex">
									<option></option>
									<option value="Masculin">Masculin</option>
									<option value="Féminin">Féminin</option>
									<option value="Neutre">Neutre</option>
								</select>
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Statut</label>
								<select required class="form-control-" x-model="profil">
									<option></option>
									<option value="Etudiant">Etudiant</option>
									<option value="Professionnel">Professionnel</option>
									<option value="Doctorant">Doctorant</option>
									<option value="Docteur">Docteur</option>
									<option value="Enseignant-Chercheur">Enseignant-Chercheur</option>
								</select>
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Pays</label>
								<select required class="form-control-" x-model="country">
									<option></option>
									<?= getAllCountrySelect() ?>
								</select>
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Nationalité</label>
								<input type="text" required x-model="nationality" class="form-control-">
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Ville</label>
								<input type="text" required x-model="city" class="form-control-">
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Institution d'appartenance</label>
								<input type="text" required x-model="belongInstitut" class="form-control-">
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Section</label>
								<?php 
									$listSections = explode(';', $activity['activitySection']);
								?>
								<select required class="form-control-" x-model="section">
									<option></option>
									<?php foreach ($listSections as $section): ?>
										<option value="<?= $section ?>"><?= $section ?></option>
									<?php endforeach ?>
								</select>
							</div>
							
							<div class="col-lg-12 mb-4">
								<label>Titre de l'article</label>
								<input type="text" required x-model="articleTitle" class="form-control-">
							</div>
							
							<div class="col-lg-12 mb-4">
								<label>Résumé de l'article</label>
								<textarea class="form-control-" required x-model="articleAbstract" rows="4"></textarea>
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Joindre un fichier (optionel)</label>
								<input type="file" id="joinedFile" accept=".pdf, .docx" class="form-control">
							</div>
							
							<div class="col-lg-6 mb-4">
								<label>Photo d'identité (optionel)</label>
								<input type="file" accept=".png, .jpg" id="picture" class="form-control">
							</div>
							
						</div>
						
						<div x-text="success_message" style="color: var(--first-color); font-size: 16px;"></div>
						
						<div class="row">
							<div class="text-center text-primary- mt-3" x-cloak x-show="loading">
							  <div class="spinner-border" role="status"></div>
							</div>
							<div class="col-sm-12 mt-4 text-center" x-show="!loading">
								<input type="submit" class="button btn-primary-" name="">
							</div>
						</div>
					</form>
					
				</div>



				<div class="hstack">
					<div @click="setNumberLove('activity', '<?= $activity['activityId'] ?>')">
						<i type="button" class="uil uil-heart fs-5 <?= hasLike('activity'.$activity['activityId']) ?>" :id="'like'+<?= $activity['activityId'] ?>"></i>
						<span :id="'numberLove'+<?= $activity['activityId'] ?>"><?= $activity['activityNumberLove'] ?></span>
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
</section>