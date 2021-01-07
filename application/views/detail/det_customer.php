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


                  <?php 

                    foreach ($customer as $data2) {
                     
                    }

                   ?>
        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Email</strong></label>
                              <p><?= $data2['email'] ?></p>
                            </div>
                            <hr>
 
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Full Name</strong></label>
                              <p><?= $data2['full_name'] ?></p>
                               
                            </div>
                            <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Number Phone</strong></label>
                             <p><?= $data2['phone'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Birth Date</strong></label>
                             <p><?= $data2['birth_date'] ?></p>
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Gender</strong></label>
                              <p><?= $data2['gender'] ?></p>
                            </div>
                            <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                               <p><?= $data2['alamat'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Provinsi</strong></label>
                               <p><?= $data2['provinsi'] ?></p>
                            </div>
                            <hr>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</strong></label>
                              <p><?= $data2['kabupaten'] ?></p>
                               
                            </div>
                             <hr>


                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</strong></label>
                              <p><?= $data2['kecamatan'] ?></p>
                               
                            </div>
                            <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan</strong></label>
                                <p><?= $data2['kelurahan'] ?></p>
                               
                            </div>
                             <hr>

                             <div class="mb-3">
                              <label for="" class="form-label"><strong>Active</strong></label>
                               <p><?= $data2['active'] ?></p>
                               
                            </div>
                              <hr>


                            <div class="mb-3">
                               
                                <a href="<?= base_url() ?>customer/data_customer" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
          </div>
        </section>
      </div>


  

      </script>