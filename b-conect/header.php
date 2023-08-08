<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <!-- adobe fonts -->
    <script>
        (function(d) {
          var config = {
            kitId: 'nee7vfv',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>
      <script>
        (function(d) {
          var config = {
            kitId: 'nee7vfv',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>

    <?php wp_head(); ?>
  </head>

  <body>
<header class="l_header">
    <a href="<?php echo esc_url( home_url() ); ?>" class="l_header-logo_link">
          <div class="l_header-logo">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/B-CONNECT-1.png' ); ?>" alt="株式会社B-CONNECT" class="l_header-logo_img">
          </div>
        </a>
        <nav class="l_header-nav js_navigation">
          <ul class="l_header-nav_list">
            <li class="l_header-nav_item">
              <a href="<?php echo esc_url( home_url() ); ?>" class="l_header-nav_link">
                <p class="l_header-nav-link-text">TOP</p>
              </a>
              <a href="<?php echo esc_url( home_url() ); ?>" class="l_header-nav_link">
              <p class="l_header-nav-link-text-jp">トップ</p>
              </a>
            </li>
            <li class="l_header-nav_item">
              <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>" class="l_header-nav_link">
                <p class="l_header-nav-link-text">SERVICE</p>
              </a>
              <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>"class="l_header-nav_link">
                <p class="l_header-nav-link-text-jp">サービス</p>
              </a>
            </li>
            <li class="l_header-nav_item">
              <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>" class="l_header-nav_link">
                <p class="l_header-nav-link-text">ABOUT</p>
              </a>
              <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>"  class="l_header-nav_link">
                <p class="l_header-nav-link-text-jp">私たちについて</p>
              </a>
            </li>
            <li class="l_header-nav_item">
              <a href="<?php echo esc_url( home_url() ); ?>/branch" class="l_header-nav_link">
                <p class="l_header-nav-link-text">GROUP</p>
              </a>
              <a href="<?php echo esc_url( home_url() ); ?>/branch" class="l_header-nav_link">
                <p class="l_header-nav-link-text-jp">支店情報</p>
              </a>
            </li>
            <li class="l_header-nav_item">
              <a href="<?php echo esc_url("https://www.instagram.com/benry.yachiyodai/"); ?>" class="l_header-nav_link">
                <p class="l_header-nav-link-text">INSTAGRAM</p>
              </a>
              <a href="<?php echo esc_url("https://www.instagram.com/benry.yachiyodai/"); ?>" class="l_header-nav_link">
                <p class="l_header-nav-link-text-jp">インスタグラム</p>
              </a>
            </li>

            <li class="l_header-nav_item">
              <div class="m_header-btn m_sp-btn">
                <a href="<?php echo esc_url( get_page_link( 5 ) ); ?>"class="m_header-btn_link">お問い合わせ</a>
              </div>
            </li>
  
          </ul>
        </nav>

        <nav class="l_pc_header-nav">
          <ul class="l_pc_header-nav_list">
           <li class="l_pc_header-nav_item">
              <a href="<?php echo esc_url( home_url() ); ?>" class="l_img_link">
                <div class="l_pc_header-nav_img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/B-CONNECT-1.png' ); ?>" alt="株式会社B-CONNECT" class="l_pc_header-nav_img">
                </div>
               </a>
            </li>
            <li class="l_pc_header-nav_item">
              <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>" class="l_pc_header-nav_link">事業内容</a>
            </li>
            <li class="l_pc_header-nav_item">
              <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>" class="l_pc_header-nav_link">私たちについて</a>
            </li>
            <li class="l_pc_header-nav_item">
              <a href="<?php echo esc_url( home_url() ); ?>/branch" class="l_pc_header-nav_link">支店情報</a>
            </li>
            <li class="l_pc_header-nav_item">
              <a href="<?php echo esc_url("https://www.instagram.com/benry.yachiyodai/"); ?>" class="l_pc_header-nav_link">Instagram</a>
            </li>
            <li class="l_pc_header-nav_item">
              <!-- <a href="contact.html" class="l_pc_header-nav_link"> -->
                <button class="m_header-btn">
                    <a href="<?php echo esc_url( get_page_link( 5 ) ); ?>" class="m_header-btn_link">お問い合わせ</a>
                </button>
              <!-- </a> -->
            </li>
          </ul>
        </nav>

     
        <button class="m_hamburger js_hamburger">
          <span class="m_hamburger-bar"></span>
          <span class="m_hamburger-bar"></span>
          <span class="m_hamburger-bar"></span>
        </button>
     

  </header>