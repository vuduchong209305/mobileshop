<h4><a href="">Tất cả tin tức (<?php echo count($list) ?>)</a></h4>
<div class="container-2">
 <section class="content">
 <?php foreach ($list as $row): ?>
   <div class="entry da-thumbs">
     <div class="blog-entry">
       <a href="<?php echo base_url('news/view/'.$row->news_id) ?>"><img src="<?php echo upload_url('news/'.$row->news_thumbnail) ?>" alt=""></a>
       <article class="da-animate da-slideFromRight" style="display: block;">
        <p>
          <a href="<?php echo base_url('news/view/'.$row->news_id) ?>"></a>
        </p>
        </article>
      </div>
      <h2><a href="<?php echo base_url('news/view/'.$row->news_id) ?>"><?php echo $row->news_title ?></a></h2>
      <ul>
        <li class="post">Posted by: <a href="#">Admin</a></li>
        <li class="comment">Ngày tạo: <a href="#"><?php echo $row->created ?></a></li>
      </ul>
      <p><?php echo word_limiter(($row->news_detail), 50) ?></p>
      <span><a href="<?php echo base_url('news/view/'.$row->news_id) ?>">Xem Chi Tiết</a></span>
    </div><!--entry-->
    <?php endforeach; ?>
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