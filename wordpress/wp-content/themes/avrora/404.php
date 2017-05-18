<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Avrora
 */

get_header(); ?>

    <section class="content inside error404 no-results not-found">
        <div class="wrap">
            <h1><?php _e( 'Не найдено', 'avrora' ); ?></h1>
            <p><?php _e( 'Извините, но по Вашему запросу ничего не было найдено.', 'avrora' ); ?></p>
        </div>
    </section>

<?php get_footer(); ?>