<?php 
    // var_dump($_SESSION['shopping_cart']);
    // unset($_SESSION['shopping_cart']);

    if (isset($_POST['name'])){
        $cart->payment1();
        // die('cart');
    }
?>
<div class="container">
    <div class="main-wrapper clearfix">
        <div id="checkout-cart" class="container checkout">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="checkout-title">
                    <div class="col-xs-12 cart">GIỎ HÀNG</div>
                    <div class="clearfix"></div>
                </div>
                <div id="gio-hang-mia">
                <?php 
                $total = 0;
                foreach ($_SESSION['shopping_cart'] as $item) { 
                    $total += $item['product_quantity']*$item['product_price'];
                ?>
                <div class="col-xs-12 product-wrapper">
                    <div data-id="4783" class="product-detail row">
                        <a href="javascript:void(0)">
                            <div style="background:url('/images/<?= $item['product_img'] ?>')" class="image col-xs-3">
                                <span data-id="4783" class="btn-remove-item-cart">
                                    <img src="/images/icons/i-close.png" onclick="remove_cart(<?= $item['product_id'] ?>)">
                                </span>
                            </div>
                        </a>
                        <div class="info col-xs-9">
                            <div class="col-xs-7 product-info">
                                <a href="/san-pham/kakashi-doko-goi-co-m-red" class="product-title"><?= $item['product_name'] ?></a>
                                <div class="product-discount hidden">
                                    <span>- Giảm thêm 5% khi mua bộ 2 vali</span>
                                    <span>- Giảm thêm 10% khi mua bộ 3 vali</span>
                                </div>
                            </div>
                            <div class="col-xs-5 product-price">
                                <div class="col-sm-6 col-xs-12 quantity-select">
                                    <input type="number" min="1" value="<?= $item['product_quantity'] ?>" masp="<?= $item['product_id'] ?>" onchange="edit_num(this)" onkeyup="edit_num(this)" class="form-control">
                                </div>
                                <div class="col-sm-6 col-xs-12 price">
                                    <span class="main-price orange"><?= number_format($item['product_quantity']*$item['product_price']) ?>đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-xs-12 total">
                    <input type="hidden" name="total_money" value="100000">
                    <div style="margin-bottom: 15px;" class="clearfix">
                        <div class="col-xs-6 total-name">Tổng tiền:</div>
                        <div class="col-xs-6 total-amount orange"><?= number_format($total) ?>đ</div>
                    </div>
                    <div style="margin-bottom: 15px;" class="clearfix use-coupon hidden">
                        <div style="font-size: 16px;" class="col-xs-6 total-name">Sử dụng mã giảm giá
                            <label style="position: relative;top: -1px;margin-right: 5px;" class="label label-success"></label>
                            <span class="btn-cancel-coupon red">(Hủy):</span>
                        </div>
                        <div style="font-size: 16px;" class="col-xs-6 total-amount orange"></div>
                    </div>
                    <div style="margin-bottom: 15px;" class="clearfix final-money hidden">
                        <div class="col-xs-6 total-name">Cần thanh toán:</div>
                        <div class="col-xs-6 total-amount orange">100,000đ</div>
                    </div>
                    <div class="col-xs-12 text-right discount">
                        <p class="btn-show-input">Sử dụng mã giảm giá</p>
                        <p class="input-coupon">
                            <input placeholder="Nhập mã giảm giá" name="voucher" class="form-control">
                            <a class="btn btn-primary btn-apply-coupon">Áp dụng</a>
                        </p>
                        <p class="message hidden red"></p>
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 customer-wrapper">
                    <form action="" method="post" class="customer-info clearfix">
                        <div class="row">
                            <div class="col-xs-6 name">
                                <input name="name" placeholder="Họ và Tên" required="" class="form-control error">
                            </div>
                            <div class="col-xs-6 phone">
                                <input type="number" name="phone" placeholder="Số điện thoại" required="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 region">
                                <select name="region" class="form-control">
                                    <option value="" selected="" disabled="">Tỉnh/thành phố</option>
                                    <option value="An Giang">An Giang</option>
                                    <option value="171">Bà Rịa - Vũng Tàu</option>
                                    <option value="137">Bắc Giang</option>
                                    <option value="126">Bắc Kạn</option>
                                    <option value="184">Bạc Liêu</option>
                                    <option value="140">Bắc Ninh</option>
                                    <option value="175">Bến Tre</option>
                                    <option value="169">Bình Dương</option>
                                    <option value="157">Bình Định</option>
                                    <option value="167">Bình Phước</option>
                                    <option value="161">Bình Thuận</option>
                                    <option value="185">Cà Mau</option>
                                    <option value="181">Cần Thơ</option>
                                    <option value="125">Cao Bằng</option>
                                    <option value="154">Đà Nẵng</option>
                                    <option value="164">Đăk Lăk</option>
                                    <option value="165">Đăk Nông</option>
                                    <option value="129">Điện Biên</option>
                                    <option value="170">Đồng Nai</option>
                                    <option value="178">Đồng Tháp</option>
                                    <option value="163">Gia Lai</option>
                                    <option value="124">Hà Giang</option>
                                    <option value="145">Hà Nam</option>
                                    <option value="123">Hà Nội</option>
                                    <option value="150">Hà Tĩnh</option>
                                    <option value="141">Hải Dương</option>
                                    <option value="142">Hải Phòng</option>
                                    <option value="182">Hậu Giang</option>
                                    <option value="172">Hồ Chí Minh</option>
                                    <option value="133">Hoà Bình</option>
                                    <option value="143">Hưng Yên</option>
                                    <option value="159">Khánh Hoà</option>
                                    <option value="180">Kiên Giang</option>
                                    <option value="162">Kon Tum</option>
                                    <option value="130">Lai Châu</option>
                                    <option value="166">Lâm Đồng</option>
                                    <option value="135">Lạng Sơn</option>
                                    <option value="128">Lào Cai</option>
                                    <option value="173">Long An</option>
                                    <option value="146">Nam Định</option>
                                    <option value="149">Nghệ An</option>
                                    <option value="147">Ninh Bình</option>
                                    <option value="160">Ninh Thuận</option>
                                    <option value="138">Phú Thọ</option>
                                    <option value="158">Phú Yên</option>
                                    <option value="151">Quảng Bình</option>
                                    <option value="155">Quảng Nam</option>
                                    <option value="156">Quảng Ngãi</option>
                                    <option value="136">Quảng Ninh</option>
                                    <option value="152">Quảng Trị</option>
                                    <option value="183">Sóc Trăng</option>
                                    <option value="131">Sơn La</option>
                                    <option value="168">Tây Ninh</option>
                                    <option value="144">Thái Bình</option>
                                    <option value="134">Thái Nguyên</option>
                                    <option value="148">Thanh Hóa</option>
                                    <option value="153">Thừa Thiên Huế</option>
                                    <option value="174">Tiền Giang</option>
                                    <option value="176">Trà Vinh</option>
                                    <option value="127">Tuyên Quang</option>
                                    <option value="177">Vĩnh Long</option>
                                    <option value="139">Vĩnh Phúc</option>
                                    <option value="132">Yên Bái</option>
                                </select>
                            </div>
                            <div class="col-xs-6 subregion">
                                <select name="subregion" class="form-control">
                                    <option data-price="40000" value="Huyện Bình Xuyên">Huyện Bình Xuyên</option>
                                    <option data-price="40000" value="164">Huyện Lập Thạch</option>
                                    <option data-price="40000" value="673">Huyện Sông Lô</option>
                                    <option data-price="40000" value="165">Huyện Tam Dương</option>
                                    <option data-price="40000" value="166">Huyện Tam Đảo</option>
                                    <option data-price="40000" value="170">Huyện Vĩnh Tường</option>
                                    <option data-price="40000" value="169">Huyện Yên Lạc</option>
                                    <option data-price="40000" value="162">Thành phố Vĩnh Yên</option>
                                    <option data-price="40000" value="163">Thị xã Phúc Yên</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 address">
                                <input name="address" placeholder="Địa chỉ giao hàng, Ví dụ: Chung cư Lexington, LD.17-11 67 Mai Chí Thọ, Q2, HCM" required="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 purchase">
                                <button class="btn btn-order btn-checkout">
                                    <span class="main">THANH TOÁN KHI NHẬN HÀNG</span>
                                    <span class="sub">(Xem hàng trước, không mua không sao)</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function cart (id) {
        // alert(id);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                // alert(output);
                document.getElementById("update-orders-product").innerHTML = output;
            }
          };
          xhttp.open("GET", "/functions/ajax/add-cart.php?id="+id, true);
          xhttp.send();
    }

    function edit_num (data) {
        // alert(data.getAttribute("masp"));
        var id = data.getAttribute("masp");
        var quantity = data.value;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                // alert(output);
                document.getElementById("gio-hang-mia").innerHTML = output;
            }
          };
          xhttp.open("GET", "/functions/ajax/edit-cart.php?id="+id+"&quantity="+quantity, true);
          xhttp.send();
    }

    function remove_cart (id) {
        // alert(id);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                // alert(output);
                document.getElementById("gio-hang-mia").innerHTML = output;
            }
          };
          xhttp.open("GET", "/functions/ajax/del-cart.php?id="+id, true);
          xhttp.send();
    }
</script>