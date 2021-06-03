<?php require_once("inc/header.php"); ?>
<?php

use TechStore\Classes\Models\Order;

$ord = new Order;
$orders = $ord->selectAll("orders.id , orders.name , orders.email , SUM(qty * price) AS total");

?>

    <div class="container-fluid py-5">
        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>All Admins</h3>
                </div>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($orders as $index => $order) {?>

                      <tr>
                      <th scope="row"><?= $index + 1; ?></th>
                        <td><?= $order['name']; ?></td>
                        <td><?= $order['email']; ?></td>
                        
                        <td>
                            <a class="btn btn-sm btn-info" href="#">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="#">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                      </tr>

                      <?php }; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

<?php require_once("inc/footer.php"); ?>