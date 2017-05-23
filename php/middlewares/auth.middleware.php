<?php

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('Location: '.$CONFIG['url'].'login.php');
}
