<footer class="site-footer footer-default">
    <div class="container">
        <div class="footer-main-content_ruouvang">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-main-content_ruouvang-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-miavn uni-uppercase">HỆ THÔNG CỦA HÀNG</h3>
                            <div class="widget-content">
                                <div class="footer-lienhe-miavn">
                                    <ul>
                                        <li>73 Trung liệt, Quận Đống Đa, Thành phố hà nội ( Gần phố Thái Hà )</li>
                                        <li>Giờ mở cửa: 8h30 - 21h30 (cả Thứ 7 chủ nhật)</li>
                                        <li>
                                            Hotline: (042) 39 126 126 - 098 575 2026
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer-miavn-right">
                        <div class="footer-top-miavn">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="footer-main-content_ruouvang-element">
                                        <aside class="widget-footer">
                                            <h3 class="widget-title-footer-miavn uni-uppercase">Hỗ trợ khách hàng</h3>
                                            <div class="widget-content">
                                                <div class="footer-link-miavn">
                                                    <ul>
                                                        <li><a href="">Tin tức</a></li>
                                                        <li><a href="">Tuyển dụng</a></li>
                                                        <li><a href="">Liên hệ</a></li>
                                                        <li><a href="">Chính sách và điều khoản</a></li>
                                                        <li><a href="">F.A.Q</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-main-content_ruouvang-element">
                                        <aside class="widget-footer">
                                            <h3 class="widget-title-footer-miavn uni-uppercase">Chính sách</h3>
                                            <div class="widget-content">
                                                <div class="footer-link-miavn">
                                                    <ul>
                                                        <li><a href="">Thiết kế 3D</a></li>
                                                        <li><a href="">Quy trình làm việc</a></li>
                                                        <li><a href="">Công trình của chúng tôi</a></li>
                                                        <li><a href="">Hướng dẫn và mẹo vặt</a></li>
                                                        <li><a href="">Nguồn cảm hứng</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-main-content_ruouvang-element">
                                        <aside class="widget-footer">
                                            <h3 class="widget-title-footer-miavn uni-uppercase">Sản phẩm chính</h3>
                                            <div class="widget-content">
                                                <div class="footer-link-miavn">
                                                    <ul>
                                                        <li><a href="">Sản phẩm</a></li>
                                                        <li><a href="">Phòng</a></li>
                                                        <li><a href="">Hàng mới về</a></li>
                                                        <li><a href="">Về chúng tôi</a></li>
                                                        <li><a href="">Catalog 2018</a></li>
                                                        <li><a href="">Bán chạy nhất</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-main-content_ruouvang-element">
                                        <aside class="widget-footer">
                                            <h3 class="widget-title-footer-miavn uni-uppercase">Chứng nhận an toàn</h3>
                                            <div class="widget-content">
                                                <div class="footer-link-miavn">
                                                    <ul>
                                                        <li><a href="">Sản phẩm</a></li>
                                                        <li><a href="">Phòng</a></li>
                                                        <li><a href="">Hàng mới về</a></li>
                                                        <li><a href="">Về chúng tôi</a></li>
                                                        <li><a href="">Catalog 2018</a></li>
                                                        <li><a href="">Bán chạy nhất</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    function load_url (img, link, id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           // document.getElementById("demo").innerHTML = this.responseText;
           // alert(this.responseText);
           // alert('thanh cong.');
           // window.location.href = "/gio-hang";
           if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                  window.location = '/gio-hang';
              }else{
                  location.reload();
              }  
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name+"&product_price="+price+"&product_quantity=1&action=add&product_img="+img+"&product_link="+link);
        xhttp.send();        
    }
</script>