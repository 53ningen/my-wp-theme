<?php
/**
 * 固定ページのテンプレートファイル
 *
 * @package    WordPress
 * @subpackage Hoho
 */
get_header(); ?>

      <div class="row">
        <div class="col-lg-9">
        <?php get_template_part('content' ); ?>
        </div>

      <?php get_sidebar(); ?>
      </div>

<?php get_footer(); ?>