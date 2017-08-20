<style>
	body {
		position: relative;

	}

	.img-product-fly {
		position: absolute;
		z-index: 999999;
		width: 50px;
		height: 50px;
		object-fit: cover;
		border-radius: 100%;
		border: 2px solid red;
		transition: all 1s ease;
		animation : animation 2s;
	}

	@keyframes animation {
		0%   {transform: scale(0.4)}
		25%  {transform: scale(1)}
		50%  {transform: scale(1)}
		100% {transform: scale(0.4)}
	}
</style>


<div id="featured">
	<div style="color:red; text-align: center"><b><?php echo $this->session->flashdata('mess') ?></b></div>
	<div class="camera_wrap camera_emboss " id="camera_wrap_1">
		<?php foreach ($slide as $row): ?>
			<div data-thumb="<?php echo upload_url('slide/'. $row->slide_image) ?>" data-src="<?php echo upload_url('slide/'. $row->slide_image) ?>">
			</div>
		<?php endforeach; ?>
	</div><!-- #camera_wrap_1 -->
	<div style="clear:both; display:block; height:40px"></div>
</div><!--end:featured-->
<div id="intro">

	<div class="one-fourth serv first">
		<img src="<?php echo public_url('site/images/') ?>service-1.png" alt="">
		<h3><a href="#">Miễn Phí Ship</a></h3>
		<span>Toàn Quốc</span>
	</div>
	<div class="one-fourth serv">
		<img src="<?php echo public_url('site/images/') ?>service-2.png" alt="">
		<h3><a href="#">Đổi Trả</a></h3>
		<span>Miễn Phí</span>
	</div>
	<div class="one-fourth serv">
		<img src="<?php echo public_url('site/images/') ?>service-3.png" alt="">
		<h3><a href="#">Hotline</a></h3>
		<span>0986-209-305</span>
	</div>
	<div class="one-fourth serv">
		<img src="<?php echo public_url('site/images/') ?>service-4.png" alt="">
		<h3><a href="#">Bảo Hành</a></h3>
		<span>Uy Tín</span>
	</div>
</div>
<div class="container-2">
	<section class="content">
		<div class="list_work">
			<h4><a href="">Sản Phẩm HOT</a></h4>
			<ul id="mycarousel" class="jcarousel-skin-tango item da-thumbs">
				<?php foreach ($pro_hot as $row): ?>
					<li class="thumbnail-buy">
						<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="<?php echo $row->pro_title ?>" /></a>
						<span><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><?php echo $row->pro_title ?></a><br>
							<small class="sale">$320.00</small>&nbsp;&nbsp;<small><?php echo number_format($row->pro_price) ?></small>
						</span>
						<span class="sale">Sale</span>
						<article class="da-animate da-slideFromRight" style="display: block;">
							<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><h3><?php echo $row->pro_title ?></h3></a>
							<p>
								<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" class="link tip" title="View Detail"></a>&nbsp;
								<a href="<?php echo base_url('cart/add/'.$row->pro_id) ?>" class="cart tip buy-now" title="Add to cart"></a>&nbsp;&nbsp;
								<a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
							</p>
						</article>
					</li>  
				<?php endforeach; ?>	           
			</ul>
		</div><!--end:list_work-->
	<!--	<div class="list_work">
			<h4><a href="">Hàng Mới</a></h4>
			<ul id="mycarousel" class="jcarousel-skin-tango item da-thumbs">
				<?php foreach ($pro_new as $row): ?>
					<li class="thumbnail-buy">
						<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="<?php echo $row->pro_title ?>" /></a>
						<span><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><?php echo $row->pro_title ?></a><br>
							<small class="sale">$320.00</small>&nbsp;&nbsp;<small><?php echo number_format($row->pro_price) ?></small>
						</span>
						<span class="sale">Sale</span>
						<article class="da-animate da-slideFromRight" style="display: block;">
							<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><h3><?php echo $row->pro_title ?></h3></a>
							<p>
								<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" class="link tip" title="View Detail"></a>&nbsp;
								<a href="<?php echo base_url('cart/add/'.$row->pro_id) ?>" class="cart tip buy-now" title="Add to cart"></a>&nbsp;&nbsp;
								<a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
							</p>
						</article>
					</li>  
				<?php endforeach; ?>	           
			</ul>
		</div> -->
		<div class="list_work list_work2">
			<h4><a href="">Bán Chạy Nhất</a></h4>
			<ul id="mycarouselnew" class="jcarousel-skin-tango item">
				<?php foreach ($pro_sell as $row): ?>
					<li class="thumbnail-buy">
						<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="<?php echo $row->pro_title ?>" /></a>
						<span><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><?php echo $row->pro_title ?></a><br>
							<small class="sale">$320.00</small>&nbsp;&nbsp;<small><?php echo number_format($row->pro_price) ?></small>
						</span>
						<span class="sale">Sale</span>
						<ul>
							<li><a href="<?php echo base_url('cart/add/'.$row->pro_id) ?>" class="cart tip buy-now" title="Add to Cart"></a></li>
							<li><a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
						</ul>
					</li> 
				<?php endforeach; ?>                      
			</ul>
		</div><!--end:list_work-->
		<div class="list_work">
			<h4><a href="">Xem Nhiều Nhất</a></h4>
			<ul id="mycarousel" class="jcarousel-skin-tango item da-thumbs">
				<?php foreach ($pro_view as $row): ?>
					<li class="thumbnail-buy">
						<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="<?php echo $row->pro_title ?>" /></a>
						<span><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><?php echo $row->pro_title ?></a><br>
							<small class="sale">$320.00</small>&nbsp;&nbsp;<small><?php echo number_format($row->pro_price) ?></small>
						</span>
						<span class="sale">Sale</span>
						<article class="da-animate da-slideFromRight" style="display: block;">
							<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><h3><?php echo $row->pro_title ?></h3></a>
							<p>
								<a href="product-detail.html" class="link tip" title="View Detail"></a>&nbsp;
								<a href="<?php echo base_url('cart/add/'.$row->pro_id) ?>" class="cart tip buy-now" title="Add to cart"></a>&nbsp;&nbsp;
								<a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom" ></a>
							</p>
						</article>
					</li>  
				<?php endforeach; ?>	           
			</ul>
		</div><!--end:list_work-->
		<div class="list_work list_work2">
			<h4><a href="">Hàng Giá Rẻ</a></h4>
			<ul id="mycarouselnew" class="jcarousel-skin-tango item">
				<?php foreach ($pro_price as $row): ?>
					<li class="thumbnail-buy">
						<a href="<?php echo base_url('product/view/'.$row->pro_id) ?>"><img src="<?php echo upload_url('product/'. $row->pro_image) ?>" alt="<?php echo $row->pro_title ?>" /></a>
						<span><a href="<?php echo base_url('product/view/'.$row->pro_id) ?>" style="font-weight: bold"><?php echo $row->pro_title ?></a><br>
							<small class="sale">$320.00</small>&nbsp;&nbsp;<small><?php echo number_format($row->pro_price) ?></small>
						</span>
						<span class="sale">Sale</span>
						<ul>
							<li><a href="<?php echo base_url('cart/add/'.$row->pro_id) ?>" class="cart tip buy-now" title="Add to Cart"></a></li>
							<li><a href="<?php echo public_url('site/images/') ?>preview/work_1_l.jpg" rel="prettyPhoto[gallery1]" class="zoom tip" title="Zoom"></a></li>
						</ul>
					</li> 
				<?php endforeach; ?>                      
			</ul>
		</div><!--end:list_work-->
	</section>
	<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->
