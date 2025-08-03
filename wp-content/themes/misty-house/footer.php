<?php
/**
 * The template for displaying the footer
 *
 * @package Misty_House
 */
?>

<footer class="misty-footer" style="<?php
    // Get the footer background image URL from customizer; fallback to a default image or black background.
    $footer_bg_image_url = get_theme_mod('misty_house_footer_bg_image', get_template_directory_uri() . '/assets/images/Group.png');
    if ( ! empty( $footer_bg_image_url ) ) {
        echo 'background-image: url(' . esc_url( $footer_bg_image_url ) . '); background-size: cover; background-position: center;';
    } else {
        echo 'background-color: #000;';
    }
?>">


    <div class="footer-content">
        <div class="footer-columns">
            <!-- Left column -->
            <div class="footer-column footer-column--left">
                <h4><?php echo esc_html( get_theme_mod( 'misty_house_footer_col1_title', __( 'MistyHouse', 'misty-house' ) ) ); ?></h4>
                <ul>
                    <li>
                        <a href="<?php echo esc_url( get_theme_mod( 'misty_house_footer_col1_link1_url', home_url('/') ) ); ?>"><?php echo esc_html( get_theme_mod( 'misty_house_footer_col1_link1_text', __( 'Domov', 'misty-house' ) ) ); ?></a>
                    </li>
                </ul>
            </div>

            <!-- Center column -->
            <div class="footer-column footer-column--center">
                <p class="footer-copyright-text">
                    <?php
                    $copyright = get_theme_mod(
                        'misty_house_footer_copyright_text',
                        sprintf( '&copy; %1$s %2$s', date( 'Y' ), __( 'Všetky práva vyhradené spoločnosťou MistyHouse', 'misty-house' ) )
                    );
                    echo wp_kses_post( $copyright );
                    ?>
                </p>
                <p><?php echo wp_kses_post( get_theme_mod( 'misty_house_footer_col2_paragraph', __( 'Posledný okruh pekla je rezervovaný pre ľudí, ktorí robia bordel na horách a pre tých, ktorí perú Misty tričká s inými.', 'misty-house' ) ) ); ?></p>
            </div>

            <!-- Right column -->
            <div class="footer-column footer-column--right">
                <h4><?php echo esc_html( get_theme_mod( 'misty_house_footer_col3_title', __( 'Podpora', 'misty-house' ) ) ); ?></h4>
                <ul>
                    <li>
                        <a href="<?php
                            $kontakt_page = get_page_by_path('kontakt');
                            echo esc_url( $kontakt_page ? get_permalink($kontakt_page->ID) : home_url('/kontakt/') );
                        ?>"><?php esc_html_e( 'Kontakt', 'misty-house' ); ?></a>
                    </li>
                    <li>
                        <a href="<?php
                            $gdpr_page = get_page_by_path('gdpr');
                            echo esc_url( $gdpr_page ? get_permalink($gdpr_page->ID) . '#gdpr' : home_url('/gdpr/') );
                        ?>"><?php esc_html_e( 'GDPR', 'misty-house' ); ?></a>
                    </li>
                    <li>
                        <a href="<?php
                            $gdpr_page = get_page_by_path('gdpr');
                            echo esc_url( $gdpr_page ? get_permalink($gdpr_page->ID) . '#vratenie' : home_url('/gdpr/') );
                        ?>"><?php esc_html_e( 'Vrátenie tovaru', 'misty-house' ); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
