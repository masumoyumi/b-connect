
<?php get_header(); ?>
      <main class="l_top-main">
        <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div  class="swiper-img" style="background: url(<?php echo esc_url( get_template_directory_uri() . '/img/pazzle.jpeg' ); ?>) center/cover;">         
                </div>
              </div>

             <div class="swiper-slide">
              <div class="swiper-img"  style="background: url(<?php echo esc_url( get_template_directory_uri() . '/img/handshake.jpeg' ); ?>) center/cover;">              
              </div>
             </div>

             <div class="swiper-slide">
              <div class="swiper-img"  style="background: url(<?php echo esc_url( get_template_directory_uri() . '/img/bill.jpeg' ); ?>) center/cover;">
              </div>
              </div>

             <div class="swiper-slide">
              <div class="swiper-img"  style="background: url(<?php echo esc_url( get_template_directory_uri() . '/img/BUSINESS.jpeg' ); ?>) center/cover;">
              </div>
              </div>


             </div>
          </div>
    

        <div class="top_kv">
            <div class="kv-box js_copy">
                <p class="kv-ttl">
                    お客様と <br>
                    様々なビジネス <br class="kv-br">
                    <span class="kv-primary">
                        「BUSINESS」</span>で<br>繋がる<span class="kv-primary">「CONNECT」 </span>
                </p>
            </div>
        </div>
        <!-- scrolldown -->
        <div class="scrolldown1"><span>Scroll</span></div>
        
        
        <!-- top-service -->
        <section class="top-service ">
            <div class="l_container">
                <h2 class="m_top-ttl_box">
                   <span class="m_top_service-ttl scroll_up">
                    SERVICE
                   </span>
                   <span class="m_top_service-ttl-jp scroll_up timing02">
                    事業内容
                   </span>
                </h2>
                <h1 class="top-service_ttl-txt">
                    便利屋業「ベンリー」FC店舗運営を<br>中心にお客様の生活支援サービスを<br>提供しております。
                </h1>

            <div class="top-service_img_contents">
                <div class="top-service_img-wrapper-list">
                   <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>" class="top_service_img_link">
                      <div class="top-service_img-wrapper_item">
                        <div class="top-service_img-wrapper scroll_up_02 img_zoom">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/branch2.jpg' ); ?>" alt="ベンリーFC事業" class="top-service_img img_zoom_item" width="1478" height="1108">
                        </div>
                        <p class="top-service_img-txt">便利屋サービス「ベンリー」FC店運営</p>
                      </div>
                    </a>

                  <a href="<?php echo esc_url( get_page_link( 7 ). '#clean' ); ?>" class="top_service_img_link">
                    <div class="top-service_img-wrapper_item">
                        <div class="top-service_img-wrapper scroll_up_02 img_zoom">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/clean.jpg' ); ?>" alt="ご自宅・事務所のお掃除" class="top-service_img img_zoom_item" width="7952" height="5304">
                        </div>
                        <p class="top-service_img-txt">ご自宅・事務所のお掃除</p>
                    </div>
                  </a>
                
                  <a href="<?php echo esc_url( get_page_link( 7 ) ) . '#garden'; ?>" class="top_service_img_link">
                    <div class="top-service_img-wrapper_item">
                        <div class="top-service_img-wrapper scroll_up_02 img_zoom">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/garden.jpg' ); ?>" alt="庭のお手入れ・草刈り" class="top-service_img img_zoom_item" width="800" height="503">     
                        </div>
                        <p class="top-service_img-txt">庭のお手入れ・草刈り</p>
                    </div>
                  </a>

                  <a href="<?php echo esc_url( get_page_link( 7 ) ) . '#reform'; ?>" class="top_service_img_link">
                    <div class="top-service_img-wrapper_item">
                        <div class="top-service_img-wrapper scroll_up_02 img_zoom">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/reform.jpg' ); ?>" alt="リフォーム" class="top-service_img img_zoom_item" width="800" height="534">
                        </div>
                        <p class="top-service_img-txt">リフォーム</p>
                    </div>
                  </a>
                </div>
              </div>

                <button class="m_main-btn">
                    <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>" class="m_main-btn_link">VIEW MORE</a>
                </button>
            </div>
        </section>

       <!-- top-about -->
        <section class="top-about">
            <div class="l_container">
                <h2 class="m_top-ttl_box">
                    <span class="m_top_service-ttl scroll_up">
                     ABOUT US
                    </span>
                    <span class="m_top_service-ttl-jp scroll_up timing02">
                     私たちについて
                    </span>
                 </h2>

            <div class="top_about_lg">
              <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>" class="top_about_link">
                <div class="top-about_img_wrapper scroll_left img_zoom">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/moving.jpg' ); ?>" alt="私たちについて" class="top-about_img img_zoom_item" width="800" height="533">
                </div>
              </a>

               <div class="top_about-txts_contets">
                <p class="top-aboout_txt">社会で活躍できる人を’増やす’を本気で <br class="top_about_br_sub">
                    叶えるために日々<br class="top_about-br">サービス提供を行なって<br class="top_about_br_sub">
                    おります。
                </p>
                <button class="m_main-btn">
                    <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>" class="m_main-btn_link">VIEW MORE</a>
                </button>
               </div>
            </div>
                <!-- <button class="m_main-btn">
                    <a href="" class="m_main-btn_link">VIEW MORE</a>
                </button> -->
            </div> 
        </section>

        <section class="top-group">
            <div class="l_container">
                <h2 class="m_top-ttl_box">
                    <span class="m_top_service-ttl scroll_up">
                     GROUP
                    </span>
                    <span class="m_top_service-ttl-jp scroll_up timing02">
                     支店情報
                    </span>
                 </h2>
        <div class="top-group_img-contents">


                <?php
                    if (have_posts()):
                    while (have_posts()):
                    the_post();
                ?>
                    <a href="<?php echo esc_url( home_url() ); ?>/branch" class="top_group_link">
                    <!-- <div class="top-group_img-wrapper-item"> -->
                        <div class="top-group_img-wrapper scroll_up_02 img_zoom">
                            <?php the_post_thumbnail(null, array('class' => 'top-group-img img_zoom_item')); ?>
                        </div>
                        <div class="top-grop_img-txts">
                            
                            <p class="top-group-txt">
                                <?php the_title(); ?>
                            </p>
                            <p class="top-group-address">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    <!-- </div> -->
                    </a>

                <?php endwhile; endif; ?>

                </div>
          
                 <button class="m_main-btn">
                    <a href="<?php echo esc_url( home_url() ); ?>/branch" class="m_main-btn_link">VIEW MORE</a>
                </button>
                     
        <!-- top-contact -->
          <section class="top_contact">
            <h3 class="top_contact-ttl scroll_up">
                お問い合わせ
            </h3>

            <div class="top_contact-pc">
               <p class="top_contact-ttl_txt scroll_up">便利業の各種サービス・便利屋紹介事業<br>に関してのお問い合わせなどはこちら</p>

               <button class="m_contact-btn">
                <a href=<?php echo esc_url( get_page_link( 5 ) ); ?> class="m_contact-btn_link">VIEW MORE</a>
               </button>

             </div>
           </section>
            </div>
        </section>
      </main>
  <?php get_footer(); ?>