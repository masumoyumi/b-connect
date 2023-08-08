<?php get_header(); ?>
<?php
 /*
 Template Name: 支店情報
 */
?>
 <main class="l_group-main">
        <div class="l_contents">
            <div class="l_container">
                <h2 class="m_top-ttl_box m_top-ttl_contents">
                    <span class="m_top_service-ttl js_ttl">
                     GROUP
                    </span>
                    <span class="m_top_service-ttl-jp js_sub-ttl">
                     支店情報
                    </span>
                </h2>

                 <h1 class="top-service_ttl-txt">
                    私たちは便利屋としてお客様の生活が<br>より快適で豊かな暮らしが実現できる<br>お手伝いをします。
                 </h1>

			      <?php
              if (have_posts()):
              while (have_posts()):
              the_post();
            ?>

                <h3 class="group_ttl">

                 <?php the_title(); ?>
                </h3>

                <div class="group_contents js_mission">
                    <div class="grop_img-wrapper">
                    
                      <?php the_post_thumbnail(null, array('class' => 'group-img')); ?>     
                    </div>
                     
                   <div class="group_contents-lg">
                     <div class="group_txts_box">
                        <p class="group-address">住所</p>
                        <p class="group-address"><?php echo CFS()->get('address'); ?></p>
                     </div>
                     <div class="group_txts_box">
                        <p class="group-address">電話番号</p>
                        <p class="group-address"><?php echo CFS()->get('number'); ?></p>
                     </div>

                     <button class="m_main-btn">
                        <a href="" class="m_main-btn_link">
                        <?php echo CFS()->get('link'); ?>
							              店舗サイトはこちら
						            </a>
                     </button>
                   </div>
                 </div>

				<?php endwhile; endif; ?>

        <?php
          $args = array(
          'mid_size' => 1,
          'prev_text' => '&lt;&lt;前へ',
          'next_text' => '次へ&gt;&gt;',
          'screen_reader_text' => ' ',
        );
        the_posts_pagination($args);
        ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>