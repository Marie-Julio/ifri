<section class="container breadcrumb">
  <p style="color: var(--black); font-size: 14px"><a href="<?= route('home') ?>" class="text-decoration-none text-black-">Accueil</a> > Alumni</p>
</section>


<div x-data="alumnis">

  <section class="container-fluid rounded p-sm-4" style="padding: 40px 0px; background-color: var(--first-color);">
    <h2 class="text-center text-white fw-bold mb-4">Découvrez nos anciens étudiants</h2>
    <div class="col-10 mx-auto">
        <span class="text-white">Trier par : </span>
        <form class="row" style="margin-bottom: 30px">
        <?php
               $token = bin2hex(random_bytes(32));
               $_SESSION['csrf_token'] = $token;
              ?>
              <input type="hidden" name="csrf_token" value="<?php echo  $_SESSION['csrf_token'];?>">
            <div class="col-md-3 mt-4">
                <select class="form-control-primary" x-model="year" @input.debounce="search_form()">
                    <option value="">Soutenance</option>
                    <?php for ($i = 2013; $i <= intval(date('Y') + 1); $i++) {  ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3 mt-4">
                <select class="form-control-primary" x-model="diploma" @input.debounce="search_form()">
                    <option value="">Diplôme</option>
                    <option value="Licence">Licence</option>
                    <option value="Master">Master</option>
                </select>
            </div>
            <div class="col-md-3 mt-4">
                <select class="form-control-primary" x-model="faculty" @input.debounce="search_form()">
                    <option value="">Filière</option>
                    <option value="GL">GL</option>
                    <option value="SI">SI</option>
                    <option value="IM">IM</option>
                    <option value="SIRI">SIRI</option>
                </select>
            </div>
            <div class="col-md-3 mt-4">
                <select class="form-control-primary" x-model="country" @input.debounce="search_form()">
                    <option value="">Pays </option>
                    <?= getAllCountrySelect() ?>
                </select>
            </div>

        </form>
        <div class="input-group mt-2">
          <input type="text" class="form-control" @input.debounce="search_form()" x-model="search_string" aria-describedby="basic-addon1" style="background-color: var(--first-color); color: var(--white); border: none; border-bottom: 1px solid var(--white);">
          <span class="input-group-text" id="basic-addon1" style="background-color: var(--first-color) !important; border: none; border-bottom: 1px solid var(--white);"><i class="uil uil-search" style="color: #ddd; font-size: 25px"></i></span>
        </div>

    </div>
  </section>




  <section class="container-fluid">
      <div class="row">

        <template x-for="(alumni, index) in alumnis" :key="index">
          <div class="col-lg-6" x-show="index < page * 25 && (index + 1) > (page -1) * 25">
            <div class="row alumni_item mt-2 py-2" style="height: 90%">

                              
              <div class="row" style="height: 100%">
                <div class="hstack p-0"  style="height: 100%">
                  <div style="margin-right: 30px">
                    <img :src="'<?= AllConstants()['APP_URL'] ?>'+alumni.image" style="width: 150px; border-radius: 10px;">
                  </div>

                  <div  style="width: 100%">
                    <div class="">
                      <span class="text-lighter text-6">soutenance: <span style="font-size: 18px"><b x-text="alumni.diplomaYear"></b></span></span> 
                    </div>

                    <div class="row mt-2">
                         <span> <span class="text-lighter text-6">Nom étudiant :</span> <b class="text-6" x-text="alumni.personName"></b></span>
                    </div>


                    <div class="row mt-2">
                         <span> <span class="text-lighter text-6">Profil :</span> <b class="text-6" x-text="alumni.profil"></b></span>
                    </div>


                    <div class="row mt-2">
                         <span> <span class="text-lighter text-6">Diplôme et filière :</span> <b class="text-6" x-text="alumni.diplomaFaculty"></b></span>
                    </div>


                    <div class="row mt-2">
                         <span> <span class="text-lighter text-6">Contact :</span> <b class="text-6" x-text="alumni.contact"></b></span>
                    </div>

                    <div class="row mt-2">
                         <span> <span class="text-lighter text-6">Pays actuel :</span> <b class="text-6" x-text="alumni.country"></b></span>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </template>

        <div class="my-4 p-4" x-show="alumnis.length === 0">
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


      </div>
  </section>

  </div>