<?php
/**
 * コンテンツループのテンプレートファイル
 *
 * @package    WordPress
 * @subpackage gomi_ningen
 */
?>
        <?php if ( have_posts() ) : ?>
        <?php   while ( have_posts() ): the_post(); ?>
        <article <?php post_class(); ?>>
          <header>
            <h2><?php the_title(); ?></h2>
          </header>
          <section>
            <?php if ( is_singular() ) : ?>
   	        	<?php the_content(); ?>
   	        <?php else: ?>	
   	        	<?php the_excerpt(); ?>
   	        <?php endif; ?>
          </section>
          <footer>
            <time><?php the_time( 'Y.n.j.' ); ?></time>
            <?php the_category(); ?>
            <?php the_tags(); ?>
          </footer>
        </article>
        <?php   endwhile; ?>
        <?php endif; ?>