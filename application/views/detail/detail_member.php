
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


                        <?php foreach ($member as $data) {
                       
                        } ?>        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                                

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Username</strong></label>
                             <p><?= $data['username'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Full name</strong></label>
                             <p><?= $data['phone'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</strong></label>
                               <p><?= $data['email'] ?></p>
                            </div>
                            <hr>
                            

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Phone</strong></label>
                                  <p><?= $data['phone'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Country</strong></label>
                                 <p><?= $data['country'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Provinsi</strong></label>
                                  <p><?= $data['provinsi'] ?></p>
                            </div>
							               <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</strong></label>
                               <p><?= $data['kabupaten'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</strong></label>
                               <p><?= $data['kecamatan'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan</strong></label>
                               <p><?= $data['kelurahan'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                               <p><?= $data['alamat'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Postal code</strong></label>
                               <p><?= $data['postal_code'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Ktp</strong></label>
                               <p><?= $data['ktp'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Npwp</strong></label>
                               <p><?= $data['npwp'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Siup</strong></label>
                               <p><?= $data['siup'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Status</strong></label>
                               <p><?= $data['status'] ?></p>
                            </div>
                            <hr>

                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Suspend</strong></label>
                               <p><?= $data['suspend'] ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                             
                                <a href="<?= base_url() ?>member/data_member" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
       </div>
    </div>
  </div>
</section>
</div>
              
