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



                        <?php foreach ($bank_account as $data) {
                         
                        } ?>      
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Bank Account</strong></label>
                             <p><?= $data['kd_bank_account'] ?></p>
                               
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Tipe User</strong></label>
                            
                                    <p><?= $data['tipe_user'] ?></p>
        
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Id User</strong></label>
                                  <p><?= $data['id_user'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Bank</strong></label>
                                 <p><?= $data['kd_bank'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Account Name</strong></label>
                                  <p><?= $data['account_name'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Account Number</strong></label>
                                 <p><?= $data['account_number'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Main</strong></label>
                                 <p><?= $data['main'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                                 <p><?= $data['active'] ?></p>
                            </div>

                            <hr>



                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>bank_account/data_bank_account" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
          </div>
        </section>
      </div>