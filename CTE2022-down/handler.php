<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['Name','company','job-title','mobile','email','intrest'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();




$pp->sendEmailTo('mark@emergingmarketsme.com'); // ← Your email here
$pp->sendEmailTo(' sharmine.w@emergingmarketsme.com'); // ← Your email here
$pp->sendEmailTo('adrian@emergingmarketsme.com'); // ← Your email here

echo $pp->process($_POST);