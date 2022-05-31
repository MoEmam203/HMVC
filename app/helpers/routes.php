<?php

/**
 * Build routes prefix
 *
 * @param string $module
 * @param string $type
 * @return string
 */
function buildPrefix(string $module,string $type="backend"){
    return config($module.'.prefix.'.$type, config('module.prefix.'.$type)).'/'.config($module.'.module-name');
}