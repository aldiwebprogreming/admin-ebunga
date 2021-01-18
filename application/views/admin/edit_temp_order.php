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

                      foreach ($order as $data) {
                        # code...
                      }

                   ?>

                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Temp Order</label>
                              <input type="text" class="form-control" name="kd_temp"  placeholder="Masukan kode temp order" required="" value="<?= $data['kd_temp'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Customer</label>
                              <input type="text" class="form-control" name="customer"  placeholder="Masukan nama customer" required="" value="<?= $data['customer'] ?>">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Waktu</label>
                              <input type="datetime-local" name="waktu" class="form-control" required="">
                              <small><?= $data['waktu']  ?></small>
                               
                            </div>

                         
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Produk</label>
                              <select class="form-control" name="kd_product">
                                <option><?= $data['kd_product'] ?></option>
                                <?php foreach ($produk as $kd_produk) { ?>
                                  <option><?= $kd_produk['kd_produk'] ?></option>
                                <?php } ?>
                               
                              </select>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Qt</label>
                              <input type="text" class="form-control" name="qt"  placeholder="Masukan qt" required=""value="<?= $data['qt'] ?>">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Total</label>
                              <input type="number" class="form-control" name="total"  placeholder="Masukan total" required=""value="<?= $data['total'] ?>">
                               
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>temp_order/data_temp_order" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
           
             </div>
           </div>
         </div>
       </section>
     </div>
