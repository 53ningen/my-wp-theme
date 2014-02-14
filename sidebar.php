<?php
/**
 * サイドバーのテンプレートファイル
 *
 * @package    WordPress
 * @subpackage gomi_ningen
 */
?>
		<?php if( is_active_sidebar( 'sidebar-main' ) ) : ?>
		<div class="col-lg-3">
			<?php dynamic_sidebar( 'sidebar-main' ); ?>
        </div>
        <?php else : ?>
        <div class="col-lg-3">
			<aside>
	          <h2>Heading</h2>
	          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
			</aside>
        </div>
	    <?php endif; ?>
