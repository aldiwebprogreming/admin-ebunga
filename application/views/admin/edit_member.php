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

                        foreach ($member as $data) {
                          
                        }

                       ?>
        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Usernme</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username anda" value="<?= $data['username'] ?>" >
                                <?php echo form_error('username',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>


 
                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" value="<?= $data['full_name'] ?>" >
                                <?php echo form_error('full_name',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email"  placeholder="Masukan email" value="<?= $data['email'] ?>">

                               <?php echo form_error('email',' <small class="text-danger pl-2">','</small>'); ?>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" name="phone" class="form-control" minlength="11" maxlength="13" placeholder="Masukan nomor phone" value="<?= $data['phone'] ?>">
                               <?php echo form_error('phone',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>



                               <?php 

                                  $id_coun = $data['country'];
                                  $country = $this->db->get_where('tbl_country_support', array('id' => $id_coun))->result_array();

                                  foreach ($country as $data_count) {
                                
                                  }

                               ?>

                             <div class="mb-3">
                              <label for="" class="form-label">Country</label>
                              <select class="form-control" name="country">
                                 <option value="<?= $data_count['id']  ?>"><?= $data_count['name_country']  ?></option>
                                <?php 

                                    foreach ($country as $count) {
                                 ?>

                                 <option value="<?= $count['id'] ?>"><?= $count['name_country'] ?></option>
                               <?php } ?>
                              </select>
                            </div>

                              <?php 

                                  $id_prov = $data['provinsi'];
                                  $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov))->result_array();

                                  foreach ($prov as $data_prov) {
                                   
                                  }

                               ?>
                            

                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                             <select id="prov" class="form-control" name="provinsi">
                               <option value="<?= $data_prov['id_prov'] ?>"><?= $data_prov['nama'] ?></option>
                               <?php foreach ($provinsi as $data1) { ?>
                                <option value="<?= $data1['id_prov'] ?>"><?= $data1['nama'] ?></option>
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
                             <select id="kab" class="form-control" name="kabupaten">
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
                             <select id="kec" class="form-control" name="kecamatan">
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
                              <label for="" class="form-label">Kelurahan</label>
                             <select id="kel" class="form-control" name="kelurahan">
                                 <option value="<?= $data_kel['id_kel'] ?>"><?= $data_kel['nama'] ?></option>
                              </select>
                             </select>
                               
                            </div>


                              <div class="mb-3">
                              <label for="" class="form-label">Postal Code</label>
                                  <input type="number" name="postal_code" class="form-control" placeholder="Masukan postal code" value="<?= $data['postal_code'] ?>">  
                                   <?php echo form_error('postal_code',' <small class="text-danger pl-2">','</small>'); ?>                          
                              </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Masuakan alamat sekarang" style="height: 50px;" name="alamat"><?= $data['alamat']  ?></textarea>
                                 <?php echo form_error('alamat',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                               <div class="mb-3">
                              <label for="" class="form-label">Ktp</label>
                                  <input type="number" name="ktp" class="form-control" placeholder="Masuakan nomor ktp" value="<?= $data['ktp'] ?>">     
                                  <?php echo form_error('ktp',' <small class="text-danger pl-2">','</small>'); ?>                       
                              </div>

                                 <div class="mb-3">
                              <label for="" class="form-label">NPWP</label>
                                  <input type="number" name="npwp" class="form-control" placeholder="Masukan nomor npwp" value="<?= $data['npwp'] ?>">    
                                  <?php echo form_error('npwp',' <small class="text-danger pl-2">','</small>'); ?>                         
                              </div>

                                 <div class="mb-3">
                              <label for="" class="form-label">Siup</label>
                                  <input type="text" name="siup" class="form-control" placeholder="Masukan nomor siup" value="<?= $data['siup'] ?>">  
                                   <?php echo form_error('siup',' <small class="text-danger pl-2">','</small>'); ?>                          
                              </div>

                         <div class="mb-3">
                              <label for="" class="form-label">Status</label>
                                 <select class="form-control" name="status">
                                   <?php 
                                    if ($data['status'] == 1) {
                                      echo "<option value='1'>Y</option>";
                                      echo "<option value='0'>N</option>";
                                    } else {

                                          echo "<option value='0'>N</option>";

                                          echo "<option value='1'>Y</option>";
                                    }

                                    ?>
                                 </select>                            
                              </div>

                                <div class="mb-3">
                              <label for="" class="form-label">Suspend</label>
                                  <input type="number" name="suspend" class="form-control" value="<?= $data['suspend'] ?>">
                                 <?php echo form_error('suspend',' <small class="text-danger pl-2">','</small>'); ?>                            
                              </div>


                            <div class="mb-3">
                                    <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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


      <script>
        
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