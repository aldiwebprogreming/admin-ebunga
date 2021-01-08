 <?php foreach ($order as $data) {  ?>

                <a href="<?= base_url() ?>customer_order/detail?id=<?= $data['id']?>" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-cart-plus"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b><?= $data['customer'] ?></b> 
                    <div class="time">
                 

                      
                    </div>

                  </div>
                </a>

               <?php } ?>