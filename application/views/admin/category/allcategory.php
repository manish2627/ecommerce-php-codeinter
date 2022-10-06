<head>
    <title>All Categories</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>



<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">All categories </h3>
        <!-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a> -->
    </div>


    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Category Info</p>
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>

                            <th scope="col">s.no</th>
                            <th scope="col">Category Name </th>
                            <th scope="col">Category Slug</th>
                            <th scope="col">Created on</th>
                            <th scope="col">Updated on</th>
                            <!-- <th scope="col">created by</th> -->
                            <th scope="col">Status</th>
                            <!-- <th scope="col">User Id</th> -->
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0;
                                            foreach ($category_data as $data) {
                                                $i += 1 ?>
                                                <tr>

                                                    <td class="counterCell"><?= $i ?></td>
                                                    <td><?php echo $data->category_name  ?></td>
                                                    <td><?php   echo $data->category_slug?></td>
                                                    <td><?php  echo $data->created_on ?></td>
                                                    <td><?php  echo $data->updated_on  ?></td>
                                                   
                                                
                                                    
                                                    <td><?php 
                                                    $status =  $data->status;
                                                    if ($Status ='1') {
                                                            echo "active";
                                                        } else {
                                                            echo "deactive";
                                                        } 
                                                        ?></td>

                                                    <td>
                                                        <div class="row">
                                                            <!-- Button trigger modal for update form-->
                                                            <form id="form" action="category_update.php" method="GET">
                                                                <input type="hidden" name="cat_update_id" value="<?php  ?>">

                                                                <button type="submit" class="btn-sm btn-primary  " data-toggle="modal" data-target="#cat_update_Modal"> edit</button>
                                                            </form>
                                                            <input type="hidden" name="cat_delete_id" class="cat_delete_id" value="<? ?>">
                                                            <a href="javascript:void(0)" name="category_delete_btn" class="btn-sm mx-1 btn-danger category_delete_btn ">Delete</a>

                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>


                                                </tr>
                                            <?php }?>

                    </tbody>

                </table>


            </div>

        </div>
    </div>
</div>

