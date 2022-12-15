<!--New phone list-->
<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">

            <!--products-->
            <?php
            foreach ($product_shuffle as $item){?>
                <!--products-->
                <div class="item  py-2 bg-light">
                    <div class="product font-rale">
                        <a href="#"><img src="<?php echo $item['item_image']??"./assests/products/1.png";?>" alt="product1" class="img-fluid"></a>
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
                            <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                        </div>
                    </div>
                </div>
                <!--products-->
                <?php
            }
            ?>

            <!--products-->

        </div>
    </div>
</section>
<!--New phone list-->