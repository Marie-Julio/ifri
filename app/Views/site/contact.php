<section class="container breadcrumb">
	<p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Contact</p>
</section>


<secton class="container-fluid" x-data="contact">
	<div class="col-lg-12 col-11 mx-auto">
		<div class="row">

			<div class="col-lg-5 col-11 mb-4 pb-4 rounded ">
				<div class="row">
					<h5 class="text-black- fw-bold text-primary-"> CONTACT</h5>
				</div>

				<p class="my-3"  style="text-align: justify; color: var(--text-color); font-size: 15px;">
					L'Institut de Formation et de Recherche en Informatique de l'Université d'Abomey-Calavi (IFRI-UAC) est situé sur le campus de l'Université. L'Administration est ouvert du lundi au vendredi et de 8h à 16h30
				</p>

				<div class="hstack mb-3">
					<i class="uil uil-phone shadow-sm contact__icon"></i>
					<a href="tel:+229 55 02 80 70" class="text-decoration-none"><span class="contact__subtitle">(+229) 55 02 80 70</span></a>
				</div>

				<div class="hstack mb-3">
					<i class="uil uil-envelope shadow-sm contact__icon"></i>
					<a href="mailto:contact@ifri.uac.bj" class="text-decoration-none"><span class="contact__subtitle">secretariat@ifri.uac.bj</span></a>
				</div>

				<div class="hstack mb-3">
					<i class="uil uil-location-point shadow-sm contact__icon"></i>
					<span class="contact__subtitle">Université d'Abomey-Calavi - Campus, Rue Agro Maquis FSA</span>
				</div>

			</div>

			<div class="col-lg-6 offset-lg-1 pb-4 ">
				<div class="row">
					<h5 class="text-black- fw-bold"> Laissez-nous un message</h5>
				</div>
				<form @submit.prevent="contact_form">
					<div x-text="success_message" style="color: var(--first-color); font-size: 16px"></div>
					<div class="row">
						<div class="mt-4 col-sm-6">
							<label class="mb-2" for="">Nom</label>
							<input type="text" x-model="lastname" @input.debounce="check_form()" class="form-control-">
							<span class="error" x-text="error_lastname"></span>
						</div>
						<div class="mt-4 col-sm-6">
							<label class="mb-2" for="">Prénom</label>
							<input type="text" x-model="firstname" @input.debounce="check_form()" class="form-control-">
							<span class="error" x-text="error_firstname"></span>
						</div>
					</div>
					<div class="row">
						<div class="mt-4 col-sm-6">
							<label class="mb-2" for="">Email</label>
							<input type="email" x-model="email" @input.debounce="check_form()" class="form-control-">
							<span class="error" x-text="error_email"></span>
						</div>
						<div class="mt-4 col-sm-6">
							<label class="mb-2" for="">Objet</label>
							<input type="text" x-model="object" @input.debounce="check_form()" class="form-control-">
							<span class="error" x-text="error_object"></span>
						</div>
					</div>
					<div class="row">
						<div class="mt-4 col-sm-12">
							<label class="mb-2" for="">Message</label>
							<textarea class="form-control-" rows="2"  @input.debounce="check_form()" x-model="message" rows="5"></textarea>
							<span class="error" x-text="error_message"></span>
						</div>
					</div>
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
		</div>
	</div>
</secton>