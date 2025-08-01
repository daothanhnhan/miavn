<?php 
    if ($product_extra == "") {
        $product_extra_arr = array();
    } else {
        $product_extra_arr = explode(",", $product_extra);
    }
    // var_dump($product_extra_arr);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-home-product gb-home-product-relate">
    <div class="container">
        <div class="gb-home-product-relate-title">
            <a href="">PHỤ KIỆN ĐI KÈM<div class="border hidden-xs"></div></a>
            <a href="" class="xemthem-list">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
        <div class="gb-home-product-relate-slide owl-carousel owl-theme">
            <?php 
            foreach ($product_extra_arr as $item) { 
                $row = $action_product->getProductDetail_byId($item,$lang);
                $rowLang = $action_product->getProductLangDetail_byId($item,$lang);
            ?>
            <div class="item">
                <div class="gb-product_ruouvang-item">
                    <div class="gb-product_ruouvang-item-img">
                        <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>
                    </div>
                    <div class="gb-product_ruouvang-item-text">
                        <a href="/<?= $rowLang['friendly_url'] ?>" class="brand_mia"><?= $action->getBrand($row['product_brand'])['name']; ?></a>
                        <!--PERCENT-->
                        <?php include DIR_PRODUCT."MS_PRODUCT_MIA_0006.php";?>

                        <h2><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h2>
                        <!--PRICE-->
                        <?php include DIR_PRODUCT."MS_PRODUCT_MIA_0002.php";?>
                    </div>
                    <div class="gb-product_ruouvang-item-yeumua">
                        <!--MUA HÀNG-->
                        <?php include DIR_CART."MS_CART_MIA_0001.php";?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        var owl = $('.gb-home-product-relate-slide');
        owl.owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            nav:true,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:[],
            responsive:{
                0:{
                    items:1,
                },
                767:{
                    items:3,
                },
                992:{
                    items:5,
                }
            }
        });
    });
</script>