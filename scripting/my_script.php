<?php
$user_name = $argv[1];
$user_lastname = $argv[2];

$user_fullname = $user_name;
$user_fullname .= " ";
$user_fullname .= $user_lastname;

echo $user_fullname;
