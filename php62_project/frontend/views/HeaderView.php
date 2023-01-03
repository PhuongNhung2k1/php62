
<!-- header -->
<header id="header">
<!-- top header -->
<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
      <?php if(!isset($_SESSION["customer_email"])): ?>
      <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a> </div>
    <?php else: ?>
      <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a> </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- end top header --> 
<!-- middle header -->
<div class="mid-header">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html"> <img src="../assets/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
    <div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
      <!--<form method="post" id="frm" action="">-->
      <div style="margin-top:25px;">
        <input type="text" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
        <button style="margin-top:5px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
      </div>
      <!--</form>--> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
      <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"> 2 </span> sản phẩm <i class="fa fa-caret-down"></i></a>
        <div class="content-mini-cart">
          <div class="has-items">
            <ul class="list-unstyled">
              <li class="clearfix" id="item-1853038">
                <div class="image"> <a href="/Product/Detail/11"> <img alt="Macbook Air 13 128GB MQD32SA/A (2017)" src="assets/upload/products/132218023958008825_1.jpg" title="Macbook Air 13 128GB MQD32SA/A (2017)" class="img-responsive"> </a> </div>
                <div class="info">
                  <h3><a href="/Product/Detail/11">Macbook Air 13 128GB MQD32SA/A (2017)</a></h3>
                  <p>1 x 22,700,000₫</p>
                </div>
                <div> <a href="/Cart/Remove/11"> <i class="fa fa-times"></i></a> </div>
              </li>
              <li class="clearfix" id="item-1853038">
                <div class="image"> <a href="/Product/Detail/8"> <img alt="Samsung Galaxy M20" src="assets/upload/products/132195020344748063_7.jpg" title="Samsung Galaxy M20" class="img-responsive"> </a> </div>
                <div class="info">
                  <h3><a href="/Product/Detail/8">Samsung Galaxy M20</a></h3>
                  <p>1 x 27,000,000₫</p>
                </div>
                <div> <a href="/Cart/Remove/8"> <i class="fa fa-times"></i></a> </div>
              </li>
            </ul>
            <a href="/Cart/Checkout" class="button">Thanh toán</a> </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- end middle header --> 
<!-- bottom header -->
<div class="bottom-header">
  <div class="container">
    <div class="clearfix">
      <ul class="main-nav hidden-xs hidden-sm list-unstyled">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li class="has-submenu"> <a href="#"> <span>Sản phẩm</span><i class="fa fa-caret-down" style="margin-left: 5px;"></i> </a>
          <ul class="list-unstyled level1">
            <?php
                $conn = Connection::getInstance();
                $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                $categories = $query->fetchAll(PDO::FETCH_OBJ);
            ?>
            <?php foreach($categories as $rows): ?>

            <li><a href="index.php?controller=products&action=category&catId=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php
                $querySub = $conn->query("select * from categories where parent_id={$rows->id} order by id desc");
                $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
            ?>
            <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&catId=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
            <?php endforeach; ?>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a href="/Cart">Giỏ hàng</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
      <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
      <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="index.php?controller=tintuc">Tin tức</a></li>
        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- end bottom header -->
</header>
<!-- end header -->