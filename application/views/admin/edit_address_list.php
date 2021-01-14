



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
                                
                          <?php foreach ($address_list as $data) {
                           
                          } ?>

                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Address List</label>
                              <input type="text" class="form-control" name="kd_address"  placeholder="Masukan kode promo" required="" value="<?= $data['kd_address'] ?>">
                                
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Name Address</label>
                              <input type="text" class="form-control" name="name_address"  placeholder="Masukan nama address" required="" value="<?= $data['name_address'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                             <textarea class="form-control" name="alamat" placeholder="Masukan alamat"><?= $data['alamat'] ?></textarea>
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
                              <label for="" class="form-label">Kordinat</label>
                              <input type="text" class="form-control" name="kordinat"  placeholder="Masukan kordinat" required="" value="<?= $data['kordinat'] ?>">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Main</label>
                              <input type="text" class="form-control" name="main"  placeholder="Masukan main" required="" value="<?= $data['main'] ?>">
                               
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
                                <a href="<?= base_url() ?>address_list/data_address_list" class ="btn btn-success"> Kembali </a>
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

  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>