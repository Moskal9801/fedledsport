<?php
/* Template name: Новости */
get_header();

$counter  = 1;
if (!wp_is_mobile()) {
    $maxPosts = 10;
} else {
    $maxPosts = 4;
} ?>

    <section class="news-page__news">
        <div class="news__container container">
            <div class="container__title">Вот, что о нас<br>говорят в СМИ</div>
            <div class="container__items">
                <?php $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'order'       => 'DESC',
                    'orderby'     => 'date',
                    'posts_per_page' => $maxPosts,
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() && (($counter % $maxPosts) !== 0) ) : $query->the_post();
                        $params = [
                            'reviews_id' => get_the_ID()
                        ];
                        get_template_part('parts/news', 'items', $params);
                        $counter++; endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
            <?php $query = array (
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'post_per_page' => $maxPosts,
            );
            $posts = new WP_Query( $query );
            $allPostsCounter = 0;
            while ( $posts->have_posts() ) {
                $posts->the_post();
                $allPostsCounter++;
            }
            $maxPosts--;
            $maxPages = ceil( $allPostsCounter / $maxPosts );
            if ( $maxPages > 1 ) { ?>
                <a href="#" class="container__more default-button"
                   id="more-news"
                   data-current-page="1"
                   data-query='<?= json_encode( $posts->query_vars ); ?>'
                   data-max-pages="<?= $maxPages; ?>">Загрузить еще
                </a>
            <?php } wp_reset_postdata(); ?>
        </div>
    </section>

<?php
get_footer();
?>
