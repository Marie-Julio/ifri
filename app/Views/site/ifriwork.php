<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px; border: 1px solid #888; border-radius: 5px; padding: 0px 20px;" type="button" onclick="history.back()"><i class="uil uil-arrow-left" style="font-size: 22px; color: var(--text-color);"></i> Retour</p>
</section>


<section class="container-fluid direction">
	<div class="col-md-10 mx-auto">
		<div class="row">
			<div class="my-4">
                <h6 class="text-white p-4 bg-primary-"><?= $ifriwork['projectName'] ?></h6>
                <img src="<?= AllConstants()['APP_URL'].'/'.$ifriwork['image'] ?>">
                <p class="text-black- text-5 my-4"><?= $ifriwork['description'] ?></p>  
            </div>
		</div>
	</div>
</section>