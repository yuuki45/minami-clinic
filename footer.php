<!-- footer -->
<footer>
    <div class="footer_bg">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/wave.svg')); ?>" alt="bg" />
    </div>
    <div class="footer_inner">
        <div class="footer_container">
            <div class="footer_contents">
                <div class="footer_contents_left">
                    <div class="footer_logo">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="logo" />
                    </div>
                    <p class="footer_address">
                        〒166-0001&nbsp;&nbsp;&nbsp;東京都杉並区阿佐谷北7-3-1
                    </p>
                    <p class="footer_tel">03-1234-5678</p>
                    <span class="footer_hours">(年中無休 AM9:00〜PM22:00)</span>
                    <div class="footer_button_wrap">
                        <div class="footer_web_button">
                            <a href="<?php echo esc_url(home_url('/web')); ?>"> WEB予約 </a>
                        </div>
                        <div class="footer_contact_button">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>"> お問い合わせ </a>
                        </div>
                    </div>
                    <div class="footer_timetable">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical-time-pc@2x.png')); ?>" alt="timetable" />
                    </div>
                </div>
                <div class="footer_contents_right">
                    <div class="footer_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24933.85841961636!2d139.5810079454924!3d38.63203903877637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8c6dbd6c03ae15%3A0x10bc5da99bc816ef!2z44CSOTk5LTcyMDUg5bGx5b2i55yM6ba05bKh5biC5rip5rW3!5e0!3m2!1sja!2sjp!4v1626608818911!5m2!1sja!2sjp" width="385" height="385" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="footer_top">
                <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
            </div>
            <div class="footer_about">
                <p>当院について</p>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about/#policy')); ?>">ポリシーと特徴</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/#gallery')); ?>">当院の様子</a></li>
                </ul>
            </div>
            <div class="footer_staff">
                <p>スタッフ紹介</p>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/staff/#director')); ?>">院長のあいさつ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/staff/#staff_introduction')); ?>">スタッフ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog')); ?>">スタッフブログ</a></li>
                </ul>
            </div>
            <div class="footer_medical">
                <p>診療内容</p>
                <div class="footer_medical_wrap">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/medical/#130')); ?>">一般歯科</a></li>
                        <li><a href="<?php echo esc_url(home_url('/medical/#129')); ?>">小児歯科</a></li>
                        <li><a href="<?php echo esc_url(home_url('/medical/#131')); ?>">予防歯科</a></li>
                        <li><a href="<?php echo esc_url(home_url('/medical/#126')); ?>">入れ歯</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/medical/#123')); ?>">矯正歯科</a></li>
                        <li><a href="<?php echo esc_url(home_url('/medical/#125')); ?>">ホワイトニング</a></li>
                        <li><a href="<?php echo esc_url(home_url('/medical/#124')); ?>">口腔外科</a></li>
                        <li><a href="<?php echo esc_url(home_url('/medical/#127')); ?>">レーザー治療</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_contact">
                <p>お問い合わせ</p>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせフォーム</a></li>
                    <li><a href="<?php echo esc_url(home_url('/web')); ?>">WEB予約</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_copy">
            <p>&copy;2020-<?php echo wp_date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
    </div>
</footer>
<a href="<?php echo esc_url(home_url('/')); ?>" class="to_top" id="page_top">
    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/totop.png')); ?>" alt="to_top" />
</a>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!--flatpickr-->
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/flatpickr.min.js" integrity="sha256-Huqxy3eUcaCwqqk92RwusapTfWlvAasF6p2rxV6FJaE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/ja.js" integrity="sha256-us400PA8+wpkgAkYwnKn7ueJbkk00UuwAcqrHqLGQJw=" crossorigin="anonymous"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/flatpickr.js')); ?>"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/slick.min.js')); ?>"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/js/script.js')); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>
