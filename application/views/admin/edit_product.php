<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/edit_products/'.sha1(md5($product['pid']))); ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Edit Product</h4>
                                <hr class="my-4">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="pname" class="form-label">Name</label>
                                <input type="text" class="form-control" name = "pname" id="pname"  value="<?= $product['pname']; ?>" required>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="psize" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name = "psize" id="psize" value="<?= $product['psize']; ?>" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                              <label for="pimg" class="form-label">Product Images</label>
                              <input type="file" class="form-control" name="pimg[]" id="pimg" multiple value="<?= $product['pimg']; ?>" accept="image/png, image/gif, image/jpeg">
                                <!-- <img src="<?php echo base_url('assets/images/product/' . $product['pimg']); ?>" height="150" width="300" /> -->

                                <?php

                                  $databaseImageSource = $product['pimg'];

                                  $imageArray = explode(',', $databaseImageSource);

                                  foreach ($imageArray as $image) {
                                    $imageSource = base_url('assets/images/product/' . trim($image));
                                    echo '<img src="' . $imageSource . '" height="75" width="150" />';
                                  }
                                ?>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pbrand" class="form-label">Brand</label>
                                <select class = "form-control" name = "pbrand" id = "pbrand" required>
                                    <option selected value="<?= $product['pbrand']; ?>"><?= $product['pbrand']; ?></option>
                                     <?php foreach ($brands as $brand): ?>
                                    <option value = "<?= $brand['brand_name']; ?>"><?= $brand['brand_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pcatg" class="form-label">Category</label>
                                  <select class = "form-control" name = "pcatg" id = "pcatg" required>
                                      <option selected value="<?= $product['pcatg']; ?>"><?= $product['pcatg']; ?></option>
                                      <?php foreach ($categories as $category): ?>
                                     <option value = "<?= $category['catg_name']; ?>"><?= $category['catg_name']; ?></option>
                                     <?php endforeach; ?>
                                  </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="psubcatg" class="form-label">Sub Category</label>
                                  <select class = "form-control" name = "psubcatg" id = "psubcatg" required>
                                      <option selected value="<?= $product['psubcatg']; ?>"><?= $product['psubcatg']; ?></option>
                                      <?php foreach ($subcategories as $subcategory): ?>
                                     <option value = "<?= $subcategory['subcatg_name']; ?>"><?= $subcategory['subcatg_name']; ?></option>
                                     <?php endforeach; ?>
                                  </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="psubsubcatg" class="form-label">Sub Sub Category</label>
                                  <select class = "form-control" name = "psubsubcatg" id = "psubsubcatg" required>
                                      <option selected value="<?= $product['psubsubcatg']; ?>"><?= $product['psubsubcatg']; ?></option>
                                      <?php foreach ($subsubcategories as $susubbcategory): ?>
                                     <option value = "<?= $susubbcategory['sscatg_name']; ?>"><?= $susubbcategory['sscatg_name']; ?></option>
                                     <?php endforeach; ?>
                                  </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pprice" class="form-label">Price</label>
                                <input type="text" class="form-control" value="<?= $product['pprice']; ?>" name = "pprice" id="pprice" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pofferprice" class="form-label">MRP</label>
                                  <input type="text" class="form-control" name = "pofferprice" id="pofferprice" value="<?= $product['pofferprice']; ?>" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pstock" class="form-label">Stock</label>
                                  <input type="text" class="form-control" name = "pstock" id="pstock" value="<?= $product['pstock']; ?>" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="ptax" class="form-label">Tax</label>
                                  <input type="text" class="form-control" name = "ptax" id="ptax" value="<?= $product['ptax']; ?>" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pqtype" class="form-label">Quantity Type</label>
                                  <input type="text" class="form-control" name = "pqtype" id="pqtype" value="<?= $product['pqtype']; ?>" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                <div id="colorPickerFields">
                                  <label for="colorPicker1" class="form-label">Color</label>
                                  <div class="d-flex">

                                    <div class="mb-3 col-12 col-md-6 d-flex">
        <?php
      $colors = explode(',', $product['color']);
      foreach ($colors as $color) {
      ?>
      <div class="input-group">
          <input type="color" class="form-control" name="color[]" value="<?= $color ?>" style="width: 80% !important;" required>
      </div>
      <?php } ?>
      <button type="button" id="addColorPicker" class="btn btn-primary" style="width: 100%; background-color: #364574!important; color: #fff!important;">+</button>
  </div>

                                </div>
                              </div>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="phsn" class="form-label">HSN Code</label>
                                  <input type="text" class="form-control" name = "phsn" id="phsn" value="<?= $product['phsn']; ?>" required>
                              </div>

<div class="mb-3 col-12 col-md-6">
    <label class="form-label">Stock Status</label>
    <div class="d-flex">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="pstockstatus" id="in_stock" value="1" <?= ($product['pstockstatus'] == 1) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="in_stock">
            In Stock
        </label>
    </div>
    <div class="form-check ms-3">
        <input class="form-check-input" type="radio" name="pstockstatus" id="out_of_stock" value="2" <?= ($product['pstockstatus'] == 2) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="out_of_stock">
            Out of Stock
        </label>
    </div>
  </div>
</div>

                            <div class="mb-3 col-12 col-md-12">
                                <label for="pspecify" class="form-label">Specifications</label>
                                <textarea class = "form-control" rows="6" name = "pspecify" id = "articaldes"><?= $product['pspecify']; ?></textarea>
                            </div>

                            </div>
                            <button type="submit" class="btn app-btn-primary" id = "submitButton">SUBMIT</button>
                      </form>
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
        </div>
        <!--//row-->
    </div>
    <!--//container-fluid-->
</div>
<!--//app-content-->
<script>
  $(function() {
    var nextFieldId = 2;
    $("#addColorPicker").click(function() {
      var newField = $("<div>", { class: "color-picker-field" });
      newField.append("<label for='colorPicker" + nextFieldId + "' class='form-label'>Color Picker " + nextFieldId + "</label>");
      newField.append("<input type='color' class='form-control form-control-color w-100 validate[required]' id='colorPicker" + nextFieldId + "' name='color[]' value='#364574'>");
      $("#colorPickerFields").append(newField);
      nextFieldId++;
    });
  });
  </script>
