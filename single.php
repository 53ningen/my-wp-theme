<?php
/**
 * 投稿のテンプレートファイル
 *
 * @package    WordPress
 * @subpackage Hoho
 */
get_header(); ?>

      <div class="row">
        <div class="col-lg-9">
	        <?php get_template_part('content' ); ?>
	        <div class="page-links">
	        	<?php wp_link_pages(); // 記事内ページャー ?>
	        </div>
        </div>

      <?php get_sidebar(); ?>
      </div>

<?php get_footer(); ?>