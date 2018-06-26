<?php
namespace Leandrofreires;
include_once 'vendor/autoload.php';

use Leandrofreires\RetornoBradesco\ReturnFile;

$file = new ReturnFile(__DIR__.'/CB220600.RET');

foreach ($file->getRecord() as $record):
 print_r($record->getValorPago().PHP_EOL);
endforeach;