<?php
/**
 * コメントを表示するためのテンプレート
 *
 * @package    WordPress
 * @subpackage gomi_ningen
 */
?>
<div id="comments" class="comments">
    <?php
    if ( post_password_required() ) {
        echo '<p class="no-comments">この投稿はパスワードで保護されています。コメントを表示するには、パスワードを入力して下さい。</p>';
        return;
    }
    ?>
 
    <?php if ( have_comments() ) : ?>
        <h4 id="comment-title">
            <?php comments_number(); ?>
        </h4>
        <ul class="comment-list">
            <?php wp_list_comments(); ?>
        </ul>
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link(); ?></div>
            <div class="alignright"><?php next_comments_link(); ?></div>
        </div>
    <?php else : ?>
        <?php if ( comments_open() ) :  ?>
            <p>コメントはまだありません。</p>
        <?php else : ?>
            <p>コメントは閉鎖されています。</p>
        <?php endif; ?>
    <?php endif; ?>
 
</div>
 
<?php comment_form(); ?>
