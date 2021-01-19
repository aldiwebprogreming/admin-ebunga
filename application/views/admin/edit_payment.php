

<!-- loading -->
 
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

                  <?php 
                    foreach ($payment as $data) {
                      
                    }

                   ?>
                           
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label">Kode Payment</label>
                              <input type="text" class="form-control" name="kd_payment"  placeholder="Masukan kode payment" required="" value="<?= $data['kd_payment'] ?>">
                              
                            </div>

                            <div class="mb-3">
                              <label for="" class="form-label">Name payment</label>
                              <input type="text" class="form-control" name="name_payment"  placeholder="Masukan name payment" required="" value="<?= $data['nama_payment'] ?>">
                             
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Scope</label>
                              <input type="text" name="scope" class="form-control" required="" value="<?= $data['scope'] ?>">
                            </div>


                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">API</label>
                              <input type="text" name="api" class="form-control" required="" value="<?= $data['api'] ?>">
                            </div>


                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Token</label>
                              <input type="text" name="token" class="form-control" required="" value="<?= $data['token'] ?>">
                            </div>


                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <?php 

                                    if ($data['status'] == 1) {
                                      echo "<option value='1'>Y</option>";
                                      echo "<option value='0'>M</option>";

                                    } else {

                                        
                                        echo "<option value='0'>N</option>";
                                        echo "<option value='1'>Y</option>";

                                    }

                                 ?>
                            </select>
                            </div>


                            <div class="mb-3">
                                 <input type="submit" name="edit" class="btn btn-primary" value="Edit">
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

