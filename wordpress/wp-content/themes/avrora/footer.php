<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Avrora
 */
?>
<footer class="footer">
    <div class="bottom">
        <div class="wrap">
            <?php if (is_active_sidebar('footer')) {
                dynamic_sidebar('footer');
            } else {
                ?>
                <div class="box one">
                    <h4><?php _e( 'Виджеты футера', "avrora" ); ?></h4>
                    <p><?php _e( 'Замените этот текст, изменив его в панели администратора <span style="float: none">Внешний вид -> Виджеты</span> и перетащите виджеты в футер.', "avrora" ); ?></p>
                </div>
                <div class="box one">
                    <h4><?php _e( 'Страницы', "avrora" ); ?></h4>
                    <ul><?php wp_list_pages('title_li=&depth=1'); ?></ul>
                </div>
                <div class="box one">
                    <h4><?php _e( 'Недавние записи', "avrora" ); ?></h4>
                    <ul>
                        <?php wp_get_archives('type=postbypost&limit=7'); ?>
                    </ul>
                </div>
                <div class="box one">
                    <h4><?php _e( 'Облако тегов', "avrora" ); ?></h4>
                    <div class="tagcloud">
                        <?php wp_tag_cloud('number=10&'); ?>
                    </div>
                    <h4><?php _e( 'Рубрики', "avrora" ); ?></h4>
                    <ul>
                        <?php wp_list_categories('title_li=&number=5'); ?>
                    </ul>
                </div>
            <?php } ?>
            <p class="cred"><?php do_action('avrora_display_credits'); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>     