
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
                                
                                <div class="card-body">

                                     <a href="<?= base_url() ?>komplain/cetak_data" id="" class ="btn btn-danger mb-4" target="_blank"><i class="fas fa-print"></i> Cetak PDF</a> 

                                       <a href="<?= base_url() ?>komplain/cetak_excel" id="" class ="btn btn-success mb-4" ><i class="fas fa-file-excel"></i> Cetak Excel</a> 

                                <!--  <a href="<?= base_url() ?>address_list/tambah_address_list" class ="btn btn-primary mb-4"> Tambah Address List</a>  -->
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Komplain</th>
                                                <th>Kd_transaction</th>
                                                <th>Customer Id</th>
                                                <th>Seller Id</th>
                                                <th>Waktu Komplain</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Komplain</th>
                                                <th>Kd_transaction</th>
                                                <th>Customer Id</th>
                                                <th>Seller Id</th>
                                                <th>Waktu Komplain</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($komplain as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_komplain'] ?></td>
                                                <td><?= $data['kd_transaction'] ?></td>
                                                <td><?= $data['customer_id'] ?></td>
                                                <td><?= $data['seller_id'] ?></td>
                                                <td><?= $data['waktu_komplain'] ?></td>
                                                <td>
                                                   <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                    <a href="<?= base_url() ?>komplain/hapus_komplain?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                  </span>

                                                   <!--  <a href="<?= base_url() ?>address_list/edit_address_list?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
 -->                                                <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                                    <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a>
                                                  </span>


                                              
                                            </tr>

                                            <!-- Modal -->
<div class="modal fade" id="mymodal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Komplain</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
     
       <b>Kode Komplain</b><p><?= $data['kd_komplain'] ?></p> 
       <hr>
        <b>Name Transaction</b> <p><?= $data['kd_transaction'] ?></p> 
        <hr>
        <b>Customer Id</b> <p><?= $data['customer_id'] ?></p> 
        <hr>
        <b>Seller Id</b> <p><?= $data['seller_id'] ?></p> 
        <hr>
        <b>Waktu Komplain</b> <p><?= $data['waktu_komplain'] ?></p> 
        <hr>
        <b>Judul</b> <p><?= $data['judul'] ?></p> 
        <hr>
        <b>Isi</b> <p><?= $data['isi'] ?></p> 
        <hr>
         <b>Status</b> <p><?= $data['status'] ?></p>
         <hr> 
         <b>Operator Handle</b> <p><?= $data['operator_handle'] ?></p> 
      





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>



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
          
        </div>
      </footer>
    </div>
  </div>



   <script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>             
