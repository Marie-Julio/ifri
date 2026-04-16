<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Actes académiques</p>
</section>

<div class="container mb-4">
	<h5 class="text-black- fw-bold">Portant conditions de délivrance des actes académiques et autres</h5>
	<p>Les pièces à fournir pour la délivrance des actes académiques à l'Institut de Formation et de Recherche en Informatique (IFRI) et les coûts y afférents se présentent ci-dessous :</p>
	<p style="border: 2px solid var(--orange); margin-bottom: 10px; padding: 10px 20px;">
		<span style="font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-size: 14.6667px; text-align: start; white-space-collapse: preserve;">Sur le compte ouvert dans les livres du <span style="font-weight: bolder;">Trésor Public au N° BJ6600100100000104477437</span> ; Intitulé du compte <span style="font-weight: bolder;">IFRI</span> ou en ligne via le lien<span style="font-weight: bolder;"> </span></span>
		<font color="#0000ff"><span style="font-family: Roboto, Arial, sans-serif; font-size: 14.6667px; text-align: start; white-space-collapse: preserve;"><span style="font-weight: bolder;">https://equittancetresor.finances.bj:9051/paiement</span></span><span style="font-weight: bolder;"><span style="font-family: Roboto, Arial, sans-serif; font-size: 14.6667px; text-align: start; white-space-collapse: preserve;">/</span></span></font>
		<span style="font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-size: 14.6667px; text-align: start; white-space-collapse: preserve;"> représentant les frais d'étude de dossier. SVP sur le site au niveau de l'option : </span><span style="font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(255, 0, 0); font-size: 13px; font-weight: 600; text-align: start; text-transform: uppercase;">SELECTIONNEZ UN MOTIF OU UN OBJET POUR LA TRANSACTION (QUITTANCE)</span>
		<span style="font-family: Roboto, Arial, sans-serif; color: rgb(32, 33, 36); font-size: 14.6667px; text-align: start; white-space-collapse: preserve;"> Choisissez DEPOT SUR COMPTE DES CORRESPONDANTS (SERVICE EPARGNE) puis saisissez le numéro de compte de l'IFRI sur 24 positions.</span>
	</p>

	<section class="testimony">
		<div class="">
			<div class="testimony_mb">
				<div class="row">
					<?php foreach ($acte_academiques as $acte_academique): 
						$description = $acte_academique['description'];
						$maxLength = 150;
						$isLong = strlen($description) > $maxLength;
						$shortDescription = substr($description, 0, $maxLength);
					?>
					<div class="col-lg-4">
						<div class="testimony__item">
							<div class="testimony__item_sub">
								<h4><?= $acte_academique['type_acte'] ?></h4>
								<p class="text-start">
									<span class="short-text"><?= $isLong ? $shortDescription . '...' : nl2br($description) ?></span>
									<?php if ($isLong): ?>
										<span class="full-text d-none"><?= nl2br($description) ?></span>
										<button class="btn btn-link p-0 toggle-text">Voir plus</button>
									<?php endif; ?>
								</p>
								<h4 class="text-danger fw-bold">Coût : <?= $acte_academique['montant'] ?></h4>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.toggle-text').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const container = btn.closest('p');
            const shortText = container.querySelector('.short-text');
            const fullText = container.querySelector('.full-text');
            
            const isExpanded = fullText.classList.contains('d-block');

            if (isExpanded) {
                fullText.classList.remove('d-block');
                fullText.classList.add('d-none');
                shortText.style.display = 'inline';
                btn.textContent = 'Voir plus';
            } else {
                fullText.classList.remove('d-none');
                fullText.classList.add('d-block');
                shortText.style.display = 'none';
                btn.textContent = 'Voir moins';
            }
        });
    });
});
</script>

<style>
.short-text, .full-text {
    display: inline;
}
.full-text.d-none {
    display: none;
}
</style>
