<?php
	include_once 'config.php';
?>


<!-- <link rel="shortcut icon" href="<?= $link ?>/assets/img/fs_icon_64_br_20.png" type="image/png"> -->
<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->

<!-- <script src="http://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="<?= $link ?>/assets/jquery.js"></script>
<script src="<?= $link ?>/assets/jquery.qrcode.min.js"></script>
<!-- <script src="<?= $link ?>/assets/howler.min.js"></script> -->
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>');

	if (localStorage.getItem('color_theme') == 'dark') {
		$('head').append('<link class="dark_theme_file" rel="stylesheet" type="text/css" href="<?= $link ?>/assets/dark_theme.css<?= $main_css_cache_ver ?>">');
		$('head').append('<link class="dark_theme_file" rel="stylesheet" type="text/css" href="dark_theme.css<?= $main_css_cache_ver ?>">');
	}
</script>

<link rel="stylesheet" type="text/css" href="<?= $link ?>/assets/fonts.css">
<link rel="stylesheet" type="text/css" href="<?= $link ?>/assets/findstudents_main.css<?= $main_css_cache_ver ?>">
<!-- <link rel="stylesheet" type="text/css" href="<?= $link ?>/assets/mobile.css"> -->
<link rel="stylesheet" type="text/css" href="<?= $link ?>/assets/mobile.css<?= $main_css_cache_ver ?>">
<link rel="stylesheet" type="text/css" href="<?= $link ?>/assets/main.css<?= $main_css_cache_ver ?>">
