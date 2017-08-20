<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVQEAPAglsyD2w7rWppn2Te21X5rWrMo4&callback=initMap" async defer></script>

<div class="container-2">
  <section class="content">
    <h3>Địa Điểm Cửa Hàng</h3>
    <?php echo $map['js']; ?>
    <?php echo $map['html']; ?>
    <p>Xin chào bạn</p>
    <h3>Mời bạn điền vào biểu mẫu phía dưới để liên hệ với chúng tôi</h3>
    <p>Số 36 Phan Bá Vành, Hà Nội, Việt Nam<br><br>
      Tel: 0986.209.305<br>
      Fax: 0986.209.305<br>
      Email: <a href="mailto:info@domainname.com">vuduchong209305@gmail.com</a></p>
      <?php echo $this->session->flashdata('mess') ?>
    <form action="" id="ajax-contact-form" class="contactForm" method="post">
      <div id="note"></div>
      <p>
        <input type="text" name="name" placeholder="Họ Tên">
        <?php echo form_error('name') ?>
        &nbsp;
        <input type="text" name="email" placeholder="Email">
        <?php echo form_error('email') ?>
        &nbsp;
        <input type="text" name="phone" placeholder="Số Điện Thoại">
        <?php echo form_error('phone') ?>
      </p>
      <p>
          <textarea name="message" rows="10" cols="20">Tin nhắn: Tôi muốn đặt hàng</textarea>
          <?php echo form_error('message') ?>
      </p>
      <p>
          <input type="submit" name="submit" class="submit" value="Gửi">
      </p>
    </form>     
  </section>
<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->