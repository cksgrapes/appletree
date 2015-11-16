<?php
$imgDir = '/img';
$jsDir  = '/js';
$cssDir = '/css';
?>
<!DOCTYPE html>
<html lang="ja">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<title>appletree</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta property="format-detection" content="telephone=no">
		<link rel="stylesheet" href="<?php echo $cssDir; ?>/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo $cssDir; ?>/style.css">
		<?php wp_head(); ?>
	</head>

	<body>
		<h1 class="ttl_main"><a href="/">appletree</a></h1>
		<p class="sfTrgr">食べた知恵の実どれだった？</p>
		<?php get_search_form();?>
