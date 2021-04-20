<?php

class Pages
{
    public static $pages = [];

    public  function __construct($page = null)
    {
       
        self::loadPage($page);
    }

    public static function registerPage($url = null, $route = null, $head = null, $footer = null, $parameter = null)
    {
        self::$pages[$url]                      =       array($route, $head, $footer, $parameter);
    }

    public static function loadPage($page = null)
    {

        // self::insertEnterpriceUser($page);
        self::insertPage();
        [$pages, $page] = self::callPage($page);
        // self::verifySession($page);
        self::runPage($pages, $page);
    }

    public static function insertPage($parameter = null)
    {
        // session_start();
        self::registerPage('index', 'usuario/index', HEAD, FOOTER);
        self::registerPage('page-404', 'includes/404', HEAD, FOOTER);
       
    }

   
    public static function  callPage($page = null)
    {
        $pages = self::$pages;
        if (empty($page[0])) {
            $page = 'index';
        } elseif (!isset($page[2]) && isset($pages[$page[0]])) {
            $page =  strtolower($page[0]);
        } elseif (!isset($page[3])) {
            if (!isset($page[1])) {
                page_404();
            } elseif (isset($pages[$page[0] . '/' . $page[1]])) {
                $page =  strtolower($page[0]) . '/' . strtolower($page[1]);
            } else {
                page_404();
            }
        } else {
            page_404();
        }
        return [$pages, $page];
    }

    public static function  runPage($pages = null, $page = null)
    {
        if (isset($pages[$page][3])) {
            view($pages[$page][0], $pages[$page][1], $pages[$page][2], $pages[$page][3]);
        } else {
            view($pages[$page][0], $pages[$page][1], $pages[$page][2]);
        }
    }

}
