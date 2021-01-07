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

                  foreach ($varian as $data) {
                    # code...
                  }
                   ?>
        
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Variant</label>
                              <input type="text" class="form-control" name="kd_variant"  placeholder="" required="" value="<?= $data['kd_variant']; ?>" readonly="">
                              
                            </div>
 
                            <div class="mb-3">
                              <label for="" class="form-label">Kd Produk</label>
                             <select class="form-control" name="kd_produk">
                              <option><?= $data['kd_product'] ?></option>
                               <?php foreach ($produk as $data) { ?>

                               <option><?= $data['kd_produk'] ?></option> 

                             <?php } ?>
                             </select>
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Nama Variant</label>
                              <input type="text" name="nama_variant" class="form-control" placeholder="Masukan nama variant produk" value="<?= $data['nama_variant'] ?>">
                            </div>

                             <div class="mb-3">
                              <label for="" class="form-label">Deks Variant</label>
                              <textarea class="form-control" name="deks_variant" style="height: 50px;"><?= $data['deks_variant'] ?></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Active</label>
                              <select class="form-control" name="active">
                                  <?php 
                                    if ($data['active'] == 1) {
                                      echo "<option value='1'>Y </option>";
                                      echo "<option value='0'>N </option>";

                                    } else {

                                        echo "<option value='0'>N </option>";
                                        echo "<option value='1'>Y </option>";

                                    }
                                   ?>
                              </select>
                            </div>

                            


                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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


    