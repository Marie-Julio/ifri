<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Recherche > Mémoire</p>
</section>


<div x-data="memories" class="mb-4">

<section class="container-fluid rounded">
    <div class="row">
      <div class="col-lg-8" style="padding: 40px 0px; background-color: var(--first-color); background-image: url('<?= asset('img/bic.png') ?>'); background-repeat: no-repeat; background-size: contain;">
          <h2 class="text-center text-white fw-bold mb-4">Découvrez les mémoires de nos anciens étudiants</h2>
          <div class="col-lg-8 col-10 mx-auto">
          <span class="text-white">Trier par : </span>
          <form class="row" style="margin-bottom: 30px">
              <?php
               $token = bin2hex(random_bytes(32));
               $_SESSION['csrf_token'] = $token;
              ?>
              <input type="hidden" name="csrf_token" value="<?php echo  $_SESSION['csrf_token'];?>">
              <div class="col-md-4 mt-4">
                  <select class="form-control-primary" x-model="year" @input.debounce="search_form()">
                      <option value="">Promotion</option>
                      <?php for ($i = 2013; $i <= intval(date('Y') + 1); $i++) {  ?>
                          <option value="<?= ($i-1).'-'.$i ?>"><?= ($i-1).' - '.$i ?></option>
                      <?php } ?>
                  </select>
              </div>
              <div class="col-md-4 mt-4">
                  <select class="form-control-primary" x-model="diploma" @input.debounce="search_form()">
                      <option value="">Diplôme</option>
                      <option value="Licence">Licence</option>
                      <option value="Master">Master</option>
                  </select>
              </div>
              <div class="col-md-4 mt-4">
                  <select class="form-control-primary" x-model="faculty" @input.debounce="search_form()">
                      <option value="">Filière</option>
                      <option value="GL">GL</option>
                      <option value="SI">SI</option>
                      <option value="IM">IM</option>
                      <option value="SIRI">SIRI</option>
                      <option value="IOT">IOT</option>
                      <option value="IA">IA</option>
                  </select>
              </div>

          </form>
          <div class="input-group mt-2">
            <input type="text" class="form-control" @input.debounce="search_form()" x-model="search_string" aria-describedby="basic-addon1" style="background-color: var(--first-color); color: var(--white); border: none; border-bottom: 1px solid var(--white);">
            <span class="input-group-text" id="basic-addon1" style="background-color: var(--first-color) !important; border: none; border-bottom: 1px solid var(--white);"><i class="uil uil-search" style="color: #ddd; font-size: 25px"></i></span>
          </div>

        </div>
      </div>
      <div class="col-lg-4">
        <div><iframe src="https://www.google.com/maps/d/u/1/embed?mid=1Ehm6mPNhEEGVeJar3SMHGs_wYQSaBoA&ehbc=2E312F" class="w-100" height="300"></iframe>
        </div> 
        <div>
            <select class="form-control-">
              <option>Bilan de téléchargements par pays</option>
              <?php  foreach($memorie_pays_nbre as $data)
                { ?><option><?php if($data['country']==""){ ?>( Aucun ) <?php }else{ ?><?= $data['country']  ?><?php } ?> : <?= $data['nombre'] ?> téléchargements</option><?php } ?>
            </select>
        </div>
      </div>
    </div>
  </section>



  <section class="container-fluid p-4">
      <div class="">

      <template x-for="(memory, index) in memories" :key="index">
            <div class="row memorie_item mt-4" x-show="index < page * 25 && (index + 1) > (page -1) * 25">
               
                    
              <div class="col-md-6 col-sm-12 py-4 px-3">
                <div class="memorie_item_color text-white">
                  <span class="text-lighter text-6">Numéro <b x-text="index+1">01</b> </span>
                  <div class="vr"></div> 
                  <span class="text-lighter text-6">Promotion: <b x-text="memory.memoryYear"></b></span> 
                </div>
                <div class="mt-4 mb-4 text-center" x-text="'Thème : '+memory.memoryTheme">
                </div>
                <div>
                  <span class="text-lighter text-5">Par: <span  x-text="memory.personName"></span></span>
                </div>
              </div>

            <div class="col-md-6 ms-auto border-left">

              <div class="row">
                
                <div class="col-md-10 py-4">
                  <div class="row mb-4">
                    <div class="col">                              
                      <span class="text-lighter text-5">Diplôme</span>
                    </div>
                    <div class="col">
                      <span class="text-lighter text-5" x-text="memory.memoryDiploma"></span>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">                              
                      <span class="text-lighter text-5">Filière</span>
                    </div>
                    <div class="col">
                      <span class="text-lighter text-5" x-text="memory.memoryFaculty"></span>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">                              
                      <span class="text-lighter text-5">Encadreur</span>
                    </div>
                    <div class="col">
                      <span class="text-lighter text-5" x-text="memory.memorySupervisor"></span>
                    </div>
                  </div>

                  <div class="row" >
                    <div class="col">                              
                      <span class="text-lighter text-5">Téléchargement</span>
                    </div>
                    <div class="col">
                      <span class="text-lighter text-5" x-text="memory.memoryDownload"></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-2 bg-primary- text-center downloadIt" @click="memoryDownload(memory.memoryId)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="row align-items-center" style="height: 100%;">
                        <i class="uil uil-download-alt text-white fw-bold text-2"></i>
                    </div>
                </div>
              </div>

            </div>

            </div>
        </template>

        <div class="my-4 p-4" x-show="memories.length === 0">
            Aucun resultat.
        </div>

    </div>


      <nav aria-label="Page navigation example" x-show="pages.length > 1">
      <ul class="pagination">
        <template x-for="(pageIndex, index) in pages">
          <li class="page-item" :class="(pageIndex === page) ? 'active' : ''"><a class="page-link" href="#" @click="page = pageIndex" x-text="pageIndex"></a></li>
        </template>
      </ul>
    </nav>

  </section>



    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <small class="modal-title text-black-" id="exampleModalLabel">Veuillez fournir vos informations correctes pour télécharger le mémoire.</small>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="downloadAdd">
            <div x-text="success_message" style="color: var(--first-color); font-size: 16px"></div>
            <div class=" mb-4">
              <label class="mb-1">Email</label>
              <input type="email" maxlength="150" required x-model="email" class="form-control-"></input>
            </div>
            <div class="mb-4">
              <label class="mb-1">Nom et prénom</label>
              <input type="text" maxlength="150" required x-model="name" class="form-control-"></input>
            </div>
            <div class=" mb-4">
              <label class="mb-1">Pays</label>
              <select class="form-control-" required x-model="country">
                <option></option>
                <?= getAllCountrySelect(); ?>
              </select>
            </div>
            <div class=" mb-4">
              <label class="mb-1">Statut</label>
              <select class="form-control-" required x-model="profil">
                <option></option>
                <option value="Etudiant">Etudiant</option>>
                <option value="Enseignant">Enseignant</option>>
                <option value="Professionnel">Professionnel</option>
              </select>
            </div>
            <div class="">
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
  </div>


  </div>