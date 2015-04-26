<?php get_header(); ?>


<div id="content">

<div class="wrap">

  

  <div id="main" <?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
    
    <div class="main-inner">
    
    <?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
    ?>
        
    <?php 
    global $post;
    $cf = get_post_meta($post->ID);
    $facebook_page_url = '';
    $facebook_page_url = get_option('facebook_page_url');
    $post_cat = '';
    ?>
    <article id="post-<?php the_id(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting">

      <header class="post-header">
        <div class="cat-name">
          <span>
            <?php
              $category = get_the_category(); 
              echo $category[0]->cat_name;
            ?>
          </span>
        </div>
        <h1 class="post-title" itemprop="headline"><?php the_title(); ?></h1>
        <div class="post-sns">
          <?php social_buttons();?>
        </div>
      </header>

      <div class="post-meta-area">
        <ul class="post-meta list-inline">
          <li class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"><i class="fa fa-clock-o"></i> <?php the_time('Y.m.d');?></li>
        </ul>
        <ul class="post-meta-comment">
          <li class="author">
            by <?php the_author(); ?>
          </li>
          <li class="comments">
            <i class="fa fa-comments"></i> <span class="count"><?php comments_number('0', '1', '%'); ?></span>
          </li>
        </ul>
      </div>
      
      <?php if( get_the_post_thumbnail() ) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(array(1200, 630, true)); ?>
      </div>
      <?php endif; ?>

      <section class="post-content" itemprop="text">
        <?php the_content(); ?>
      </section>

      <footer class="post-footer">
        <!--SNSボタンLarge追加 Start-->
        <div class="snsshare">
          <a id="share_fb" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">Facebookでシェア</a>
          <a id="share_tw" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=29Hack" target="blank">Twitterでシェア</a>
          <!--<a id="share_hatena" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink() ?>&title=<?php echo urlencode( the_title( "" , "" , 0 ) ) ?>%20%2d%20No%2e1026" target="_blank">はてなブックマーク</a>-->
          <!--<a id="share_feedly" href="http://cloud.feedly.com/#subscription%2Ffeed%2F【ここにRSSのURL】" target='_blank'>feedlyでフォロー</a>-->
          <a id="share_line" href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>">LINEで送る</a>
          <!--<a id="share_line" href="http://line.naver.jp/R/msg/text/?LINE%E3%81%A7%E9%80%81%E3%82%8B%0D%0Ahttp%3A%2F%2Fline.naver.jp%2F">LINEで送る</a>-->
          <!--<a id="share_google" href="javascript:(function(){window.open('https://plusone.google.com/_/+1/confirm?hl=ja&url=<?php echo get_permalink() ?>'+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title),'_blank');})();">Google+でシェア</a>-->
        </div>
        <!--SNSボタンLarge追加 End-->
        <ul class="post-footer-list">
          <li class="cat"><i class="fa fa-folder"></i> <?php the_category(', ');?></li>
          <?php 
          $posttags = get_the_tags();
          if($posttags){ ?>
          <li class="tag"><i class="fa fa-tag"></i> <?php the_tags('');?></li>
          <?php } ?>
        </ul>
      </footer>

      <?php echo get_cta($post->ID); ?>
      
    <?php if( is_active_sidebar('under_post_area') ){ ?>
    <div class="post-share">
      <?php dynamic_sidebar('under_post_area');?>
    </div>
    <?php } ?>
      
    </article>
      
 <?php show_avatar();?>
    
    
    <?php comments_template( '', true ); ?>

        <?php

				endwhile;

			else :
		?>
    
    <p>投稿が見つかりません。</p>
				
    <?php
			endif;
		?>


    </div><!-- /main-inner -->
  </div><!-- /main -->
  
<?php get_sidebar(); ?>

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>


