<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2021-12-01 21:56:36
 * @modify date 2021-12-01 21:56:36
 * @license MIT
 * @desc [description]
 */

namespace Zein\Ui\Http;

class Stream
{
    public static function fetch(string $DefaultPath = '')
    {
        if (isset($_SERVER['PATH_INFO']))
        {
            $Paths = explode('/', trim($_SERVER['PATH_INFO'], '/'));
            self::execute(strtolower($Paths[1]??''), $Paths[2]??'', $Paths[3]??'', $DefaultPath);
        }
    }

    private static function execute(string $ModuleName, string $Submodule, string $Filename, string $DefaultPath = '')
    {
        $Class = '\Zein\Ui\Load\\' . ucfirst($ModuleName);

        if (class_exists($Class)) $Class::stream($DefaultPath . '/' . $Submodule, $Filename);
        exit;
    }
}