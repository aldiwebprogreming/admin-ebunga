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
                                 <a href="<?= base_url() ?>variasi_produk/tambah_variasi_produk" class ="btn btn-primary mb-4"> Tambah Variasi Produk</a> 

                               

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kd Sub Produk</th>
                                                <th>Nama Sub Produk</th>
                                                <th>Kd Produk</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                 <th>No</th>
                                                <th>Kd Sub Produk</th>
                                                <th>Nama Sub Produk</th>
                                                <th>Kd Produk</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($variasi_p as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['kd_sub_produk'] ?></td>
                                                <td><?= $data['nama_sub_produk'] ?></td>
                                                <td><?= $data['kd_produk'] ?></td>
                                                <td><?= $data['active'] ?></td>
                                            
                                                <td> 
                                                   <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                    <a href="<?= base_url() ?>variasi_produk/hapus_variasi_produk?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Hapus">
                                                     <span class="d-inline-block" data-toggle="tooltip" data-title="Edit">
                                                    <a href="<?= base_url() ?>variasi_produk/edit_variasi_produk?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                                  </span>

                                                   <span class="d-inline-block" data-toggle="tooltip" data-title="Detail">
                                                    <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a>
                                                  </span>


                                              
                                            </tr>

                                            <!-- Modal -->
<div class="modal fade" id="mymodal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Variasi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <b>Kd sub produk</b><p><?= $data['kd_sub_produk'] ?></p> 
        <hr>
        <b>Nama sub produk</b> <p><?= $data['nama_sub_produk'] ?></p> 
        <hr>
        <b>Kode produk</b> <p><?= $data['kd_produk'] ?></p> 
        <hr>
        <b>Deks sub produk</b> <p><?= $data['deks_sub_produk'] ?></p> 
        <hr>
        <b>Foto Produk</b> <br><img src="<?= base_url() ?>img_produk/<?= $data['foto'] ?>" class="img-thumbnail" alt="" class="mt-4"><br><br>
        <hr>
        <b>Active</b> <p><?= $data['active'] ?></p> 
        

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
          2.3.0
        </div>
      </footer>
    </div>
  </div>

                
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut('slow');
    })
    </script>