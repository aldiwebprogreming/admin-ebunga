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



                        <?php foreach ($payment as $data) {
                          # code...
                        } ?>     
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Payment</strong></label>
                              <p><?= $data['nama_payment'] ?></p>
                               
                            </div>

                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Scope</strong></label>
                             <p><?= $data['scope'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kode Payment</strong></label>
                                 <p><?= $data['kd_payment'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"> <strong>Token</strong></label>
                            <p><?= $data['token'] ?></p>
                               
                            </div>
                              <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>API</strong></label>
                           <p> <?= $data['api'] ?></p>
                               
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                             <p><?= $data['active'] ?></p>
                               
                            </div>
                              <hr>

                           

                            <div class="mb-3">
                               
                                <a href="<?= base_url() ?>Payment_geteway/data_payment" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
            </div>
            </section>
            </div>
                            
