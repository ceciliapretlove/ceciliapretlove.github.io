<?php 

class Work_Experience{

private static $instance = null;

public static function get_instance(){

    if(null == self::$instance){
        self::$instance = new self;
    }
    return self::$instance;

}
}
Work_Experience::get_instance();