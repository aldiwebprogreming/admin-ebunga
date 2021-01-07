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
                                
                          <?php foreach ($address_list as $data) {
                           
                          } ?>

                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Address List</strong></label>
                             <p><?= $data['kd_address'] ?></p>
                             <hr>
                                
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Name Address</strong></label>
                             <p><?= $data['name_address'] ?></p>
                             <hr>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                             <p><?= $data['alamat'] ?></p>
                             <hr>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Provinsi</label>
                             <p><?= $data['provinsi'] ?></p>
                             <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</label>
                              <p><?= $data['kabupaten'] ?></p>
                              <hr>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</label>
                             <p><?= $data['kecamatan'] ?></p>
                             <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Keluarahan</label>
                            <p><?= $data['kelurahan'] ?></p>
                            <hr>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kordinat</label>
                              <p><?= $data['kordinat'] ?></p>
                              <hr>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Main</label>
                              <p><?= $data['main'] ?></p>
                              <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</label>
                             <p><?= $data['active'] ?></p>
                             <hr>

                               
                            </div>

                          


                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>address_list/data_address_list" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                 
                </div>
            </div>
          </div>
        </section>
      </div>
