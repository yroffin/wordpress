<?php
/**
 * Copyright 2015 yannick.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
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
