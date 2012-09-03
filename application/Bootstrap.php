<?php 
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initTitle()
    {
        $this->bootstrap("view");
        $view = $this->getResource("view");
        
        $view->headTitle()->setSeparator(" :: ");
        $view->headTitle("Ciao Mondo");
    }
}