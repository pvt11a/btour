<?php 
add_action('admin_menu', 'pvt_menu_page');

function pvt_menu_page() {
    add_theme_page('Pvt Theme Option', 'Google Asense', 'manage_options', 'pvt-theme-option', 'pvt_setting_page');
}
add_action('admin_init','pvt_register_setting');

function pvt_register_setting() {
    register_setting('pvt-group','pvt-ga');
}
function pvt_setting_page() { ?>
    <div class="wrap">
        <?php screen_icon(); ?>
        <h2>Tùy chỉnh theme</h2>
        <form id="pvt_setting" method="post" action="options.php">
        <?php settings_fields('pvt-group'); ?>
            <h3>Code Asense</h3>
            <textarea style="height: 200px; width: 400px;" name="pvt-ga"><?php echo get_option('pvt-ga'); ?></textarea>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }
?>