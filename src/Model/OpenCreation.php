<?php 

namespace Ixmanuel\OpenCreation\Model;

interface OpenCreation 
{
    /**
     * It creates new objects defined in this class.
     * 
     * @param string $model
     * @param array $args
     *
     * @return mixed object
     */
    public function new(string $model, ...$args);        
}