
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
                              <label for="" class="form-label">Kode Country</label>
                              <input type="text" class="form-control" name="kd_country"  placeholder="Masukan kode country support" required="">
                               <?php echo form_error('kd_country',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Name Country</label>
                              <input type="text" class="form-control" name="name_country"  placeholder="Masukan nama country support" required="">
                               <?php echo form_error('name_country',' <small class="text-danger pl-2">','</small>'); ?>
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                             <select class="form-control" name="status">
                               <option>--Pilih Status Country--</option>
                               <option>available</option>
                               <option>not available</option>
                             </select>
                             
                           
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                                <a href="<?= base_url() ?>country_support/data_countrySupport" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
                         
          
               </div>
             </div>
             </div>
           </section>
         </div>

