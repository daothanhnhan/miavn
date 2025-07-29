<?php 
    $home_vali = $action_product->getProductList_byMultiLevel_orderProductId_hot(141,'desc',1,8,'')['data'];
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-tieubieu-product_ruouvang" style="padding-top: 30px">
    <div class="container">
        <div class="gb-tieubieu-product_ruouvang-title">
            <b></b>
            <h3>VALI NỔI BẬT</h3>
            <b></b>
        </div>
        <div class="gb-tieubieu-product_ruouvang-body">
            <div class="gb-tieubieu-product_ruouvang-slide owl-carousel owl-theme">
                <?php 
                $d = 0;
                foreach ($home_vali as $item) {
                    $d++;
                    $row = $item;
                    $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
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

                            <!--GIFT-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_MIA_0015.php";?>
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
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-tieubieu-product_ruouvang-slide').owlCarousel({
            loop:true,
            margin:0,
            navSpeed:500,
            nav:true,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            responsive:{
                0:{
                    items:2,
                    nav: false
                },
                600:{
                    items: 3,
                    nav:true
                },
                992:{
                    items: 5,
                    nav:true
                }
            }
        });
    });
</script>