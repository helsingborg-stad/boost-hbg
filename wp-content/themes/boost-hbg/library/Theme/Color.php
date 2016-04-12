<?php

namespace Dunkers\Theme;

class Color
{
    public function __construct()
    {
        // Enqueue scripts and styles
        add_filter('language_attributes', array($this, 'addBodyClass'));
        add_action('admin_init', array($this, 'registerMetaBox'));
    }

    /**
     * Register backend meta box
     * @return void
     */
    public function registerMetaBox()
    {
        if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'group_570bbce9831c2',
            'title' => 'Färgschema',
            'fields' => array(
                array(
                    'key' => 'field_570bbcef7e149',
                    'label' => 'Välj färg',
                    'name' => 'color_section',
                    'type' => 'select',
                    'instructions' => 'Ange den färg som sidan och undersidor ska ha. ',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => 100,
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'green' => 'Grön',
                        'yellow' => 'Gul',
                        'cerise' => 'Rosa',
                    ),
                    'default_value' => array(
                        0 => 0,
                    ),
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 1,
                    'ajax' => 0,
                    'placeholder' => '',
                    'disabled' => 0,
                    'readonly' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                    array(
                        'param' => 'page_parent',
                        'operator' => '==',
                        'value' => '0',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'side',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));

        endif;
    }

    /**
     * Add child theme class
     * @return string
     */
    public function addBodyClass($output, $doctype)
    {

        //Get color scheme
        if (is_numeric(get_the_id())) {
            $ancestor_posts = get_post_ancestors(get_the_id());

            if (!empty($ancestor_posts) && is_array($ancestor_posts)) {
                $color = get_post_meta(end($ancestor_posts), 'color_section', true);
            } else {
                $color = get_post_meta(get_the_id(), 'color_section', true);
            }
        }

        //Apply color scheme
        if (!is_null($color) && !empty($color)) {
            $output = $output . ' class="custom-color-'.$color.'"';
        } else {
            $output = $output . ' class="custom-color-green"';
        }

        return $output;
    }
}
