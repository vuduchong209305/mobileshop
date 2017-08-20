<?php foreach ($pro as $key => $value) { ?>
	<li><a href="<?php echo base_url('product/view/'.$value->pro_id) ?>"><?php echo $value->pro_title; ?><img width="30px" src="<?php echo upload_url('product/'.$value->pro_image) ?>" alt=""></a></li>
<?php } ?>