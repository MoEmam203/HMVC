<?php

/**
 * Build views namespace
 *
 * @param string $namespace
 * @param string $view
 * @return string
 */
function buildViews(string $namespace,string $view)
{
    return $namespace.'::'.$view;
}