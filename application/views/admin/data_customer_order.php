
<!-- loading -->
 <div class="preloader">
      <div class="loading">
        <img src="<?= base_url() ?>loading/load1.gif" width="400">
        
      </div>
    </div>
  <!-- loading -->

    <!-- Main Content -->
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
                                 <a href="<?= base_url() ?>customer_order/tambah_customer_order" class ="btn btn-primary mb-4"> Tambah Customer Order </a> 

                                   <a href="<?= base_url() ?>customer_order/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                     <a href="<?= base_url() ?>customer_order/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-file-excel"></i> Cetak Excel</a> 


                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Order</th>
                                                <th>Customer</th>
                                                <th>Total Item</th>
                                                 <th>Total Charge</th>
                                                <th>Disc</th>
                                                 <th>Order Item</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>No</th>
                                                <th>Kd Order</th>
                                                <th>Customer</th>
                                                <th>Total Item</th>
                                                 <th>Total Charge</th>
                                                <th>Disc</th>
                                                 <th>Order Item</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($order as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_order'] ?></td>
                                                <td><?= $data['customer'] ?></td>
                                                <td><?= $data['total_item'] ?></td>
                                                 <td><?= $data['total_charge'] ?></td>
                                                <td><?= $data['disc'] ?></td>
                                                <td><?= $data['order_time'] ?></td>
                                                <td>
                                                    <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                     <a href="<?= base_url() ?>customer_order/hapus_customer_order?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                      </span>

                                                    <span class="d-inline-block" data-toggle="tooltip" data-title="Edit"> 
                                                    <a href="<?= base_url() ?>customer_order/edit_customer_order?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                  </span>
                                                </td>
                                              
                                            </tr>

                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                     </div>
                </div>

            </div>
           
         
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
         <!--  Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> -->
        </div>
        <div class="footer-right">
              Copyright &copy; <?= date('Y') ?> <div class="bullet"></div> <a href="https://nauval.in/">www.ebunga.com</a>
        </div>
      </footer>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>