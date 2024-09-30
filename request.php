<?php
    include __DIR__.'\generation.php';
    include __DIR__.'\functions.php';

    echo generatePassword($_GET['psw_length']);

?>