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
                              <label for="" class="form-label">Kode Branch</label>
                              <input type="text" class="form-control" name="kd_branch"  placeholder="Masukan Kode Katagori" required="" value="<?= $data['kd_branch'] ?>" readonly="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Branch</label>
                              <input type="text" class="form-control" name="nama_branch"  placeholder="Masukan nama branch" required="" value="<?= $data['nama_branch'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="" value="<?= $data['id_seller'] ?>">
                            </div>

                            <?php 

                                  $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov ))->result_array();

                                  foreach ($prov as $data_prov) {
                                   
                                  }

                             ?>

                            <div class="mb-3">
                              <label for="" class="form-label">Provisni</label>
                              <select id="prov" class="form-control" name="prov">
                                <option value="<?= $data_prov['id_prov'] ?>"><?= $data_prov['nama'] ?></option>
                                <?php 

                                    foreach ($provinsi as $data) {  ?>

                                      <option value="<?= $data['id_prov'] ?>"><?= $data['nama'] ?></option>
                                    <?php } ?>
                              </select>
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                                <select id="kabupaten" name="kabupaten" class="form-control">

                                 <?php 

                                  $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab ))->result_array();

                                  foreach ($kab as $data_kab) {
                                   
                                  }

                             ?>
                                  <option value="<?= $data_kab['id_kab'] ?>"><?= $data_kab['nama'] ?></option>
                                  
                                </select>
                            </div>

                              <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                             <select id="kecamatan" name="kecamatan" class="form-control">

                               <?php 

                                  $kac = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec ))->result_array();

                                  foreach ($kac as $data_kec) {
                                   
                                  }

                             ?>

                                  <option value="<?= $data_kec['id_kec'] ?>"><?= $data_kec['nama'] ?></option>
                                  
                                </select>

                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                              <select id="kelurahan" name="kelurahan" class="form-control">
                                <?php 

                                  $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel ))->result_array();

                                  foreach ($kel as $data_kel) {
                                   
                                  }

                             ?>

                                  <option value="<?= $data_kel['id_kel'] ?>"><?= $data_kel['nama'] ?></option>
                                  
                                </select>
                            </div>

                            <?php 
                                  foreach ($branch as $data) {
                            # code...
                          }

                             ?>

                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" class="form-control" name="phone"  placeholder="Masukan number phone" required="" maxlength="13" minlength="11" value="<?= $data['phone'] ?>">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email"  placeholder="Masukan email"m required="" value="<?= $data['email'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Waktu Pengajuan</label>
                              <input type="datetime-local" class="form-control" name="waktu_pengajuan" required="" value="<?= $data['waktu_pengajuan'] ?>">
                             <small> <?= $data['waktu_pengajuan'] ?></small>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Waktu Opprave</label>
                              <input type="datetime-local" class="form-control" name="waktu_approve"  placeholder="Masukan nama Katagori" required="">
                               <small> <?= $data['waktu_approve'] ?></small>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                              <select class="form-control" name="active">
                                <?php 

                                    if ($data['active'] == 1) {
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
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>Branch_seller/data_branch_seller" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
              </div>
            </div>
          </section>
          </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      
        $(document).ready(function(){

            $("#prov").change(function(){

            var id = $(this).val();

             $("#kabupaten").load("<?= site_url() ?>get/get.php?id="+id);

            });

        });


         $(document).ready(function(){

          $('#kabupaten').change(function(){

              var id_kab = $(this).val();

                $("#kecamatan").load("<?= site_url() ?>get/get2.php?id="+id_kab);

          });

        });

          $(document).ready(function(){

          $('#kecamatan').change(function(){

              var id_kec = $(this).val();

                $("#kelurahan").load("<?= site_url() ?>get/get3.php?id="+id_kec);

          });

        });

                </script>
                
