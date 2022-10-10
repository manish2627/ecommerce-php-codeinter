<!DOCTYPE html>
    <html>

    <head>

        <title>Add Product</title>

    </head>

    <body id="page-top">
       
        <div class="container">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <fieldset>

                   
                    <!-- Text input-->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                        <div class="col-md-4">
                            <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="product_slug">PRODUCT SLUG</label>
                        <div class="col-md-4">
                            <input id="product_slug" name="product_slug" placeholder="PRODUCT SLUG" class="form-control input-md"  type="text">

                        </div>
                    </div>



                    <!-- Select Basic -->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="product_category">PRODUCT CATEGORY</label>
                        <div class="col-md-4">
                            <select id="product_category" name="product_category" class="form-control">
                                <?php
                               

                                
                                
                                foreach ($all_category as $category) { ?>
                                    <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>

                      <!-- Text input-->
                      <div class="form-group row">
                        <label class="col-md-4 control-label" for="price">Price</label>
                        <div class="col-md-4">
                            <input id="price" name="price" placeholder="price" class="form-control input-md" required="" type="text">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group row">
                        <label class="col-md-4 control-label" for="price_discount">Discount Price</label>
                        <div class="col-md-4">
                            <input id="price_discount" name="price_discount" placeholder="DISCOUNT" class="form-control input-md" required="" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="available_quantity">QUANTITY</label>
                        <div class="col-md-4">
                            <input id="available_quantity" name="quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="product_weight">PRODUCT WEIGHT</label>
                        <div class="col-md-4">
                            <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" class="form-control input-md" required="" type="text">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="product_height">PRODUCT HEIGHT</label>
                        <div class="col-md-4">
                            <input id="product_height" name="product_height" placeholder="PRODUCT HEIGHT" class="form-control input-md" required="" type="text">

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="product_description" name="product_description"></textarea>
                        </div>
                    </div>


                  

                    <!-- File Button -->
                    <div class="form-group row ">
                        <label class="col-md-4 control-label" for="filebutton">Images</label>
                        <div class="col-md-4">
                            <input id="file" name="image[]" class="input-file" type="file" multiple>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row ">


                        <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary">Add Product</button>

                    </div>

                </fieldset>
            </form>

        </div>

        </div>
       
    </body>
</html>