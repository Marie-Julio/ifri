<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Gouvernance > Service à la commaunauté</p>
</section>

 
<section class="col-md-10 col-11 mx-auto">
    <div class="row">

            <h5 class="text-black- fw-bold">Rôles et missions</h5>
            <div class="col-6 my-3 ms-2" style="background-color: var(--first-color); height: 5px; border-radius: 5px;"></div>
            <p style="text-align: justify; line-height: 30px" class="text-color-">
              Le Service Vie de la Communauté Universitaire a pour missions d'informer et d'assurer l'accueil des étudiants dans le but de participer à leur intégration et leur épanouissement durant leur séjour à l'Université. <br> <br>

              Ce service est fondé sur les valeurs de production et de diffusion des savoirs; <br>
              █ Engagement scientifique et technologique; <br>
              █ Engagement civique et citoyen; <br>
              █ Autres : Assistanat social, Mécénat, Marketing, etc. <br> <br>
              « Le Service Vie de la Communauté peut être saisi comme un ensemble d’actions de
              développement de compétences et de valorisation des personnes et leur environnement mis en œuvre par les établissements d’enseignement
              supérieur, en interaction avec les partenaires (techniques, financiers,
              institutionnels…) et les communautés. »

              Voici ci-dessous comment nous contacter. Pour les missions et le fonctionnement des services, merci de vous reporter soit aux liens de chaque cellule soit aux liens repris sous l’onglet « services » dans la colonne à gauche de l’écran.
            </p>

            <div class="my-4 shadow-sm border p-4">
                <?php foreach ($communityservices as $communityservice): ?>
                    <div class="row">
                        <div class="col-md-6 fw-bold text-black- mb-2">
                            <?= $communityservice['communityserviceName'] ?>
                        </div>
                        <div class="col-md-6 text-color-">
                            <?php $details = explode(";", $communityservice['communityserviceDescription']) ?>
                            <?php for ($i=0; $i < count($details) ; $i++) { 
                                echo $details[$i]."<br>";
                            } ?>
                        </div>
                    </div>
                    <hr class="my-4"></hr>
                <?php endforeach ?>
            </div>


            <section class="container-fluid admissionpart">
                <div class="row">       
                    <div class="col-6">
                        <div class="hstack">
                            <div class="comminyservicedivider"></div>
                            <div>
                                <h4 class="fw-bold text-white ms-4"><b>Les projets d'IFRI</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <div class="col-md-12 col-11 mx-auto">
                <div class="row g-3">
                    <?php foreach ($ifriworks as $ifriwork): ?>
                        <div class="col-md-6 ">
                            <div class="mt-4 ifriwork-item shadow-sm">
                                <img src="<?= AllConstants()['APP_URL'].'/'.$ifriwork['image'] ?>">
                                <div class="p-3">
                                    <h3><?= $ifriwork['projectName'] ?></h3>
                                    <p class="text-color- text-5 mb-4"><?= makeSubstr($ifriwork['description'], null, 250) ?></p>
                                    <a href="<?= route('ifriwork', [$ifriwork['projectSlug']]) ?>" class="text-decoration-none">
                                        <div style="width: 100%;">Plus de détails sur le projet <i class="uil uil-plus"></i></div>
                                    </a>
                                </div>   
                            </div> 
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="text-center my-4">
                    <a href="<?= route('ifriworks') ?>" class="text-decoration-none px-4 py-2 btn-outline-primary-">Tout voir <i class="uil uil-eye"></i></a>
                </div>
            </div>
            

    </div>
</section>