<?php

function isLogin() {
    return isset($_SESSION['login']) && isset($_SESSION['level']);
}

function isAdmin() {
    return $_SESSION['level'] == 1;
}

function isUser() {
    return $_SESSION['level'] == 2;
}