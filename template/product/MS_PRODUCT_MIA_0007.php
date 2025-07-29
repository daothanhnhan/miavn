<?php 
    $home_procatid = array(140, 139, 124);
?>
<?php 
    foreach ($home_procatid as $item) { 
        $procat_name = $action_product->getProductCatDetail_byId($item, $lang);
        $home_list_pro = $action_product->getProductList_byMultiLevel_orderProductId_hot($item,'desc',1,5,'')['data'];
?>
<div class="gb-tieubieu-product_ruouvang">
    <div class="container">
        <div class="gb-tieubieu-product_ruouvang-title">
            <b></b>
            <h3><?= $procat_name['productcat_name'] ?> NỔI BẬT</h3>
            <b></b>
        </div>
        <div class="gb-tieubieu-product_ruouvang-body">
            <div class="row" style="margin:  0">
                <?php
                foreach ($home_list_pro as $item_pro) { 
                    $row = $item_pro;
                    $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                ?>
                <div class="col-md-3 col-sm-3 col-xs-6 clear-padding">
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
</div>
<?php } ?>