<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  $advant_list = array(
    'id'          => 'advant',
    'title'       => 'Список Преимуществ',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'лист Преимуществ',
        'id'          => 'advant_list_item',
        'type'        => 'list-item',
        'desc'		  => '',
        'std'		  => '',
        'condition'		  => '',
        'settings'		  => array(
                array(
                    'label'          => 'Преимущество',
                    'id'             => 'advant_list_title',
                    'type'           => 'text',
                    'desc'           => ''
                ),
        		array(
        			'label'      	 => 'Краткий текст описывающий это преимущество',
			        'id'         	 => 'advant_list_desc',
			        'type'       	 => 'textarea',
			        'desc'       	 => ''
        		),
        		array(
        			'id'				=> 'advant_list_image',
        			'label'				=> 'Изображение символизирующие это преимущество',
        			'desc'				=> '',
        			'type'				=> 'upload'
        		)
        	)
    	)
      )
  );
  
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $advant_list );
}