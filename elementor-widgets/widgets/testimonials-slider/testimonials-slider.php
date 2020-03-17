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
class Elservice_Testimonials_Slider extends Widget_Base {

    /* Widget Name */
    public function get_name() {
        return 'Elservice_Testimonials_Slider';
    }

    /* Widget Title */
    public function get_title() {
        return esc_html__('Testimonials Slider', 'rehub-theme');
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


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'plugin-name' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ]
            ]
        );


        $repeater->add_control(
            'list_title', [
                'label' => __( 'Title', 'plugin-domain' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'List Title' , 'plugin-domain' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_content', [
                'label' => __( 'Content', 'plugin-domain' ),
                'type' => Controls_Manager::WYSIWYG,
                'default' => __( 'List Content' , 'plugin-domain' ),
                'show_label' => false,
            ]
        );



        $this->add_control(
            'list',
            [
                'label' => __( 'Repeater List', 'plugin-domain' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => __( 'Title #1', 'plugin-domain' ),
                        'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
                    ],
                    [
                        'list_title' => __( 'Title #2', 'plugin-domain' ),
                        'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
                    ],
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    /* Widget output Rendering */
    protected function render() {
        $settings = $this->get_settings_for_display();


        ?>
        <div id="testimonials" class="testimonials-section">
        <?php if ( $settings['list'] ) :?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-center m-auto">
                        <div class="cascade-slider_container" id="cascade-slider">
                            <div class="cascade-slider_slides">
            <?php foreach (  $settings['list'] as $index => $item ):?>
                                <div class="cascade-slider_item">
                                   <img src="<?php echo $item['image']['url'] ;?>" alt="<?php echo esc_attr($item['list_title']);?>">
                                    <h3><?php echo esc_attr($item['list_title']);?></h3>
                                    <p><?php echo $item['list_content'];?></p>
                                </div>
            <?php endforeach;?>
                            </div>

                            <ol class="cascade-slider_nav">
                                <?php for ($i = 0; count($settings['list']) > $i; $i++) :?>
                                <li class="cascade-slider_dot <?php echo ($i == 0) ? "cur" : " "; ?>"></li>

                                <?php endfor;?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>
        </div>
        <?php
    }

}

