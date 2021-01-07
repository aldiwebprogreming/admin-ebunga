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

                  
                   ?>
        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Variant</label>
                              <input type="text" class="form-control" name="kd_variant"  placeholder="" required="" value="<?= $kd_variant; ?>" readonly="">
                              
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Produk</label>
                             <select class="form-control" name="kd_produk">
                              <option>--Pilih kode produk--</option>
                               <?php foreach ($produk as $data) { ?>

                               <option><?= $data['kd_produk'] ?></option> 

                             <?php } ?>
                             </select>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Nama Variant</label>
                              <input type="text" name="nama_variant" class="form-control" placeholder="Masukan nama variant produk">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Deks Variant</label>
                              <textarea class="form-control" name="deks_variant" style="height: 50px;"></textarea>
                            </div>

                            


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>varian_produk/data_varian" class ="btn btn-success"> Kembali </a>
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

            $("#kab").load("<?= site_url() ?>get.php?id="+id);

          });

        });


        $(document).ready(function(){

          $('#kab').change(function(){

             var kab = $(this).val();

            $("#kec").load("<?= site_url() ?>get2.php?id="+kab);

          });

        });


        $(document).ready(function(){

          $('#kec').change(function(){

             var kel = $(this).val();

            $("#kel").load("<?= site_url() ?>get3.php?id="+kel);

          });

        });



      </script>