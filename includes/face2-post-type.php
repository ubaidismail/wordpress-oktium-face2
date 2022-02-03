<?php

function wof_create_post_type(){
    $label = [
        'name'          => 'Face2 Buttons',
        'singular_name' => 'Face2 Button',
        'all_items'           => __( 'All Button', 'twentytwenty' ),
        'view_item'           => __( 'View Button', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Button', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Button', 'twentytwenty' ),
        'update_item'         => __( 'Update Button', 'twentytwenty' ),
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

add_filter( 'rwmb_meta_boxes', 'ldvr_register_meta_boxes' );

function ldvr_register_meta_boxes( $meta_boxes ) {

    
      
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
                'name'    => esc_html__( 'Button Type', 'online-generator' ),
                'id'      => $prefix . 'button_type',
                'desc' => esc_html__( '', 'online-generator' ),
                'options' => [
                    'non-float'       => esc_html__( 'Product Detail', 'online-generator' ),
                    'float' => esc_html__( 'Floating', 'online-generator' ),
                ],
            ],

            [
                'type'    => 'select',
                'name'    => esc_html__( 'Button Position', 'online-generator' ),
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
                'std'  => 'Start video-call',
            ],
            [
                'type' => 'color',
                'name' => esc_html__( 'Button Color', 'online-generator' ),
                'id'   => $prefix . 'button_color',
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
                'name'    => esc_html__( 'Return Url', 'online-generator' ),
                'id'      => $prefix . 'return_url',
                'desc'    => esc_html__( 'Retur to page after call', 'online-generator' ),
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
                'type' => 'text',
                'name' => esc_html__( 'Product Name', 'online-generator' ),
                'id'   => $prefix . 'product_name',
                'desc' => esc_html__( 'Insert your Product Name,' ),
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Meta', 'online-generator' ),
                'id'   => $prefix . 'meta',
                'desc' => esc_html__( 'Insert parameters you want to collect | Javascript object', 'online-generator' ),
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
                $get_btn_type = rwmb_meta( 'button_type' , [] , $current_id);
                if ( get_the_title( $face2btn ) == get_the_title( $current_id && $get_btn_type !== 'non-float' ) ) {
                    echo "<code>[face2Button id='". esc_attr($current_id) ."']</code>";
                }
            }
        }
    }
}

// creating shortcode

add_shortcode('face2Button' , 'wof_create_button_shortcode');
function wof_create_button_shortcode($atts){

    $attrs = shortcode_atts( array(
        'id' => 0,
    ), $atts );

    wp_enqueue_script('OktiumButton' , 'https://cdn.oktium.com/face2widget-latest.min.js' , [] , false, true);

    $get_content_query = new WP_Query( array(
        'post_type' => 'face2buttons',
        'p' => $attrs['id'],
    ) );
    
    if (count($get_content_query->posts) < 1) {
        return '';
    }
    
    $post = $get_content_query->posts[0];
    $post_id = $post->ID;
    $get_btn_type = rwmb_meta( 'button_type' , [] , $post->ID);
    
    if($get_btn_type === 'non-float') {
        echo '<a id="face2Button-'.esc_attr($post_id).'"></a>';
    }

    $face2key_exist = get_option('face2_option_face2Key');
    $product_name = rwmb_meta( 'product_name' , [] , esc_html($post_id));
    $tooltip = rwmb_meta( 'tooltip' , [] , esc_html($post_id));
    $text_tooltip = rwmb_meta( 'tooltip_text' , [] , esc_html($post_id));
    $corner_round = rwmb_meta( 'corner_rounding' , [] , esc_html($post_id));
    $hide_offline =  rwmb_meta( 'hide_offline' , [] , esc_html($post_id));
    $face2 =  rwmb_meta( 'face2_key' , [] , $post_id)? : esc_html($face2key_exist);
    $offline_mobile =  rwmb_meta( 'hide_offline_mobile' , [] , esc_html($post_id));
    $return_url = rwmb_meta( 'return_url' , [] , esc_html($post_id));
    $meta = rwmb_meta( 'meta' , [] , esc_html($post_id));

    ob_start();
    ?>
        <script type="text/javascript">
            window.addEventListener('load', function() {
                if (!window.Oktium) return;

                new window.Oktium({
                    
                    face2Key: "<?php if($hide_offline == "false" && $offline_mobile == "false"){echo $face2;} ?>",
                    
                    productName: "<?php echo $product_name; ?>",

                    tooltip: "<?php echo ($tooltip == "true")? $tooltip : '' ?>",

                    tooltipText: "<?php  echo ($tooltip == "true")? $text_tooltip : ''; ?>",
                    
                    cornerRounding: <?php echo ($corner_round == 'true') ? 'true' : 'false'; ?>,
                    
                    dc: "<?php echo rwmb_meta( 'dc' , [] , esc_html($post_id)); ?>",
                    
                    position: "<?php echo $get_btn_type === 'non-float' ? '' : rwmb_meta( 'position', [] , esc_html($post_id)); ?>",
                    
                    hideOfflineMobile: <?php echo ($offline_mobile == "false")? $offline_mobile : true; ?>,
                    
                    hideOffline: <?php if($hide_offline == "false"){echo $hide_offline;} ?>,
                    
                    bgColor: "<?php echo rwmb_meta( 'button_color' , [] , esc_html($post_id)); ?>",
                    
                    returnUrl: "<?php echo ($return_url == "true")? $return_url : ''  ?>",
                    
                    meta: <?php json_decode($meta); echo (json_last_error() === JSON_ERROR_NONE) ? $meta : '""';  ?>,
                    
                    target: "face2Button-<?php echo esc_attr($post_id); ?>",
                }).init();
            }, false);
        </script>
    <?php
    return ob_get_clean();
}

// enqueue content in footer
add_action( 'wp_head' , 'wof_redner_btn', 999 );
function wof_redner_btn($atts){

    $get_content_query = new WP_Query( array(
        'post_type' => 'face2buttons',
    ) );

    foreach ( $get_content_query->posts as $post ) {
        $get_btn_type = rwmb_meta( 'button_type' , [] , $post->ID);
        if($get_btn_type === 'float'){
            echo wof_create_button_shortcode(['id' => $post->ID]);
        }
    }
}

function ldvr_admin_enqueue() {
	// Only add to the edit.php admin page.
	// See WP docs.

	wp_enqueue_script('ldvr-custom-admin-js', plugin_dir_url( __DIR__) . 'public/js/custom-admin.js' , array('jquery'), false, true);
}
add_action('admin_enqueue_scripts', 'ldvr_admin_enqueue');

add_action("admin_init", "ldvr_btn_shortcode_on_post_eddit_screen");
   
function ldvr_btn_shortcode_on_post_eddit_screen(){
    add_meta_box("side_shortcode", "Button Shortcode", "ldvr_display_side_shortcode", "face2buttons", "side", "high");
}
function ldvr_display_side_shortcode(){
    $cure_id = get_the_ID();
    $get_btn_type = rwmb_meta( 'button_type' , [] , $cure_id);
    if($get_btn_type == 'float'){
        return;
    }
     echo "<code>[face2Button id='". esc_attr($cure_id) ."']</code>";
}

// add_filter( 'rwmb_outside_conditions', function( $conditions ) {
//     $conditions= array(
//         'hidden' => ['button_type', '==', 'non-float' ],
//     );
//     return $conditions;
// } );