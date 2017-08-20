<div class="container-2">
   <section class="content">                    	
    <div class="entry">
        <a href="single.html"><img src="<?php echo upload_url('news/'. $info->news_thumbnail) ?>" alt=""></a>
        <h2><a href="<?php echo base_url('news/view/'.$info->news_id) ?>"><?php echo $info->news_title ?></a></h2>
        <ul>
            <li class="post">Posted by: <a href="#">Admin</a></li>
            <li class="category">Category: <a href="#">Inpirational</a></li>
            <li class="comment">Comment: <a href="#">4</a></li>
        </ul>
        <p><?php echo $info->news_detail ?></p>
    </div><!--entry-->
</section>
<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->