<?php
$imgDir = '/img';
$jsDir  = '/js';
$cssDir = '/css';
?>
<?php get_header(); ?>
		<div class="contents">
			<?php if ( have_posts() ) : ?>
			<ul class="itemList grid">
			<?php while ( have_posts() ) : the_post(); 
			$bookImg = CFS()->get('book_image');?>
				<li class="gridItem"><a href="<?php the_permalink(); ?>"><img src="<?php echo $bookImg; ?>" alt="<?php the_title(); ?>"></a></li>
			<?php endwhile; ?>
			</ul>
			<ul class="pager">
				<li class="pager_prev"><?php previous_posts_link( '前のページへ' ); ?></li>
				<li class="pager_next"><?php next_posts_link( '次のページへ' ); ?></li>
			</ul>
			<?php else : ?>
			<p class="notFound">アイテムがありません。</p>
			<?php endif; ?>
		</div>
<?php get_footer(); ?>
