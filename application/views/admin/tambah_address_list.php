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
        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Address List</label>
                              <input type="text" class="form-control" name="kd_address"  placeholder="Masukan kode promo" required="">
                                <?php echo form_error('kd_address',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Name Address</label>
                              <input type="text" class="form-control" name="name_address"  placeholder="Masukan nama address" required="">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Alamat</label>
                             <textarea class="form-control" name="alamat" placeholder="Masukan alamat"></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                             <select id="prov" class="form-control" name="provinsi">
                               <option>--Pilih Provinsi--</option>
                               <?php foreach ($address_list as $data) { ?>
                                <option value="<?= $data['id_prov'] ?>"><?= $data['nama'] ?></option>
                              <?php } ?>
                             </select>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                             <select id="kab" class="form-control" name="kabupaten">
                               <option>--Pilih Kabupaten--</option>
                             </select>
                               
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                             <select id="kec" class="form-control" name="kecamatan">
                               <option>--Pilih Kecamatan--</option>
                             </select>
                               
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                             <select id="kel" class="form-control" name="kelurahan">
                               <option>--Pilih Keluarahan--</option>
                             </select>
                               
                            </div>

                          


                            <div class="mb-3">
                              <label for="" class="form-label">Kordinat</label>
                              <input type="text" class="form-control" name="kordinat"  placeholder="Masukan kordinat" required="">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Main</label>
                              <input type="text" class="form-control" name="main"  placeholder="Masukan main" required="">
                               
                            </div>

                          


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
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