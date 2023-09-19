<?php

function setNavbarBg($routeName)
{

    $routeName = str_replace('/','',$routeName);

    if($routeName == 'productos.*') {
        return request()->routeIs($routeName) ? 'header-inner-pages' : '';

    } else {

        return '';

    }


}

function setActive($routeName)
{
    $routeName = str_replace('/','',$routeName);

    if($routeName == 'productos.*') {

        return request()->routeIs($routeName) ? 'active' : '';

    }else {

        return request()->routeIs($routeName) ? 'active' : '';
    }


}
