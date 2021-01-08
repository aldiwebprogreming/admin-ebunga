<div class="main-content">
        <section class="section">
          <div class="section-header">
              <?php foreach ($order as $data) {
                         
                        } ?>   
          <h4><i class="fas fa-cart-plus" style="font-size: 30px; color: #8A2BE2;"></i> Detail Order <?= $data['customer'] ?></h4>
          </div>
          
             

          <div class="row">

             <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                  
                  </div>



                      
                                
                    <div class="card-body">
                      <form method="POST" action="">
                        <div class="col-md-8 col-lg-8">
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Kd Oeder</strong></label>
                             <p><?= $data['kd_order'] ?></p>
                               
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Customer</strong></label>
                            
                                    <p><?= $data['customer'] ?></p>
        
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Total Item</strong></label>
                                  <p><?= $data['total_item'] ?></p>
                            </div>
                            <hr>
                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Total Charge</strong></label>
                                <p><?= $data['total_charge'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Disc</strong></label>
                                  <p><?= $data['disc'] ?></p>
                            </div>
                            <hr>

                            <div class="mb-3">
                              <label for="" class="form-label"><strong>Order Time</strong></label>
                                 <p><?= $data['order_time'] ?></p>
                            </div>
                            <hr>

                            <hr>



                            <div class="mb-3">
                                
                                <a href="<?= base_url() ?>Customer_order/data_customer_order" class ="btn btn-success"> Kembali </a>
                                </div>
                            </div>

                        </form>
                    
                     </div>
          
                </div>
            </div>
          </div>
        </section>
      </div>