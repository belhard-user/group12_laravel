<?php

if(! function_exists('flash')){
    
    function flash($msg=null)
    {
        $flash = app(\App\Classes\Flash::class);
        
        if(is_null($msg)){
            return $flash;
        }
        
        return $flash->success($msg);
    }
    
}