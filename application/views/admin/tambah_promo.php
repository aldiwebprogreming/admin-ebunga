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
                              <label for="" class="form-label">Kode Promo</label>
                              <input type="text" class="form-control" name="kd_promo"  placeholder="Masukan kode promo" required="">
                                <?php echo form_error('username',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Nama Promo</label>
                              <input type="text" class="form-control" name="nama_promo"  placeholder="Masukan nama promo" required="">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Deks Promo</label>
                             <textarea class="form-control" name="deks_promo" placeholder="Masukan deks promo"></textarea>
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Cakupan</label>
                              <input type="text" class="form-control" name="cakupan"  placeholder="Masukan cakupan" required="">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Id Seller</label>
                              <input type="text" class="form-control" name="id_seller"  placeholder="Masukan id seller" required="">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Type</label>
                              <input type="text" class="form-control" name="tipe"  placeholder="Masukan type" required="">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Value</label>
                              <input type="number" class="form-control" name="value"  placeholder="Masukan value" required="">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Start Aktive</label>
                              <input type="date" class="form-control" name="start_active"  placeholder="Masukan start active" required="">
                               
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">End Aktive</label>
                              <input type="date" class="form-control" name="end_active"  placeholder="Masukan end active" required="">
                               
                            </div>


                            <div class="mb-3">
                              <label for="" class="form-label">Status</label>
                              <input type="text" class="form-control" name="status"  placeholder="Masukan status" required="">
                               
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>promo/data_promo" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
           
             </div>
           </div>
         </div>
       </section>
     </div>
