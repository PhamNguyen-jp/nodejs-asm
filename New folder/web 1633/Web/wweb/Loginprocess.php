<?php
    if(isset($_POST['btnLogin']))
    {
        $us = $_POST['txtUsername'];
        $pa = $_POST['txtPass'];
        echo "you have loged in with $us and password $pa";
    }
?>