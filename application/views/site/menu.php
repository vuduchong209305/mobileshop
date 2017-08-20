
<ul id="mega-menu-3" class="mega-menu">
   <li class="first"><a href="<?php echo base_url('home/index') ?>" class="current">Trang Chủ</a></li>
    <?php foreach($parent_id as $row): ?>
    	<li><a href="#" title="<?php echo $row->name ?>"><?php echo $row->name ?></a>
        <?php if(!empty($row->subs)): ?>
        	<ul>
            <?php foreach ($row->subs as $sub): ?>
            	<li><a href="<?php echo base_url('product/category/'.$sub->cat_id) ?>"><?php echo $sub->name ?></a></li>
            <?php endforeach; ?>
        	</ul>
        <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>