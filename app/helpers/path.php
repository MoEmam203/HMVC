<?php

function getModuleName(string $moduleName){
    return app_path('Modules'.DS().$moduleName.DS());
}

function getConfigFile(string $moduleName,string $fileName){
    return getModuleName($moduleName).'config'.DS().$fileName.'.php';
}

function loadRoutes(string $moduleName,string $fileName){
    return getModuleName($moduleName).'routes'.DS().$fileName.'.php';
}

function loadViews(string $moduleName){
    return getModuleName($moduleName).'resources'.DS().'views';
}

function loadLangs(string $moduleName){
    return getModuleName($moduleName).'resources'.DS().'lang';
}

function loadMigrations(string $moduleName){
    return getModuleName($moduleName).'database'.DS().'migrations';
}

function DS(){
    return DIRECTORY_SEPARATOR;
}