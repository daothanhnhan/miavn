<p class="prices_ruouvang">
    <span class="prices_ruouvang-news"><?= number_format($row['product_price']-($row['product_price']*($row['product_price_sale']/100))) ?>đ</span>
    <span class="prices_ruouvang-old"> <?= number_format($row['product_price']) ?>đ</span>
</p>