<div class="list_work">
  <h4><a href="">Kết quả tìm kiếm với giá từ "<?php echo number_format($price_from)?> đ" tới "<?php echo number_format($price_to)?> đ" </a></h4>
  <ul id="mycarousel" class="jcarousel-skin-tango item da-thumbs">
    <?php foreach ($list as $row): ?>
      <li class="thumbnail-buy">
        <img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="<?php echo $row->pro_title ?>" />
        <span><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><?php echo $row->pro_title ?></a><br>
          <small class="sale">$320.00</small>&nbsp;&nbsp;<small><?php echo number_format($row->pro_price) ?></small>
        </span>
        <span class="sale">Sale</span>
        <article class="da-animate da-slideFromRight" style="display: block;">
          <a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><h3><?php echo $row->pro_title ?></h3></a>
          <p>
            <a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
            <a href="cart.html" class="cart tip buy-now" title="Add to cart"></a>&nbsp;&nbsp;
            <a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
          </p>
        </article>
      </li>  
    <?php endforeach; ?>             
  </ul>
</div><!--end:list_work-->