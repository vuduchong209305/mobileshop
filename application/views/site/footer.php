<div class="content-wrap">
	<div class="one-fourth first">
		<h4>Information</h4>
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Delivery Information</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms &amp; Condition</a></li>
		</ul>
	</div>
	<div class="one-fourth">
		<h4>Customer Services</h4>
		<ul>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Shipping Returns</a></li>
			<li><a href="#">Secure Shopping</a></li>
		</ul>
	</div>
	<div class="one-fourth">
		<h4>Extras</h4>
		<ul>
			<li><a href="#">Brands</a></li>
			<li><a href="#">Gift Vouchers</a></li>
			<li><a href="#">Affiliates</a></li>
			<li><a href="#">Special</a></li>
		</ul>
	</div>
	<div class="one-fourth">
		<h4>My Account</h4>
		<ul>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Order History</a></li>
			<li><a href="#">Wishlist</a></li>
			<li><a href="#">Newsletter</a></li>
		</ul>
	</div>
</div>
<div class="content-wrap">
	<div style="clear:both; display:block;" class="social-wrap"></div>
	<ul class="social">
		<li><a href="#" class="tip" title="Facebook"><img src="<?php echo public_url('site/images/') ?>social-icon-facebook.png" alt="Facebook"></a></li>
		<li><a href="#" class="tip" title="Dribbble"><img src="<?php echo public_url('site/images/') ?>social-icon-dribbble.png" alt="Dribbble"></a></li>
		<li><a href="#" class="tip" title="Flickr"><img src="<?php echo public_url('site/images/') ?>social-icon-flickr.png" alt="Flickr"></a></li>
		<li><a href="#" class="tip" title="Pinterest"><img src="<?php echo public_url('site/images/') ?>social-icon-pinterest.png" alt="Pinterest"></a></li>
		<li><a href="#" class="tip" title="Twitter"><img src="<?php echo public_url('site/images/') ?>social-icon-twitter.png" alt="Twitter"></a></li>
		<li><a href="#" class="tip" title="RSS"><img src="<?php echo public_url('site/images/') ?>social-icon-rss.png" alt="RSS"></a></li>
	</ul>
	<ul class="payment">
		<li><a href="#" class="tip" title="Paypal"><img src="<?php echo public_url('site/images/') ?>payment-icon-paypal.png" alt="Paypal"></a></li>
		<li><a href="#" class="tip" title="American Express"><img src="<?php echo public_url('site/images/') ?>payment-icon-ae.png" alt="American Express"></a></li>
		<li><a href="#" class="tip" title="Discover"><img src="<?php echo public_url('site/images/') ?>payment-icon-discover.png" alt="Discover"></a></li>
		<li><a href="#" class="tip" title="Master Card"><img src="<?php echo public_url('site/images/') ?>payment-icon-mastercard.png" alt="Master Card"></a></li>
		<li><a href="#" class="tip" title="Visa"><img src="<?php echo public_url('site/images/') ?>payment-icon-visa.png" alt="Visa"></a></li>
	</ul>
	<p style="clear:both; display:block;">&copy; 2017 <a href="index-2.html">Đức Hồng Mobile</a>, All Rights Reserved. Designed by: <a href="#">vuduchong</a></p>
</div>
<script type="text/javascript">
//------JCAROUSEL-------------
function mycarousel_initCallback(carousel){
		// Disable autoscrolling if the user clicks the prev or next button.
		carousel.buttonNext.bind('click', function() {
			carousel.startAuto(0);
		});
		carousel.buttonPrev.bind('click', function() {
			carousel.startAuto(0);
		});
		// Pause autoscrolling if the user moves with the cursor over the clip.
		carousel.clip.hover(function() {
			carousel.stopAuto();
		}, function() {
			carousel.startAuto();
		});
	};
	jQuery(document).ready(function() {
		jQuery('#mycarousel, #mycarouselnew').jcarousel({
			auto: 0,
			wrap: 'last',
			initCallback: mycarousel_initCallback
		});
	});	
</script>    
<script type="text/javascript">
	jQuery(function($){
		$(".tweet").tweet({
			join_text: "auto",
			username: "html5awesome",
			avatar_size: 48,
			count: 3,
			auto_join_text_default: " we said, ",
			auto_join_text_ed: " we ",
			auto_join_text_ing: " we were ",
			auto_join_text_reply: " we replied ",
			auto_join_text_url: " we were checking out ",
			loading_text: "loading tweets..."
		});
	});
</script>
<script type="text/javascript">(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
	$(document).ready(function(){
		$('#text-search').keyup(function(){
			k = $("#text-search").val();
			if(k == ""){
				$("#quick-search").hide();
			} else {
				$.post (
					"<?php echo base_url()?>product/get_search",
					{ textnhapvao: k },
				function(datatrave){
					$("#quick-search").html(datatrave);
					$("#quick-search").show();
				});
			}
		});
	});
</script>