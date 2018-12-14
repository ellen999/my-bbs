<?php
session_start();
include 'config.php';
include 'functions.php';

if (!$_SESSION['user']) {
    header('Location: signin.php');
    exit;
}

include 'views/user.html';
