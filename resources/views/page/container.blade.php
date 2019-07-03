<div class="header">
    <div class="container">
        <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h3><a href="{{route('show.index')}}"><img src="images/oo.png" alt=""><span>Nhà Hàng Sông Hồng</span><img src="images/oo.png" alt=""></a></h3>
        </div>
        <div class="nav-icon">
            <a href="#" class="navicon"></a>
            <div class="toggle">
                <ul class="toggle-menu">
                    <li><a class="active" href="{{route('show.index')}}">Trang Chủ</a></li>
                    <li><a  href="{{route('showmenu')}}">Menu</a></li>
                    <li><a  href="{{route('blog')}}">Blog Ẩm Thực</a></li>
                    <li><a  href="{{route('single')}}">Sự Kiện</a></li>
                    <li><a  href="{{route('contact')}}">Đặt Bàn</a></li>
                </ul>
            </div>
            <script>
                $('.navicon').on('click', function (e) {
                    e.preventDefault();
                    $(this).toggleClass('navicon--active');
                    $('.toggle').toggleClass('toggle--active');
                });
            </script>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- start search-->
    <div class="banner">
        <p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Nơi Sự Hài Lòng Của Bạn Là Niềm Hạnh Phúc Của Chúng Tôi</p>
        <label></label>
        <h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Nhà Hàng Sông Hồng</h4>
        <a class="scroll down" href="#content-down"><img src="images/down.png" alt=""></a>
    </div>
</div>
