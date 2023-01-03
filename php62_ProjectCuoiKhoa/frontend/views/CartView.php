<?php
$layout = "LayoutTrangTrong.php";
?>
<main class="container category_prod products">

    <div class="cate_product" style="margin-left: 100px;">
        <div class="cate_Byresult-search">
            <ul>
                <h3 style="text-align:center;padding: 10px 0;color: red;">Your Cart</h3>
            </ul>
        </div>
        <form action="index.php?controller=cart&action=update" method="post">
            <div class="product-shoppingCart">
                <table class="table-cart" border="1" cellspacing="0" cellpadding="0" style="border:1px solid #ccc ; text-align:center;">
                    <tr style="height:60px ;">
                        <th width="150px"></th>
                        <th width="200px">Tên sản phẩm</th>
                        <th width="200px">Đơn giá</th>
                        <th width="200px">Số lượng</th>
                        <th width="200px">Thành tiền</th>
                        <th width="200px">Thao tác</th>
                    </tr>
                    <?php foreach ($_SESSION['cart'] as $product) : ?>

                        <tr>
                            <td><img src="../assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" height="120px" width="120px" /></td>
                            <td><a href="index.php?controller=product&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                            <td> <?php echo number_format(($product['price'] - ($product['price'] * $product['discount']) / 100)); ?>₫ </td>
                            <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
                            <td>
                                <p><b><?php echo number_format($product['number'] * ($product['price'] - ($product['price'] * $product['discount']) / 100)); ?>₫</b></p>
                            </td>
                            <td><a href="index.php?controller=cart&action=delete&productId=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash" style="color:orangered;"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if ($this->cartNumber()) : ?>
                        <tr>
                            <td colspan="2"><a href="index.php?controller=cart&action=destroy" class="button pull-left">Xóa toàn bộ</a></td>
                            <td colspan="2"><a href="index.php">Tiếp tục mua hàng</a></td>
                            <td colspan="2"><input type="submit" class="button pull-right" value="Cập nhật"></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>

            <div class="updateCurrentAddress">
                <table>
                    <tr>
                        <td>Địa chỉ nhận hàng hiện tại</td>
                        <td><input type="text" name="currentaddress"></td>

                    </tr>
                </table>
                <span style="color:#828282;font-style:italic">Nếu bạn không nhập địa chỉ hiện tại thì sản phẩm sẽ được giao theo địa chỉ bạn đã đăng kí trước đó</span>
        </form>
    </div>
    <div class="total-pay" style="height: 60px;float: right;margin-right: 100px;">
        <h3 style="line-height: 60px;">Tổng tiền thanh toán: <span><?php echo number_format($this->cartTotal()); ?>đ </span>

            <a href="index.php?controller=cart&action=checkout" style="height: 80px;margin-bottom: 100px;background-color:#f78f3a;color: #fff;border-radius: 8px;border: none;padding: 10px 40px;cursor:pointer;">Thanh toán</a>
        </h3>
    </div>
    </div>
</main>
<hr>