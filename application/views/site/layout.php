<!DOCTYPE HTML>
<html>
<head>
	<?php $this->load->view('site/head') ?>
</head>

<body>
	<div id="page_wrap">
		<header>
			<?php $this->load->view('site/header') ?>
		</header>
		<div id="container">
			<nav>  
				<?php $this->load->view('site/menu', $this->data) ?>
			</nav><!--end:grey-->
			<div class="content-wrap">
				<?php $this->load->view($temp, $this->data) ?>
				<footer>
					<?php $this->load->view('site/footer') ?>
				</footer>
			</div><!--end:container-->
		</div><!--end:page_wrap-->
	</div>
</body>
</html>
