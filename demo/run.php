<?php

namespace Demo;

include_once('vendor/copyleaks/php-plagiarism-checker/autoload.php');
include_once('./demo.php');

use Demo\Test;

$USER_EMAIL = 'keothanthanh2k@gmail.com'; // change this with your own copyleaks email.
$USER_KEY = '668c0d9b-8e18-48b1-970c-426bc58546f0'; // change this with your own copyleaks API key.
$WEBHOOK_URL = 'https://kiemtradaovan.herokuapp.com/'; //exe https://glacial-refuge-96501.herokuapp.com/10b0z2w1

$test = new Test();
$test->run($USER_EMAIL, $USER_KEY, $WEBHOOK_URL);
