<?php 
    $sidebar_procatid = array(141, 140, 139, 124);
?>
<div class="gb-danhmucsanpham_cuanhom widget-sidebar">
    <aside class="widget">
        <div class="widget-content">
            <div class="accordion-default">
                <ul class="accordion">
                    <?php 
                    foreach ($sidebar_procatid as $item) {
                        $procat = $action_product->getProductCatDetail_byId($item, $lang); 
                        $list_procat_sub = $action_product->getProductCat_byProductCatIdParent($item, 'desc');
                    ?>
                    <li class="accordion-toggle"><a href="/<?= $procat['friendly_url'] ?>"><?= $procat['productcat_name'] ?></a></li>
                    <ul class="accordion-content">
                        <?php 
                        foreach ($list_procat_sub as $item_sub) { 
                        ?>
                        <li><a href="/<?= $item_sub['friendly_url'] ?>"><?= $item_sub['productcat_name'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--KÍCH THƯỚC-->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0006.php";?>
        <!--THƯƠNG HIỆU-->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0007.php";?>
        <!--CHẤT LIỆU-->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0008.php";?>
        <!-- laptop -->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0014.php";?>
        <!--Tính năng đặc biệt-->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0009.php";?>
        <!--Gía tiền-->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0010.php";?>
        <!--MÀU SẮC-->
        <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0011.php";?>
    </aside>
</div>

<script>
    $(document).ready(function () {
        $('.accordion-default .accordion .accordion-toggle').on('click', function (e) {
            $(this).next().slideToggle('600');
            $(".accordion-content").not($(this).next()).slideUp('600');
            $(this).toggleClass('active').siblings().removeClass('active');
        });
    });
</script>