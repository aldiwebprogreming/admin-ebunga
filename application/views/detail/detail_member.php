
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

                        <?php 

                    $id_prov = $data['provinsi'];
                    $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov))->result_array();
                    foreach ($prov as $data_prov) {
                     
                    }

                     $id_kab = $data['kabupaten'];
                        $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab))->result_array();

                        foreach ($kab as $data_kab) {
                      
                        }

                        $id_kec = $data['kecamatan'];
                        $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec))->result_array();

                        foreach ($kec as $data_kec) {
                      
                        }

                $id_kel = $data['kelurahan'];
                  $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel))->result_array();

                  foreach ($kel as $data_kel) {

                  }
    ?>    
                                
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
                                  <p><?= $data_prov['nama'] ?></p>
                            </div>
							               <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kabupaten</strong></label>
                               <p><?= $data_kab['nama'] ?></p>
                            </div>
                            <hr>

                            
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kecamatan</strong></label>
                               <p><?= $data_kec['nama'] ?></p>
                            </div>
                            <hr>

                            
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kelurahan</strong></label>
                               <p><?= $data_kel['nama'] ?></p>
                            </div>
                            <hr>

                            
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Alamat</strong></label>
                               <p><?= $data['alamat'] ?></p>
                            </div>
                            <hr>

                       
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Postal code</strong></label>
                               <p><?= $data['postal_code'] ?></p>
                            </div>
                            <hr>

                       
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Ktp</strong></label>
                               <p><?= $data['ktp'] ?></p>
                            </div>
                            <hr>

                       
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Npwp</strong></label>
                               <p><?= $data['npwp'] ?></p>
                            </div>
                            <hr>

                       
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Siup</strong></label>
                               <p><?= $data['siup'] ?></p>
                            </div>
                            <hr>

                       
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Status</strong></label>
                               <p><?= $data['status'] ?></p>
                            </div>
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
              
