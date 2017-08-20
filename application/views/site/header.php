<style>
	#quick-search{
		display: none;
		position: absolute;;
		width: 220px;
		background: #fdfdfd;
		border : black;
		z-index: 999999;
	}

	ul {list-style-type: none;}

	#quick-search li {
		height: 40px;
		position: relative;
	}

	#quick-search li a {
		line-height: 40px;
		padding-left: 20px;
		color: #808394;
		font-weight: 500;
		text-shadow: 0 1px #fff;
	}

	#quick-search li img {
		position: absolute;
		right: 10px;
		top: 2px;
	}
</style>

<div id="top">
	<span>Website có nội dung 18+ ! Hãy cân nhắc trước khi xem</span>
	<div>
		<p>Language:
			<label>
				<select>
					<option selected>English </option>
					<option>German</option>
					<option>Spanish</option>
				</select>
			</label>​
		</p>
		<p>Currency:
			<label>
				<select>
					<option selected>US Dollar - USD </option>
					<option>Euro - EUR</option>
					<option>British Pound - GBP</option>
				</select>
			</label>​
		</p>
	</div>
</div><!--end:top-->
<div id="top2">
	<ul class="myaccountmenu">
		<li><a href="<?php echo base_url('cart/index') ?>" class="first">Giỏ Hàng</a></li>
		<?php if(isset($user_info)): ?>
		<li><a href="<?php echo base_url('user/index') ?>">Xin Chào: <?php echo $user_info->user_fullname ?></a></li>
		<li><a href="<?php echo base_url('user/logout') ?>">Thoát</a></li>
		<?php else: ?>
		<li><a href="<?php echo base_url('user/register') ?>">Đăng Ký</a></li>
		<li><a href="<?php echo base_url('user/login') ?>">Đăng Nhập</a></li>
		<?php endif; ?>
	</ul>

	<div id="demo-header">
		<div id="cart-shop">
			<a id="cart-link" href="#cart" title="Cart">
				<span id="count-item" data-count="0">Có <?php echo $total_items ?> Sản Phẩm </span>
			</a>
		</div>
		<div id="cart-panel">
			<div class="item-cart">
				<table>
					<tbody>
				<?php if(count($carts) > 0){ ?>
					<?php foreach ($carts as $row): ?>
						<tr>
							<td class="image"><a href="<?php echo base_url('product/view/'. $row['id']) ?>"><img width="60" height="60" src="<?php echo upload_url('product/'.$row['image']) ?>" alt="product" title="product"></a></td>
							<td class="name"><a href="<?php echo base_url('product/view/'. $row['id']) ?>"><?php echo $row['name']?></a></td>
							<td class="quantity"><?php echo $row['qty'] ?></td>
							<td class="total"><?php echo number_format($row['subtotal'] )?> đ</td>
							<td class="remove"><i class="icon-remove"></i></td>
						</tr>
					<?php endforeach; ?>
				<?php } else { echo 'Hiện không có sản phẩm nào trong giỏ hàng, bạn hãy mua sắm đi nào !'; }?>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
							<td class="textright"><b>Tổng tiền</b></td>
							<td class="textright"><?php echo number_format($total_amount) ?> đ</td>
						</tr>
					
					</tbody>
				</table>
				<div class="buttoncart">
					<a href="<?php echo base_url('cart/index') ?>">Giỏ hàng</a>
					<a href="<?php echo base_url('order/checkout') ?>">Mua hàng</a>
				</div>
			</div>
		</div><!-- /login-panel -->
	</div><!-- /demoheader -->	
</div><!--end:top2-->
<div id="top3">
	<h1 class="logo"><a href="<?php echo base_url('home/index') ?>">Shopy Mart</a></h1>
	<form action="<?php echo base_url('product/search') ?>" method="get" class="search_bar">
		<fieldset>
			<input autocomplete="off" id="text-search" type="text" name="keyword" class="search" value="<?php echo isset($key) ? $key: '' ?>"/>
			<input type="submit" name="submit" value="Search" class="submit" />
		</fieldset>
		<ul id="quick-search"></ul>
	</form>
</div><!--end:top3-->
