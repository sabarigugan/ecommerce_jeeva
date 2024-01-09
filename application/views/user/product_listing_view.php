<?php foreach ($listproductbysubsub as $product):
    $pid = $product->pid;
    $databaseImageSource = $product->pimg;
    $imageArray = explode(',', $databaseImageSource);
    $firstImage = (!empty($imageArray)) ? trim($imageArray[0]) : '';  


    $imageSource = (!empty($firstImage)) ? base_url('assets/images/product/' . $firstImage) : base_url('assets/images/fashion/new-2.png');
?>

    <div class="col-lg-4 mb-4">
        <div class="item">
            <div class="client_container">
                <div class="detail-box">
                    <a href="<?php echo site_url('user/product/'. $pid); ?>">
                        <img src="<?php echo $imageSource; ?>" alt="Product Image">
                    </a>
                </div>
            </div>
            <h3><a href="<?php echo site_url('user/product/'. $pid); ?>"><?php echo $product->pname; ?></a></h3>
            <h4>₹ <?php echo $product->pofferprice; ?></h4>
            <a href="<?php echo site_url('user/product/'. $pid); ?>">
                <button type="button" class="btn btn-primary">View Detail</button>
            </a>
        </div>
    </div>

<?php endforeach; ?>
