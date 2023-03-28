<?php

namespace Aref\Cms;

class SpClass
{

    protected $val;
    public function __construct(string $value = "test class")
    {
        $this->val = $value;
        
    }
    public function getValue(){
        return $this->val;

    }
}
