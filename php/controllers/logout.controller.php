<?php
if (!isset($CONFIG)) include '../config.php';
session_destroy();

header('Location: '.$CONFIG['url']);
