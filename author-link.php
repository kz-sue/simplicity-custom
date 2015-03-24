<?php if (is_author_visible()): ?>
<span class="post-author vcard author"><span class="fn"<?php is_single() ? '' : ''; ?>><span class="icon_document_alt"></span><span id="post-by">Posted by: </span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></span>
<?php endif; ?>