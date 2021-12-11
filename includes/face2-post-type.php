<?php

function wof_create_post_type(){
    $label = [
        'name'          => 'Face2 Buttons',
        'singular_name' => 'Face2 Button',
    ];

    $args = [
        'labels'      => $label,
        'supports'    => ['title', '', '', '', '', ''],
        'rewrite'     => [
            'slug'       => 'face2buttons',
            'with_front' => false,
            'feeds'      => true,
            'pages'      => true,
        ],
        'public'            => true,
        'show_ui'           => true,
        'menu_position'     => 20,
        'capability_type'   => 'page',
        'map_meta_cap'      => true,
        'has_archive'       => true,
        'query_var'         => 'face2buttons',
        'show_in_rest'      => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-button',

    ];
    register_post_type( 'face2buttons', $args );
}
add_action( 'init', 'wof_create_post_type' );
///
add_filter( 'rwmb_meta_boxes', 'wof_register_meta_boxes' );

function wof_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Face2 Fields', 'online-generator' ),
        'id'      => 'untitled',
        'post_types' => 'face2buttons',
        'context' => 'normal',
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Face2 Key	', 'online-generator' ),
                'id'   => $prefix . 'face2_key',
                'desc' => esc_html__( 'Insert your Face2 key, which you received with the Wordpress plugin', 'online-generator' ),
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Tooltip', 'online-generator' ),
                'id'      => $prefix . 'tooltip',
                'desc'    => esc_html__( 'Enable/disable Face2 button text', 'online-generator' ),
                'options' => [
                    'true'  => esc_html__( 'True', 'online-generator' ),
                    'false' => esc_html__( 'False', 'online-generator' ),
                ],
                'std'     => 'true',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Tooltip Text', 'online-generator' ),
                'id'   => $prefix . 'tooltip_text',
                'desc' => esc_html__( 'Text for your Face2 button', 'online-generator' ),
                'std'  => 'Start a Video Call',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Corner Rounding', 'online-generator' ),
                'id'      => $prefix . 'corner_rounding',
                'desc'    => esc_html__( 'The design of the Face2 button', 'online-generator' ),
                'options' => [
                    'true'  => esc_html__( 'True', 'online-generator' ),
                    'false' => esc_html__( 'False', 'online-generator' ),
                ],
                'std'     => 'true',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'DC', 'online-generator' ),
                'id'      => $prefix . 'dc',
                'desc'    => esc_html__( 'Enable/disable the Direct call feature', 'online-generator' ),
                'options' => [
                    'true'  => esc_html__( 'True', 'online-generator' ),
                    'false' => esc_html__( 'False', 'online-generator' ),
                ],
                'std'     => 'true',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Mobile Size', 'online-generator' ),
                'id'      => $prefix . 'mobile_size',
                'desc'    => esc_html__( 'Size of the Face2 button in mobile devices', 'online-generator' ),
                'options' => [
                    'small'  => esc_html__( 'Small', 'online-generator' ),
                    'medium' => esc_html__( 'Medium', 'online-generator' ),
                    'large'  => esc_html__( 'Large', 'online-generator' ),
                ],
                'std'     => 'medium',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Position', 'online-generator' ),
                'id'      => $prefix . 'position',
                'desc'    => esc_html__( 'Position of the Face2 button on your website', 'online-generator' ),
                'options' => [
                    'right' => esc_html__( 'Right', 'online-generator' ),
                    'left'  => esc_html__( 'Left', 'online-generator' ),
                ],
                'std'     => 'right',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Hide Offline Mobile', 'online-generator' ),
                'id'      => $prefix . 'hide_offline_mobile',
                'desc'    => esc_html__( 'Hide the Face2 button on mobile devices, while not available', 'online-generator' ),
                'options' => [
                    'true'  => esc_html__( 'True', 'online-generator' ),
                    'false' => esc_html__( 'False', 'online-generator' ),
                ],
                'std'     => 'false',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Hide Offline', 'online-generator' ),
                'id'      => $prefix . 'hide_offline',
                'desc'    => esc_html__( 'Hide the Face2 button on web, while not available', 'online-generator' ),
                'options' => [
                    'true'  => esc_html__( 'True', 'online-generator' ),
                    'false' => esc_html__( 'False', 'online-generator' ),
                ],
                'std'     => 'false',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Return Url', 'online-generator' ),
                'id'      => $prefix . 'return_url',
                // 'desc'    => esc_html__( 'Hide the Face2 button on web, while not available', 'online-generator' ),
                'options' => [
                    'true'  => esc_html__( 'True', 'online-generator' ),
                    'false' => esc_html__( 'False', 'online-generator' ),
                ],
                'std'     => 'false',
            ],
            [
                'type'    => 'select',
                'name'    => esc_html__( 'Button Type', 'online-generator' ),
                'id'      => $prefix . 'button_type',
                'options' => [
                    'float' => esc_html__( 'Floating button', 'online-generator' ),
                    'non-float'       => esc_html__( 'Non-floating button', 'online-generator' ),
                ],
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'Button color', 'online-generator' ),
                'id'   => $prefix . 'button_color',
            ],
        ],
    ];

    return $meta_boxes;
}

