<?php

require_once 'core/init.php';

$user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?", array(
    'Alex'
));

if($user->error()){
    echo 'No User';
}else{
    echo 'We got you nigga';
}