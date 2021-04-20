<?php
class exampleController
{
    public function index($data = null)
    {
        view("index",HEAD,FOOTER,"");
    }

    public function example2($data = null)
    {
        view("example2",HEAD,FOOTER,"");
    }

    public function page404($data = null)
    
    {
        view("templates/page404",HEAD,FOOTER,"");
    }
}
