<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 11.10.2019
 * Time: 15:45
 */

//////////////////////////////////////////////////////////////////
// File System function
//////////////////////////////////////////////////////////////////
function elservice_filesystem( $method = 'get_contents', $file_path, $content = '' ){
    if( empty( $file_path ) )
        return;

    global $wp_filesystem;

    if( empty( $wp_filesystem ) ) {
        require_once ( ABSPATH . '/wp-admin/includes/file.php' );
        WP_Filesystem();
    }
    if( $method == 'get_contents' ){
        $result = $wp_filesystem->get_contents( $file_path );
        if( $result && !is_wp_error( $result ) ){
            return $result;
        }else{
            $result = 'file_get_' . $method($file_path);
            if($result) {
                return $result;
            }else{
                return;
            }
        }
    }elseif( $method == 'put_content' ){
        $result = $wp_filesystem->put_contents( $file_path, $content, FS_CHMOD_FILE );
        if( !is_wp_error( $result ) ){
            return true;
        }else{
            return;
        }
    }else{
        return;
    }
}
