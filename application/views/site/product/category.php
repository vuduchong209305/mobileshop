<h4><a href=""><?php echo $category->name ?> (<?php echo $total_rows ?>)</a></h4>
<div class="container-2">
  <section class="content">
    <ul id="products" class="list clearfix">
      <?php foreach ($list as $row): ?>
        <li class="da-thumbs">
          <div class="product-thumb-hover">
            <section class="left">
              <img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="">
              <p class="sale">Sale</p>
              <article class="da-animate da-slideFromRight" style="display: block;">
                <h3><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><?php echo $row->pro_title ?></a></h3>
                <p>
                  <a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
                  <a href="#" class="cart tip" title="Add to cart"></a>&nbsp;&nbsp;
                  <a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
                </p>
              </article>
            </section>
          </div>
          <section class="center">
            <h3><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><?php echo $row->pro_title ?></a></h3>
            <em>Category: <a href="#"><?php echo $category->name ?></a></em>
          </section>
          <section class="right">
            <span class="price"><small>$320.00</small>&nbsp;&nbsp; <?php echo number_format($row->pro_price) ?></span>
            <ul class="menu-button">
              <li><a href="cart.html" class="cart tip" title="Add to Cart"></a></li>
              <li><a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
              <li><a href="wishlist.html" class="wishlist tip" title="Add to Wishlist"></a></li>
              <li><a href="compare.html" class="compare tip" title="Compare"></a></li>
              <li><a href="product-detail.html" class="link tip" title="View Detail"></a></li>
            </ul>
          </section>
        </li>
      <?php endforeach; ?>   
    </ul><!--end:products-->
    <ul id="pagination">
      <li><a class="current" href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">next</a></li>
    </ul>
  </section>
  <?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->



<!--<div class="list_work">
  <h4><a href=""><?php echo $category->name ?> (<?php echo $total_rows ?>)</a></h4>
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
            <a href="<?php echo public_url('site/images/') ?>') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
          </p>
        </article>
      </li>  
    <?php endforeach; ?>             
  </ul>
</div><!--end:list_work-->