<?php //SNSページのフォローボタン ?>
<?php if ( is_all_sns_follow_btns_visible() ): //全てのフォローボタンを表示するかどうか?>
<!-- SNSページ -->
<div class="sns-pages">
<?php if ( get_follow_msg() ): //フォローメッセージがあるか?>
<p class="sns-follow-msg"><?php echo esc_html( get_follow_msg() ); //フォローメッセージの取得?></p>
<?php endif; ?>
<ul class="snsp">
<?php if ( get_twitter_follow_id() )://Twitterフォローボタンを表示するか ?><li class="twitter-page"><a href="https://twitter.com/<?php echo esc_html( get_twitter_follow_id() ); //TwitterフォローIDの取得?>" target="_blank" title="Twitterをフォロー" rel="nofollow"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
<?php if ( get_facebook_follow_id() )://Facebookフォローボタンを表示するか ?><li class="facebook-page"><a href="https://www.facebook.com/<?php echo esc_html( get_facebook_follow_id() ); //FacebookフォローIDの取得?>" target="_blank" title="Facebookをフォロー" rel="nofollow"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
<?php if ( get_google_plus_follow_id() )://Google＋フォローボタンを表示するか ?><li class="google-plus-page"><a href="https://plus.google.com/<?php echo esc_html( get_google_plus_follow_id() ); //Google＋フォローIDの取得 ?>" target="_blank" title="Google＋をフォロー" rel="nofollow"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>
<?php if ( get_instagram_follow_id() )://Instagramフォローボタンを表示するか ?><li class="instagram-page"><a href="http://instagram.com/<?php echo esc_html( get_instagram_follow_id() ); //InstagramフォローIDの取得 ?>" target="_blank" title="Instagramをフォロー" rel="nofollow"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
<?php if ( get_pinterest_follow_id() )://Pinterestフォローボタンを表示するか ?><li class="pinterest-page"><a href="https://www.pinterest.com/<?php echo esc_html( get_pinterest_follow_id() ); //PinterestフォローIDの取得 ?>" target="_blank" title="Pinterestをフォロー" rel="nofollow"><i class="fa fa-pinterest"></i></a></li><?php endif; ?>
<?php if ( get_youtube_follow_id() )://YouTubeフォローボタンを表示するか ?><li class="youtube-page"><a href="https://www.youtube.com/user/<?php echo esc_html( get_youtube_follow_id() ); //YouTubeフォローIDの取得 ?>" target="_blank" title="YouTubeをフォロー" rel="nofollow"><i class="fa fa-youtube"></i></a></li><?php endif; ?>
<?php if ( is_feedly_follow_btn_visible() )://feedlyフォローボタンを表示するか ?><li class="feedly-page"><a href='http://feedly.com/index.html#subscription%2Ffeed%2F<?php echo rawurlencode(get_bloginfo("rss2_url")); ?>' target='blank' title="feedlyで更新情報をフォロー" rel="nofollow"><i class="icon-feedly"></i></a></li><?php endif; ?>
<?php if ( is_rss_follow_btn_visible() )://RSSフォローボタンを表示するか ?><li class="rss-page"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="RSSで更新情報をフォロー" rel="nofollow"><i class="fa fa-rss fa-2x"></i></a></li><?php endif; ?>
  </ul>
</div>
<?php endif; ?>