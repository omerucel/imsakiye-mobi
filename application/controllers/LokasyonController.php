<?php

class LokasyonController extends Zend_Controller_Action
{
    public function init()
    {
        $this->_helper->layout()->disableLayout();
        $date = new DateTime();
        $this->view->day = (int)$date->diff(new DateTime('2012-07-19'))->format('%a');
    }

    public function indexAction()
    {

    }
}