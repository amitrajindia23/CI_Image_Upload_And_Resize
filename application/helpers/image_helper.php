<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Image helper
*/
// ------------------------------------------------------------------------

function image_thumb( $image_path,$image_file_name, $height, $width ) {
    // super object of CI
    $CI =& get_instance();

    // thumbnail image Path
    $image_thumb = dirname( $image_path ) . '/' . $height . '_' . $width .'_'. $image_file_name;

    if ( !file_exists( $image_thumb ) ) {
        // LOAD LIBRARY
        $CI->load->library( 'image_lib' );

        // CONFIGURE IMAGE LIBRARY
        $config['image_library']    = 'gd2';
        $config['source_image']     = $image_path;
        $config['new_image']        = $image_thumb;
        $config['maintain_ratio']   = TRUE;
        //$config['create_thumb']     = TRUE;
        $config['overwrite'] 		= false;
        $config['quality'] 			= "100%";
        $config['height']           = $height;
        $config['width']            = $width;
        $CI->image_lib->initialize( $config );
        $CI->image_lib->resize();
        $CI->image_lib->clear();
    }
    return $image_thumb;
}

/* End of file image_helper.php */
/* Location: ./application/helpers/image_helper.php */
