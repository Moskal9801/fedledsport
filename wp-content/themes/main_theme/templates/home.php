<?php
/* Template name: Главная страница */
get_header();
?>

    <section class="home-page__banner">
        <div class="banner__container container">
            <div class="container__contents" data-sal="fade" data-sal-duration="3000">
                <div class="contents__title">ФЕДЕРАЦИЯ<br><span>ЛЕДОВЫХ</span><br>ВИДОВ СПОРТА</div>
                <div class="contents__description">Амурская районная общественная организация</div>
                <a class="contents__button default-button" href="/#activity">Подробнее <br>о федерации</a>
            </div>
            <div class="container__images">
                <div class="images__image first-image" data-sal="slide-left" data-sal-duration="1500">
                    <img src="<?php the_field( 'banner-first' ); ?>">
                </div>
                <div class="images__image second-image" data-sal="slide-right" data-sal-duration="1500" data-sal-delay="500">
                    <img src="<?php the_field( 'banner-second' ); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="home-page__activity" id="activity">
        <div class="activity__container container">
            <div class="container__title">Деятельность<br>федерации</div>
            <div class="container__items">
                <?php if ( have_rows( 'activity-cards' ) ) : ?>
                    <?php $counter = 1; ?>
                    <?php while ( have_rows( 'activity-cards' ) ) : the_row(); ?>
                        <div class="items__item"
                             <?php if($counter == 1) { ?>data-sal="slide-right" data-sal-duration="1500"<?php }
                             elseif ($counter == 4) { ?>data-sal="slide-left" data-sal-duration="1500"<?php }
                             elseif ($counter == 2) { ?>data-sal="slide-down" data-sal-duration="1500"<?php }
                             elseif ($counter == 3) { ?>data-sal="slide-up" data-sal-duration="1500"<?php }?>>
                            <div class="item__title"><?php the_sub_field( 'cards-title' ); ?></div>
                            <div class="item__description"><?php the_sub_field( 'cards-description' ); ?></div>
                            <div class="item__icon">
                                <img src="<?php the_sub_field( 'cards-icon' ); ?>" />
                            </div>
                        </div>
                    <?php $counter++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="home-page__projects" id="projects">
        <div class="projects__container container">
            <div class="container__title">
                <div class="title__name">Проекты<br>федерации</div>
                <div class="title__more"><?php the_field( 'projects-title' ); ?></div>
            </div>
            <div class="container__content paralaxCard">
                <?php if ( have_rows( 'projects-project' ) ) : ?>
                    <?php while ( have_rows( 'projects-project' ) ) : the_row(); ?>
                        <div class="content__item itemProject">
                            <div class="item__image">
                                <img src="<?php the_sub_field( 'project-image' ); ?>" />
                            </div>
                            <div class="item__info">
                                <div class="info__title"><?php the_sub_field( 'project-title' ); ?></div>
                                <div class="info__description"><?php the_sub_field( 'project-description' ); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="home-page__news" id="news">
        <div class="news__container container">
            <div class="container__title">Вот, что о нас<br>говорят в СМИ</div>
            <div class="container__content">
                <div class="content__items">
                    <?php $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order'       => 'DESC',
                        'orderby'     => 'date',
                        'posts_per_page' => 4,
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        $counter = 1;
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <a class="items__item" href="<?php echo get_permalink(); ?>"
                               <?php if($counter == 1) { ?>data-sal="slide-right" data-sal-duration="1500"<?php }
                               elseif ($counter == 2) { ?>data-sal="slide-up" data-sal-duration="1500" data-sal-delay="350"<?php }
                               elseif ($counter == 3) { ?>data-sal="slide-up" data-sal-duration="1500" data-sal-delay="700"<?php }
                               elseif ($counter == 4) { ?>data-sal="slide-up" data-sal-duration="1500" data-sal-delay="1050" <?php }?>>
                                <div class="item__image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="item__info">
                                    <div class="info__date"><?php echo get_the_date();?></div>
                                    <div class="info__name"><?php the_title(); ?></div>
                                    <div class="info__description"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        <?php $counter++; endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <a class="content__button default-button" href="/news/">Все новости</a>
            </div>
        </div>
    </section>

    <section class="home-page__partners" id="partners" data-sal="slide-up" data-sal-duration="1500">
        <div class="partners__container container">
            <div class="container__title">Партнеры<br>федерации</div>
            <div class="container__items swiper swiper-partners">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'partners-cards' ) ) : ?>
                        <?php while ( have_rows( 'partners-cards' ) ) : the_row(); ?>
                            <a class="items__item swiper-slide" target="_blank" href="<?php the_sub_field( 'cards-link' ); ?>">
                                <img src="<?php the_sub_field( 'cards-image' ); ?>" />
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-navigation">
                    <div class="swiper-prev">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" transform="rotate(180 30 30)" fill="#EEF4FC"/>
                            <path d="M34 41L24 30.5L34 20" stroke="#279DD9" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="swiper-next">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" transform="matrix(-1 0 0 1 60 0)" fill="#EEF4FC"/>
                            <path d="M26 41L36 30.5L26 20" stroke="#279DD9" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-page__contacts" id="contacts">
        <div class="contacts__container container">
            <div class="container__contacts" data-sal="slide-right" data-sal-duration="1500">
                <div class="contacts__title">Контактная<br>информация</div>
                <div class="contacts__content">
                    <div class="content__infos">
                        <div class="infos__info">
                            <div class="info__title">Адрес</div>
                            <div class="info__content"><?php the_field( 'address', 'option' ); ?></div>
                        </div>
                        <div class="infos__info">
                            <div class="info__title">Телефон</div>
                            <a class="info__content click-content" href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>"><?php the_field( 'phone', 'option' ); ?></a>
                        </div>
                    </div>
                    <div class="content__socials">
                        <a class="socials__social" target="_blank" href="<?php the_field( 'vk', 'option' ); ?>">
                            <svg width="71" height="68" viewBox="0 0 71 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="71" height="68" rx="34" fill="black"/>
                                <path d="M37.2439 45.9001C23.9021 45.9001 16.2921 36.9662 15.975 22.1001H22.6581C22.8776 33.0114 27.8046 37.6332 31.7072 38.5862V22.1001H38.0001V31.5105C41.8538 31.1055 45.9027 26.8172 47.2686 22.1001H53.5615C53.0468 24.5465 52.0208 26.8629 50.5477 28.9043C49.0746 30.9458 47.1861 32.6684 45.0003 33.9644C47.4402 35.1485 49.5952 36.8246 51.3232 38.8821C53.0512 40.9395 54.3129 43.3314 55.025 45.9001H48.0979C47.4587 43.669 46.1595 41.6719 44.3632 40.1589C42.5669 38.6459 40.3534 37.6845 38.0001 37.395V45.9001H37.2439Z" fill="white"/>
                            </svg>
                        </a>
                        <a class="socials__social" target="_blank" href="<?php the_field( 'ok', 'option' ); ?>">
                            <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="68" height="68" rx="34" fill="black"/>
                                <path d="M44.604 38.7476C45.496 37.8556 45.6234 36.5812 44.8588 35.3069C44.2217 34.2874 43.0748 33.7777 41.8004 34.0326C41.2907 34.16 40.781 34.4149 40.2712 34.7972C36.3208 37.4733 30.9686 37.3458 27.0181 34.6697C26.7633 34.5423 26.5084 34.4149 26.2535 34.2874C24.8517 33.6503 23.45 33.9051 22.6854 35.1795C21.7933 36.4538 21.9208 37.8556 23.0677 39.0025C23.3225 39.2574 23.5774 39.3848 23.7048 39.6397L23.8323 39.7671C25.6163 41.1689 27.7827 42.0609 30.5863 42.4432L28.9296 44.0998C27.5279 45.5016 25.9987 47.0308 24.5969 48.4326C24.2146 48.8149 23.7048 49.4521 23.7048 50.3441C23.7048 51.491 24.342 52.6379 25.4889 53.1476C25.8712 53.4025 26.2535 53.4025 26.6358 53.4025C27.273 53.4025 28.0376 53.1476 28.5473 52.5105C30.4588 50.599 31.988 49.0698 33.5172 47.5406C33.6447 47.4131 33.6447 47.4131 33.6447 47.4131C33.6447 47.4131 33.7721 47.4131 33.7721 47.5406C34.7916 48.6875 35.9385 49.7069 36.958 50.8538C37.4677 51.3636 37.9774 51.8733 38.4872 52.383C39.1243 53.0202 39.6341 53.2751 40.3987 53.2751C41.5456 53.4025 42.8199 52.6379 43.3296 51.491C43.8394 50.4715 43.5845 49.1972 42.6925 48.4326C41.4181 47.1582 40.1438 45.7565 38.742 44.4821L36.5756 42.3158C37.7226 42.1883 38.9969 41.9335 40.1438 41.4237C42.0553 40.7866 43.4571 39.8945 44.604 38.7476Z" fill="white"/>
                                <path d="M33.6447 35.1795C39.1243 35.1795 43.5845 30.8467 43.5845 25.3671C43.5845 22.691 42.565 20.1423 40.6535 18.2308C38.742 16.3193 36.3208 15.2998 33.7721 15.2998C28.2925 15.2998 23.9597 19.76 23.8323 25.1122C23.8323 27.7883 24.8517 30.2095 26.7633 32.121C28.5473 34.16 30.9686 35.1795 33.6447 35.1795ZM30.8411 22.4361C31.6057 21.6715 32.6252 21.2892 33.6447 21.2892C35.9385 21.2892 37.5951 23.0733 37.5951 25.2396C37.5951 27.5334 35.811 29.1901 33.6447 29.1901C31.3509 29.1901 29.6942 27.406 29.6942 25.2396C29.6942 24.2202 30.0765 23.2007 30.8411 22.4361Z" fill="white"/>
                                <path d="M44.604 38.7476C45.496 37.8556 45.6234 36.5812 44.8588 35.3069C44.2217 34.2874 43.0748 33.7777 41.8004 34.0326C41.2907 34.16 40.781 34.4149 40.2712 34.7972C36.3208 37.4733 30.9686 37.3458 27.0181 34.6697C26.7633 34.5423 26.5084 34.4149 26.2535 34.2874C24.8517 33.6503 23.45 33.9051 22.6854 35.1795C21.7933 36.4538 21.9208 37.8556 23.0677 39.0025C23.3225 39.2574 23.5774 39.3848 23.7048 39.6397L23.8323 39.7671C25.6163 41.1689 27.7827 42.0609 30.5863 42.4432L28.9296 44.0998C27.5279 45.5016 25.9987 47.0308 24.5969 48.4326C24.2146 48.8149 23.7048 49.4521 23.7048 50.3441C23.7048 51.491 24.342 52.6379 25.4889 53.1476C25.8712 53.4025 26.2535 53.4025 26.6358 53.4025C27.273 53.4025 28.0376 53.1476 28.5473 52.5105C30.4588 50.599 31.988 49.0698 33.5172 47.5406C33.6447 47.4131 33.6447 47.4131 33.6447 47.4131C33.6447 47.4131 33.7721 47.4131 33.7721 47.5406C34.7916 48.6875 35.9385 49.7069 36.958 50.8538C37.4677 51.3636 37.9774 51.8733 38.4872 52.383C39.1243 53.0202 39.6341 53.2751 40.3987 53.2751C41.5456 53.4025 42.8199 52.6379 43.3296 51.491C43.8394 50.4715 43.5845 49.1972 42.6925 48.4326C41.4181 47.1582 40.1438 45.7565 38.742 44.4821L36.5756 42.3158C37.7226 42.1883 38.9969 41.9335 40.1438 41.4237C42.0553 40.7866 43.4571 39.8945 44.604 38.7476Z" fill="white"/>
                            </svg>
                        </a>
                        <a class="socials__social" target="_blank" href="<?php the_field( 'tg', 'option' ); ?>">
                            <svg width="69" height="68" viewBox="0 0 69 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="69" height="68" rx="34" fill="black"/>
                                <path d="M48.3 21.4237L43.1157 48.0968C43.1157 48.0968 42.3903 49.9461 40.3976 49.0592L28.4359 39.6993L28.3804 39.6717C29.9962 38.1911 42.5254 26.6944 43.073 26.1733C43.9207 25.3662 43.3944 24.8857 42.4102 25.4954L23.903 37.49L16.763 35.0382C16.763 35.0382 15.6393 34.6303 15.5312 33.7434C15.4217 32.855 16.7999 32.3745 16.7999 32.3745L45.9077 20.7211C45.9077 20.7211 48.3 19.6484 48.3 21.4237Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container__reverse forms" data-sal="slide-left" data-sal-duration="1500">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Обратная связь"]')?>
            </div>
        </div>
        <div class="contacts__reserve forms">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Обратная связь"]')?>
        </div>
    </section>

<?php
get_footer();
?>
