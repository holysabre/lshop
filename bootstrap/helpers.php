<?php

function test_helper()
{
    return 'Hello World!';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
