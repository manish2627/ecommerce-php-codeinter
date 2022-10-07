
    <!DOCTYPE html>
    <html>

    <head>
        
        <title>Add category</title>
        
    </head>

    <body id="page-top">
       
                    <div class="container">
                        <!-- <form action="" method="POST"> -->
                            <?php echo form_open('admin/category/add' , ['method'=>'POST'])?>
                            <div class="form-group">
                                <label for="category_name">category name</label>
                                <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" value="">
                                <?php echo form_error('cat_name')?>
                            </div>
                            <div class="form-group">
                                <label for="category_slug">category slug</label>
                                <input type="text" name="cat_slug" class="form-control" id="exampleInputEmail1" value="">
                            </div>



                            <button type="submit" class="btn btn-primary" name="add_new_category" value='1'>Submit</button>
                        <!-- </form> -->
                        <?php echo form_close()?>
                        
                    </div>

                </div>
              
    </body>

    </html>

