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


                        <?php foreach ($edit_customer_order as $data) {
                          # code...
                        } ?>     
                                
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <div class="col-md-8 col-lg-8">
                            

                            <div class="mb-3">
                              <label for="" class="form-label">Kode Order</label>
                             <input type="text" name="kd_order" class="form-control" placeholder="Masukan kode order" required="" value="<?= $data['kd_order'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Customer</label>
                              <input type="text" name="customer" placeholder="Masukan customer" class="form-control" required="" value="<?= $data['customer'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Total Item</label>
                               <input type="number" name="total_item" placeholder="Masukan total item" class="form-control" required="" maxlength="10" value="<?= $data['total_item'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Total Charge</label>
                               <input type="number" name="total_charge" placeholder="Masukan total change" class="form-control" required="" maxlength="10" value="<?= $data['total_charge'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Disc</label>
                               <input type="number" name="disc" placeholder="Masukan disc" class="form-control" required="" maxlength="10" value="<?=$data['disc'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Order Time</label>
                               <input type="datetime-local" name="oder_time" placeholder=" " class="form-control" required="" value="<?= $data['order_time'] ?>">
                            </div>



                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                                <a href="<?= base_url() ?>customer_order/data_customer_order" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
              </div>
               </div>
             </div>
           </section>
         </div>
                