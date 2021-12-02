<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2021-12-01 21:42:22
 * @modify date 2021-12-01 21:42:22
 * @license MIT
 * @desc [description]
 */

namespace Zein\Ui\Load;
use Zein\Ui\Html\Element;

class Bootstrap
{
    public static function stream(string $DefaultPath, string $FileName)
    {
        header('Content-Type: text/css');

        // Get content
        if (file_exists($FullPath = $DefaultPath . '/' . $FileName))
        {
            http_response_code(200);
            echo file_get_contents($FullPath);
        }
        else
        {
            http_response_code(404);
        }
    }

    public static function link(string $Href)
    {
        return Element::create('link', ['href' => $Href, 'rel' => 'stylesheet']);
    }
}