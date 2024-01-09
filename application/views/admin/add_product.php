<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-12">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                  <form action="<?php echo site_url('admin/add_products'); ?>" method="post" enctype="multipart/form-data">
                            <div class = "row">
                            <div class="col-12">
                                <h4>Add Product</h4>
                                <hr class="my-4">
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="pname" class="form-label">Name</label>
                                <input type="text" class="form-control" name = "pname" id="pname" placeholder="Enter Product Name" required>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="psize" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name = "psize" id="psize" placeholder="Enter Quantity" required>
                            </div>

                            <div class="mb-3 col-12 col-md-6">
                              <label for="pimg" class="form-label">Product Images</label>
                              <input type="file" class="form-control" name="pimg[]" id="pimg" multiple required>
                            </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pbrand" class="form-label">Brand</label>
                                <select class = "form-control" name = "pbrand" id = "pbrand" required>
                                    <option selected disabled>Choose</option>
                                     <?php foreach ($brands as $brand): ?>
                                    <option value = "<?= $brand['brand_name']; ?>"><?= $brand['brand_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pcatg" class="form-label">Category</label>
                                  <select class = "form-control" name = "pcatg" id = "pcatg" required>
                                      <option selected disabled>Choose</option>
                                      <?php foreach ($categories as $category): ?>
                                     <option value = "<?= $category['catg_name']; ?>"><?= $category['catg_name']; ?></option>
                                     <?php endforeach; ?>
                                  </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="psubcatg" class="form-label">Sub Category</label>
                                  <select class = "form-control" name = "psubcatg" id = "psubcatg" required>
                                      <option selected disabled>Choose</option>
                                      <?php foreach ($subcategories as $subcategory): ?>
                                     <option value = "<?= $subcategory['subcatg_name']; ?>"><?= $subcategory['subcatg_name']; ?></option>
                                     <?php endforeach; ?>
                                  </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="psubsubcatg" class="form-label">Sub Sub Category</label>
                                  <select class = "form-control" name = "psubsubcatg" id = "psubsubcatg" required>
                                      <option selected disabled>Choose</option>
                                      <?php foreach ($subsubcategories as $susubbcategory): ?>
                                     <option value = "<?= $susubbcategory['sscatg_name']; ?>"><?= $susubbcategory['sscatg_name']; ?></option>
                                     <?php endforeach; ?>
                                  </select>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pprice" class="form-label">Price</label>
                                <input type="text" class="form-control" placeholder="Enter Price" name = "pprice" id="pprice" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pofferprice" class="form-label">MRP</label>
                                  <input type="text" class="form-control" name = "pofferprice" id="pofferprice" placeholder="Enter MRP" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pstock" class="form-label">Stock</label>
                                  <input type="text" class="form-control" name = "pstock" id="pstock" placeholder="Enter Stock" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="ptax" class="form-label">Tax</label>
                                  <input type="text" class="form-control" name = "ptax" id="ptax" placeholder="Enter Tax" required>
                              </div>

                          <div class="mb-3 col-12 col-md-6">
                           <label for="pssize" class="form-label">Size</label>
                           <select class="js-example-basic-multiple form-control" name="pssize[]" multiple="multiple">
                               <option value="s">S</option>
                               <option value="m">M</option>
                               <option value="l">L</option>
                               <option value="xl">XL</option>
                               <option value="xxl">XXL</option>
                           </select>
                       </div>
                       <script>
                       $(document).ready(function() {
                        $('.js-example-basic-multiple').select2();
                       });
                       </script>


                              <div class="mb-3 col-12 col-md-6">
                                  <label for="pqtype" class="form-label">Quantity Type</label>
                                  <input type="text" class="form-control" name = "pqtype" id="pqtype" placeholder="Enter Quantity Type" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                  <label for="phsn" class="form-label">HSN Code</label>
                                  <input type="text" class="form-control" name = "phsn" id="phsn" placeholder="Enter HSN Code" required>
                              </div>

                              <div class="mb-3 col-12 col-md-6">
                                <div id="colorPickerFields">
                                  <label for="colorPicker1" class="form-label">Color</label>
                                  <div class="d-flex">

                                  <input type="color" class="form-control" name = "color[]" id="colorPicker1" value="#364574" style="width:80%!important;" required>
                                    <button type="button" id="addColorPicker" class="btn btn-primary" style="width:20%!important; background-color: #364574!important; color: #fff!important;">+</button>
                                </div>
                              </div>
                              </div>

                            <div class="mb-3 col-12 col-md-12">
                                <label for="pspecify" class="form-label">Specifications</label>
                                <textarea class = "form-control" rows="6" name = "pspecify" id = "articaldes"></textarea>
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
