 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $sub_title; ?></h1>
          </div>
          

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?= $sub_title ?></h4>
                  </div>



                        <?php foreach ($promo as $data) {
                          # code...
                        } ?>     
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Promo</strong></label>
                              <p><?= $data['kd_promo'] ?></p>
                               
                            </div>

                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Promo</strong></label>
                             <p><?= $data['nama_promo'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Deks Promo</strong></label>
                                 <p><?= $data['deks_promo'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"> <strong>Cakupan</strong></label>
                            <p><?= $data['cakupan'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Seller</strong></label>
                           <p> <?= $data['id_seller'] ?></p>
                               
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Tipe</strong></label>
                             <p><?= $data['tipe'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Value</strong></label>
                             <p><?= $data['value'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Start Aktive</strong></label>
                             <p><?= $data['start_active'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>End Aktive</strong></label>
                             <p><?= $data['end_active'] ?></p>
                               
                            </div>
                              <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Status</label>
                            <p><?= $data['status'] ?></p>
                               
                            </div>

                              <hr>

                            <div class="mb-3">
                               
                                <a href="<?= base_url() ?>promo/data_promo" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
            </div>
            </section>
            </div>
                            
