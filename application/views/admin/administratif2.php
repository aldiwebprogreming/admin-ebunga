 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $sub_title; ?></li>
                        </ol>
                        <div class="row">         
                                
                                <div class="card-body">
                                 <a href="<?= base_url() ?>daerah_administratif_2/tambah_administratif2" class ="btn btn-primary mb-4"> Tambah Data Daerah Administratif 2</a> 
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Daerah</th>
                                                <th>Kode Pos</th>
                                                <th>Tingakat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Daerah</th>
                                                <th>Kode Pos</th>
                                                <th>Tingakat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                            $no = 1;
                                            foreach ($adms as $data) { ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $data['nama_daerah'] ?></td>
                                                <td><?= $data['kode_pos'] ?></td>
                                                <td><?= $data['tingkat'] ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>daerah_administratif_2/hapus_adminstratif2?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash"></i></a>

                                                    <a href="<?= base_url() ?>daerah_administratif_2/edit_adminstratif2?id=<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a> 

                                                   <!--  <a href="#" type="button" class="btn btn-success"  data-toggle="modal" data-target="#mymodal<?= $data['id'] ?>"> <i class="fas fa-eye"></i></a> -->


                                              
                                            </tr>

                                            <!-- Modal -->
<!-- div class="modal fade" id="mymodal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> -->



                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                      
                        </div>
                </main>



                
