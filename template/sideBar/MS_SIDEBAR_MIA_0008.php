<?php 
    $main_id = array(124, 139, 140, 141);

    function listMaterial ($id) {
        global $conn_vn;
        if ($id == 141) {
            $sql = "SELECT * FROM material WHERE category = 1";
        }
        if ($id == 140) {
            $sql = "SELECT * FROM material WHERE category = 2";
        }
        if ($id == 139) {
            $sql = "SELECT * FROM material WHERE category = 3";
        }
        if ($id == 124) {
            $sql = "SELECT * FROM material WHERE category = 4";
        }
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
        }
        return $rows;
    }
    if (in_array($rowCatLang['productcat_id'], $main_id)) {
        $list_material = listMaterial($rowCatLang['productcat_id']);
    } else {
        $parent_id = $action_product->getProductCatDetail_byId($rowCatLang['productcat_id'], $lang)['productcat_parent'];
        $list_material = listMaterial($parent_id);
    }
    
    // var_dump($_SESSION['brand']);
?>
<div class="gb-labelcheckbox-mia">
    <h3>Chất liệu</h3>
    <ul>
        <?php 
        foreach ($list_material as $item) { 
            $check = '';
            if (in_array($item['id'], $_SESSION['material'])) {
                $check = "checked";
            }
        ?>
        <li>
            <input type="checkbox" onclick="material(<?= $item['id'] ?>)" <?= $check ?> > <span><?= $item['name'] ?></span>
        </li>
        <?php } ?>
    </ul>
</div>
<script>
    function material (id) {
        // alert(id);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var out = this.responseText;
             // alert(out);
             // location.reload();
             window.location.href = "/<?= $_GET['page'] ?>";
            }
          };
          xhttp.open("GET", "/functions/ajax/material.php?id="+id, true);
          xhttp.send();
    }
</script>