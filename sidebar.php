<aside class="sidebar">
    <div class="sidebar_container">
        <div class="sidebar_clinic_introduction">
            <h3 class="sidebar_clinic_head">クリニックの紹介</h3>
            <div class="sidebar_clinic_img">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/blog/sidebar-img_1.jpg')); ?>" alt="clinic" />
            </div>
            <p class="sidebar_clinic_name">みなみ歯科クリニック</p>
            <div class="sidebar_clinic_text">
                お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
            </div>
            <a class="sidebar_clinic_link" href="<?php echo esc_url(home_url('/about')); ?>">当院について</a>
        </div>

        <!-- 新着記事 -->
        <div class="sidebar_newarticle">
            <h3 class="sidebar_newarticle_head">新着記事</h3>
            <div class="blog_box lower_blog_box lower_blog_box_newarticle">
                <?php if (is_post_type_archive() || is_tax('blog_category') || is_singular("blog")) : ?>
                    <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $new_posts = get_posts($args);
                    foreach ($new_posts as $post) : setup_postdata($post);
                    ?>
                        <article class="blog_card lower_blog_card lower_blog_card_newarticle">
                            <a href="<?php the_permalink(); ?>" class="blog_head lower_blog_head lower_blog_head_newarticle">
                                <div class="blog_img lower_blog_img lower_blog_img_newarticle">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                                    <?php endif; ?>
                                </div>
                                <div class="blog_body lower_blog_body lower_blog_body_newarticle">
                                    <div class="blog_category lower_blog_category lower_blog_category_newarticle">
                                        <?php // 投稿に紐づくタームの一覧を表示
                                        $taxonomy_slug = 'blog_category'; // 任意のタクソノミースラッグを指定
                                        $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                                        if (!empty($category_terms)) { // 変数が空でなければ true
                                            if (!is_wp_error($category_terms)) { // 変数が WordPress Error でなければ true

                                                foreach ($category_terms as $category_term) { // タームのループを開始
                                                    echo $category_term->name; // ターム名を表示
                                                } // ループの終了

                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="blog_title lower_blog_title_newarticle">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="blog_date lower_blog_date lower_blog_date_newarticle">
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

                <?php if (is_home() || is_category() || !is_singular("blog") && !is_archive()) : ?>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );
                    $new_posts = get_posts($args);
                    foreach ($new_posts as $post) : setup_postdata($post);
                    ?>
                        <article class="blog_card lower_blog_card lower_blog_card_newarticle">
                            <a href="<?php the_permalink(); ?>" class="blog_head lower_blog_head lower_blog_head_newarticle">
                                <div class="blog_img lower_blog_img lower_blog_img_newarticle">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                                    <?php endif; ?>
                                </div>
                                <div class="blog_body lower_blog_body lower_blog_body_newarticle">
                                    <div class="blog_category lower_blog_category lower_blog_category_newarticle">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories) {
                                            foreach ($categories as $category) {
                                                echo $category->name . ' '; //ハイフン区切りにする場合は最後を'-'に変更
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="blog_title lower_blog_title_newarticle">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="blog_date lower_blog_date lower_blog_date_newarticle">
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- カテゴリー -->
        <div class="sidebar_category">
            <h3 class="sidebar_category_head">カテゴリー</h3>
            <?php if (is_home() || is_category() || is_single() && !is_singular("blog")) : ?>
                <ul class="sidebar_category_list">
                    <?php
                    // すべてのカテゴリーをリンク付きで繰り返し表示
                    $categories = get_categories();
                    foreach ($categories as $cat) :
                    ?>
                        <li class="sidebar_category_link"><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


            <?php if (is_post_type_archive() || is_tax('blog_category') || is_singular("blog")) : ?>
                <?php
                $tax_name = 'blog_category'; //タクソノミーを指定
                $terms = get_terms($tax_name);
                ?>
                <ul class="sidebar_category_list">
                    <?php foreach ($terms as $term) : ?>
                        <li class="sidebar_category_link"><a href="<?php echo get_term_link($term->slug, $tax_name) ?>"><?php echo $term->name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</aside>
</div>
</div>
</section>
