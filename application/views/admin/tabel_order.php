    <table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Kd Order</th>
                <th>Customer</th>
                <th>Total Item</th>
                <th>Time</th>
              
              
            </tr>
        </thead>
        
        <tbody>

            <?php foreach ($order as $data) { ?>
            <tr>
                <td><?= $data['kd_order'] ?></td>
                <td><?= $data['customer'] ?></td>
                <td><?= $data['total_item'] ?></td>
                 <td><?= $data['order_time'] ?></td>
               
            </tr>

        <?php } ?>
            
           
        </tbody>
    </table>