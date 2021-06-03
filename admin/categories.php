<?php require_once("inc/header.php"); ?>
<?php

    use TechStore\Classes\Models\Cat;
    
    $cat=new cat();
    $allCat=$cat->selectAll("id , name , created_at");
    //print_r($allCat);

?>
    <div class="container-fluid py-5">
        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>All Categories</h3>
                    <a href="#" class="btn btn-success">
                        Add new
                    </a>
                </div>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($allCat as $index => $aCat) {?>
                                <tr>
                                    <th scope="row"><?= $index + 1; ?></th>
                                    <td><?= $aCat['name']; ?></td>
                                    <td><?= date("d M,Y h:i A" , strtotime($aCat['created_at'])); ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="#">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="#">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <!-- <a class="btn btn-sm btn-info" href="<?= AURL . "edit-product.php?id=" . $prod['id'];?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="<?= AURL . "handlers/delete-categories.php?id=" . $aCat['id'];?>">
                                            <i class="fas fa-trash"></i>
                                        </a> -->
                                        
                                    </td>
                                </tr>

                        <?php }; ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

<?php require_once("inc/footer.php"); ?>