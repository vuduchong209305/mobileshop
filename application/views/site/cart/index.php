<div class="container-2">
 <div style="clear:both; display:block; height:40px"></div>
 <h2>Shopping Cart &nbsp;<small>Your shopping cart</small></h2>
 <form action="<?php echo base_url('cart/update/') ?>" method="post">
   <table class="shopping-cart">
    <tr>
      <th class="image">Ảnh</th>
      <th class="name">Tên Sản Phẩm</th>
      <th class="quantity">Số Lượng</th>
      <th class="price">Giá</th>
      <th class="total">Tổng</th>
      <th class="action">Hành Động</th>
    </tr>
    <?php $total_amount = 0; ?>
    <?php foreach ($carts as $row): ?>
      <?php $total_amount = $total_amount + $row['subtotal']; ?>
      <tr>
        <td class="image"><a href="#"><img title="product" alt="product" src="<?php echo upload_url('product/'.$row['image']) ?>" height="50" width="50"></a></td>
        <td  class="name"><a href="#"><?php echo $row['name'] ?></a></td>
        <td class="quantity"><input type="text" size="1" value="<?php echo $row['qty'] ?>" name="qty_<?php echo $row['id'] ?>" class="span1"></td>
        <td class="price"><?php echo $row['price'] ?></td>
        <td class="total"><?php echo $row['subtotal'] ?></td>
        <td class="remove-update">
          <a href="<?php echo base_url('cart/delete/'.$row['id']) ?>" class="tip remove verify_action" title="Remove"><img src="<?php echo public_url('site/images/') ?>remove.png" alt=""></a>
          <a href="<?php echo base_url('cart/update/'.$row['id']) ?>" class="tip update" title="Update"><img src="<?php echo public_url('site/images/') ?>update.png" alt=""></a>
        </td>   
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="6">
        <button type="submit" id="button">Cập Nhật</a></button>
      </td>
    </tr>
  </table>
</form>
<div class="contentbox">
  <div class="alltotal one-half">
    <table class="alltotal">
      <tr>
        <td><span class="extra grandtotal">Total :</span></td>
        <td><span class="grandtotal"><b><?php echo number_format($total_amount)?> đ</b></span></td>
      </tr>
    </table>
    <a href="<?php echo base_url('cart/delete/') ?>" class="verify_action"><input type="submit" value="Xóa toàn bộ"></a>
    <a href="<?php echo base_url('home') ?>"><input type="submit" value="Tiếp Tục Mua Sắm"></a>
    <a href="<?php echo base_url('order/checkout') ?>"><input type="submit" value="Mua Hàng"></a>
  </div><!--end:alltotal-->
</div><!--end:contentbox-->
<div style="clear:both; display:block; height:40px"></div>
</div><!--end:container-2-->

<script>
  //Xác thực xóa dữ liệu
    $('a.verify_action').click(function(){
      if(!confirm('Bạn chắc chắn muốn xóa ?'))
      {
        return false;
      }
    });
    
</script>