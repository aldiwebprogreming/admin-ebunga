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
                                     
                                
                          <?php foreach ($seller as $data) {
                           
                          } ?>

                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username" required="" value="<?= $data['username'] ?>">
                                
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" required="" value="<?= $data['full_name'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                             <textarea class="form-control" name="email" placeholder="Masukan email"><?= $data['email'] ?></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone</label>
                              <input type="text" name="phone" class="form-control" required="" maxlength="30" placeholder="Masukan number phone" value="<?= $data['phone'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Country</label>
                              <input type="text" name="country" class="form-control" required="" placeholder="Masukan country" maxlength="2" value="<?= $data['country'] ?>">
                               
                            </div>

                            <?php 

                                  $id_prov = $data['provinsi'];
                                  $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov))->result_array();

                                  foreach ($prov as $data_prov) {
                                    # code...
                                  }

                               ?>

                           <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                              <select name="provinsi" class="form-control" id="prov">
                                <option value="<?= $data_prov['id_prov'] ?>"><?= $data_prov['nama'] ?></option>
                                <?php 
                                  foreach ($prov1 as $list) { ?>
                                    <option value="<?= $list['id_prov'] ?>"><?= $list['nama'] ?></option>

                                  <?php } ?>
                              </select>
                               
                            </div>

                            <?php 

                                  $id_kab = $data['kabupaten'];
                                  $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab))->result_array();

                                  foreach ($kab as $data_kab) {
                                
                                  }

                               ?>

                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                              <select class="form-control" name="kabupaten" id="kab">
                                <option value="<?= $data_kab['id_kab'] ?>"><?= $data_kab['nama'] ?></option>
                              </select>
                               
                            </div>


                             <?php 

                                  $id_kec = $data['kecamatan'];
                                  $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec))->result_array();

                                  foreach ($kec as $data_kec) {
                                
                                  }

                               ?>

                            <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                              <select class="form-control" name="kecamatan" id="kec">
                                <option value="<?= $data_kec['id_kec'] ?>"><?= $data_kec['nama'] ?></option>
                              </select>
                               
                            </div>

                            <?php 

                                  $id_kel = $data['kelurahan'];
                                  $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel))->result_array();

                                  foreach ($kel as $data_kel) {
                                
                                  }

                               ?>


                            <div class="mb-3">
                              <label for="" class="form-label">Keluarahan</label>
                              <select class="form-control" id="kel" name="kelurahan">
                                <option value="<?= $data_kel['id_kel'] ?>"><?= $data_kel['nama'] ?></option>
                              </select>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Postal Code</label>
                              <input type="text" class="form-control" name="postal_code"  placeholder="Masukan main" required=""  maxlength="10" value="<?= $data['postal_code'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                              <textarea class="form-control" name="alamat"> <?= $data['alamat']; ?></textarea>
                               
                            </div> 

                            <div class="mb-3">
                              <label for="" class="form-label">No KTP</label>
                              <input type="text" class="form-control" name="ktp"  placeholder="Masukan main" required="" maxlength="40" value="<?= $data['ktp'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Npwp</label>
                              <input type="text" class="form-control" name="npwp"  placeholder="Masukan main" required="" maxlength="40" value="<?= $data['npwp'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Siup</label>
                              <input type="text" class="form-control" name="main"  placeholder="Masukan main" required="" maxlength="40" value="<?= $data['siup'] ?>">
                               
                            </div>

                           
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Suspend</label>
                              <input type="text" class="form-control" name="suspend"  placeholder="Masukan main" required="" maxlength="40" value="<?= $data['suspend'] ?>">
                               
                            </div>

                          


                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>seller/data_seller" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
           </div>
         </div>
       </section>
     </div>
                
  <script >
    
    $(document).ready(function(){

          $('#prov').change(function(){

             var id = $(this).val();

            $("#kab").load("<?= site_url() ?>get/get.php?id="+id);

          });

        });


        $(document).ready(function(){

          $('#kab').change(function(){

             var kab = $(this).val();

            $("#kec").load("<?= site_url() ?>get/get2.php?id="+kab);

          });

        });


        $(document).ready(function(){

          $('#kec').change(function(){

             var kel = $(this).val();

            $("#kel").load("<?= site_url() ?>get/get3.php?id="+kel);

          });

        });



  </script>