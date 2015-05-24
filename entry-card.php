<?php //投稿をのリスト表示のループ内で呼び出されるサムネイルカード ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('entry') ?>>
  <header class="post-header">
	<h2><a href="<?php the_permalink(); ?>" class="entry-title"><?php echo get_the_title(); ?></a></h2>
    <p class="post-meta">
      <span class="post-date"><i class="fa fa-clock-o fa-fw"></i><?php the_time('Y/n/j') ;?></span>
    </p><!-- /.post-meta -->
    <?php if (is_category_visible()): ?>
    <div class="balloon"><span class="category"><?php the_category(', ') ?></span></div>
    <?php endif; ?>
  </header>

  <div class="entry-thumb">
    <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
      <a href="<?php the_permalink(); ?>" class="entry-image"><?php the_post_thumbnail( 'thumb600', array('style' => 'width:600px;height:180px;') ); ?></a>
    <?php else: // サムネイルを持っていないときの処理 ?>
      <a href="<?php the_permalink(); ?>" class="entry-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image-600.png" alt="NO IMAGE" title="NO IMAGE" style="width:600px;height:180px;" class="no-image list-no-image" /></a>
    <?php endif; ?>
  </div><!-- /.entry-thumb -->

  <div class="entry-content">
	<p class="entry-snippet"><?php echo get_the_custom_excerpt( get_the_content(''), get_excerpt_length() ); //カスタマイズで指定した文字の長さだけ本文抜粋?></p>
    <p class="entry-read"><a href="<?php the_permalink(); ?>">記事を読む</a></p>
  </div><!-- /.entry-content -->
</div>