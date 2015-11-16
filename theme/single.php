<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$bookImg = CFS()->get('book_image');
?>
<div class="bookData">
	<p class="bookData_img"><img src="<?php echo $bookImg; ?>" alt="<?php the_title(); ?>"></p>
	<h2 class="bookData_ttl"><?php the_title(); ?></h2>
	<ul class="bookData_data">
		<li>ステータス：<?php $values = CFS()->get('book_status');
		foreach ($values as $value => $label) echo $label; ?></li>
		<li>レーベル：<?php $values = CFS()->get('book_label');
		foreach ($values as $value => $label) echo $label; ?></li>
		<li>ジャンル：<?php $values = CFS()->get('book_genre');
		foreach ($values as $value => $label) echo $label; ?></li>
		<li>サイズ：<?php $values = CFS()->get('book_size');
		foreach ($values as $value => $label) echo $label; ?></li>
	</ul>
</div>
<?php endwhile; endif; ?>
