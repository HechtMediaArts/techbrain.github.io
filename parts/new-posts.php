<?php $newposts = new WP_Query( array( 'posts_per_page' => 3, 'cat' => -123 ) ); ?>

<?php if ( $newposts->have_posts() ): ?>
<h3>
	<i class="fa fa-pencil" aria-hidden="true"></i> <?php _e('Die frischesten Blog-Beiträge und WordPress Snippets','hueman'); ?>
</h3>

<ul class="related-posts group">

	<?php while ( $newposts->have_posts() ) : $newposts->the_post(); ?>
	<li class="related post-hover">
		<article <?php post_class(); ?>>

			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('thumb-medium'); ?>
					<?php endif; ?>
				</a>
			</div><!--/.post-thumbnail-->

			<div class="related-inner">

				<h4 class="post-title entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h4><!--/.post-title-->

				<div class="post-meta group">
					<p class="post-date">Zuletzt Bearbeitet am: <?php the_last_modified_timestamp(); ?></p>
				</div><!--/.post-meta-->
                
			</div><!--/.related-inner-->

		</article>
	</li><!--/.related-->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</ul><!--/.post-related-->
<?php endif; ?>

<?php wp_reset_query(); ?>
