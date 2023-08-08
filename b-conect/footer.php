<footer class="l_footer">
       <nav class="l_footer-nav">
        <ul class="l_footer-nav_list">
            <li class="l_footer-nav_item">
              <a href="<?php echo esc_url( get_page_link( 7 ) ); ?>" class="l_footer-nav_link">事業内容</a>
            </li>
            <li class="l_footer-nav_item">
              <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>" class="l_footer-nav_link">私たちについて</a>
            </li>
            <li class="l_footer-nav_item">
              <a href="<?php echo esc_url( home_url() ); ?>/branch" class="l_footer-nav_link">支店情報</a>
            </li>
            <li class="l_footer-nav_item">
                <a href="<?php echo esc_url("https://www.instagram.com/benry.yachiyodai/"); ?>" class="l_footer-nav_link">Instagram</a>
              </li>
            <li class="l_footer-nav_item">
                <button class="m_header-btn">
                    <a href="<?php echo esc_url( get_page_link( 5 ) ); ?>" class="m_header-btn_link">お問い合わせ</a>
                </button>
            </li>
            <li class="l_footer-nav_item">
              <a href="<?php echo esc_url( home_url() ); ?>" class="l_footer-logo_link">
                <div class="l_footer-logo-img">
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/B-CONNECT-1.png' ); ?>" alt="株式会社B-CONNECT" class="l_footer-logo">
                </div>
              </a>
            </li>
        </ul>
      
       </nav>

       <small class="l_footer-copy-right">
        &copy;2023 B-CONNECT Inc
       </small>
      </footer>
    <?php wp_footer(); ?>
  </body>
</html>