// Add the custom columns to the face2_post_type post type:
add_filter( 'manage_face2buttons_posts_columns', 'set_custom_edit_face2buttons_columns' );
function set_custom_edit_face2buttons_columns($columns) {
    unset( $columns['author'] );
    $columns['shortcode'] = __( 'Shortcode',  );
    return $columns;
}

add_action( 'manage_face2buttons_posts_custom_column', 'ldvr_table_content', 10, 2 );

function ldvr_table_content( $column_name, $post_id ) {
    // var_dump($column_name);
    if( $column_name == 'shortcode' ) 
    {
        $face_query = new WP_Query( array(
            'post_type' => 'face2buttons',
            'posts_per_page' => -1,
            'fields' => 'ids',
        ) );

            global $post;
        if ( $face_query->have_posts() ) {
                 
            foreach( $face_query->posts as $face2btn ) {
                $current_id = $post->ID;
                if ( get_the_title( $face2btn ) == get_the_title( $current_id ) ) {
                    echo "<code>[face2Button id=". $current_id ."]</code>";
                }         
    
            }
        }
    }
}


// creating shortcode

add_shortcode('face2Button' , 'wof_create_button_shortcode');
function wof_create_button_shortcode($atts){

    wp_enqueue_script('OktiumButton-js' , 'https://cdn.oktium.com/face2widget-latest.min.js' , [] , false, true);
    
    $get_content_query = new WP_Query( array(
        'post_type' => 'face2buttons',
        ) );

        global $post;

        if ( $get_content_query->have_posts() ) {
           $get_content_query->the_post();
            // return the_title();
            $post_id = $post->ID;    
        }

        $a = shortcode_atts( array(
            'id' => $post_id,
            
        ), $atts );

        $face2key_exist = get_option('face2_option_face2Key');
     
        ob_start();
        ?>
        
        <a id="face2Button-<?php echo $post_id; ?>"></a>
        
        <script type="text/javascript">
            (function() {
                new window.Oktium({
                    face2Key: "<?php echo (rwmb_meta( 'face2_key' , [] , $post_id))? : $face2key_exist; ?>",
                    tooltip: "<?php echo rwmb_meta( 'tooltip' , [] , $post_id); ?>",
                    tooltipText: "<?php echo rwmb_meta( 'tooltip_text' , [] , $post_id); ?>",
                    cornerRounding: "<?php echo rwmb_meta( 'corner_rounding' , [] , $post_id); ?>",
                    dc: "<?php echo rwmb_meta( 'dc' , [] , $post_id); ?>",
                    mobileSize: "<?php echo rwmb_meta( 'mobile_size' , [] , $post_id); ?>",
                    position: "<?php echo rwmb_meta( 'position', [] , $post_id); ?>",
                    hideOfflineMobile: "<?php echo rwmb_meta( 'hide_offline_mobile' , [] , $post_id); ?>",
                    hideOffline: "<?php echo rwmb_meta( 'hide_offline' , [] , $post_id); ?>",
                    buttonType: "<?php echo rwmb_meta( 'button_type' , [] , $post_id); ?>",
                    bgColor: "<?php echo rwmb_meta( 'button_color' , [] , $post_id); ?>",
                    returnUrl: "<?php echo rwmb_meta( 'return_url' , [] , $post_id); ?>",
                    target: "face2Button-<?php echo $post_id; ?>",
                }).init();
            })();
        </script>
    <?php
    return ob_get_clean();
}

// enqueue content in footer
add_action( 'wp_footer' , 'wof_redner_btn');
function wof_redner_btn($atts){

    $get_content_query = new WP_Query( array(
        'post_type' => 'face2buttons',
        ) );
    
    global $post;

    if ( $get_content_query->have_posts() ) : 
        while ( $get_content_query->have_posts() ) {
            $get_content_query->the_post(); 
            $post_id =  $post->ID;
            $get_btn_type = rwmb_meta( 'button_type' , [] , $post_id);

            if($get_btn_type === 'float'){
                echo "<div>". do_shortcode( '[face2Button id='.$post_id.']' ) ."</div>";
            }
        }
    endif;
}
