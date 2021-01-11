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


                     



                          foreach ($branch as $data) {
                            # code...
                          }
                          
                          $alamat = $data['alamat'];
                          $id_kel = substr($alamat, 0, 10);
                          // echo $id_kel ;

                          $id_kec = substr($alamat,11,6);
                           // echo $id_kec ;

                            $id_kab = substr($alamat,11,4);
                           // echo $id_kab ;

                             $id_prov = substr($alamat,23,2);
                           // echo $id_prov ;
                         ?>        


                   
                                
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

                             <?php 

                                  $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov ))->result_array();

                                  foreach ($prov as $data_prov) {
                                   
                                  }

                             ?>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Provinsi</strong></label>
                                 <p><?= $data_prov['nama'] ?></p>
                            </div>
                            <hr>

                             <?php 

                                  $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab ))->result_array();

                                  foreach ($kab as $data_kab) {
                                   
                                  }

                             ?>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</strong></label>
                                 <p><?= $data_kab['nama'] ?></p>
                            </div>
                            <hr>

                             <?php 

                                  $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec ))->result_array();

                                  foreach ($kec as $data_kec) {
                                   
                                  }

                             ?>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</strong></label>
                                 <p><?= $data_kec['nama'] ?></p>
                            </div>
                            <hr>



                             <?php 

                                  $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel ))->result_array();

                                  foreach ($kel as $data_kel) {
                                   
                                  }

                             ?>


                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan</strong></label>
                                 <p><?= $data_kel['nama'] ?></p>
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