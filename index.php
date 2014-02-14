<?php
/**
 * メインのテンプレートファイル
 *
 * @package    WordPress
 * @subpackage gomi_ningen
 */
 
get_header(); ?>

      <div class="row">
        <div class="col-lg-9">
          <?php get_template_part('content' ); ?>
          <div class="navigation">
            <div class="alignleft"><?php previous_posts_link( '&laquo; prev' ) ?></div>
            <div class="alignright"><?php next_posts_link( 'next &raquo;', '' ) ?></div>
          </div>
        </div>

      <?php get_sidebar(); ?>
      </div>

<?php get_footer(); ?>