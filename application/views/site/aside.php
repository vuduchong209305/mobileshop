<!-- <?php

$price_from_select = isset($price_from) ? intval($price_from) : 0;
$price_to_select = isset($price_to) ? intval($price_to) : 0;

?> -->


<aside class="sidebar">
	<div class="side prod-detail">
		<form action="<?php echo base_url('product/search_price') ?>" method="get">
			<h4>Tìm kiếm theo giá</h4>
			<label for="">Từ :</label>
			<select name="price_from" id="">
				<?php for($i = 0; $i <= 30000000; $i = $i+1000000): ?>
					<option <?php echo ($price_from_select == $i) ? 'selected':'' ?> value="<?php echo $i ?>"><?php echo number_format($i) ?></option>
				<?php endfor; ?>
			</select><br>
			<label for="">Tới :</label>
			<select name="price_to" id="">
				<?php for($i = 1000000; $i <= 30000000; $i = $i+1000000): ?>
					<option <?php echo ($price_to_select == $i) ? 'selected':'' ?> value="<?php echo $i ?>"><?php echo number_format($i) ?></option>
				<?php endfor; ?>
			</select><br>
			<input type="submit" value="Tìm kiếm" class="seven">
		</form>
	</div><!--end:side-->
	<div class="side">
		<h4><a href="<?php echo base_url('category/index') ?>">Thương Hiệu</a></h4>
		<?php foreach ($company as $row): ?>
			<div class="entry">
				<div class="da-thumbs">
					<div style="width:70px; height: 50px">
						<a href="<?php echo base_url('product/category/').$row->cat_id ?>">
							<img src="<?php echo upload_url('category/'. $row->image) ?>" alt="" style="width:50px">
						</a>
					</div>
				</div>
				<h3><a href="<?php echo base_url('product/category/').$row->cat_id ?>"><?php echo $row->name ?></a></h3>
			</div>
		<?php endforeach; ?>
	</div><!--end:side-->
	<div class="side">
		<h4><a href="<?php echo base_url('news/index') ?>">Tin Tức</a></h4>
		<?php foreach ($news as $row): ?>
			<div class="entry">
				<div class="da-thumbs">
					<div>
						<a href="">
							<img src="<?php echo upload_url('news/'. $row->news_thumbnail) ?>" alt="">
						</a>
					</div>
				</div>
				<h3><a href="<?php echo base_url('news/view/'.$row->news_id) ?>"><?php echo word_limiter(($row->news_title),5) ?></a></h3>
				<span><a href="<?php echo base_url('news/view/'.$row->news_id) ?>"><?php echo $row->created ?></a></span>
			</div>
		<?php endforeach; ?>
	</div><!--end:side-->
</aside>