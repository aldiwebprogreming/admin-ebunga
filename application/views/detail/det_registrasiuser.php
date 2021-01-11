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
                                
                          <?php foreach ($registrasi as $data) {
                           
                          } ?>

                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Registrasi</strong></label>
                             <p><?= $data['kd_registrasi'] ?></p>
                             <hr>
                                
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Token Registrasi</strong></label>
                             <p><?= $data['token_registrasi'] ?></p>
                             <hr>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Full Name</strong></label>
                             <p><?= $data['full_name'] ?></p>
                             <hr>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Phone Number</label>
                             <p><?= $data['phone_number'] ?></p>
                             <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</label>
                              <p><?= $data['email'] ?></p>
                              <hr>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Registrasi</label>
                             <p><?= $data['waktu_registrasi'] ?></p>
                             <hr>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Referall Code</label>
                            <p><?= $data['referall_code'] ?></p>
                            <hr>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Status Aktivasi</label>
                              <p><?= $data['status_aktivasi'] ?></p>
                              <hr>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Aktivasi</label>
                              <p><?= $data['waktu_aktivasi'] ?></p>
                              <hr>
                               
                            </div>

                          

                  

                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>registrasi_user/data_registrasi" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                 
                </div>
            </div>
          </div>
        </section>
      </div>
