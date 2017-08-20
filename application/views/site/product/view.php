<div class="container-2">
	<div style="clear:both; display:block; height:40px"></div>
	<div class="prod">
		<div class="clearfix" style="width:200px;"> 
			<img id="img" src="<?php echo upload_url('product/'.$product->pro_image) ?>">
		</div>
		<div class="clearfix" >
			<ul id="thumblist" class="clearfix" >
				<li>
					<a class="zoomThumbActive" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo upload_url('product/'.$product->pro_image) ?>',largeimage: './<?php echo upload_url('product/'.$product->pro_image) ?>'}"><img class="img-list" src='<?php echo upload_url('product/'.$product->pro_image) ?>'>
					</a>
				</li>
				<?php $image_list = json_decode($product->pro_image_list); ?>
				<?php if(is_array($image_list)): ?>
					<?php foreach ($image_list as $img): ?>
						<li><a><img class="img-list" src='<?php echo upload_url('product/'.$img) ?>'></a></li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div><!--end:prod-->
	<div class="prod-detail">
		<h2><?php echo $product->pro_title ?></h2>
		<span class="price"><?php echo number_format($product->pro_price) ?></span>
		<span>Lượt xem: <?php echo $product->pro_view ?></span>
		<form action="#">
			Chọn màu sắc :&nbsp;
			<select>
				<option>Đen</option>
				<option>Trắng</option>
				<option>Đỏ</option>
				<option>Vàng</option>
				<option>Hồng</option>
			</select>
			&nbsp;&nbsp;
			Số lượng:&nbsp;
			<input value="1" type="text">                             
		</form>
		<span class="cart-button"><a href="<?php echo base_url('cart/add/'.$product->pro_id) ?>">Thêm vào giỏ hàng</a></span>
		<div id="tab">
			<ul class="nav">
				<li class="nav-one"><a href="#details" class="current">Details</a></li>
			</ul>
			<div class="list-wrap">
				<div id="details">
					<p><?php echo $product->pro_descript ?></p>
				</div>
			</div>
		</div>
	</div><!--prodetail-->
</div><!--end:container-2-->
<script>
	$(document).ready(function(){
		$('.img-list').click(function(){
			var img = $(this).attr('src');
			$('#img').attr('src', img);
		});
	});
</script>