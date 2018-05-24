<?php
/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
use Illuminate\Support\Facades\Route;

function setActive($path)
{
    $active = '';
    $currentPath= Route::getFacadeRoot()->current()->uri();
    if($currentPath == $path){
        $active = 'active';
    }

    return $active;
}

function getPath(){
    $currentPath= Route::getFacadeRoot()->current()->uri();
    return $currentPath;
}





?>