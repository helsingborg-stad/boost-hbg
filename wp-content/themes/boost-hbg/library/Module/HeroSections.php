<?php

namespace BoostHBG\Module;

class HeroSections extends \Modularity\Module
{
    /**
     * Module args
     * @var array
     */
    public $args = array(
        'id' => 'herosection',
        'nameSingular' => 'Hero Secions',
        'namePlural' => 'Hero Sections',
        'description' => 'Divides the hero into multiple selectable sections.',
        'supports' => array(),
        'icon' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MzMuNSIgaGVpZ2h0PSI0MzMuNSIgdmlld0JveD0iMCAwIDQzMy41IDQzMy41Ij48cGF0aCBkPSJNMCAzODIuNWg3Ni41VjUxSDB2MzMxLjV6TTM1NyA1MXYzMzEuNWg3Ni41VjUxSDM1N3pNMTAyIDM4Mi41aDIyOS41VjUxSDEwMnYzMzEuNXoiLz48L3N2Zz4='
    );

    public function __construct()
    {
        // This will register the module
        $this->register(
            $this->args['id'],
            $this->args['nameSingular'],
            $this->args['namePlural'],
            $this->args['description'],
            $this->args['supports'],
            $this->args['icon']
        );

        // Add our template folder as search path for templates
        add_filter('Modularity/Module/TemplatePath', function ($paths) {
            $paths[] = BOOST_PATH . 'templates/';
            return $paths;
        });

        $this->fields();
    }

    public function fields()
    {
        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array (
                'key' => 'group_57174524697b9',
                'title' => 'Hero sections',
                'fields' => array (
                    array (
                        'key' => 'field_5717452be77f3',
                        'label' => 'Sections',
                        'name' => 'herosec-section',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 1,
                        'max' => '',
                        'layout' => 'block',
                        'button_label' => 'Add Section',
                        'sub_fields' => array (
                            array (
                                'key' => 'field_57174586e77f6',
                                'label' => 'Icon SVG',
                                'name' => 'icon_svg',
                                'type' => 'file',
                                'instructions' => 'Only .svg files is supported',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array (
                                'key' => 'field_57174552e77f4',
                                'label' => 'Icon background',
                                'name' => 'icon_background',
                                'type' => 'color_picker',
                                'instructions' => '',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '50%',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '#000000',
                            ),
                            array (
                                'key' => 'field_57174573e77f5',
                                'label' => 'Icon foreground',
                                'name' => 'icon_foreground',
                                'type' => 'color_picker',
                                'instructions' => '',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => 50,
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '#FFFFFF',
                            ),
                            array (
                                'key' => 'field_571745ace77f7',
                                'label' => 'Title',
                                'name' => 'title',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => 50,
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                            array (
                                'key' => 'field_571745c9e77f8',
                                'label' => 'Link URL',
                                'name' => 'target_url',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => 50,
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'mod-herosection',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
            ));

            endif;
    }
}
