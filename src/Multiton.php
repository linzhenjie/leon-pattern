<?php

/**
 * 多例类通用方法
 * @Author: linzj
 * @Date:   2018-06-20 09:54:50
 * @Last Modified by:   linzj
 * @Last Modified time: 2018-12-07 11:27:49
 */
namespace Leonphp\Pattern;

trait Multiton
{
    private static $_instance = array();

    public static function getInstance($params)
    {
        $class = get_called_class();
        $key = '';
        if(is_object($params)){
            $key = spl_object_hash($params);
        }elseif (is_array($params)) {
            $key = implode($array); //这里只针对一维且值不同数组，
        }else{
            $key = strval($key);
        }
        $key = md5($key);
        if (!isset(self::$_instance[$class][$key])) {
            self::$_instance[$class][$key] = new $class($params);
        }
        return self::$_instance[$class][$key];
    }
}
