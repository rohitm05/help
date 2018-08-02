<?php
$options = [
    'cost' => 4,
];
$pass= password_hash("rohit", PASSWORD_BCRYPT, $options);
echo $pass;
echo bool password_verify ( string "rohit" , string $pass );
?>