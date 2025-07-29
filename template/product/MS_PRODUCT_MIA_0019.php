<?php 
    $limit = 40;                                                                           
   function search ($lang, $trang, $limit) {
        if (isset($_POST['q'])) {
            $q = $_POST['q'];
            $q = trim($q);
            $q = vi_en1($q);            
        } else {
            $q = $_GET['search'];
            // $q = str_replace('-', ' ', $q);
        }

        $start = $trang * $limit;
        global $conn_vn;
        $sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang' ORDER BY product.product_id DESC";
        $result = mysqli_query($conn_vn, $sql);
        $count = mysqli_num_rows($result);

        $sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang' ORDER BY product.product_id DESC LIMIT $start,$limit";
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        $return = array(
                'data' => $rows,
                'count' => $count,
                'q' => $q
            );
        return $return;
    }
    $rows = search($lang, $trang, $limit);//var_dump($rows['count']);die;
 ////////////////////   

    function getBrand ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM brand WHERE id = $id";//echo $sql;
        $result = mysqli_query($conn_vn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
?>
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_MIA_0001.php";?>
<div class="gb-page-sanpham_ruouvang">
    <div class="container">
        <div class="row-fix">
            <div class="col-md-3" style="display: none;">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_MIA_0004.php";?>
            </div>
            <div class="col-md-12">
                <div class="gb-page-sanpham-description-danhmuc-title">
                    <h1>Tìm Kiếm sản phẩm</h1>
                </div>
                <div class="gb-page-sanpham-description-danhmuc">
                    <p>
                        
                    </p>
                </div>
                <div class="row" style="margin: 0">
                    <?php 
                    $d = 0;
                    foreach ($rows['data'] as $item) {
                        $d++;
                        $row = $item;
                        $rowLang = $action_product->getProductLangDetail_byId($row['product_id'],$lang);
                    ?>
                    <div class="col-sm-3" style="padding: 0">
                        <div class="gb-product_ruouvang-item">
                            <div class="gb-product_ruouvang-item-img">
                                <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $row['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>" class="img-responsive"></a>
                            </div>
                            <div class="gb-product_ruouvang-item-text">
                                <a href="/<?= $rowLang['friendly_url'] ?>" class="brand_mia"><?= getBrand($row['product_brand'])['name'] ?></a>
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
                    <?php
                        if ($d%4==0) {
                            echo '<hr style="width:100%;border:0;margin:0;" />';
                        }
                    }
                    ?>
                </div>
                <div style="text-align: center;"><?php 
                    $config = array(
                        'current_page'  => $trang+1, // Trang hiện tại
                        'total_record'  => $rows['count'], // Tổng số record
                        'total_page'    => 1, // Tổng số trang
                        'limit'         => $limit,// limit
                        'start'         => 0, // start
                        'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
                        'link_first'    => '',// Link trang đầu tiên
                        'range'         => 9, // Số button trang bạn muốn hiển thị 
                        'min'           => 0, // Tham số min
                        'max'           => 0,  // tham số max, min và max là 2 tham số private
                        'search'        => str_replace(' ', '-', $rows['q'])

                    );

                    $pagination = new Pagination;
                    $pagination->init($config);
                    echo $pagination->htmlPaging1();
                ?></div>
            </div>
        </div>
    </div>
</div>