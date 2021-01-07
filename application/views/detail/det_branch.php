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



                        <?php foreach ($branch as $data) {
                         
                        } ?>      
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Branch Seller</strong></label>
                             <p><?= $data['kd_branch'] ?></p>
                               
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Nama Branch</strong></label>
                            
                                    <p><?= $data['nama_branch'] ?></p>
        
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Id Seller</strong></label>
                                  <p><?= $data['id_seller'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                                 <p><?= $data['alamat'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Phone</strong></label>
                                  <p><?= $data['phone'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</strong></label>
                                 <p><?= $data['email'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Pengajuan</strong></label>
                                 <p><?= $data['waktu_pengajuan'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Waktu Approve</strong></label>
                                 <p><?= $data['waktu_approve'] ?></p>
                            </div>

                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Status Branch</strong></label>
                                 <p><?= $data['status_branch'] ?></p>
                            </div>

                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                                 <p><?= $data['active'] ?></p>
                            </div>

                            <hr>



                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>branch_seller/data_branch_seller" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
          </div>
        </section>
      </div>