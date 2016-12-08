<?php
/**
 * Classes criada no mesmo arquivo somente para fins didáticos
 */

session_start();

/**
 * SessionLogin
 */
class SessionLogin
{
    /**
     * @return boolean
     */
    public static function loggedIn(array $session)
    {
        return (isset($session['loggedin']) && $session['loggedin'] == true);
    }
}

/**
 * CookieLogin
 */
class CookieLogin
{
    /**
     * @return boolean
     */
    public static function loggedIn(array $cookie)
    {
        return (isset($cookie['Loggedin']) && $cookie['Loggedin'] == true);
    }
}

if (SessionLogin::loggedIn($_SESSION) || CookieLogin::loggedIn($_COOKIE)) {
    header("Location: http://www.google.com");
    exit();
}
