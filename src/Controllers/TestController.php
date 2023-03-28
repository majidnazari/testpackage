<?php

namespace Aref\Cms\Controllers;

use Aref\Cms\SpClass;
use Illuminate\Http\Request;

class TestController
{
    public function __invoke(SpClass $test) {
        $object1=new SpClass();
        //var_dump($object1->getValue());
       $test= $object1->getValue()." for test package!.";
       return view('cmspackage::index', compact('test'));
    }
    public function index(SpClass $test) {
        return  " this is from package2.";
     }
}