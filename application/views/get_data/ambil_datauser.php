 <?php foreach ($user as $data) {  ?>

                <a href="<?= base_url() ?>user/detail?id=<?= $data['id']?>" class="dropdown-item">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b><?= $data['username'] ?></b> 
                    <div class="time">
                 
                        <?= $data['last_login'] ?>
                      
                    </div>

                  </div>
                </a>

               <?php } ?>