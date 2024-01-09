<div class="col-lg-3 col-xs-12 pull-left ">
   <div class="product-inner-left">
      <!-- ================================Collections================================ -->
      <div class="sort3-left">
         <div class="flip3">Collections</div>
         <div class="collections">
           <?php
           $listcatg = $this->madmin->listcatg();
           foreach ($listcatg as $index => $listcatgArray) {
             $allcatg = $listcatgArray->catg_name;
             $catgstr = str_replace(' ', '-', $allcatg);
           ?>
             <a href="<?php echo site_url('user/product_list/' . $catgstr); ?>">
            <div class="selection">
               <!-- <input id="Athleisure" name="hungry" type="radio"> -->
               <label for="Athleisure"><?php echo $listcatgArray->catg_name; ?></label>
            </div>
          </a>
          <?php } ?>
         </div>
      </div>

      <div class="sort3-left">
         <div class="flip3">Size</div>
         <div class="size">
            <div class="selection1">
               <input id="pizza" name="pssize" value="s" type="radio">
               <label for="pizza">S</label>
            </div>
            <div class="selection1">
               <input id="burger" name="pssize" value="m" type="radio">
               <label for="burger">M</label>
            </div>
            <div class="selection1">
               <input id="bread" name="pssize" value="l" type="radio">
               <label for="bread">L</label>
            </div>
            <div class="selection1">
               <input id="bread2" name="pssize" value="xl" type="radio">
               <label for="bread2">XL</label>
            </div>
            <div class="selection1">
               <input id="bread3" name="pssize" value="xxl"  type="radio">
               <label for="bread3">XXL</label>
            </div>
         </div>
      </div>

  <!-- ============= Price ============== -->

            <div class="sort3-left price-range-left">
                <div class="flip3">Price Range</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-range"></div>
                    </div>
                </div>
                <div class="row slider-labels">
                    <div class="col-lg-6 col-xs-6 caption">
                        <span id="slider-range-value1"></span>
                    </div>
                    <div class="col-lg-6 col-xs-6 text-right caption">
                        <span id="slider-range-value2"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form>
                            <input type="hidden" name="min-value" value="">
                            <input type="hidden" name="max-value" value="">
                        </form>
                    </div>
                </div>

    </div>



      <!-- =============== color END============= -->
      <div class="sort3-left">
          <div class="flip3">Brands</div>
          <div class="brands">
              <?php
              $listbrand = $this->madmin->listbrand();
              foreach ($listbrand as $index => $listbrandArray) {
                  $brandname = $listbrandArray->brand_name;
                  $brand = str_replace(' ', '-', $brandname);
                  ?>
                  <div class="selection2">
                      <input type="checkbox" class="brand-checkbox no-color-change" value="<?php echo $brand; ?>" id="brand_<?php echo $index; ?>">
                      <label class="no-color-change" for="brand_<?php echo $index; ?>"><?php echo $listbrandArray->brand_name; ?></label>
                  </div>
              <?php } ?>
          </div>
      </div>

      <!-- ========================== Brands END============================ -->


   </div>
</div>
<!-- <script>
    $(document).ready(function () {
        var rangeSlider = document.getElementById('slider-range');

        noUiSlider.create(rangeSlider, {
            start: [1, 1000],
            step: 1,
            range: {
                'min': [1],
                'max': [1000]
            },
            format: {
                to: function (value) {
                    return value.toFixed(2);
                },
                from: function (value) {
                    return value;
                }
            },
            connect: true
        });

        rangeSlider.noUiSlider.on('update', function (values, handle) {
            $("#slider-range-value1").html(values[0]);
            $("#slider-range-value2").html(values[1]);
            $("input[name='min-value']").val(values[0]);
            $("input[name='max-value']").val(values[1]);
        });

        rangeSlider.noUiSlider.on('change', function () {
            updateProductListing();
        });

        // Event listener for size filter
        $("input[name='pssize']").change(function () {
            updateProductListing();
        });

        updateProductListing();
    });

    function updateProductListing() {
        var minValue = $("input[name='min-value']").val();
        var maxValue = $("input[name='max-value']").val();
        var selectedSize = $("input[name='pssize']:checked").val();

        $.ajax({
            url: '<?php echo site_url('user/filterbyprice'); ?>',
            type: 'GET',
            data: {
                minPrice: minValue,
                maxPrice: maxValue,
                pssize: selectedSize
            },
            success: function (data) {
                $("#product-list").html(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

</script> -->
<script>
    $(document).ready(function () {
        var rangeSlider = document.getElementById('slider-range');

        noUiSlider.create(rangeSlider, {
            start: [1, 1000],
            step: 1,
            range: {
                'min': [1],
                'max': [1000]
            },
            format: {
                to: function (value) {
                    return value.toFixed(2);
                },
                from: function (value) {
                    return value;
                }
            },
            connect: true
        });

        rangeSlider.noUiSlider.on('update', function (values, handle) {
            $("#slider-range-value1").html(values[0]);
            $("#slider-range-value2").html(values[1]);
            $("input[name='min-value']").val(values[0]);
            $("input[name='max-value']").val(values[1]);
        });

        rangeSlider.noUiSlider.on('change', function () {
            updateProductListing();
        });

        // Handle size and brand filter changes
        $("input[name='pssize'], .brand-checkbox").on('change', function () {
            updateProductListing();
        });

        updateProductListing();
    });

    function updateProductListing() {
    var minValue = $("input[name='min-value']").val();
    var maxValue = $("input[name='max-value']").val();
    var selectedSize = $("input[name='pssize']:checked").val();
    var selectedBrands = $(".brand-checkbox:checked").map(function () {
        return this.value;
    }).get();

    $.ajax({
        url: '<?php echo site_url('user/filterProducts'); ?>',
        type: 'POST',
        data: {
            minPrice: minValue,
            maxPrice: maxValue,
            pssize: selectedSize,
            brands: selectedBrands
        },
        success: function (data) {
            $("#product-list").html(data);

            if (data) {
                $("#subcatg").hide();
            } else {
                $("#subcatg").show();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}


</script>

<style>
    .no-color-change {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: white; /* Set the background color as needed */
        border: 1px solid #ccc; /* Set the border color as needed */
        padding: 8px; /* Adjust padding as needed */
        cursor: pointer;
    }

    .selection2:checked {
        background-color: #000;
        border: 1px solid #3498db;
        color: #3498db;
    }
</style>
