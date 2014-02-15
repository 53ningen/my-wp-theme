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
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          </header>
          <section>
            <?php if ( is_singular() ) : ?>
   	        	<?php the_content(); ?>
   	        <?php else: ?>	
   	        	<?php if( has_post_thumbnail() ){ the_post_thumbnail("thumbnail"); }; ?>
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
        <?php comments_template(); ?>