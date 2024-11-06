<?php


/**
 * Plugin Name: Custom Slider Redirect
 *
 * Description: A plugin to redirect to post pages on slider click.
 *
 * Version: 1.0.0
 *
 * Author: hassan Ali Askari
 * Author URI: https://t.me/hassan7303
 * Plugin URI: https://github.com/hassan7303
 *
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 *
 * Email: hassanali7303@gmail.com
 * Domain Path: https://hsnali.ir
 */


if (!defined('ABSPATH')) {
    exit;
}



function slider_click_redirect_script() {
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('rs-slide').forEach(slide => {
                slide.addEventListener('click', function () {
                    const postId = slide.getAttribute('data-key').replace('rs-', '');
                    const postUrl = `/?p=${postId}`; // آدرس دهی بر اساس ساختار پیوند یکتا
                    window.location.href = postUrl;
                });
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'slider_click_redirect_script');