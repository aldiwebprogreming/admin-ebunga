   
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
                              <label for="" class="form-label">Username</label>
                              <input type="text" class="form-control" name="username"  placeholder="Masukan username" required="">
                                <?php echo form_error('username',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Full Name</label>
                              <input type="text" class="form-control" name="full_name"  placeholder="Masukan nama lengakap" required="">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" name="email" class="form-control" required="" placeholder="Masukan email">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Phone</label>
                                <input type="number" name="phone" placeholder="Masukan number phone" maxlength="13" minlength="11" class="form-control">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Country</label>
                              <input type="text" name="country" class="form-control" placeholder="Country" required="">
                          
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Provinsi</label>
                              <select class="form-control" name="provinsi" id="provinsi">
                                  
                                <option>--Pilih Provinsi--</option>
                         <?php 
                              foreach ($provinsi as $data) {
                            ?>

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
                              <label for="" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Masukan alamat" required="" style="height: 90px;"></textarea>
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Postal Code (Kode Pos) </label>
                              <input type="text" name="postal_code" class="form-control" placeholder="Mausakan postal code" required="">
                            </div>


                             <div class="mb-3">
                              <label for="" class="form-label">Nomor KTP</label>
                              <input type="number" name="ktp" class="form-control" placeholder="Mausakan nomor ktp" required="" maxlength="16" minlength="10">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Nomor NPWP</label>
                              <input type="number" name="npwp" class="form-control" placeholder="Mausakan nomor ktp" required="" maxlength="16" minlength="10">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Nomor Siup</label>
                              <input type="text" name="siup" class="form-control" placeholder="Masukan nomor siup" required="">
                            </div>



                             <div class="mb-3">
                              <label for="" class="form-label">Status Seller</label>
                              <select class="form-control" name="status">
                                <option>--Pilih Status Seller--</option>
                                <option>active</option>
                                <option>disable</option>
                              </select>
                            </div>


                           

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
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
                
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
     <script>
       

        $(document).ready(function(){

          $('#provinsi').change(function(){

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
