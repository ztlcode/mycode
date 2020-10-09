<?php 
namespace App\Servers;

use App\Exceptoins\ViewException;

class View 
{
    public static function make($file, $argv=[])
    {
        $file = "Views/".$file.".php";
        if(!is_file($file)){
            throw new ViewException("该文件不存在");
        }
        include $file;
    }
}