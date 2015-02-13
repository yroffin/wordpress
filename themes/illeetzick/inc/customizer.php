<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function template_customize_register($wp_customize) {
    /**
     * categories builder
     */
    $categories = get_categories();
    $cats = array();
    $i = 0;
    foreach ($categories as $category) {
        if ($i == 0) {
            $default = $category->slug;
            $i++;
        }
        $cats[$category->cat_ID] = $category->name;
    }

    /**
     * Carousel
     * @settings illeetzick_settings_carousel['category'] category to browse
     */
    $wp_customize->add_section('illeetzick_section_carousel', array(
        'title' => __('Carousel', 'illeetzick'),
        'description' => 'Carousel settings',
        'priority' => 120,
    ));

    $wp_customize->add_setting('illeetzick_set_carousel', array(
        'default' => ''
    ));

    $wp_customize->add_setting('illeetzick_url_carousel', array(
        'default' => ''
    ));

    $wp_customize->add_control('illeetzick_ctrl_carousel', array(
        'settings' => 'illeetzick_set_carousel',
        'label' => 'Select category for browsing:',
        'section' => 'illeetzick_section_carousel',
        'type' => 'select',
        'choices' => $cats,
    ));

     $wp_customize->add_control('illeetzick_ctrl_carousel_url', array(
        'label'      => 'Select url:',
        'section'    => 'illeetzick_section_carousel',
        'settings'   => 'illeetzick_url_carousel',
    ));
}

add_action('customize_register', 'template_customize_register');
