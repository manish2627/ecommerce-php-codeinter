<head>
<title>update Product</title>
</head>
<body id="page-top">
    <div class="container">
                            <!-- <form action="" method="POST"> -->
                                <?= form_open('admin/category/edit/'.$data->category_id , ['method'=>'POST'])?>
                                <div class="form-group">
                                    <!-- <label for="category_id">category id</label> -->
                                    <!-- <input type="hidden" name="cat_update_id" class="form-control" id="exampleInputEmail1" value=""> -->
                                </div>
                                <div class="form-group">
                                    <label for="category_name">category name</label>
                                    <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" value="<?php echo  $data->category_name; ?>">
                                    <?= form_error('cat_name')?>
                                </div>
                                <div class="form-group">
                                    <label for="category_slug">category slug</label>
                                    <input type="text" name="cat_slug" class="form-control" id="exampleInputEmail1"  value="<?php echo  $data->category_slug; ?>">
                                    <?= form_error('cat_slug')?>
                                </div>
                                <div class="form-group">
                                    <label for="category_status">category status</label><br>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cat_status">

                                        <option value="1">active</option>
                                        <option value="0">deactive</option>

                                    </select>

                                </div>


                                <button type="submit" href class="btn btn-primary" name="update" value="1">Update</button>
                            <!-- </form> -->
                            <?= form_close()?>

                        </div>

                    </div>
                   
        </body>

        </html>

