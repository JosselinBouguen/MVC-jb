<?php


namespace utils;


class SessionHelpers
{
    static function init()
    {
        session_start();
    }

    static function login($user)
    {
        $_SESSION['USER'] = $user;
    }

    static function logout()
    {
        unset($_SESSION['USER']);
        setcookie('user', null, -1);
    }

    static function getConnected()
    {
        if (SessionHelpers::isLogin()) {
            return $_SESSION['USER'];
        } else {
            return array();
        }
    }

    static function isLogin()
    {
        return isset($_SESSION['USER']);
    }
}