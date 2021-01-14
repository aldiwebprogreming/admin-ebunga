
<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->
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
                              <label for="" class="form-label">Email</label>
                              <input type="text" class="form-control" name="email"  placeholder="Masukan email" required="" value="<?= $data2['email'] ?>">
                               
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan full name" required="" value="<?= $data2['full_name'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" name="phone" class="form-control" minlength="11" maxlength="13" value="<?= $data2['phone'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Birth Date</label>
                              <input type="date" name="birth_date" class="form-control" value="<?= $data2['birth_date'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Gender</label>
                            <select class="form-control" name="gender">

                                  <?php   
                                      if ($data2['gender'] == 'laki-laki') {
                                        echo "<option>laki-laki</option>";
                                          echo "<option>perempuan</option>";
                                      } else {
                                           echo "<option>perempuan</option>";
                                           echo "<option>laki-laki</option>";
                                       
                                      }

                                   ?>
                            </select>
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Masuakan alamat sekarang" style="height: 50px;" name="alamat"> <?= $data2['alamat'] ?></textarea>
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                             <select id="prov" class="form-control" name="provinsi">
                             <?php 

                              $query = $this->db->get_where('tbl_provinsi', array('id_prov'=> $data2['provinsi']))->result_array();

                              foreach ($query as $val) {
                               
                              }

                              ?>
                               <option value="<?= $data2['provinsi']  ?>" style="background-color: silver;"><?= $val['nama'] ?></option>
                               <?php foreach ($prov as $data) { ?>
                                <option value="<?= $data['id_prov'] ?>"><?= $data['nama'] ?></option>
                              <?php } ?>
                             </select>
                               
                            </div>



                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                             <select id="kab" class="form-control" name="kabupaten">

                              <?php 
                                  $query = $this->db->get_where('tbl_kabupaten', array('id_kab'=> $data2['kabupaten']))->result_array();

                                  foreach ($query as $val1) {
                                    # code...
                                  }

                               ?>
                                 <option value="<?= $data2['kabupaten']  ?>" ><?= $val1['nama'] ?></option>
                             </select>
                               
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                             <select id="kec" class="form-control" name="kecamatan">
                              <?php 
                                  $query = $this->db->get_where('tbl_kecamatan', array('id_kec'=> $data2['kecamatan']))->result_array();

                                  foreach ($query as $val2) {
                                    # code...
                                  }

                               ?>
                                <option value="<?= $data2['kecamatan']  ?>"><?= $val2['nama'] ?></option>
                             </select>
                               
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                             <select id="kel" class="form-control" name="kelurahan">

                              <?php 
                                  $query = $this->db->get_where('tbl_kelurahan', array('id_kel'=> $data2['kelurahan']))->result_array();

                                  foreach ($query as $val3) {
                                  
                                  }

                               ?>
                                  <option value="<?= $data2['kelurahan']  ?>"><?= $val3['nama'] ?></option>
                             </select>
                               
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                             <select id="kel" class="form-control" name="active">

                             <?php 

                                if ($data2['active'] == 1) {
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