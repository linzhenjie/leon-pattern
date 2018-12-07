<?php

/**
 * 单例类通用方法
 * @Author: linzj
 * @Date:   2018-06-20 09:54:50
 * @Last Modified by:   linzj
 * @Last Modified time: 2018-12-07 11:27:50
 */
namespace Leonphp\Pattern;

trait Singleton
{
    private static $_instance = array();

    public static function getInstance()
    {
        $class = get_called_class();
        if (!isset(self::$_instance[$class])) {
            self::$_instance[$class] = new $class();
        }
        return self::$_instance[$class];
    }
}
