<?php
$product_shuffle = $product->getData();
shuffle($product_shuffle);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
}
?>

<!--Top sale area-->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>

        <!--product lsit-->
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item){?>
                <!--products-->
                <div class="item  py-2">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id'])?>"><img src="<?php echo $item['item_image']??"./assests/products/1.png";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-centure">
                            <h6><?php echo $item['item_name']??"Unknown";?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price']??'0';?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--products-->
                <?php
            }
            ?>
        </div>
        <!--products-->
    </div>
</section>
<!--Top sale area-->
