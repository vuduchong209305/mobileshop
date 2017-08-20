<style>
	/* Outer */
.popup {
    width:100%;
    height:100%;
    display:none;
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.75);
}
 
/* Inner */
.popup-inner {
    max-width:700px;
    width:90%;
    padding:40px;
    position:absolute;
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform:translate(-50%, -50%);
    box-shadow:0px 2px 6px rgba(0,0,0,1);
    border-radius:3px;
    background:#fff;
}
 
/* Close Button */
.popup-close {
    width:30px;
    height:30px;
    padding-top:4px;
    display:inline-block;
    position:absolute;
    top:0px;
    right:0px;
    transition:ease 0.25s all;
    -webkit-transform:translate(50%, -50%);
    transform:translate(50%, -50%);
    border-radius:1000px;
    background:rgba(0,0,0,0.8);
    font-family:Arial, Sans-Serif;
    font-size:20px;
    text-align:center;
    line-height:100%;
    color:#fff;
}
 
.popup-close:hover {
    -webkit-transform:translate(50%, -50%) rotate(180deg);
    transform:translate(50%, -50%) rotate(180deg);
    background:rgba(0,0,0,1);
    text-decoration:none;
}
</style>

<body>
	<a class="btn" data-popup-open="popup-1" href="#">Open Popup #1</a>
 
<div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <h2>Wow! This is Awesome! (Popup #1)</h2>
        <p>Donec in volutpat nisi. In quam lectus, aliquet rhoncus cursus a, congue et arcu. Vestibulum tincidunt neque id nisi pulvinar aliquam. Nulla luctus luctus ipsum at ultricies. Nullam nec velit dui. Nullam sem eros, pulvinar sed pellentesque ac, feugiat et turpis. Donec gravida ipsum cursus massa malesuada tincidunt. Nullam finibus nunc mauris, quis semper neque ultrices in. Ut ac risus eget eros imperdiet posuere nec eu lectus.</p>
        <p><a data-popup-close="popup-1" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>
</body>

<div class="widget my_details">

  <div class="title"> 
    <span class="titleIcon"> 
      <img src="http://localhost/project/public/admin/images/icons/tableArrows.png"> 
    </span>
    <h6>Thông tin sản phẩm </h6>
  </div>
  
  <div class="pad-10">
  
    <div class="payment-infomation">
      <h3>Thông tin sản phẩm</h3>
      <ul>
        <li>Mã sản phẩm : <span class="c-red f-b"><?php echo $product->pro_id ?></span> </li>
        <li>Tên sản phẩm : <span class="c-red f-b"><?php echo $product->pro_title ?></span> </li>
        <li>Giá sản phẩm : <span class="c-red f-b"><?php echo number_format($product->pro_price) ?></span> </li>
        <li>Giá khuyến mại : <span class="c-red f-b"><?php echo number_format($product->pro_sale) ?></span> </li>
        <li>Ngày tạo : <span class="c-black f-b"><?php echo $product->pro_created ?><span> </span></span></li>
        <li> 
        	Trạng thái : 
        	<?php 
				if($product->status == 1){
					echo '<span class="c-599414 f-b">Active</span>';
				}
				else {
					echo '<span class="c-4286ad f-b">Inactive</span>';
				}
			?>  
        </li>
      </ul>
    </div>
    
    <div class="customer_infomation">
      <h3>Hình ảnh sản phẩm</h3>
      <ul>
        <li>
        	<img src="<?php echo base_url('upload/product/'.$product->pro_image) ?>" >
        </li>
      </ul>
    </div> 
    <div class="clear"></div>
    
    <div class="active_cance_order flL mar-T10">
    	
        <form action="<?php echo admin_url('product/active/'.$product->pro_id) ?>" method="post" class="flL">
            <input type="submit" value="Active" name="active_product" class="btn_active_order" />
            <input type="submit" value="Inactive" name="inactive_product" class="btn_cancer_order" />
        </form>
     
    </div>
    <div class="clear"></div> 
    
  </div>
  
</div>
