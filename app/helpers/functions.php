<?php
function config($string)
{
    global $_config;
    if (isset($_config[$string])) {
        $result = $_config[$string];
    } else {
        $result = '>' . $string . '<';
    }
    return $result;
}
function assets($route)
{
    return SERVERURL . 'public/assets/' . $route;
}

function redirect($page = null)
{
    echo "<script>window.location='" . SERVERURL . $page . "'</script>";
}


function view($page = null, $head = null, $footer = null, $parameter = null)
{
    if (!empty($head)) {
        require "public/view/{$head}.php";
    }
    
    require "public/view/{$page}.php";

    if (!empty($footer)) {
        require "public/view/{$footer}.php";
    }
}

function page_404()
{
    redirect('page-404');
}
