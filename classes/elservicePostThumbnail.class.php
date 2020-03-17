<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 21.09.2019
 * Time: 1:36
 */

class elservicePostThumbnail
{

      public static function getPostThumbnailUrl(){
          if (has_post_thumbnail()){
             return the_post_thumbnail_url();
          }else{
              echo  self::getPostThumbnailDefault();
          }

      }


      public static function getPostThumbnailDefault(){
          if (!has_post_thumbnail()){
              return  get_bloginfo('template_url') . '/build/img/no-image.jpg';
          }
      }

    public static function thePostThumbnail($size = array(780, 500), $attr = array('class' => 'card-img-top'), $class = 'card-img-top' ){
        if (has_post_thumbnail()){
            return the_post_thumbnail($size, $attr);
        }else{
            $output = '<img src="';
            $output .= self::getPostThumbnailDefault(). '"';
            $output .= 'class="'.$class. '"' ;
            $output .= 'alt=""';
            $output .= '/>';
            echo  $output;
        }
    }

}

