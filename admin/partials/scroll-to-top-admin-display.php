<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://profiles.wordpress.org/rahulthalwal/
 * @since      1.0.0
 *
 * @package    scroll_To_Top
 * @subpackage scroll_To_Top/admin/partials
 */
?>

<form method="post" action="options.php">
    <?php
settings_fields('scroll_to_top_settings_group');
do_settings_sections('scroll_to_top_settings_group');
?>


    <!-- This file should primarily consist of HTML with a little bit of PHP. -->
    <div class="scroll-settings-wrapper">
        <h1>Scroll to Top Settings</h1>
        <hr>

        <!-- Toggle Setting -->
        <div class="setting-row">
            <label for="scroll_toggle" class="label-text">Enable Scroll to Top:</label>
            <label class="switch">
                <input type="checkbox" name="scroll_to_top_enabled" value="1"
                    <?php checked(1, get_option('scroll_to_top_enabled'), true);?>>
                <span class="slider round"></span>
            </label>
        </div>

        <!-- Icon Selection -->
        <div class="icon-row">
            <label class="section-title">Choose the Icon:</label>
            <div class="icon-options">
                <label class="icon-option">
                    <input type="radio" name="scroll_to_top_icon" value="dashicons-arrow-up-alt"
                        <?php checked(get_option('scroll_to_top_icon'),'dashicons-arrow-up-alt'); ?>>
                    <span class="dashicons dashicons-arrow-up-alt"></span>
                </label>

                <label class="icon-option">
                    <input type="radio" name="scroll_to_top_icon" value="dashicons-arrow-up-alt2"
                        <?php checked(get_option('scroll_to_top_icon'), 'dashicons-arrow-up-alt2'); ?>>
                    <span class="dashicons dashicons-arrow-up-alt2"></span>
                </label>

                <label class="icon-option">
                    <input type="radio" name="scroll_to_top_icon" value="dashicons-arrow-up"
                        <?php checked(get_option('scroll_to_top_icon'), 'dashicons-arrow-up'); ?>>
                    <span class="dashicons dashicons-arrow-up"></span>
                </label>
            </div>
        </div>

        <!-- Position Selection -->
        <div class="position-section">
            <label for="icon_position" class="section-title">Choose the icon position on screen:</label>
            <select name="scroll_to_top_position" id="icon_position">
                <option value="right" <?php selected(get_option('scroll_to_top_position'), 'right');?>>Right Bottom Side
                </option>
                <option value="left" <?php selected(get_option('scroll_to_top_position'), 'left');?>>Left Bottom Side
                </option>
            </select>
        </div>

        <!-- Save Button -->
        <div class="save-section">
            <button type="submit">Save Settings</button>
        </div>
    </div>
</form>