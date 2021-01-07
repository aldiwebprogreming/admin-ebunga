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

                            $title = 'BRANCH';
                           $rand = mt_rand(1000, 10000);
                           $kode = $title.$rand;

                         ?>        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Branch</label>
                              <input type="text" class="form-control" name="kd_branch"  placeholder="Masukan Kode Katagori" required="" value="<?= $kode ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Branch</label>
                              <input type="text" class="form-control" name="nama_branch"  placeholder="Masukan nama branch" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Provisni</label>
                              <select id="prov" class="form-control" name="prov">
                                <option>--Pilih Provinsi--</option>
                                <?php 

                                    foreach ($prov as $data) {  ?>

                                      <option value="<?= $data['id_prov'] ?>"><?= $data['nama'] ?></option>
                                    <?php } ?>
                              </select>
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Kabupaten</label>
                                <select id="kabupaten" name="kabupaten" class="form-control">
                                  <option>--Pilih Kabupaten</option>
                                  
                                </select>
                            </div>

                              <div class="mb-3">
                              <label for="" class="form-label">Kecamatan</label>
                             <select id="kecamatan" name="kecamatan" class="form-control">
                                  <option>--Pilih Kecamatan--</option>
                                  
                                </select>

                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Kelurahan</label>
                              <select id="kelurahan" name="kelurahan" class="form-control">
                                  <option>--Pilih Kelurahan--</option>
                                  
                                </select>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Number Phone</label>
                              <input type="number" class="form-control" name="phone"  placeholder="Masukan number phone" required="" maxlength="13" minlength="11">
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email"  placeholder="Masukan email"m required="">
                            </div>

                          <!--   <div class="mb-3">
                              <label for="" class="form-label">Waktu Pengajuan</label>
                              <input type="datetime-local" class="form-control" name="waktu_pengajuan"  placeholder="Masukan waktu " required="">
                            </div> -->

                            <div class="mb-3">
                              <label for="" class="form-label">Waktu Opprave</label>
                              <input type="datetime-local" class="form-control" name="waktu_approve"  placeholder="Masukan nama Katagori" required="">
                            </div>

                            
                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
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
                
