<?php

namespace App\Classes;

class Flash
{
    private function setFlash($msg, $type='success')
    {
        session()->flash('flash', [
            'type' => $type,
            'message' => $msg
        ]);
    }

    public function __call($type, $args)
    {
        $this->setFlash(array_first($args), $type);
        
        return $this;
    }
   /* public function success($msg)
    {
        $this->setFlash($msg);
    }
    
    public function warning($msg)
    {
        $this->setFlash($msg, 'warning');
    }
    
    public function danger($msg)
    {
        $this->setFlash($msg, 'danger');
    }*/
}