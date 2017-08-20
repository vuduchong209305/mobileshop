<div class="container-2">
   <div style="clear:both; display:block; height:40px"></div>
<?php foreach($cat as $row): ?>
    <p>
    <span class="dropcap2"><img src="<?php echo upload_url('category/'. $row->image) ?>" alt=""></span>
    <?php echo $row->description ?>
    </p>
<?php endforeach; ?>


</div>