<?php

namespace ElementorElservice\Widgets;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
if ( ! defined( 'ABSPATH' ) ) {
    exit('Restricted Access');
} // Exit if accessed directly

/**
 * Info box Widget class.
 *
 * 'wpsm_box' shortcode
 *
 * @since 1.0.0
 */
class Elservice_Tabs_Widget extends Widget_Base {

    /* Widget Name */
    public function get_name() {
        return 'wpsm_TabsEvery';
    }

    /* Widget Title */
    public function get_title() {
        return esc_html__('Tabs for everything', 'rehub-theme');
    }

        /**
     * Get widget icon.
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-tabs';
    }

    public function get_keywords() {
        return [ 'tabs', 'accordion', 'toggle' ];
    }


    public function get_script_depends() {
        return [ 'elservice-tabs' ];
    }

    /**
     * category name in which this widget will be shown
     * @since 1.0.0
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'general' ];
    }
    protected function _register_controls() {
        $this->general_controls();
    }
    protected function general_controls() {
        $this->start_controls_section( 'general_section_2', [
            'label' => esc_html__( 'General', 'rehub-theme' ),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]);

        $this->add_control( 'tabdesc', [
            'type'      => Controls_Manager::RAW_HTML,
            'raw' => '<div style="background-color: #dcf0f3; padding:10px; line-height:16px">Place other widgets in the same section after tabs. In advanced options of widget, set custom class <br/><br/> <strong>tabs-item</strong><br/><br/> and also class <br/><br/> <strong>rhhidden</strong><br/><br/>to all widgets except first one.<br/><br /><a href="https://youtu.be/VyMtrC_-6NI" target="_blank"><i class="far fa-video"></i> Check video</a>',
            'label_block' => true,
            'dynamic'   => [
                'active'=> true,
            ],
        ]);

        $repeater = new \Elementor\Repeater();

            $repeater->add_control( 'title', [
                'label' => esc_html__( 'Tab title', 'rehub-theme' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Tab title',
                'label_block' => true,
            ]);

            $repeater->add_control( 'bgcolor', [
                'label' => esc_html__( 'Set background color', 'rehub-theme' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-color: {{VALUE}}',
                ],
            ]);  

            $repeater->add_control( 'color', [
                'label' => esc_html__( 'Set text color', 'rehub-theme' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}',
                ],
            ]);                       

        $this->add_control( 'TabsEvery', [
            'label'    => esc_html__( 'TabsEvery', 'rehub-theme' ),
            'type'     => Controls_Manager::REPEATER,
            'fields'   => $repeater->get_controls(),
            'title_field' => '{{{ title }}}',
        ]);



        $this->add_control( 'activecolor', [
            'label' => esc_html__( 'Set text color for active tab', 'rehub-theme' ),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tabs-menu li.current' => 'color: {{VALUE}}',
            ],
        ]);

        $this->end_controls_section();
    }

    /* Widget output Rendering */
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="el-tabs">
            <ul class="nav nav-tabs">
                <?php if ( $settings['TabsEvery'] ) :?>
                    <?php foreach (  $settings['TabsEvery'] as $index => $item ):?>
                        <?php 
                            $tab_content_setting_key = $this->get_repeater_setting_key( 'active', 'TabsEvery', $index );
                        ?>
                        <li class="nav-item nav-item-<?php echo esc_attr($item['_id']);?><?php if ($index == 0):?> active<?php endif;?>">
                            <span class="nav-link"><?php echo esc_attr($item['title']);?><span>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
        <?php
    }


}

//Plugin::instance()->widgets_manager->register_widget_type( new WPSM_TabsEvery_Widget );