<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-5">

            </div>
            <div class="col-lg-10 col-md-7">
                <div class="card" style = "padding: 30px">
                    <div class="header">
                        <h4 class="title"><b>Add a Product</b></h4>
                    </div>
                    <div class="content">
                        <?php if(validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php endif?>
                        <form action = "<?= $this->config->base_url() ?>inventory/add_product_exec" method = "POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Supplier Company <font color="red">*</font></label>
                                        <input type="text" class="form-control border-input" placeholder="Company name" name = "supplier">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Name <font color="red">*</font></label>
                                        <input type="text" class="form-control border-input" placeholder="Product" name = "product_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Category <font color="red">*</font></label>
                                        <?php
                                            $categories = $this->item_model->getDistinct('product', 'product_category', 'ASC');
                                            #echo "<pre>";
                                            #print_r($categories);
                                            #echo "</pre>";
                                        ?>
                                        <select name="product_category" id="" class = "form-control border-input file">
                                            <!-- options should be based on the categories in the database -->
                                            <?php foreach($categories as $categories): ?>
                                                <option value="<?= $categories->product_category ?>"><?= $categories->product_category ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price <font color="red">*</font> </label>
                                        <input type="number" class="form-control border-input" placeholder="Price" name = "product_price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Quantity <font color="red">*</font></label>
                                        <input type="number" class="form-control border-input" placeholder="Product quantity" name = "product_quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Image</label>
                                        <input type="file" class="form-control border-input file" name = "product_image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Description</label>
                                        <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" name = "product_desc"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;">Enter</button>
                                <a href = "javascript:history.go(-1)" class="btn btn-info btn-fill btn-wd" style = "background-color: #dc2f54; border-color: #dc2f54; color: white;">Go back</a>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div> <!-- content -->
                </div> <!-- div-card -->
            </div> <!-- col-lg-8 col-md-7 -->
        </div> <!-- row -->
    </div> <!-- container fluid -->
</div><!-- content -->
      