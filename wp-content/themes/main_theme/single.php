<?php
get_header();
?>

    <section class="default-page__default">
        <div class="default__container container-default">
            <div class="container__title"><?php the_title();?></div>
            <div class="container__content"><?php the_content();?></div>
        </div>
    </section>

<?php
get_footer();
?>