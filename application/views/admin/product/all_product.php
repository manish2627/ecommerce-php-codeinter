<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <title>All products </title>
</head>

<body id="page-top">



    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">All products :</h3>
            <!-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a> -->
        </div>


        <div class="container-fluid">

            <div class="card shadow">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">Products</p>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0 myTable" id="dataTable">
                        <thead>
                            <tr>

                                <th scope="col">s.no</th>
                                <th scope="col">Images</th>
                                <th scope="col">Product Name </th>
                                <th scope="col">Product Slug</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Height</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Description</th>
                                <th scope="col">View</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0; foreach ($products as $product) { $i++;?>
                                <tr>

                                    <th scope="col"><?= $i;?></th>
                                    <td>Images</td>
                                    <td><?= $product['product_name']?> </td>
                                    <td><?= $product['product_slug']?> </td>
                                    <td><?= $product['category_name']?></td>
                                    <td><?= $product['price']?></td>
                                    <td><?= $product['discount']?></td>
                                    <td><?= $product['weight']?></td>
                                    <td><?= $product['height']?></td>
                                    <td><?= $product['quantity']?></td>
                                    <td><?= $product['description']?></td>
                                    <td>view </td>

                                    <th scope="col">  <div class="row">
                                                            <!-- Button trigger modal for update form-->
                                                            <!-- <form id="form" action="category_update.php" method="GET">
                                                                <input type="hidden" name="cat_update_id" value="<?php  ?>"> -->

                                                                <a href='<?php echo base_url("admin/product/edit/".$product["product_id"])?>' class="btn-sm btn-primary"> edit</a>
                                                            <!-- </form> -->
                                                            <input type="hidden" name="cat_delete_id" class="cat_delete_id" value="<? ?>">
                                                            <a href="javascript:void(0)" name="category_delete_btn" class="btn-sm mx-1 btn-danger category_delete_btn ">Delete</a>

                                                        </div></td>
                                </tr>
                            <?php } ?>

                        </tbody>

                    </table>
                </div>
                <div class="row">
                    <div class="col">




                    </div>
                </div>
            </div>
        </div>



</body>

</html>