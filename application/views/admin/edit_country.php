
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


                  <?php foreach ($country as $data) {
                    # code...
                  } ?>
                           
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Country</label>
                              <input type="text" class="form-control" name="kd_country"  placeholder="Masukan kode country support" required="" value="<?= $data['kd_country'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Name Country</label>
                              <input type="text" class="form-control" name="name_country"  placeholder="Masukan nama country support" required="" value="<?= $data['name_country'] ?>">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                             <select class="form-control" name="status">
                                <?php 

                                    if ($data['status'] == 'available') {
                                      echo " <option>available</option>";
                                      echo "<option>not available</option>";
                                    }else {

                                       echo "<option>not available</option>";
                                       echo " <option>available</option>";
                                    }

                                 ?>
                             </select>
                             
                           
                            </div>


                             <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Active</label>
                             <select class="form-control" name="active">
                                <?php 

                                    if ($data['active'] == 1) {
                                      echo " <option value='1'>Y</option>";
                                      echo "<option value='0'>N</option>";
                                    }else {

                                      echo "<option value='0'>N</option>";
                                       echo " <option value='1'>Y</option>";
                                    }

                                 ?>
                             </select>
                             
                           
                            </div>

                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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