<div class="container-2">
	<div style="clear:both; display:block; height:40px"></div>
	<div class="ship">
		<a href="#"><img src="<?php echo public_url('site/images/') ?>service-1.png" alt=""></a>
		<h4><a href="#">Free Shipping</a></h4>
		<span>On order over $300</span>
	</div>
	<div class="subs">
		<h4>Nhận khuyến mãi khủng</h4>
		<form action="#" method="post" class="subscribes">
			<fieldset>
				<input type="text" name="subscribe" class="subscribe" value="Subscribe" onBlur="if (this.value == ''){this.value = 'Subscribe'; }" onFocus="if (this.value== 'Subscribe') {this.value = ''; }" />
				<input type="submit" name="submit" value="Submit" class="submit" />
			</fieldset>
		</form>
	</div>
</div><!--end:container-2-->

<script>

	// $(document).on('click','.buy-now',function(e){
	// 	e.preventDefault();
	// 	if($(this).hasClass('disable')){
	// 		return false;
	// 	}
	// 	$(document).find('.buy-now').addClass('disable');
	// 	var self = $(this);

	// 	var parent = $(this).parents('.thumbnail-buy');
	// 	var img = parent.find('img').attr('src');
	// 	var cart = $(document).find('#cart-shop');

	// 	var parTop  = parent.offset().top;
	// 	var parLeft = parent.offset().left;

	// 	$('<img/>',{
	// 		class: 'img-product-fly',
	// 		src: img
	// 	}).appendTo('body').css({
	// 		'top' : parTop,
	// 		'left': parseInt(parLeft) + parseInt(parent.width()) - 50
	// 	});

	// 	setTimeout(function(){
	// 		$(document).find('.img-product-fly').css({
	// 			'top' : cart.offset().top,
	// 			'left': cart.offset().left
	// 		});
	// 		setTimeout(function(){
	// 			$(document).find('.img-product-fly').remove();
	// 			var citem = parseInt(cart.find('#count-item').data('count'))+1;
	// 			cart.find('#count-item').text(citem+ ' item(s)').data('count',citem);
	// 			$(document).find('.buy-now').removeClass('disable');
	// 		},1000);
	// 	},500);
	// })

</script>