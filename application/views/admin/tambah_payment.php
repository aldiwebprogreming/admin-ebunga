
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
                              <label for="" class="form-label">Kode Payment</label>
                              <input type="text" class="form-control" name="kd_payment"  placeholder="Masukan kode payment" required="">
                               <?php echo form_error('kd_payment',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Name payment</label>
                              <input type="text" class="form-control" name="name_payment"  placeholder="Masukan name payment" required="">
                               <?php echo form_error('name_payment',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Scope</label>
                              <input type="text" name="scope" class="form-control" required="">
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>payment_geteway/data_payment" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
                         
          
               </div>
             </div>
             </div>
           </section>
         </div>

