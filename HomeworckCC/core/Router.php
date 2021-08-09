<?php
namespace Core;
use App\Controllers\About;
use App\Controllers\index;
use App\Controllers\Galerry;
use App\Controllers\Page404;

final class Router
{

    private $href;

    public function __construct()
    {
        $this->href =$_SERVER["PATH_INFO"];

    }

    public function run()
    {
        if ($this->href)
        {
            $classNameSpace = 'App\Controllers\\'. ucfirst(ltrim($this->href, '/'));

            if (class_exists($classNameSpace)){
            $classrojb1 = new $classNameSpace;
            }else
            {
                $classrojb1 =new Page404();
            }
        }else
        {

            $classrojb1 = new index();
            $classrojb1->head();
        }

                $classrojb1->index();

    }
}