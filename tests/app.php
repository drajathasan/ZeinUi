<?php
require '../vendor/autoload.php';

use Zein\Ui\Html\Element as El;
echo El::create('button', ['class' => 'btn btn-primary', 'id' => 'btn-save'], 'simpan', ) . PHP_EOL;
echo El::create('a', ['class' => 'btn btn-primary', 'href' => '#'], 'Klik') . PHP_EOL;
El::$Close = false; 
echo El::create('meta', ['class' => 'btn btn-primary', 'href' => '#'], '', false) . PHP_EOL;